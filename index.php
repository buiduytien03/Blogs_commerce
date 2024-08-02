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
            include_once('system/libs/DController.php');
            include_once('app/controllers/post.php');
            // $main = new Main();
            $url = isset($_GET['url']) ? $_GET['url']:NULL;
            if($url!=NULL){
                $url = rtrim($url,'/'); // cắt ký tự cuối hàng
                $url = explode('/',filter_var($url,FILTER_SANITIZE_URL)); // cắt các ký tự bởi dấu /
            }else{
                unset($url);
            }
        
       
            if(isset($url[0])){
                include_once('app/controllers/'.$url[0].'.php');
                $ctrl = new $url[0]();
                if(isset($url[2])){
                    $ctrl->{$url[1]}($url[2]);
                }else{
                    if(isset($url[1])){
                        $ctrl->{$url[1]}();
                    }else{

                    }
                }
            }else{
               include_once('app/controllers/index.php');
               $index = new index();
               $index ->homepage();
            }
        
        ?>
    </p>
    <?php
        include('inc/footer.php');
    ?>
</body>
</html>