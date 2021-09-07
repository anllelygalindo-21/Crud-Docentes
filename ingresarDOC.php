<?php 
    include("conexionDOC.php");
    $con=conectar();


    $sql="SELECT *  FROM docentes";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);



    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> INGRESAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
    </head>
    
<body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100">
                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Ingresar datos</h1>
<!-- <div class="col-md-5" style="align-content: right;">
 -->

 <form action="insertarDOC.php" method="POST">

<label for="id_doc">ID</label>
<input type="text" class="form-control mb-3" name="id_doc">

<label for="tipo_doc">TIPO DE DOCUMENTO</label>         
<select class="form-control mb-3" name="tipo_doc">
<option value="">Selecciona una opcion</option>
<option value="1">Tajeta de Identidad</option>
<option value="2">Cedula de Ciudadania</option>
<option value="3">Cedula de Extranjeria</option>
    </select>

<label for="nom_doc">NOMBRES</label>
<input type="text" class="form-control mb-3" name="nom_doc">

<label for="ap_doc">APELLIDOS</label>
<input type="text" class="form-control mb-3" name="ap_doc">

<label for="gen_doc">GENERO</label>         
<select class="form-control mb-3" name="gen_doc">
<option value="">Seleccione una opcion</option>
<option value="1">Masculino</option>
<option value="2">Femenino</option>
    </select>

<label for="direc_doc">DIRECCION</label>
<input type="text" class="form-control mb-3" name="direc_doc">

<label for="ed_doc">EDAD</label>
<input type="text" class="form-control mb-3" name="ed_doc">
                                   
<label for="tel_doc">TELEFONO</label>
<input type="text" class="form-control mb-3" name="tel_doc">

<label for="emdoc">EMAIL</label>
<input type="email" class="form-control mb-3" name="emdoc">

<label for="id_area">ID AREA</label>         
<select class="form-control mb-3" name="id_area">
<option value="">Area</option>
<option value="1">Ciencias Naturales</option>
<option value="2">Ciencias Sociales</option>
<option value="3">Matemáticas</option>
<option value="4">Lengua Castellana</option>
<option value="5">Ética y Valores</option>
<option value="6">Religion</option>
<option value="7">Artística</option>
<option value="8">Educación Física</option>
<option value="9">Informática</option>
<option value="10">Pedagogía</option>
                                    </select>
<label for="id_pais">PAIS</label>         
<select class="form-control mb-3" name="id_pais">
<option value="">Pais</option>
<option value="1">Colombia</option>
<option value="2">Egipto</option>
<option value="3">Estados Unidos</option>
</select>
                                    
<label for="id_ciu">CIUDAD</label>         
<select class="form-control mb-3" name="id_ciu">
    <option value="">Ciudad</option>
    <option value="1">Medellin</option>
    <option value="2">Girardot</option>
    <option value="3">Cali</option>
    </select>

<label for="id_asig">ASIGNATURA</label>         
<select class="form-control mb-3" name="id_asig">
<option value="">Selecciona una opcion</option>
<option value="1">Lectura</option>
<option value="2">Estadistica</option>
<option value="3">Democracia</option>
<option value="4">Ambiental</option>

</select>
                                    
<b><input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Ingresar></b>
                                </form>

<th><label for="busqueda"></label><br><a href="docentes.php" class="btn btn-info">VOLVER</a></th>
                        </div>