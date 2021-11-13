<?php
require 'actions/db_connect.php';
$sql = "SELECT * FROM book";
$result = mysqli_query($connect, $sql);
$pbody = '';
$tbody = '';
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .= "
        <div class='col'>
            <div class='card m-3' style='width: 22rem;'>
                <div class='row g-0'>";

        if ($row['avail'] == 1)
            $tbody .= "<p class='h5 text-center bg-success'>AVAILABLE</p>";
        else
            $tbody .= "<p class='h5 text-center bg-danger'>RESERVED</p>";
        $tbody .= "
            <div class='col-md-4'>
                <img src='pictures/" . $row['picture'] . "'alt='" . $row['title'] . "'>
            </div>
            <div class='col-md-8'>
                <div class='card-header'>
                    <h5 class='card-title'>" . $row['title'] . "</h5>
                </div>
                <div class='card-body'>
                    <p class='card-text'>" . $row['pType'] . "</p>
                    <p class='card-text'>Written by " . $row['author_first_name'] . " " . $row['author_last_name'] . "</p>
                </div>
                <div class='card-footer'>
                    <tr>
                        <td><a href='details.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Read more</button></a>
                        <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-success btn-sm' type='button'>Edit</button></a>
                        <td><a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
                    </tr>
                </div>
            </div>
            </div>
            </div>
            </div>";
        $pbody .= "<li class='nav-item'>
        <a class='nav-link active'  href='publisher.php?id=" . $row['id'] . "'>" . $row['publisher_name'] . "</a></li>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}

mysqli_close($connect);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CR10</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" type='text/css' href="css/style.css" />
</head>

<body class="bg-light">
    <header>
        <div class="m-auto">
            <p class="h1 text-white text-center title">Big Library</p>
        </div>
    </header>
    <main class="container p-3">
        <a href="create.php"><button class='btn btn-primary' type="button">Add Book</button></a>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Publishers</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">

                        <?= $pbody; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            <?= $tbody; ?>
        </div>
        </div>
    </main>
    <footer class="p-5">
        <p class="h4 text-center text-white">Made by <a href="#">&#x24B8Laura Moldovan</a></p>
    </footer>
</body>


</html>