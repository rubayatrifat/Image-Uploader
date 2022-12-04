<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Uploader</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
     
       if(isset($_POST['image_submiter'])){

        
        $pic_name = $_FILES['image_uploader']['name'];

        $pic_tmpname = $_FILES['image_uploader']['tmp_name'];

        $uniq_name = time().$pic_name;

        $spruniq_name = md5($uniq_name);

        $picexplote = explode('.', $pic_name);

        $pic_format = $spruniq_name.'.'.end($picexplote);

        move_uploaded_file($pic_tmpname, 'images/'.$pic_format )   ;

        echo "<div class='profile-img'>";
        echo "<img src='images/".$pic_format ."'>";
        echo "</div>";



       }
    
    ?>
   
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image_uploader" class="image-uploader">
        <input type="submit" value="Submit Image" class="image-submitter" name="image_submiter">
    </form>

</body>
</html>