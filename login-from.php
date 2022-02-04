<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <form action="login-process.php" method="POST">

        <div class="container">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" required>
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">PassWord</label>
            <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="password" required>
            </div>
            <input type="submit" value="confram">  
        </div>   

    </form>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>