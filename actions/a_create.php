<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {   
    $title = $_POST['title'];
    $ISBN = $_POST['ISBN'];
    $short = $_POST['short_descript'];
    $type = $_POST['pType'];
    $name1 = $_POST['author_first_name'];
    $name2 = $_POST['author_last_name'];
    $publisher = $_POST['publisher_name'];
    $adress = $_POST['publisher_adress'];
    $date = $_POST['publish_date'];
    $uploadError = '';
    //this function exists in the service file upload.
    $picture = file_upload($_FILES['picture']);  
   
    $sql = "INSERT INTO book(title, picture, ISBN, descript, pType, author_first_name, author_last_name, publisher_name, publisher_adress, publish_date, avail)  VALUES ( '$title', '$picture->fileName', '$ISBN', '$short', '$type', '$name1', '$name2', '$publisher', '$adress', '$date', true)";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
            <table class='table w-50'><tr>
            <td> $title </td>
            <td> $short </td>
            </tr></table><hr>";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>