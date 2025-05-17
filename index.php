<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Gerador de personagens de Star Wars</h1>
    <form action="" method="post">
        <button type="submit" name="mostrar">Mostrar personagem aleatório</button>
</form>
        <?php
        function get_rand_img($dir)
        {
             $arr = array();
             $list = scandir($dir);
             foreach($list as $file)
             {
        if(!isset($img))
        {
            $img = '';
        }
        if(is_file($dir . '/' . $file))
        {
            $parts = explode('.', $file);
            $ext = end($parts);
            if($ext == 'gif' || $ext == 'jpeg' || $ext == 'jpg' || $ext == 'png' || $ext == 'GIF' || $ext == 'JPEG' || $ext == 'JPG' || $ext == 'PNG')
            {
                array_push($arr, $file);
                $img = $file;
            }
        }
    }
            if($img != '')
            {
                $img = array_rand($arr);
                $img = $arr[$img];
            }
            $img = str_replace("'", "\'", $img);
            $img = str_replace(" ", "%20", $img);
            return $img;
        }

    
        $imgPath = 'images/' . get_rand_img('images');
        echo '<img id="image-container" src="' . $imgPath . '" alt="Personagem de Star Wars">';
    ?>
    <img src="" alt="">
</body>
</html>