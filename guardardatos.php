<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="consultar.php">Consultar</a>
<h1>REGISTRO DE CLIENTES</h1>    
 <form action="guardardatos.php" method="POST">
    Nombre: <input type="text" name="nombre" size="40"><br>
    Apellido<input type="text" name="apellido" size="40"><br>
    Telefono <input type="text" name="telefono" size="10"><br>
    Dui:<input type="text" name="dui" size="10"><br>
    <input type="submit" name="btn" value="Guardar datos"><br>


 </form>

 <?php
 if (isset($_POST["nombre"]))
 {
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $telefono=$_POST["telefono"];
    $dui=$_POST["dui"];
//codigo php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sis21c";
    $conn = new mysqli($servername, $username, $password, $dbname);
     if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    } 
      $sql = "INSERT INTO clientes (nombre, apellidos, telefono, dui)
    VALUES ('$nombre', '$apellido', '$telefono','$dui')";

    if ($conn->query($sql) === TRUE) {
    echo "Se guardo el registro";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>



</body>
</html>
