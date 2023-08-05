<?php
    require_once 'db_connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    $url = "https://www.marinetraffic.com/en/reports/?asset_type=vessels&columns=flag,shipname,photo,recognized_next_port,reported_eta,reported_destination,current_port,imo,mmsi,ship_type,show_on_live_map,time_of_latest_position,lat_of_latest_position,lon_of_latest_position,area,area_local,fleet,status,eni,draught,navigational_status,year_of_build,length,width,dwt&near_me=50.909698,-1.404351,2";
    $json = file_get_contents($url);
    $ais_data = json_decode($json, true);
    
    // print_r($ais_data[data][0]);
    // print_r($ais_data[totalCount]);
    
    for ($i=0; $i < $ais_data[totalCount]; $i++) { 
        $column = "";
        $value = "";
        $vessel = $ais_data[data][$i];
        foreach($vessel as $title => $val) {
            // echo "$title = $val<br>";
            $column = $column . "`$title`, ";
            $value = $value . "'$val', ";
            // if ($title == "LAST_POS") {
            //     $timestamp = date("Y-m-d H:m:s",$val);
            //     echo "$title _CNV = $timestamp<br>";
            // }
        }

        $column = $column . "added_by";
        $value = $value . "'webuser'";

        $sql = "INSERT INTO `ais_data_log` (".$column.") VALUES (".$value.")";
        if(mysqli_query($con1, $sql)){
            // echo "Records inserted successfully.";
        } else{
            echo "Error inserting record: " . $con->error;
            exit();
        }

        // echo "<br><br>";
    }

    echo "Successfully fetched ". $ais_data[totalCount] . " AIS records.";

    // close db connect
	$con1->close();
?>

