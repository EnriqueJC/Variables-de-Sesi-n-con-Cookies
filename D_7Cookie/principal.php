<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("Location:login.php");
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>COOKIES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4 col-lg-8">
        <div class="card bg-dark text-white">
            <div class="card-header">
            <center><h1>Principal</h1></center>
            </div>
            <div class="card-body">
                <h1>Bienvenido <b><?php echo $_SESSION["usuario"]; ?></b>
                    y has igresado <b><?php echo $_COOKIE[$_SESSION["usuario"]]; ?></b>
                </h1>
                </br>
                <a href="login.php?cerrar=true">Cerrar Sesión</a>
            </div>
        </div>
    </div>
</body>
</html>
<?php
}
?>