<h1>This is Homepage</h1>

<p>Category: 
    <?php
    foreach ($data as $key){
        echo $key['catOne'].'<br/>';
        echo $key['catTwo']
        .'<br/>';
        echo $key['catThree'].'<br/>';
    }

    ?>

</p>