<?php
require_once("config_admin.php");

class connect_admin
{
    protected $link;
    function __construct(){
        $this->link = new mysqli(servername,username,password,databasename);
    }

    function getlink()
    {
        return $this->link;
    }
}
?>