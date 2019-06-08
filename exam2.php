
<?php 
      $db_host = "localhost";
      $db_username = "root";
      $db_password = "";
      $db_name = "examination";

      @mysql_connect("$db_host","@db_username","$db_password") or die("Failed to connect");
      @mysql_select_db("$db_name") or die("Failed to find the database");

      echo "Succesfully Conneceted to the database";

 ?>