<?php  
//getting inputs values
if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $date = $_POST['date'];
        $departement = $_POST['departement'];
        $salaire = $_POST['salaire'];
        $fn = $_POST['fn'];
        $img = $_POST['img'];



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
       // form input >> database
       $sql = "INSERT INTO form_entries (id, fname, lname, dateOfBirth, department,  salary, fonction, photo) VALUES ('$id', '$lname', '$fname', '$date', '$departement', '$salaire', '$fn', '$img')";
       $rs = mysqli_query($con, $sql);
       if($rs)
       {
              echo "<script>console.log('Successfully saved');</script>";
       }
     //connection closed.
       mysqli_close($con);
}



