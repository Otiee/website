<?php
//     include("control/connect_admin.php");

      // $connect_chinhsua_admin = new connect_admin;
    class model_menu 
    {
    public function menu1()
    { 
      $mysqli = new mysqli("localhost","root","","nhahang");

      // Check connection
      if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
      }
      // echo "ABC";
      $sql = "select * from menu";
      $kq = $mysqli->query($sql);
      // var_dump($kq->fetch_assoc());
      // $connect_chinhsua_admin = new connect_admin;
      // return 1;
      //   $sql = "select * from menu";
      //   $kq = $this->link->query($sql);
      //   echo $kq;
        return $kq->fetch_array();
    }
    }

    
    
?>