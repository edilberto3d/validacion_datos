<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Página Principal</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='style.css'>
</head>
<body>
    <?php
        $nombre=$_POST['Nombre'];
        $usuario = $_POST['User'];
        $contrasenya = $_POST['pss'];
        $sex=$_POST['sexo'];
        $correo = $_POST['correo'];
        $contacto = $_POST['Numero'];
        
       
       
        

    ?>
       <br><br><br><br>
    <div class="Datos">
    <H2>Registro completado</H2>
    <h2>Datos del usuario</h2>
        <br><br>
        <table border="1">
            <tr>
                <td> Nombre del usuario</td>
                <td> <?php echo($nombre); ?> </td>
            <tr>
                <td> Usuario </td>
                <td> <?php echo($usuario); ?> </td>
            <tr>
            <td> Contraseña </td>
                <td> <?php echo($contrasenya); ?> </td>
               
            <tr>
                <td> Sexo </td>
                <td> <?php echo($sex); ?> </td>
            <tr>   
            <td> Correo </td>
                <td> <?php echo($correo); ?> </td>             
               
            <tr>                
            <td> Número Telefónico </td>
                <td> <?php echo($contacto); ?> </td>
        </table>
    </div>
</body>
</html>