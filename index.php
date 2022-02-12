<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Gestionnaire Du Personnel | Home</title>
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
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(actuel)</span></a>
                    </li>
                    <li class="nav-item" >
                        <a class="nav-link" href="search.php">Recherche </a>
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
    <h3 class="text-center">Gestionnaire Du Personnel</h3>
    <div class="form d-flex flex-row justify-content-center"> 
        <form action="connection.php" method="post">
            <label >Matricule</label>
            <input name="id" class="matricule form-control" type="text" placeholder="Entrer la Matricule" value="" >
            <label >Nom</label>
            <input name="lname"  class="lname form-control" type="text" placeholder="Entrer le Nom" value="" >
            <label >Prenom</label>
            <input name="fname" class="fname form-control" type="text" placeholder="Entrer le Prenom" value="" >
            <label >Date de naissance</label>
            <input name="date" class="date form-control" type="date" value="" > 
            <label >Departement</label>
            <select name="departement" class="depart form-control"  >
                <option value="" disabled selected>- select departement -</option>
                <option value="IT">IT</option>
                <option value="Ressource Humaine">Ressource Humaine</option>
                <option value="Production">Production</option>
                <option value="Marketing">Marketing</option>
                <option value="Comptabilité et finance">Comptabilité et finance</option>
                <option value="Qualité">Qualité</option>
                <option value="Maintenance">Maintenance</option>
                <option value="logistique">logistique</option>
            </select>
            <label >Salaire</label>
            <input name="salaire" type="text" placeholder="Salaire" class="salaire form-control" value="" >
            <label >Fonction</label>
                <input name="fn" type="text" placeholder="Fonction" class="fonction form-control" value="" >
                <label for="img">Select image:</label>
                <input name="img" type="file" id="img" name="img" accept="image/*" value="" />
                <div class="d-flex justify-content-center ">
                    <input type="submit" name="submit" class="btn btn-dark" value="submit"> 
                </div>
            </form>
        </div>
    </main>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>