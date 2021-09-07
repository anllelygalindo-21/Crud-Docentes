<?php 
    include("conexionDOC.php");
    $con=conectar();

$id_doc=$_GET['id_doc'];

$sql="SELECT * FROM docentes WHERE id_doc='$id_doc'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Docente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
       <body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100" border-radius="20px">

                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Actualizar</h1>
                <form action="updateDOC.php" method="POST">

        <input type="hidden" name="id_doc" value="<?php echo $row['id_doc']  ?>">

<label for="tipo_doc">TIPO DE DOCUMENTO</label>
    <select  type="text" class="form-control mb-3" id="tipo_doc" name="tipo_doc" value="<?php  echo $row['tipo_doc']  ?>">
        <option value="<?php echo $row['tipo_doc'] ?>"> Selecione un opción  </option>
        <option value="1">Tarjeta de identidad</option>
        <option value="2">Cedula de ciudadania</option>
        <option value="3">Registro Civil</option>
        <option value="4">Cedula de extranjeria</option>
    </select>

<label for="nom_doc">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="nom_doc" id="nom_doc"  value="<?php echo $row['nom_doc']  ?>">
<label for="ape_doc">APELLIDO</label>
    <input type="text" class="form-control mb-3" name="ap_doc" id="ap_doc" value="<?php echo $row['ap_doc']  ?>">

    <label for="gen_doc">GENERO</label>    
    <select type="text" class="form-control mb-3" name="gen_doc"  value="<?php echo $row['gen_doc']  ?>">
        <option value="<?php echo $row['gen_doc'] ?>">Seleccione una opción</option>
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
    </select>

    <label for="direc_doc">DIRECCIÓN</label>    
    <input type="text" class="form-control mb-3" name="direc_doc" id="direc_doc" value="<?php echo $row['direc_doc']  ?>">

<label for="ed_doc">EDAD</label>
    <input type="text" class="form-control mb-3" name="ed_doc" id="ed_doc" value="<?php echo $row['ed_doc']  ?>">

<label for="tel_doc">TELEFONO</label>    
    <input type="text" class="form-control mb-3" name="tel_doc" id="tel_doc" value="<?php echo $row['tel_doc']  ?>">

<label for="emdoc">EMAIL</label>    
    <input type="email" class="form-control mb-3" name="emdoc" id="emdoc" value="<?php echo $row['emdoc']  ?>">

<label for="id_area">AREA</label>    
    <select type="text" class="form-control mb-3" name="id_area" id="id_area" value="<?php echo $row['id_area']  ?>">
        <option value="<?php echo $row['id_area']  ?>">Seleccione una opción</option>
        <option value="1">Ciencias Naturales</option>
        <option value="2">Ciencias Sociales</option>
        <option value="3">Matemáticas</option>
        <option value="4">Humanidades</option>
        <option value="5">Educación Ética y Valores</option>
        <option value="6">Educación Religiosa</option>
        <option value="7">Educación Artística</option>
        <option value="8">Educación Física</option>
        <option value="9">Informática</option>
        <option value="10">Pedagogía</option>
    </select>

<label for="id_pais">PAIS</label>    
    <select type="text" class="form-control mb-3" name="id_pais" id="id_pais" value="<?php echo $row['id_pais']  ?>">
        <option value="<?php echo $row['id_pais']  ?>">Seleccione una opción</option>
        <option value="1">Colombia</option>
        <option value="2">Venezuela</option>
        <option value="3">Chile</option>
    </select>

<label for="id_ciu">CIUDAD</label>    
    <select type="text" class="form-control mb-3" name="id_ciu" id="id_ciu" value="<?php echo $row['id_ciu']  ?>">
        <option value="<?php echo $row['id_ciu']  ?>">Seleccione una opción</option>
        <option value="1">Bogota</option>
        <option value="2">Girardot</option>
        <option value="3">Flandes</option>
        <option value="4">Tocaima</option>
        <option value="5">Ricaurte</option>
    </select>

<label for="id_asig">AREA</label>    
    <select type="text" class="form-control mb-3" name="id_asig" id="id_asig" value="<?php echo $row['id_asig']  ?>">
        <option value="<?php echo $row['id_asig']  ?>">Seleccione una opción</option>
        <option value="1">Ciencias Naturales</option>
        <option value="2">Ambiental</option>
        <option value="3">Ciencias Sociales</option>
        <option value="4">Democracia</option>
        <option value="5">Matemáticas</option>
        <option value="6">Estadística</option>
        <option value="7">Lengua Castellana</option>
        <option value="8">Lectura</option>
        <option value="9">Educación Ética y Valores</option>
        <option value="10">Educación Religiosa</option>
        <option value="11">Educación Artística</option>
        <option value="12">Educación Física</option>
        <option value="13">Tecnología e Informática</option>
    </select>
                               

                            <input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Actualizar>
                    </form>
                    <th><label for="busqueda"></label><br><a href="docentes.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
                    </div>
    </body>
</html>
                    
                        
</html>