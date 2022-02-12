
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
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
                        <a class="nav-link" href="search.php">Recherche <span class="sr-only">(actuel)</span></a>
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
            <form action="" >
                <label>choisir un filter:</label>
                <select name="filter" class="filter form-control">
                    <option value="" disabled selected>- select filter -</option>
                    <option value="matricule">matricule</option>
                    <option value="Nom">Nom</option>
                    <option value="Prenom">Prenom</option>
                    <option value="Departement">Departement</option>
                </select>
                <label>chercher un employé ici:</label>
            <input type="text" name="search" class="form-control " placeholder="chercher un employé">
        </form>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-dark">submit</button>
        </div>
        </div>

        <div class="container-fluid">
            <table class="table table-bordered table-light table-responsive-sm table-responsive-md">
                <thead class=" w-100">
                    <tr>
                         <th scope="col">Image</th>
                         <th scope="col">Matricule</th>
                         <th scope="col">Nom</th>
                         <th scope="col">Prenom</th>
                         <th scope="col">Date <br> de naissance</th>
                         <th scope="col"> Departement</th>
                         <th scope="col">Salaire</th>
                         <th scope="col">Fonction</th>
                         <th scope="col">Options</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td ><img class="pimage" src="assets/images/george.jpeg" ></td>
                        <td>Matricule</td>
                        <td>Nom</td>
                        <td>Prenom</td>
                        <td>Date <br> de naissance</td>
                        <td> Departement</td>
                        <td>Salaire</td>
                        <td>Fonction</td>
                        <td><button><i class="fa-solid fa-pen"></i></button><button><i class="fa-solid fa-trash-can"></i></button></td>
                    </tr>
                    <tr >
                        <td><img class="pimage" src="assets/images/george.jpeg" ></td>
                        <td>Matricule</td>
                        <td>Nom</td>
                        <td>Prenom</td>
                        <td>Date <br> de naissance</td>
                        <td> Departement</td>
                        <td>Salaire</td>
                        <td>Fonction</td>
                        <td><button><i class="fa-solid fa-pen"></i></button><button><i class="fa-solid fa-trash-can"></i></button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
