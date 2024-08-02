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
           
            include_once('app/controllers/post.php');
            $product = new post();
            // $main = new Main();
            // $post = new PostController();
            $url = $_GET['url'];
            $url = rtrim($url,'/'); // cắt ký tự cuối hàng
            $url = explode('/',$url); // cắt các ký tự bởi dấu /
            include_once('app/controllers/'.$url[0].'.php');
            $product = new $url[0]();
            echo '<pre>';
            print_r($url);
            echo '</pre>';
            echo 'class: '.$url[0] .'<br/>';
            echo 'methods: '.$url[1] .'<br/>';
            echo 'para: '.$url[2] .'<br/>';
            echo 'id: '.$url[3] .'<br/>';
        ?>
    </p>
    <?php
        include('inc/footer.php');
    ?>
</body>
</html>