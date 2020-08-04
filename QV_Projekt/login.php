<?php
require 'Includes/dbConnection.php';


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h1 class="title">QV-Calculator</h1>
                <h5 class="descr">Focus more on learning than on grades.</h5>

                <div class="form-group">
                    <label class="form-check-label" for="username">Username:</label>

                    <input class="form-control" name="username" id="username" maxlength="20" required autofocus>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="password">Password:</label>
                    <input class="form-control" name="password" id="password" maxlength="20" required>
                </div>
                 <button class="btn btn-secondary">Login</button>
                <p class="text-signup">Don't have an account? Sign up now.</p>
                <form action="signUp.php">
                    <button class="btn btn-secondary">Sign Up</button>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>

</html>
