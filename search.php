
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="table.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.0.0-web/css/all.css">
    <title>Gestionnaire Du Personnel | Search</title>
</head>
<body class="w-100 bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Gestionnaire</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse d-flex justify-content-around " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Search <span class="sr-only">(actuel)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="employees.php">employees</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                </ul>
                    

        </div>
    </nav>
    <main class="container">
        <div class="search-bar bg-light d-flex flex-column align-items-center justify-content-center">


        <?php
            $filter = $_POST['filter'];
            $search = $_POST['search'];
                 //establishing connection with the database
                //database details
        $host = "localhost";
        $username = "formdb_user";
        $password = "slayer101";
        $dbname = "personnel";
        //creating connection 
        $con = mysqli_connect($host, $username, $password, $dbname);
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //checking connection status
        // fetching data from the database
        $sql = "SELECT id, fname, lname, dateOfBirth, department,  salary, fonction, photo FROM form_entries ";
        $query = mysqli_query($con, $sql);
        if($query)
        {
            echo "<script>console.log('fetched data sucessfully Successfully ');</script>";
        }else{
            
            echo "<script>console.log('connection failed ');</script>";

        }
        //connection closed.
        mysqli_close($con);
        ?>
            <form action="" >
                <label>Choose A Filter:</label>
                <select name="filter" class="filter form-control">
                    <option value="" disabled selected>- select filter -</option>
                    <option value="registration number">registration number</option>
                    <option value="Last Name">Last Name</option>
                    <option value="First Name">First Name</option>
                    <option value="Department">Department</option>
                </select>
                <label>Search for an employee:</label>
            <input type="text" name="search" class="form-control " placeholder="Search for an employee">
        </form>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark">submit</button>
        </div>
        </div>

        <div class="container-fluid">
            <table class="table table-bordered table-light table-responsive-sm table-responsive-md">
                <thead class=" w-100">
                    <tr>
                    <th>Image</th>
                        <th>Registration Number</th>
                        <th>Last Name</th>
                        <th>First Name</th>
                        <th>Date <br> Of Birth</th>
                        <th> Department</th>
                        <th>Salary</th>
                        <th>Office</th>
                        <th>Options</th>
                    </tr>
                </thead>

                <?php
                //deleting row from database
                if(isset($_POST['delete'])){
                    //establishing connection with the database
                    //database details
                    global $host, $username, $password, $dbname;
                    //creating connection 
                    $con = mysqli_connect($host, $username, $password, $dbname);
                    if (!$con){
                         die("Connection failed!" . mysqli_connect_error());}
                    //checking connection status
                    // deleting data from the database
                    $val = $_POST['delete'];
                    $sql = "DELETE FROM form_entries WHERE id=$val";
                    $query = mysqli_query($con, $sql);
                    if($con->query($sql) === TRUE){
                        echo "\n<script>console.log('Record deleted successfully ');</script>";
                    }else{
                        echo "\n<script>console.log('Error deleting record: ".$con->error." ');</script>";
                        
                    }
                    //connection closed.
                    mysqli_close($con);
                    header("Location: employees.php"); 
                    exit(); 
                }
        
    ?>

                <tbody>

                    <tr >
                        <td><img class="pimage" src="assets/images/employees/george.jpeg" ></td>
                        <td>registration number</td>
                        <td>Last Name</td>
                        <td>First Name</td>
                        <td>Date <br> de naissance</td>
                        <td> Department</td>
                        <td>Salaire</td>
                        <td>Fonction</td>
                        <td><form action="edit.php" method="post"><button class="btn btn-dark" name="edit" type="submit" ><i class="fa-solid fa-pen edit"></i></button></form>
                        <form action="employees.php" method="post"><button class="btn btn-dark" type="submit" name="delete" value="<?php echo $row['id'];?>"><i class="fa-solid fa-trash-can delete"></i></button></form></td>;
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
