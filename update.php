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
<html>

<head>
    <title>Edit Book</title>
    <?php require_once 'components/boot.php' ?>
    <link rel="stylesheet" type='text/css' href="css/style.css" />
</head>

<body class="bg-light">
    <header>
        <div class="m-auto">
            <p class="h1 text-white text-center title">Big Library</p>
        </div>
    </header>
    <main class="container p-5">
        <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='pictures/<?php echo $picture ?>' alt="<?php echo $title ?>"></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="file" name="picture" value="<?php echo $data['picture'] ?>" /></td>
                </tr>
                <tr>
                    <th>Title</th>
                    <td><input class="form-control" type="text" name="title" value="<?php echo $title ?>" /></td>
                </tr>

                <tr>
                    <th>ISBN</th>
                    <td><input class='form-control' type="text" name="ISBN" value="<?php echo $ISBN ?>" /></td>
                </tr>
                <tr>
                    <th>Short Description</th>
                    <td><input class='form-control' type="text" name="short_descript" value="<?php echo $short ?>" /></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><input class='form-control' type="text" name="pType" value="<?php echo $type ?>" /></td>
                </tr>
                <tr>
                    <th>Author first name</th>
                    <td><input class='form-control' type="text" name="author_first_name" value="<?php echo $name1 ?>" /></td>
                </tr>
                <tr>
                    <th>Author last name</th>
                    <td><input class='form-control' type="text" name="author_last_name" value="<?php echo $name2 ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher name</th>
                    <td><input class='form-control' type="text" name="publisher_name" value="<?php echo $publisher ?>" /></td>
                </tr>
                <tr>
                    <th>Publisher adress</th>
                    <td><input class='form-control' type="text" name="publisher_adress" value="<?php echo $adress ?>" /></td>
                </tr>
                <tr>
                    <th>Publish date</th>
                    <td><input class='form-control' type="date" name="publish_date" value="<?php echo $date ?>" /></td>
                </tr>
                <td><button class="btn btn-success" type="submit">Save Changes</button></td>
                <td><a href="index.php"><button class="btn btn-primary" type="button">Back</button></a></td>
                </tr>
            </table>
        </form>
    </main>
    <footer class="p-5">
        <p class="h4 text-center text-white">Made by <a href="#">&#x24B8Laura Moldovan</a></p>
    </footer>
</body>

</html>