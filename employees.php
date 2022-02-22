
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="table.css">
        <!-- <link rel="stylesheet" href="index.css"> -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/fonts/fontawesome-free-6.0.0-web/css/all.css">
        <title>Personnel Manager | Employees</title>
    </head>
    <body class="w-100 bg-dark">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Manager</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse d-flex justify-content-around " id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home  </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="search.php">Search </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="employees.php">Employees<span class="sr-only">(actuel)</span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li> -->
                    
                </ul>
                
            </div>
        </nav>
    <main class="container">
        
        
        <?php
        session_start();
        include 'connection.php';
        // fetching data from the database
        $sql = "SELECT id, fname, lname, dateOfBirth, department,  salary, fonction, photo FROM form_entries ";
        $query = mysqli_query($con, $sql);
        if($query)
        {
            echo "<script>console.log('fetched data successfully');</script>";
        }else{
            
            echo "<script>console.log('connection failed ');</script>";

        }
        
    ?>
        <div>
            <table class="table table-bordered table-light">
                <thead >
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
                    // deleting data from the database
                    $val = $_POST['delete'];
                    $sql = "DELETE FROM form_entries WHERE id='$val'";
                    $query = mysqli_query($con, $sql);
                    
                    //connection closed.
                    mysqli_close($con);
                    header("Location: employees.php"); 
                    exit(); 
                }
                
                ?>

<tbody>
    
    <?php
                    if (mysqli_num_rows($query) > 0) {
                        while($row = mysqli_fetch_array($query)) {
                            ?>
                    <tr>
                        <td><img class="pimage" src="<?php echo $row['photo']; ?>"></td>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["fname"]; ?></td>
                        <td><?php echo $row["lname"]; ?></td>
                        <td><?php echo $row["dateOfBirth"]; ?></td>
                        <td><?php echo $row["department"]; ?></td>
                        <td><?php echo $row["salary"].' MAD'; ?></td>
                        <td><?php echo $row["fonction"]; ?></td>
                        <td><form action="edit.php" method="post"><button class="btn btn-dark" name="edit" type="submit" name="edit" value="<?php echo $row['id'];?>"><i class="fa-solid fa-pen edit"></i></button></form>
                        <form action="employees.php" method="post"><button class="btn btn-dark" type="submit" name="delete" value="<?php echo $row['id'];?>"><i class="fa-solid fa-trash-can delete"></i></button></form></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>


                </tbody>
            </table>
        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
