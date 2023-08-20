<?php
    require_once 'db_connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){

        // $json = '{"gps_lat": "0.000000", "air_data": "AQI: 22, CO2: 52, NO2: 30, SO2: 45, O3: 25", "gps_sats": "0", "sender_id": "LDP1", "gps_speed": "0.00", "gps_lon": "0.000000", "gps_alt": "0.00", "gps_hdop": "25.50", "water_data": "WQI: 12, temp: 16C, pH: 6.8, dissolved_O2: 45, conductivity: 12, turbidity: 33, ORP: 22, NH3: 25, NO3: 5, Cl: 44", "gps_age": "4294967295", "gps_timestamp": "2000/00/00 00:00:00.00", "gps_course": "0.00"}';
        // $lora_data = json_decode($json, true);
        // print_r($lora_data);
        
        // fetch post data
        $lora_data = $_POST;

        // prepare and push data to database for logging
        $column = "";
        $value = "";
        foreach($lora_data as $title => $val) {
            $column = $column . "`$title`, ";
            $value = $value . "'$val', ";
        }

        $column = $column . "added_by";
        $value = $value . "'webuser'";

        $sql = "INSERT INTO `lora_data_log` (".$column.") VALUES (".$value.")";
        // echo $sql . "<br><br>";
        if(mysqli_query($con1, $sql)){
            // echo "Records inserted successfully.";
        } else{
            echo "Error inserting record: " . $con->error;
            exit();
        }

        echo "Successfully received data from ". $lora_data[sender_id];
    
    }


    // close db connect
	$con1->close();
?>

