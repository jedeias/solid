<?php

require_once ("../autoload.php");

$session = new Session();

$user = $session->get("user");

if($user == null) {
    die(header("location: url=../../../../"));
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/list.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">   

    <link rel="stylesheet" href="css/style.css">   
    <title>List User</title>
</head>
<body>
    
<div class="container">

<div class="sidebar">
    <?php
        //var_dump($_SESSION["user"]);
    ?>

  <ul class="menu">
    <li><a href="#people">People</a></li>
    <li><a href="#Clients">Clients</a></li>
    <li><a href="#Employees">Employees</a></li>
    <li><a href="register.php">Register</a></li>
    <li><a href="exit.php">Logout</a></li>

  </ul>
</div>


  <table class="table" id="people">
    <thead class="thead-dark">

    <tr>
    <th scope='col'>Cod</th>
        <th scope='col'>User Name</th>
        <th scope='col'>Age</th>
        <th scope='col'>Email</th>
        <th scope='col'>Sex</th>
        <th scope='col'>Password</th>
        <th scope='col'>Update</th>
    </tr>
    </thead>
    <tbody>
<?php
        
    $people = new PeopleRepository();

    $peopleArray = $people->getAllPeople();
    
    foreach ($peopleArray as $person) {

        echo "<tr>
        <th scope='row'>{$person['pk_people']}</th>
        <td>{$person['user_name']}</td>
        <td>{$person['age']}</td>
        <td>{$person['email']}</td>
        <td>{$person['sex']}</td>
        <td>{$person['password']}</td>
        <td> <button> Update </button> </td> 
        </tr>";
    }
?>


    </tbody>
  </table>
</div>



<div class="container">
  <table class="table" id="Clients">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Cod</th>
        <th scope="col">Services</th>
        <th scope="col">Cost</th>
        <th scope='col'>User Name</th>
        <th scope='col'>Age</th>
        <th scope='col'>Email</th>
        <th scope='col'>Sex</th>
        <th scope='col'>Password</th>
        <th scope='col'>Update</th>
      </tr>
    </thead>
    <tbody>

    <?php
        
        $clients = new InnerJoinsClients();
    
        $clientsArray = $clients->innerJoin();

        foreach ($clientsArray as $clients) {

            echo "<tr>

            <th scope='row'>{$clients['pk_client']}</th>
            <td>{$clients['services']}</td>
            <td>{$clients['value_cost']}</td>
            <td>{$clients['user_name']}</td>
            <td>{$clients['age']}</td>
            <td>{$clients['email']}</td>
            <td>{$clients['sex']}</td>
            <td>{$clients['password']}</td>
            <td> <button> Update </button> </td> 
            </tr>";
        }
    ?>

    </tbody>
  </table>
</div>

<div class="container">
  <table class="table" id="Employees">
  <thead class="thead-dark">
      <tr>
        <th scope="col">Cod</th>
        <th scope="col">Services</th>
        <th scope="col">Salary</th>
        <th scope='col'>User Name</th>
        <th scope='col'>Age</th>
        <th scope='col'>Email</th>
        <th scope='col'>Sex</th>
        <th scope='col'>Password</th>
        <th scope='col'>Update</th>
      </tr>
    </thead>
    <tbody>

    <?php
        
        $employees = new InnerJoinsEmployees();
    
        $employeesArray = $employees->innerJoin();

        foreach ($employeesArray as $employees) {

            echo "<tr>

            <th scope='row'>{$employees['pk_employee']}</th>
            <td>{$employees['office']}</td>
            <td>{$employees['wage']}</td>
            <td>{$employees['user_name']}</td>
            <td>{$employees['age']}</td>
            <td>{$employees['email']}</td>
            <td>{$employees['sex']}</td>
            <td>{$employees['password']}</td>
            <td> <button> Update </button> </td> 
            </tr>";
        }
    ?>

    </tbody>
  </table>
</div>

</body>
</html>