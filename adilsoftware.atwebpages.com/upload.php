<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">

    <input type="File" name="file">
    <input type="submit" name="submit">
 
 
</form>
 
</body>
</html>
 
<?php 

$localhost = "fdb30.awardspace.net"; #localhost
$dbusername = "3639130_adilsoftware"; #username of phpmyadmin
$dbpassword = "ad81guilherme";  #password of phpmyadmin
$dbname = "3639130_adilsoftware";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
if (isset($_POST["submit"]))
 {
     #retrieve file title
        $title = $_POST["title"];
     
    #file name with a random number so that similar dont get replaced
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
   
     #upload directory path
$uploads_dir = 'upload';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
 
    #sql query to insert into database
    $sql = "INSERT into arquivo(codigo,arquivo) VALUES('null','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    echo "File Sucessfully uploaded";
    }
    else{
        echo "Error";
    }
}
 
 
?>
