<?php
include_once 'controller/bookcontroller.php';
include_once 'dao/bookdao.php';
include_once 'dao/pdoutil.php';
include_once 'entity/book.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header></header>
    <nav>
        <ul>
            <li><a href="?menu=dashboard">Dashboard</a></li>
            <li><a href="?menu=my_book">My Book</a></li>
            <li><a href="?menu=library">Library</a></li>
        </ul>
    </nav>
    <main>
        <?php
        $menu = filter_input(INPUT_GET, 'menu');
        switch ($menu) {
            case 'library':
                $bookController = new BookController();
                $bookController->index();
                break;
            default:
        }
        ?>
    </main>
    <footer></footer>
</body>
</html>