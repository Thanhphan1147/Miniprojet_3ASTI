<?php
class DBConnect
{
    private static $instance=NULL;
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new PDO("mysql:host=127.0.0.1;dbname=prod_sc", "phpmyadmin", "azerty", NULL);
        } //end if
        return self::$instance;
    } //end function

    public static function closeInstance()
    {
        if (isset(self::$instance)) {
            self::$instance=NULL;
        }
    }
}// en class
