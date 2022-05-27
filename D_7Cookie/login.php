<?php
    session_start();
    if(isset($_REQUEST["cerrar"])){
        session_destroy();
    }
    if(isset($_SESSION["usuario"])){
        header("Location:principal.php");
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
            <center><h1>Login</h1></center>
            </div>
            <div class="card-body">
            <form action="#" method="POST">
            <label>Ingrese Usuario</label>
            </br>
            <input type="text" class="form-control" id="txtNombre" name="txtNombre"> 
            </br>
            <button type="submit" class="btn btn-primary" name="btnIniciar" id="btnIniciar" >Iniciar</button>
            </form>
        </div>
    </div>
</div>
<?php
    if(isset($_REQUEST["btnIniciar"])){
        $nombre=$_POST["txtNombre"];
        $_SESSION["usuario"]=$nombre;
        if(isset($_COOKIE[$nombre])){
            $cont=$_COOKIE[$nombre];
            setcookie($nombre,$cont+1,time()+3600);
        }else{
            setcookie($nombre,1,time()+3600);
        }
        header("Location:principal.php");
    }        
?>
</body>
</html>
<?php
}
?>