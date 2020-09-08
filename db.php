<?php
 $server="sql107.epizy.com";
 $username="epiz_26678127";
 $password="82gOQT6fQ0l";
 $dbname="epiz_26678127_jayaroshini";

 $conn=mysqli_connect(server,$username,$password,$dbname);

 if(!$conn)
 {
 die("connection failed:".mysqli_connect_error());
 }