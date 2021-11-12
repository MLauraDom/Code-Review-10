<?php
require_once 'actions/db_connect.php';
$sql = "SELECT * FROM book";
$result = mysqli_query($connect, $sql);
$tbody = ''; //this variable will hold the body for the table
if (mysqli_num_rows($result)  > 0) {
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $tbody .= "
        <div class='col'>
            <div class='card m-3' style='width: 22rem; height:14rem;'>
                <div class='row g-0'>
                    <div class='col-md-4'>
                        <img src='pictures/" . $row['picture'] . "'alt='" . $row['title'] . "'>
                    </div>
                    <div class='col-md-8'>
                        <div class='card-header'>
                            <h5 class='card-title'>" . $row['title'] . "</h5>
                        </div>
                        <div class='card-body'>
                            <p class='card-text'>Written by " . $row['author_first_name'] . " " . $row['author_last_name'] . "</p>
                            <p class='card-text'><small class='text-muted'>". $row['publisher_name'] . "</small></p>
                        </div>
                        <div class='card-footer'>
                            <tr>
                                <td><a href='details.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Read more</button></a>
                                <td><a href='update.php?id=" . $row['id'] . "'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
                                <td><a href='delete.php?id=" . $row['id'] . "'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 ";
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

<body>
    <header>
        <div class="m-auto">
            <p class="h1 text-white text-center title">Big Library</p>
        </div>
    </header>
    <main class="container p-3">
        <div class="p-3 hed">
            <p class="h2">
                Books
            </p>
            <a href= "create.php"><button class='btn btn-primary'type="button" >Add Book</button></a>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
        <?= $tbody;?>
        </div>
        </div>
    </main>
    <footer class="p-5">
        <p class="h4 text-center text-white">Made by <a href="#">&#x24B8Laura Moldovan</a></p>
    </footer>
</body>

</html>