<?php


$nome = $_POST["nome"];
$endereco = $_POST["endereco"];
$email = $_POST["email"];


$localhost = "fdb30.awardspace.net"; #localhost
$dbusername = ""; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
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
    $sql = "INSERT into tbclientes(nome, endereco, email, arquivo) VALUES('$nome', '$endereco', '$email','$pname')";
 
    if(mysqli_query($conn,$sql)){
 
    header("location:page3.html");

    }
    else{
        echo "Error";
    }
 
 
?>
