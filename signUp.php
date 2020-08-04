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

                    <input class="form-control" name="firstname" id="firstname" maxlength="100" required autofocus>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="lastname">Lastname:</label>
                    <input class="form-control" name="lastname" id="lastname" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="username">Username:</label>
                    <input class="form-control" name="username" id="username" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label class="form-check-label" for="password">Password:</label>
                    <input class="form-control" name="password" id="password" maxlength="100" required>
                </div>
                <div class="check-group">
                <label class="form-check-label" for="bms">BMS</label>
                <input type="checkbox" name="bms" value="bms">
            </div>
            <br>
                <button class="btn btn-secondary">Apply</button>
            </div>
            <div class="col-sm-3"></div>
        </div>

    </div>
</body>
