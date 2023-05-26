<?php

require_once ("../autoload.php");

    $session = new Session();

    $user = $session->get("user");

    if($user == null) {
        die(header("location: url=../../../../"));
    }

    if($_POST != null){

        $person = new People($_POST["userName"], $_POST["email"], $_POST["age"], $_POST["sex"], $_POST["password"]);        

        $peopleRepository = new PeopleRepository();

        $peopleRepository->save($person);

        $employee = new Employees($person, $_POST['office'], $_POST['salary']);

        $employeesRepository = new EmployeesRepository();

        $employeesRepository->save($employee);

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/list.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">     

    <title>registerEmployees User</title>

    <style>
        .containerregisterEmployees {
            display: flex !important;
            margin-top: 5vh;
            margin-left: 25%;
            border: 1px solid black;
            border-radius: 8px;
            width: 40%;
            justify-content:center ;
        }

        .btn-primary{
            margin-top: 5%;
        }
        

    </style>

</head>
<body>


<div class="containerregisterEmployees">


<div class="sidebar">

<ul class="menu">
    <li><a href="list.php#people">People</a></li>
    <li><a href="list.php#Clients">Clients</a></li>
    <li><a href="list.php#Employees">Employees</a></li>
    <li><a href="registerEmployees.php">register employees</a></li>
    <li><a href="registerClients.php">register clients</a></li>
    <li><a href="exit.php">Logout</a></li>

</ul>

</div>


    <form action="" method="post" class="registerEmployees">
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">User Name</label>
        <input type="text" name="userName" class="form-control" id="inputAddress">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Age</label>
        <input type="text" name='age' class="form-control" id="inputAddress2">
    </div>
    <div class="form-row">
        <label for="inputState">Sex</label>
        <select id="inputState" name='sex' class="form-control">
            <option selected value="M">Male</option>
            <option value="F">Femele</option>
        
        </select>

    </div>

    <div class="form-group">
        <label for="inputAddress">Salary</label>
        <input type="text" name="salary" class="form-control" id="inputAddress">
    </div>
    <div class="form-group">
        <label for="inputAddress2">office</label>
        <input type="text" name='office' class="form-control" id="inputAddress2">
    </div>

    <button type="submit" class="btn btn-primary" >Register</button>
    </form>
</div>

</body>
</html>