<?php
require 'functions.php';

$permisos = ['Administrador','Profesor'];
permisos($permisos);
//consulta los alumnos para el listaddo de alumnos
$alumnos = $conn->prepare("select a.id, a.num_lista, a.nombres, a.apellidos, a.genero, b.nombre as grado, c.nombre as seccion from alumnos as a inner join grados as b on a.id_grado = b.id inner join secciones as c on a.id_seccion = c.id order by a.apellidos");
$alumnos->execute();
$alumnos = $alumnos->fetchAll();
?>
<!DOCTYPE html>
<html>

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
<head>
<title>Listado de Alumnos | SERVICIOS INFORMATICOS</title>
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
        <li><a href="alumnos.view.php">Matricula Alumno</a> </li>
        <li class="active"><a href="listadoalumnos.view.php">Listado de Alumnos</a> </li>
        <li><a href="notas.view.php">Registro de Notas</a> </li>
        <li><a href="listadonotas.view.php">Consulta de Notas</a> </li>
        <li class="right"><a href="logout.php">Salir</a> </li>

    </ul>
</nav>

<div class="body">
    <div class="panel">
            <h4>Listado de Alumnos</h4>
            <table class="table" cellspacing="0" cellpadding="0">
                <tr>
                    <th>No de<br>lista</th><th>Apellidos</th><th>Nombres</th><th>Genero</th><th>Grado</th><th>Seccion</th>
                    <th>Editar</th><th>Eliminar</th>
                </tr>
                <?php foreach ($alumnos as $alumno) :?>
                <tr>
                    <td align="center"><?php echo $alumno['num_lista'] ?></td><td><?php echo $alumno['apellidos'] ?></td>
                    <td><?php echo $alumno['nombres'] ?></td><td align="center"><?php echo $alumno['genero'] ?></td>
                    <td align="center"><?php echo $alumno['grado'] ?></td><td align="center"><?php echo $alumno['seccion'] ?></td>
                    <td><a href="alumnoedit.view.php?id=<?php echo $alumno['id'] ?>">Editar</a> </td>
                    <td><a href="alumnodelete.php?id=<?php echo $alumno['id'] ?>">Eliminar</a> </td>
                </tr>
                <?php endforeach;?>
            </table>
                <br><br>

                <a class="btn-link" href="alumnos.view.php">Agregar Alumno</a>
                <br><br>
                <!--mostrando los mensajes que recibe a traves de los parametros en la url-->
                <?php
                if(isset($_GET['err']))
                    echo '<span class="error">Error al almacenar el registro</span>';
                if(isset($_GET['info']))
                    echo '<span class="success">Registro almacenado correctamente!</span>';
                ?>


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