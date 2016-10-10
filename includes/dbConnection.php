<?php
/**
 * Created by PhpStorm.
 * User: Ushber
 * Date: 10/8/2016
 * Time: 8:46 AM
 */
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "widget_corp");


    $dbconnection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    if (mysqli_connect_errno()){
        die("Database Connecton failed: ".
            mysqli_connect_error().
            "(".mysqli_connect_errno().")");
}