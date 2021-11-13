<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php' ?>
    <title>CR10 | Add Book</title>
    <link rel="stylesheet" type='text/css' href="css/style.css" />
</head>

<body>
    <header>
        <div class="m-auto">
            <p class="h1 text-white text-center title">Big Library</p>
        </div>
    </header>
    <main class="bg-gradient-secondary">
        <fieldset>
            <legend class='h2'>Add Book</legend>
            <form action="actions/a_create.php" method="POST" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Picture</th>
                        <td><input class='form-control' type="file" name="picture" value="<?php echo $data['picture'] ?>" /></td>
                    </tr>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title" placeholder="Book title" /></td>
                    </tr>
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name="ISBN" placeholder="ISBN" /></td>
                    </tr>
                    <tr>
                        <th>Short Description</th>
                        <td><input class='form-control' type="text" name="short_descript" placeholder="Short Description" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name="pType" placeholder="Ex: Book, CD, DVD etc." /></td>
                    </tr>
                    <tr>
                        <th>Author first name</th>
                        <td><input class='form-control' type="text" name="author_first_name" placeholder="First name" /></td>
                    </tr>
                    <tr>
                        <th>Author last name</th>
                        <td><input class='form-control' type="text" name="author_last_name" placeholder="Last name" /></td>
                    </tr>
                    <tr>
                        <th>Publisher name</th>
                        <td><input class='form-control' type="text" name="publisher_name" placeholder="Publisher name" /></td>
                    </tr>
                    <tr>
                        <th>Publisher adress</th>
                        <td><input class='form-control' type="text" name="publisher_adress" placeholder="Publisher adress" /></td>
                    </tr>
                    <tr>
                        <th>Publish date</th>
                        <td><input class='form-control' type="date" name="publish_date" /></td>
                    </tr>
                    <tr>
                        <td><button class='btn btn-success' type="submit">Insert Book</button></td>
                        <td><a href="index.php"><button class='btn btn-primary' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </main>
    <footer class="p-5">
        <p class="h4 text-center text-white">Made by <a href="#">&#x24B8Laura Moldovan</a></p>
    </footer>
</body>

</html>