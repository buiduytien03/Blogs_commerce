<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blogs ecommerce</title>
</head>
<body>
    <?php
        include('inc/header.php');
    ?>
    <p>
        <?php
            include_once('system/libs/main.php');
            $main = new Main();
            $main -> chitietsanpham();
        ?>
    </p>
    <?php
        include('inc/footer.php');
    ?>
</body>
</html>