<?php
date_default_timezone_set('Europe/London');

class DB_Connect {
    
    public function connect() {
         define("DB_HOST", "localhost");
         define("DB_USER", "u959043365_iot_cloud_user");
         define("DB_PASSWORD", "1B5#p!dV*");
         define("DB_DATABASE", "u959043365_iot_cloud_db");
         define("DB_PORT", 3308);
         
         $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE, DB_PORT)or die(mysqli_connect_error());
         $con->set_charset("utf8");
         
       // mysqli_select_db($con,DB_DATABASE)or die(mysqli_error());
        return $con;
    }
    public function close() {
        mysqli_close($con) or die(mysqli_connect_error());
    }
}
?>
