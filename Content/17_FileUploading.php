<?php
    
    /* ---------- File Uploading --------- */
 
    if(isset($_POST['submit'])) {
        $allowedExt = ['png','jpg','jpeg','gif']; // Sets allowed filetypes

        if(!empty($_FILES['upload']['name'])) {
            // print_r($_FILES);
            $fileName = $_FILES['upload']['name'];
            $fileSize = $_FILES['upload']['size'];
            $fileTmp = $_FILES['upload']['tmp_name'];
            $targetDir = "uploads/${fileName}}";
            
            $fileExt = explode('.', $fileName); // Gets file ext type
            $fileExt = strtolower(end($fileExt));

            // Validate File Ext & size
            if(in_array($fileExt,$allowedExt)) {

                if($fileSize <= 1000000) { // Validates file size
                    move_uploaded_file($fileTmp, $targetDir);
                    $message = '<p style="colour: green;">File has been uploaded</p>';

                } else { // Message for too big
                    $message = '<p style="colour: red;">File is too large</p>';
                }

            } else { // Message for incorect file type
                $message = '<p style="colour: red;">Invalid file type</p>';
            }
            

        } else { // Message to choose file
            $message = '<p style="color: red;">Please choose a file</p>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"
    method="POST" enctype="multipart/form-data">
    Select Image to upload: 
    <input type="file" name="upload">
    <input type="submit" value="Submit" name="submit">
</body>

</html>