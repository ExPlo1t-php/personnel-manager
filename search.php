
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


            <form action="search.php" method="post" >
                <label>Choose A Filter:</label>
                <select name="filter" class="filter form-control">
                    <option value="" disabled selected>- select filter -</option>
                    <option value="id">registration number</option>
                    <option value="lname">Last Name</option>
                    <option value="fname">First Name</option>
                    <option value="Department">Department</option>
                </select>
                <label>Search for an employee:</label>
            <input type="text" name="search" class="form-control " placeholder="Search for an employee">
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-dark">submit</button>
            </div>
        </form>
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


                <tbody>

                    <?php
                    include 'connection.php';
                    if(isset($_POST['submit'])){
                        $filter = $_POST['filter'];
                        $search = $_POST['search'];
                        $sql = "SELECT id, fname, lname, dateOfBirth, department,  salary, fonction, photo FROM form_entries WHERE $filter LIKE '$search'";            
                        $query = mysqli_query($con, $sql);
                    
                
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
                        <form action="employees.php" method="post"><button class="btn btn-dark" type="submit" name="delete" "><i class="fa-solid fa-trash-can delete"></i></button></form></td>
                    </tr>
                    <?php
                        }
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
