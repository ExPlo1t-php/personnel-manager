<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Personnel Manager| Home</title>
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
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(actuel)</span></a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="search.php">Search </a>
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

    <main class="container bg-light">
    <h3 class="text-center">Add A New Employee</h3>
    <div class="form d-flex flex-row justify-content-center"> 
        <form action="index.php" method="post" enctype="multipart/form-data" >
            <?php  
include 'connection.php';
//getting inputs values
if(isset($_POST['submit'])){
    $id = $_POST['id'];
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $date = $_POST['date'];
        $department = $_POST['department'];
        $Salary = $_POST['Salary'];
        $fn = $_POST['fn'];
        $img = $_FILES['img'];
        $imgname = $img["name"];
        $tempfile = $img["tmp_name"];
        $uploaddir = 'assets/images/';
        $file = $uploaddir.$imgname;
        move_uploaded_file($tempfile, "img/$imgname");
        
        
        // form input >> database
        $sql = "INSERT INTO form_entries (id, fname, lname, dateOfBirth, department,  salary, fonction, photo) VALUES ('$id', '$lname', '$fname', '$date', '$department', '$Salary', '$fn', '$file')";
        
        $rs = mysqli_query($con, $sql);
            echo '<h1>'.$tempfile.'</h1><p>'.$imgname.'</p><p>'.$file.'</p>';
            
            if($rs)
            {
                echo "<script>console.log('Successfully saved');</script>";
            }
            
     //connection closed.
     mysqli_close($con);
}

?>

<label >Registration number</label>
            <input name="id" class="matricule form-control" type="text" placeholder="Enter the registration number" value="" >
            <label >First Name</label>
            <input name="fname" class="fname form-control" type="text" placeholder="Enter the First Name" value="" required>
            <label >Last Name</label>
            <input name="lname"  class="lname form-control" type="text" placeholder="Enter the Last Name" value="" required>
            <label >Date Of Birth</label>
            <input name="date" class="date form-control" type="date" value="" required> 
            <label >Department</label>
            <select name="department" class="depart form-control"  required>
                <option value="" disabled selected>- select department -</option>
                <option value="IT">IT</option>
                <option value="Human Resources">Human Resources</option>
                <option value="Production">Production</option>
                <option value="Marketing">Marketing</option>
                <option value="Accounting and finance">Accounting and finance</option>
                <option value="Quality">Quality</option>
                <option value="Maintenance">Maintenance</option>
                <option value="logistics">logistics</option>
            </select>
            <label >Salary</label>
            <input name="Salary" type="text" placeholder="Salary" class="Salary form-control" value="" required>
            <label >Office</label>
                <input name="fn" type="text" placeholder="Office" class="fonction form-control" value="" required>
                <label for="img">Select image:</label>
                <input name="img" type="file" >
                <div class="d-flex justify-content-center ">
                    <input type="submit" name="submit" class="btn btn-dark" value="submit"> 
                </div>
            </form>
        </div>
    </main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>