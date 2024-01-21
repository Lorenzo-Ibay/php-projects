<?php 
if(isset($_POST['submit'])){
    $allowed_ext= ['php'] ;
    if(!empty($_FILES['upload']['name'])){
        // print_r($_FILES);
        $file_name = $_FILES['upload']['name'];
        $file_size = $_FILES['upload']['size'];
        $file_tmp = $_FILES['upload']['tmp_name'];
        $target_dir= "uploads/${file_name}";

        //get file extension
        $file_ext = explode('.',$file_name);
        $file_ext = strtolower(end($file_ext));
        // echo $file_ext;

        //validate extension
        if(in_array($file_ext, $allowed_ext) ){
            if($file_size <= 1000000){
                move_uploaded_file($file_tmp, $target_dir);
                $message = '<p style="color:green;"> Success</p>';
            }else{
                $message = '<p style="color:red;"> The file is too large</p>';
            }
        }
        else{
            $message = '<p style="color:red;"> please add a valid file type</p>';
        }
    }else{
        $message = '<p style="color:red;"> please add a valid file</p>';
    }
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>File upload</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php echo $message ?? null ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload">
        <input type="submit" value="Submit" name="submit" >
        </form>
        <script src="" async defer></script>
    </body>
</html>