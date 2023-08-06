<?php

    require_once '../db_connect.php';

    // connecting to database
    $con = new DB_Connect();
    $con1=$con->connect();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["Export"])){
        
            header('Content-Type: text/csv; charset=utf-8');  
            header('Content-Disposition: attachment; filename=iotopd_ais_data.csv');  
            $output = fopen("php://output", "w");  
            fputcsv($output, array('id', 'SHIP_ID', 'IMO', 'MMSI', 'CALLSIGN', 'SHIPNAME', 'TYPE_COLOR', 'LAST_POS', 'CODE2', 'COUNTRY', 'COUNT_PHOTOS', 'NEXT_PORT_NAME', 'NEXT_PORT_COUNTRY', 'NEXT_PORT_ID', 'ETA', 'DESTINATION', 'CURRENT_PORT_COUNTRY', 'TYPE_SUMMARY', 'COURSE', 'LON', 'LAT', 'TIMEZONE', 'INLAND_ENI', 'STATUS_NAME', 'YOB', 'DWT', 'AREA_CODE', 'ETA_OFFSET', 'SPEED', 'DRAUGHT', 'LENGTH', 'WIDTH', 'STATUS', 'ETA_UPDATED', 'DISTANCE_TO_GO', 'AREA_NAME', 'PORT_ID', 'CURRENT_PORT', 'COLLECTION_NAME', 'CTA_ROUTE_FORECAST', 'added_by', 'date_added'));  
            
            $sql = "SELECT * FROM ais_data_log";
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
        <title>AIS Data | IoTOPD</title>
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
            <h2>IoTOPD AIS Data</h2>
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
                            <th scope="col">SHIP_ID</th>
                            <th scope="col">IMO</th>
                            <th scope="col">MMSI</th>
                            <th scope="col">CALLSIGN</th>
                            <th scope="col">SHIPNAME</th>
                            <th scope="col">TYPE_COLOR</th>
                            <th scope="col">LAST_POS</th>
                            <th scope="col">CODE2</th>
                            <th scope="col">COUNTRY</th>
                            <th scope="col">COUNT_PHOTOS</th>
                            <th scope="col">NEXT_PORT_NAME</th>
                            <th scope="col">NEXT_PORT_COUNTRY</th>
                            <th scope="col">NEXT_PORT_ID</th>
                            <th scope="col">ETA</th>
                            <th scope="col">DESTINATION</th>
                            <th scope="col">CURRENT_PORT_COUNTRY</th>
                            <th scope="col">TYPE_SUMMARY</th>
                            <th scope="col">COURSE</th>
                            <th scope="col">LON</th>
                            <th scope="col">LAT</th>
                            <th scope="col">TIMEZONE</th>
                            <th scope="col">INLAND_ENI</th>
                            <th scope="col">STATUS_NAME</th>
                            <th scope="col">YOB</th>
                            <th scope="col">DWT</th>
                            <th scope="col">AREA_CODE</th>
                            <th scope="col">ETA_OFFSET</th>
                            <th scope="col">SPEED</th>
                            <th scope="col">DRAUGHT</th>
                            <th scope="col">LENGTH</th>
                            <th scope="col">WIDTH</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">ETA_UPDATED</th>
                            <th scope="col">DISTANCE_TO_GO</th>
                            <th scope="col">AREA_NAME</th>
                            <th scope="col">PORT_ID</th>
                            <th scope="col">CURRENT_PORT</th>
                            <th scope="col">COLLECTION_NAME</th>
                            <th scope="col">CTA_ROUTE_FORECAST</th>
                            <th scope="col">Added_By</th>
                            <th scope="col">Date_Added</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $s_no=1;
                            $sql = "SELECT * FROM ais_data_log ORDER BY date_added DESC LIMIT 5000";
                            $result = mysqli_query($con1, $sql);
                            if ( mysqli_num_rows( $result ) > 0 ) {
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<tr>
                                            <td>".$s_no++."</td>
                                            <td>".$row["id"]."</td>
                                            <td>".$row["SHIP_ID"]."</td>
                                            <td>".$row["IMO"]."</td>
                                            <td>".$row["MMSI"]."</td>
                                            <td>".$row["CALLSIGN"]."</td>
                                            <td>".$row["SHIPNAME"]."</td>
                                            <td>".$row["TYPE_COLOR"]."</td>
                                            <td>".$row["LAST_POS"]."</td>
                                            <td>".$row["CODE2"]."</td>
                                            <td>".$row["COUNTRY"]."</td>
                                            <td>".$row["COUNT_PHOTOS"]."</td>
                                            <td>".$row["NEXT_PORT_NAME"]."</td>
                                            <td>".$row["NEXT_PORT_COUNTRY"]."</td>
                                            <td>".$row["NEXT_PORT_ID"]."</td>
                                            <td>".$row["ETA"]."</td>
                                            <td>".$row["DESTINATION"]."</td>
                                            <td>".$row["CURRENT_PORT_COUNTRY"]."</td>
                                            <td>".$row["TYPE_SUMMARY"]."</td>
                                            <td>".$row["COURSE"]."</td>
                                            <td>".$row["LON"]."</td>
                                            <td>".$row["LAT"]."</td>
                                            <td>".$row["TIMEZONE"]."</td>
                                            <td>".$row["INLAND_ENI"]."</td>
                                            <td>".$row["STATUS_NAME"]."</td>
                                            <td>".$row["YOB"]."</td>
                                            <td>".$row["DWT"]."</td>
                                            <td>".$row["AREA_CODE"]."</td>
                                            <td>".$row["ETA_OFFSET"]."</td>
                                            <td>".$row["SPEED"]."</td>
                                            <td>".$row["DRAUGHT"]."</td>
                                            <td>".$row["LENGTH"]."</td>
                                            <td>".$row["WIDTH"]."</td>
                                            <td>".$row["STATUS"]."</td>
                                            <td>".$row["ETA_UPDATED"]."</td>
                                            <td>".$row["DISTANCE_TO_GO"]."</td>
                                            <td>".$row["AREA_NAME"]."</td>
                                            <td>".$row["PORT_ID"]."</td>
                                            <td>".$row["CURRENT_PORT"]."</td>
                                            <td>".$row["COLLECTION_NAME"]."</td>
                                            <td>".$row["CTA_ROUTE_FORECAST"]."</td>
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