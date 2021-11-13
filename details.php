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
    <main class="container p-5">
        <div class='card m-3'>
            <div class='row g-0'>"
                <?php if ($avail == 1)
                    echo "<p class='h5 text-center bg-success'>AVAILABLE</p>";
                else
                    echo "<p class='h5 text-center bg-danger'>RESERVED</p>"; ?>
                <div class='col-md-4'>
                    <img src='pictures/<?php echo $picture ?>' alt='<?php echo $title ?>'' style="height:50vh;object-fit:contain">
                </div>
                <div class='col-md-8'>
                    <div class='card-header'>
                        <h5 class='card-title'><?php echo $title ?></h5>
                    </div>
                    <div class='card-body'>
                        <p class='card-text'><b><?php echo $type ?></b></p>
                        <p class='card-text'><i>Written by <?php echo $name1 . " " . $name2 ?></i></p>
                        <p class='card-text'><?php echo $short ?></p>
                        <p class='card-text'>Published by <?php echo $publisher ?> on <?php echo $date ?></p>
                        <p class='card-text'>Adress: <?php echo $adress ?></p>
                    
                    </div>
                    <div class='card-footer'>
                        <tr>
                            <td><a href='update.php?id= <?php echo $id ?> '><button class=' btn btn-success btn-sm' type='button'>Edit</button></a>
                            <td><a href='delete.php?id= <?php echo $id ?> '><button class=' btn btn-danger btn-sm' type='button'>Delete</button></a></td>
                            <td><a href="index.php"><button class="btn btn-primary btn-sm" type="button">Home</button></a></td>
                        </tr>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class=" p-5">
        <p class="h4 text-center text-white">Made by <a href="#">&#x24B8Laura Moldovan</a></p>
    </footer>
</body>

</html>