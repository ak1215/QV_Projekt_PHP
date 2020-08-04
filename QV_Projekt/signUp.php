<?php
require 'validate.php';
require 'Includes/dbConnection.php';

$username = '';
$passwordu = '';
$firstname = '';
$lastname = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Serverseitige Bindung
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $passwordu = isset($_POST['passwordu']) ? $_POST['passwordu'] : '';
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
   
    //serverseitige überprüfung
    $var_errors = validate($username, $passwordu, $firstname, $lastname);

        //datenbank verbindung
        $conn = connectDataBase();

        //Insert into Struktur
        $sql = "INSERT INTO fahrzeugpark(username, passwordu, firstname, lastname)
                VALUES (?, ?, ?, ?)";
        //sql statement vorbereiten
        $result_of_sql = mysqli_prepare($conn, $sql);
    
        //Verbindung mit SQL
        if ($result_of_sql === false) {
            echo mysqli_error($conn);
        } else {
            mysqli_stmt_bind_param(
                $result_of_sql,
                "ssss",
                $_POST['username'],
                $_POST['password'],
                $_POST['firstname'],
                $_POST['lastname']
            );
            //Statement ausführen
            if (mysqli_stmt_execute($result_of_sql)) {
                $id = mysqli_insert_id($conn);
                echo "Inserted record with id: $id";
                require 'redirect.php';
                redirectAndExit("/www/Prüfung/liste.php?id=$id");
            } else {
                echo mysqli_stmt_error($result_of_sql);
            }
        }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1 class="title">Sign Up</h1>
                <div class="form-group">
                    <label class="form-check-label" for="firstname">Firstname:</label>
                    <input class="form-control" name="firstname" id="firstname" maxlength="50" required autofocus>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="lastname">Lastname:</label>
                    <input class="form-control" name="lastname" id="lastname" maxlength="50" required>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="username">Username:</label>
                    <input class="form-control" name="username" id="username" maxlength="20" required>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="password">Password:</label>
                    <input class="form-control" name="password" id="password" maxlength="20" required>
                </div>
                <div class="check-group">
                    <label class="form-check-label" for="bms">BMS</label>
                    <input type="checkbox" name="bms" value="bms">
                </div>
                <br>
                <a href="login.php"><button class="btn btn-secondary">Back</button></a>

                <button class="btn btn-secondary">Apply</button>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>

</html>
