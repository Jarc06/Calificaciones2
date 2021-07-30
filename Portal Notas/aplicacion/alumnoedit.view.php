<!DOCTYPE html>
<?php
require 'functions.php';
$permisos = ['Administrador','Profesor'];
permisos($permisos);
if(isset($_GET['id'])) {

    $id_alumno = $_GET['id'];

    $alumno = $conn->prepare("select * from alumnos where id = ".$id_alumno);
    $alumno->execute();
    $alumno = $alumno->fetch();

//consulta las secciones
    $secciones = $conn->prepare("select * from secciones");
    $secciones->execute();
    $secciones = $secciones->fetchAll();

//consulta de grados
    $grados = $conn->prepare("select * from grados");
    $grados->execute();
    $grados = $grados->fetchAll();

}else{
    Die('Ha ocurrido un error');
}
?>
<html>

<head>
<aside class=sidebar>
                <nav class="menú"><ul center>
                <br>
                <br>
                <br>
                <section class="escudo"><li><img src="img\escudo2.png" alt=""></li></section>
                <br>
                <br>
                <center> <li><button type="button" class="btn btn-outline-success"><a href="http://localhost/Calificaciones2/portal%20chat/vistas/index.php">Chat comunidad educativa</a></button></li></center> 
                <br>
                <li><a href="http://localhost/Calificaciones2/"> Inicio </a> </li>
                <li><a href="http://localhost/Calificaciones2/Portal%20Notas/aplicacion/index.php"> Servicios Informaticos </a> </li>
                <li><a href="http://localhost/Calificaciones2/Formulario_contacto/Contacto.html">Contáctenos</a> </li>
                
            </ul>
            </nav>
        </aside>
<title>Inicio | SERVICIOS INFORMATICOS</title>
    <meta name="description" content="Registro de Notas Escuela Rural Mixta Gualandayes" />
    <link rel="stylesheet" href="css/style.css" />

</head>
<section class= cuerpo>
<body>
<div class="header">
        <h1>SERVICIOS INFORMATICOS - Escuela Rural Mixta Gualandayes</h1>
        <h3>Usuario:  <?php echo $_SESSION["username"] ?></h3>
</div>
<nav>
    <ul>
        <li><a href="inicio.view.php">Inicio</a> </li>
        <li class="active"><a href="alumnos.view.php">Matricula  Alumno</a> </li>
        <li><a href="listadoalumnos.view.php">Listado de Alumnos</a> </li>
        <li><a href="notas.view.php">Registro de Notas</a> </li>
        <li><a href="listadonotas.view.php">Consulta de Notas</a> </li>
        <li class="right"><a href="logout.php">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
            <h4>Edición de Alumnos</h4>
            <form method="post" class="form" action="procesaralumno.php">
                <!--colocamos un campo oculto que tiene el id del alumno-->
                <input type="hidden" value="<?php echo $alumno['id']?>" name="id">
                <label>Nombres</label><br>
                <input type="text" required name="nombres" value="<?php echo $alumno['nombres']?>" maxlength="45">
                <br>
                <label>Apellidos</label><br>
                <input type="text" required name="apellidos" value="<?php echo $alumno['apellidos']?>" maxlength="45">
                <br><br>
                <label>No de Lista</label><br>
                <input type="number" min="1" class="number" value="<?php echo $alumno['num_lista']?>" name="numlista">
                <br><br>
                <label>Sexo</label><br><input required type="radio" name="genero" <?php if($alumno['genero'] == 'M'){ echo "checked";} ?> value="M"> Masculino
                <input type="radio" name="genero" required value="F" <?php if($alumno['genero'] == 'F') { echo "checked";} ?>> Femenino
                <br><br>
                <label>Grado</label><br>
                <select name="grado" required>
                    <?php foreach ($grados as $grado):?>
                        <option value="<?php echo $grado['id'] ?>" <?php if($alumno['id_grado'] == $grado['id']) { echo "selected";} ?> ><?php echo $grado['nombre'] ?></option>
                    <?php endforeach;?>
                </select>
                <br><br>
                <label>Seccion</label><br>

                    <?php foreach ($secciones as $seccion):?>
                        <input type="radio" name="seccion" <?php if($alumno['id_seccion'] == $seccion['id']) { echo "checked";} ?> required value="<?php echo $seccion['id'] ?>">Seccion <?php echo $seccion['nombre'] ?>
                    <?php endforeach;?>

                <br><br>
                <button type="submit" name="modificar">Guardar Cambios</button> <a class="btn-link" href="listadoalumnos.view.php">Ver Listado</a>
                <br><br>
                <!--mostrando los mensajes que recibe a traves de los parametros en la url-->
                <?php
                if(isset($_GET['err']))
                    echo '<span class="error">Error al editar el registro</span>';
                if(isset($_GET['info']))
                    echo '<span class="success">Registro modificado correctamente!</span>';
                ?>

            </form>
        </div>
</div>

</div>


              <center><p><a href="https://www.gobiernoenlinea.gov.co/" target="_blank"><img style="margin-left: 0px;" src="img\gob.col.png" alt="Gobierno en línea" width="57" height="50"></a> <a href="http://www.mineducacion.gov.co/" target="_blank"><img src="img\mineducacion.png" alt="Secretaría de Educación Colombia" width="224
                " height="50"></a><a href="http://www.icfes.gov.co" target="_blank"><img src="img/icfes.png" alt="ICFES" width="156" height="50" /></a> <a href="http://www.seduca.gov.co/" target="_blank"><img src="img\seduca.png" alt="Secretaria de Educación Antioquia" width="116" height="50"></a> <a href="http://www.envigado.gov.co/" target="_blank"><img src="img\envigado.png" alt="Alcaldía de Envigado" width="116" height="50"></a> <a href="http://www.envigado.edu.co/" target="_blank"><img src="img\sumamos.png" alt="Secretaría de Educación de Envigado" width="224" height="50"></a> </p></div><a href="https://www.mintic.gov.co/" target="_blank"><img style="margin-left: 0px;" src="img\mintic.png" alt="Mintic" width="224" height="50"></a>
              <p style="font-size:10px;">Institución Educativa Gualandayes |
               Dirección: Carrera 25A No.41bsur SUR 25 |  Teléfono: 3102506874 | Envigado -
               Antioquia - Colombia <br></center>

              </div>
              <p><center>&copy Derechos reservados 2021</center></p>
                <p><center> Jose Leal&reg - Jorge Restrepo&reg</center></p>

</body>
</section>

</html>