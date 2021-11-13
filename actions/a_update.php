<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $ISBN = $_POST['ISBN'];
    $short = $_POST['short_descript'];
    $type = $_POST['pType'];
    $name1 = $_POST['author_first_name'];
    $name2 = $_POST['author_last_name'];
    $publisher = $_POST['publisher_name'];
    $adress = $_POST['publisher_adress'];
    $date = $_POST['publish_date'];
    $avail = $_POST['avail'];
    //variable for upload pictures errors is initialized
    $uploadError = '';
    
    $picture = file_upload($_FILES['picture']);//file_upload() called  
    if($picture->error===0){
        ($_POST["picture"]=="product.png")?: unlink("../pictures/$_POST[picture]");       
        $sql = "UPDATE book SET title = '$title', picture = '$picture->fileName', ISBN = '$ISBN', short_description = '$short', pType = '$type', author_first_name = '$name1', author_last_name = '$name2', publisher_name = '$publisher', publisher_adress = '$adress', publish_date = $date, avail = '$avail' WHERE id = {$id}";
    }else{
        $sql = "UPDATE book SET title = '$title', ISBN = '$ISBN', short_description = '$short', pType = '$type', author_first_name = '$name1', author_last_name = '$name2', publisher_name = '$publisher', publisher_adress = '$adress', publish_date = $date, avail = '$avail' WHERE id = {$id}";
    }
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($picture->error !=0)? $picture->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
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
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>