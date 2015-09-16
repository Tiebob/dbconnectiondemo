<?php
/**
 * Created by PhpStorm.
 * User: bob
 * Date: 2015/9/16
 * Time: 上午 08:59
 */

include_once "config.php";
include_once "function.php";


$conn = get_pdo_connect( $host, $user, $pass, $dbname );

$stmt = "SELECT * FROM contact";


echobr( '===PDO driver: class style ====');
$rs = $conn->query( $stmt );
while( $row = $rs->fetch(1)){
    print "<ul>";
    foreach( $row as $item ){
        echoli( $item );
    }
    print "</ul>";
}
