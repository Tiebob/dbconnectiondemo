<?php
/**
 * Created by PhpStorm.
 * User: bob
 * Date: 2015/9/16
 * Time: 上午 08:59
 */

include_once "config.php";
include_once "function.php";


$conn = get_mysqli_connect2( $host, $user, $pass, $dbname );

$stmt = "SELECT * FROM contact";


echobr( '====MySQLi driver: class style ====');
$rs = $conn->query( $stmt );
while( $row = $rs->fetch_array(MYSQLI_ASSOC)){
    print "<ul>";
    foreach( $row as $item ){
        echoli( $item );
    }
    print "</ul>";
}
