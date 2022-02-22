
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Personnel Manager | Home</title>
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
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(Current)</span></a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="search.php">Search </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="employees.php">employees</a>
                    </li>
                </ul>
                
            </div>
        </nav>
        
        <main class="container bg-light">
            <h3 class="text-center">Personnel Manager</h3>
            <div class="form d-flex flex-row justify-content-center"> 
        <form action="edit.php" method="post" enctype="multipart/form-data">
        <?php  
        session_start();
        include 'connection.php';
        $_SESSION['reg'] = $_POST['edit'];
        $i= $_SESSION['reg'];
        $sql = "SELECT id, fname, lname, dateOfBirth, department,  salary, fonction, photo FROM form_entries WHERE id='$i'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($query);
        if($query)
        {
            echo "\n<script>console.log('fetched data Successfully ');</script>";
        }else{
            echo "\n<script>console.log('connection failed ');</script>";
            
        }
        
        if(isset($_POST['submit'])){
            session_start();
            $i =$_REQUEST['submit'];
                $lname = htmlspecialchars($_POST['lname']);
                $fname = htmlspecialchars($_POST['fname']);
                $date = htmlspecialchars($_POST['date']);
                $department = htmlspecialchars($_POST['department']);
                $Salary = $_POST['salary'];
                $fn = htmlspecialchars($_POST['fn']);
                // $img = $_FILES['img'];
                // $imgname = $img["name"];
                // $tempfile = $img["tmp_name"];
                // $uploaddir = 'assets/images/';
                // $file = $uploaddir.$imgname;
                // move_uploaded_file($tempfile, "$file");
                
                //creating connection 
                $sql = "UPDATE form_entries SET fname='$fname', lname='$lname', dateOfBirth='$date', department='$department',  salary='$Salary', fonction='$fn' WHERE id='$i'";
                echo $sql;
                if ($con->query($sql) === TRUE) {
                    echo "Record updated successfully";
                } else {
                    echo "Error updating record: " . $conn->error;
                }
                
                header("Location: employees.php"); 
                exit(); 

                //connection closed.
                mysqli_close($con);
                
            }
            
            
            
            
            
            if (mysqli_num_rows($query) > 0) {
                ?>

<!-- <label >registration number</label>
<input name="id" class="registration number form-control" type="text" placeholder="Enter the registration number" value="<?php echo $row["id"]; ?>" > -->
<label >First Name</label>
<input name="fname" class="fname form-control" type="text" placeholder="Enter the First Name" value="<?php echo $row["fname"]; ?>" required>
<label >Last Name</label>
<input name="lname"  class="lname form-control" type="text" placeholder="Enter the Last Name" value="<?php echo $row["lname"]; ?>" required>
<label >Date Of Birth</label>
<input name="date" class="date form-control" type="date" value="<?php echo $row["dateOfBirth"]; ?>" required> 
            <label >Department</label>
            <select name="department" class="depart form-control" required >
                echo "<option value="<?php echo $row["department"]; ?>" selected disabled hidden><?php echo $row["department"]; ?></option>";
                <option value="" disabled >- select department -</option>
                <option value="IT">IT</option>
                <option value="Human Resources">Human Resources</option>
                <option value="Production">Production</option>
                <option value="Marketing">Marketing</option>
                <option value="Accounting and finance">Accounting and finance</option>
                <option value="Quality">Quality</option>
                <option value="Maintenance">Maintenance</option>
                <option value="Logistics">Logistics</option>
            </select>
            <label >Salary</label>
            <input name="salary" type="text" placeholder="Salary" class="Salary form-control" value="<?php echo $row["salary"]; ?>" required>
            <label >Fonction</label>
                <input name="fn" type="text" placeholder="Fonction" class="fonction form-control" value="<?php echo $row["fonction"]; ?>" required>
                <label for="img">Select image:</label>
                <input name="img" type="file" id="img" accept="image/*" >
                <div class="d-flex justify-content-center ">
                    <button type="submit" name="submit" class="btn btn-dark" value="<?php echo $_REQUEST['edit'];?>" >submit </button>
                </div>
            </form>
            <?php }?>
        </div>
    </main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>