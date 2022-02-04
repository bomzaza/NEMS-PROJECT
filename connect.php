<?PHP

    $nameserver = "localhost";
    $nameuser = "root";
    $password = "";
    $dbname = "nems_db";

    $conn = mysqli_connect($nameserver, $nameuser, $password, $dbname);

    if(!$conn){
            die("mysql connect erorr : ".mysqli_connect_error());
    }else{
            //echo "success connectasdasdasdasdsad";
    }
?>