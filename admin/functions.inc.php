<?php 

 
function pr($arr) {
    echo '<pre>';
    print_r($arr);
}

function prx($arr) {
    echo '<pre>';
    print_r($arr);
    die();
}

function get_safe_value ($con, $str) 
{

    if ($str != " ")
    // this function is used to create a legal SQL string 
    // that you can use in an SQL statement
    return mysqli_real_escape_string($con, $str);
}

?>