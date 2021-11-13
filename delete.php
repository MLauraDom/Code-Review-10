<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM book WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    $data = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $title = $data['title'];
        $picture = $data['picture'];
        $ISBN = $data['ISBN'];
        $short = $data['descript'];
        $type = $data['pType'];
        $name1 = $data['author_first_name'];
        $name2 = $data['author_last_name'];
        $publisher = $data['publisher_name'];
        $adress = $data['publisher_adress'];
        $date = $data['publish_date'];
        $avail = $data['avail'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Product</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" type='text/css' href="css/style.css" />

</head>

<body>

    <body class="bg-light">
        <header>
            <div class="m-auto">
                <p class="h1 text-white text-center title">Big Library</p>
            </div>
        </header>
        <main class="container p-3 m-auto" style="width:70vw;">

            <legend class='h2 mb-3'>Delete request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $name ?>"></legend>
            <h5>You have selected the data below:</h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td><?php echo $title ?></td>
                </tr>
            </table>

            <h3 class="mb-4">Do you really want to delete this product?</h3>
            <form action="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>" />
                <input type="hidden" name="picture" value="<?php echo $picture ?>" />
                <button class="btn btn-danger" type="submit">Yes, delete it!</button>
                <a href="index.php"><button class="btn btn-success" type="button">No, go back!</button></a>
            </form>
        </main>
        <footer class="p-5">
            <p class="h4 text-center text-white">Made by <a href="#">&#x24B8Laura Moldovan</a></p>
        </footer>
    </body>

</html>