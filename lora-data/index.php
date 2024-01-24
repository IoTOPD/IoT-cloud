<?php

    require_once '../db_connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["Export"])){
        
            header('Content-Type: text/csv; charset=utf-8');  
            header('Content-Disposition: attachment; filename=iotopd_lora_data.csv');  
            $output = fopen("php://output", "w");  
            fputcsv($output, array('id', 'sender_id', 'gps_timestamp', 'gps_lat', 'gps_lon', 'gps_alt', 'gps_sats', 'gps_hdop', 'gps_age', 'gps_course', 'gps_speed', 'air_data', 'water_data', 'added_by', 'date_added'));  
            
            $sql = "SELECT * FROM lora_data_log";
            $result = mysqli_query($con1, $sql);
            while($row = mysqli_fetch_assoc($result)){  
                fputcsv($output, $row);  
            }  
            fclose($output);
            exit();
        }  
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>LoRa Data | IoTOPD</title>
        <style>
            table, th, td {
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5px;
                }
        </style>
    </head>
    <body>
        <div style="margin-left:5px;">
            <h2>IoTOPD LoRa Data</h2>
            <br>
            <div> 
                <form action="" method="post">
                    <input type="submit" name="Export" value="Download Table"/>
                </form>
                <br>
                <hr>
                <table>
                    <thead>
                        <tr>
                            <th scope="col">S/No.</th>
                            <th scope="col">id</th>
                            <th scope="col">sender_id</th>
                            <th scope="col">gps_timestamp</th>
                            <th scope="col">gps_lat</th>
                            <th scope="col">gps_lon</th>
                            <th scope="col">gps_alt</th>
                            <th scope="col">gps_sats</th>
                            <th scope="col">gps_hdop</th>
                            <th scope="col">gps_age</th>
                            <th scope="col">gps_course</th>
                            <th scope="col">gps_speed</th>
                            <th scope="col">air_data</th>
                            <th scope="col">water_data</th>
                            <th scope="col">Added_By</th>
                            <th scope="col">Date_Added</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $s_no=1;
                            $sql = "SELECT * FROM lora_data_log ORDER BY date_added DESC LIMIT 5000";
                            $result = mysqli_query($con1, $sql);
                            if ( mysqli_num_rows( $result ) > 0 ) {
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<tr>
                                            <td>".$s_no++."</td>
                                            <td>".$row["id"]."</td>
                                            <td>".$row["sender_id"]."</td>
                                            <td>".$row["gps_timestamp"]."</td>
                                            <td>".$row["gps_lat"]."</td>
                                            <td>".$row["gps_lon"]."</td>
                                            <td>".$row["gps_alt"]."</td>
                                            <td>".$row["gps_sats"]."</td>
                                            <td>".$row["gps_hdop"]."</td>
                                            <td>".$row["gps_age"]."</td>
                                            <td>".$row["gps_course"]."</td>
                                            <td>".$row["gps_speed"]."</td>
                                            <td>".$row["air_data"]."</td>
                                            <td>".$row["water_data"]."</td>
                                            <td>".$row["added_by"]."</td>
                                            <td>".$row["date_added"]."</td>
                                        </tr>";
                                }
                            }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>

<?php

	// close db connect
	$con1->close();
?>
