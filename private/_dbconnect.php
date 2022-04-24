<? php
$servername = "localhost";
$username = "root";
$password = "";
$database = "codex";

$conn = mysqli_connect($servername, $username, $password, $database);
if($conn){
    echo 'success';
}else{
    die("error" . mysqli_connect_error($conn));
}

?>