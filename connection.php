
<?php
        //establishing connection with the database
        //database details
       $host = "localhost";
       $username = "formdb_user";
       $password = "slayer101";
       $dbname = "personnel";
       //creating connection 
       $con = mysqli_connect($host, $username, $password, $dbname);
       //checking connection status
       if (!$con)
       {
           die("Connection failed!" . mysqli_connect_error());
       }


