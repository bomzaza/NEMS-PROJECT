<?PHP
    include 'connect.php';

    if(isset($_POST["email"]) && isset($_POST["password"])){

        $email_account = mysqli_real_escape_string($conn, $_POST['email']);
        $password_account = mysqli_real_escape_string($conn, $_POST['password']);
        $sql = "SELECT * FROM USER WHERE username = '$email_account' && userpassword= '$password_account' ";
        $query = mysqli_query($sql);
        if($query ==  1){

            header("location: index-from.php.php");

        }else{

            header("location: login-from.php");
        }
        
    }
    

?>