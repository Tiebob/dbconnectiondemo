<?php
/**
 * Created by PhpStorm.
 * User: bob
 * Date: 2015/9/16
 * Time: 上午 08:59
 */


/********** UTIL section begin **********/

function echobr( $str )
{
    print $str . '<br />';
}

function echoli( $str ){
    print "<li>" . $str . "</li>";
}

function dump( $obj )
{
    print "<pre>";
    var_dump( $obj );
    print "</pre>";
}
/********** UTIL section end **********/



/********** DB section begin **********/


// mysql driver - procedure
function get_mysql_connect($host, $user, $pass, $dbname){
    $conn = mysql_connect( $host, $user, $pass );
    mysql_select_db($dbname, $conn);
    mysql_query('SET NAMES "UTF8"');
    return $conn;
}

// mysqli driver - procedure
function get_mysqli_connect($host, $user, $pass, $dbname){
    $conn = mysqli_connect( $host, $user, $pass, $dbname );
    mysqli_query('SET NAMES "UTF8"');
    return $conn;
}



/********** DB section end **********/