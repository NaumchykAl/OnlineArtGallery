<?php
  $dblocation = "localhost";
  $dbname = "php";
  $dbuser = "root";
  $dbpasswd = "root";

  $dbcnx = mysqli_connect($dblocation,$dbuser,$dbpasswd, $dbname);
  if(!$dbcnx)
    exit("<P>error in DB table</P>" );
