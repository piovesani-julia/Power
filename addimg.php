<?php

if (count($_FILES) > 0) 
{
    if (is_uploaded_file($_FILES['userImage']['tmp_name'])) 
    {
        require_once "./init.php";
        $imgData = addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
        $imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
        
        $sql = "INSERT INTO imagens(ImageType ,imageData)VALUES('{$imageProperties['mime']}', '{$imgData}')";
        $current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
        if (isset($current_id)) {
            header("Location: table.php");
        }
    }
}
?>
<HTML>
    <HEAD>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- add materialize-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" href="materialize/css/custon.css">
        <style>
            label
            {
                font-family: Old English Text MT;
                color:#000000;
                font-size: 50px;
            }
            </style>
        <title>Power Livros</title>
    </HEAD>
    <BODY>
    <div class="container">
        <div class="row">  
            <div class="col s1"></div>
            <div class="col s10">
                <form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
                    <label>Upload Imagens </label><br/><hr>
                        <input name="userImage" type="file" class="inputFile" />
                             <br/><br/>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                            Enviar <i class="material-icons right">send</i>
                        </button>
                </form>
            </div>
            <div class="col s1"></div>
        </div>
    </div>
</HTML>