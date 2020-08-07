<?php
require 'includes/dbConnection.php';
$conn = connectDataBase();

$sql = "SELECT subject_name, mark FROM subject WHERE mark IS NOT NULL AND user_id = 1";
$results = mysqli_query($conn, $sql);
if (false === $results) {
    echo mysqli_error($conn);
} else {
    $grades = mysqli_fetch_all($results, MYSQLI_ASSOC);
}
 if (empty($grades)) {
    "No grades found.";
 }
    else {
        "Grades found";
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


    <form method="POST">

    </form>
    <ul>
        <li><a href="grades.php">Grades</a></li>
        <li><a href="overview.php">Overview</a></li>
    </ul>

        <div class="container">

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h1 class="title">Your grades</h1>

                    <div class="container_background">
                        <?php foreach ($grades as $grade) : ?>
                        <div class="nav-item-list">
                            <article>

                                <p>Subject: <strong><?= $grade['subject_name']; ?></strong></p>
                                <p><?= $grade['mark']; ?></p>
                            </article>

                        </div>
                        <?php endforeach; ?>
                       
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>

        </div>
    </form>

</body>

</html>