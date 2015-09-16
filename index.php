<?php
/**
 * Created by PhpStorm.
 * User: bob
 * Date: 2015/9/16
 * Time: 上午 08:59
 */

include_once "config.php";
include_once "function.php";


$conn = get_mysql_connect( $host, $user, $pass, $dbname );

$stmt = "SELECT * FROM contact";

if( is_resource($conn)){
    $result = mysql_query( $stmt, $conn );
    while( $row = mysql_fetch_array($result, MYSQL_ASSOC)){
        print "<ul>";
        foreach( $row as $item ){
            echoli( $item );
        }
        print "</ul>";
    }
}
