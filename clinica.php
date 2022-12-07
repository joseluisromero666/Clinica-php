<!DOCTYPE html>
<html >
 
<head>
    <title>DB CL&IacuteNICA</title>
     <meta charset=?utf-8?/>    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="shortcut icon" href="//virtual.konradlorenz.edu.co/pluginfile.php/1/theme_school/favicon/1589877001/LOGO-VERTICAL-KONRAD-COLOR%20FAVICON.jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Estilos css-->
    <style type="text/css">
    	.col-sm-4{
    		margin: 5px;
    		max-width: 32%;
    		border-radius: 25px;
    		flex-grow: 0;
    		flex-shrink: 0;
    		flex-basis: auto;
    	}
        .button {
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            padding: 5px 11px;
            border: 1px solid #5b5c64;
            border-radius: 8px;
            background: #9496a3;
            background: -webkit-gradient(linear, left top, left bottom, from(#9496a3), to(#5b5c64));
            background: -moz-linear-gradient(top, #9496a3, #5b5c64);
            background: linear-gradient(to bottom, #9496a3, #5b5c64);
            -webkit-box-shadow: #898a96 0px 0px 40px 0px;
            -moz-box-shadow: #898a96 0px 0px 40px 0px;
            box-shadow: #898a96 0px 0px 40px 0px;
            text-shadow: #393a3f 1px 1px 1px;
            font: normal normal bold 13px comic sans ms;
            color: #ffffff;
            text-decoration: none;
        }

        .button:hover,
        .button:focus {
            border: 1px solid #72737d;
            background: #b2b4c4;
            background: -webkit-gradient(linear, left top, left bottom, from(#b2b4c4), to(#6d6e78));
            background: -moz-linear-gradient(top, #b2b4c4, #6d6e78);
            background: linear-gradient(to bottom, #b2b4c4, #6d6e78);
            color: #ffffff;
            text-decoration: none;
        }

        .button:active {
            background: #5b5c64;
            background: -webkit-gradient(linear, left top, left bottom, from(#5b5c64), to(#5b5c64));
            background: -moz-linear-gradient(top, #5b5c64, #5b5c64);
            background: linear-gradient(to bottom, #5b5c64, #5b5c64);
        }

        @media (min-width: 992px) {
            .modal-dialog {
                max-width: 93%;
            }
        }
        
        
        
    </style>
</head>

<body>	

    <!-- columnas -->
    <div class="container-fluid">
        <div id=xyz align="right"><img align="left" src="k1.png"> <br><a class="button" href="#" id="re" name="re" onclick="location.href='https://josebases1.webcindario.com/Parcial/clinica.php'">RECARGAR SISTEMA</a></div>

        <br><br><p></p><br>
        <center>
            <h1>Sistema de Consultas</h1>
            <br>
        </center>
        <div class="row">
            <!-- primera columna-->
            <div class="col-sm-4" style="background-color:lavender;">
                <center> <br>
                    <h4>Datos</h4> <br>
                </center>
                <!-- BOTENES PARA MOSTRAR LAS TABLAS -->
                 <center>
                <a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo1">PROGRAMACI&Oacute;N&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo7">M&EacuteDICO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo8">PACIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo2">CIRUG&IacuteA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo5"> MATERIALES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo6">MEDICAMENTOS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo9">SITIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo10">TIPO_CIRUG&IacuteA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo3">CIRUG&IacuteA_MATERIALES&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo4">CIRUG&IacuteA_MEDICAMENTOS</a> <br>
           </center> </div>
            <!-- SEGUNDA COLUMNA PROGRAMAR CITAS-->
            <div class="col-sm-4" style="background-color:lavenderblush;">
                <br>
                <center>
                    <h4>Programar Cirug&iacutea</h4> <br>
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <p>C&oacutedigo del Sitio:</p>
                        <input type="text" class="field" name="cod_sitio"> <br />
                        <br />
                        <p>Fecha de la Cirug&iacutea:</p>
                        <input type="text" class="field" name="fecha_cirugia"> <br />
                        <br />
                        <p>Hora de la Cirug&iacutea:</p>
                        <input type="text" class="field" name="hora_cirugia"> <br />
                        <br />
                        <p>C&oacutedigo de la Cirug&iacutea:</p>
                        <input type="text" class="field" name="cod_cirugia"> <br />
                        <br />
                        <p>C&oacutedigo del Paciente:</p>
                        <input type="text" class="field" name="cod_paciente"> <br />
                        <br />
                        <p>C&oacutedigo del M&eacutedico:</p>
                        <input type="text" class="field" name="cod_medico"> <br />
                        <br />
                        <p>Costo:</p>
                        $<input type="text" class="field" name="costo"> <br />
                        <br />
                        <p class="center-content">
                            <br><input class="button" type="submit" name="submit" value="Programar Cirugia" href="#"></p>
                        <!-- RECIBIR LOS DATOS Y MANDARLOS AL METODO -->
                        <?php
                        if (isset($_POST['submit'])) {

                            $conexion = connectDB();
                            insert(
                                $conexion,
                                $_POST['cod_sitio'],
                                $_POST['fecha_cirugia'],
                                $_POST['hora_cirugia'],
                                $_POST['cod_cirugia'],
                                $_POST['cod_paciente'],
                                $_POST['cod_medico'],
                                $_POST['costo']
                            );
                        }
                        ?>
                    </form>
                </center>
            </div>
            <!-- TERCERA COLUMNA BOTONES CONSULTAS -->
            <div class="col-sm-4" style="background-color:lavender;">
                <br>
                <center>
                    <h4>Consultas</h4>
                  
                    <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo12">DINERO_USADO_POR_PACIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                    <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo13">CIRUG&IacuteAS_TOTALES_POR_PACIENTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                    <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo14">CIRUG&IacuteAS_TOTALES_POR_M&EacuteDICO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                    <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo15">CIRUG&IacuteAS_TOTALES_POR_TIPO_CIRUG&IacuteA</a> <br>
                    <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo16">TOTAL_MEDICAMENTOS_POR_CIRUG&IacuteA&nbsp;&nbsp;</a> <br>
                    <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo17">TOTAL_MATERIALES_POR_CIRUG&IacuteA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a> <br>
                    <br><a class="button" href="#" data-toggle="modal" data-target="#mimodalejemplo11">DINERO_GANADO_EN_TOTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a><br>
                </center>
            </div>
        </div><br>
        <!-- php conetar db -->
        <?php
        function connectDB()
        {
            $server = "mysql.webcindario.com";
            $user = "josebases1";
            $pass = "NoMeSeRajar666";
            $bd = "josebases1";
            $conexion = mysqli_connect($server, $user, $pass, $bd)
                or die("Ha sucedido un error inexperado en la conexion de la base de datos");
            return $conexion;
        }
        function disconnectDB($conexion)
        {
            $close = mysqli_close($conexion)
                or die("Ha sucedido un error inexperado en la desconexion de la base de datos");
            return $close;
        }
        function insert($conexion, $cod_sitio, $fecha_cirugia, $hora_cirugia, $cod_cirugia, $cod_paciente, $cod_medico, $costo)
        {
            $sql2 = "INSERT INTO `PROGRAMACION`(`cod_sitio`, `fecha_cirugia`, `hora_cirugia`, `cod_cirugia`, `cod_paciente`, `cod_medico`, `costo`) 
                                VALUES ($cod_sitio,'$fecha_cirugia','$hora_cirugia',$cod_cirugia,$cod_paciente,$cod_medico,$costo)";
            if (mysqli_query($conexion, $sql2)) {

                echo '<script language="javascript">alert("New record created successfully");</script>';
            } else {
                echo '<script language="javascript">alert("Error: Failed to Program");</script>';
            }
        }
        ?>

        <!-- PRIMER MODAL PROGRAMACION-->
        <div class="modal fade" id="mimodalejemplo1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         
            <div class="modal-dialog" role="document" id="mimodalejemplo1">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel" >PROGRAMACI&OacuteN</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">COD_SITIO </th>
                                        <th scope="col">FECHA_CIRUG&IacuteA</th>
                                        <th scope="col">HORA_CIRUG&IacuteA</th>
                                        <th scope="col">COD_CIRUG&IacuteA</th>
                                        <th scope="col">COD_PACIENTE</th>
                                        <th scope="col">COD_M&EacuteDICO</th>
                                        <th scope="col">COSTO</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT * FROM PROGRAMACION";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["cod_sitio"];
                                        $var2 = $row["fecha_cirugia"];
                                        $var3 = $row["hora_cirugia"];
                                        $var4 = $row["cod_cirugia"];
                                        $var5 = $row["cod_paciente"];
                                        $var6 = $row["cod_medico"];
                                        $var7 = $row["costo"];
                                        echo "		
                                                <tr>
                                            <td>$var</td>
                                            <td>$var2</td>
                                            <td>$var3</td>
                                            <td>$var4</td>
                                            <td>$var5</td>
                                            <td>$var6</td>
                                            <td>$ $var7</td>
                                              </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- SEGUNDO MODAL CIRUGIA-->
        <div class="modal fade" id="mimodalejemplo2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">CIRUG&IacuteA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">COD_CIRUG&IacuteA</th>
                                        <th scope="col">NOM_CIRUG&IacuteA</th>
                                        <th scope="col">COD_TIPO_CIRUG&IacuteA</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT * FROM CIRUGIA";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["cod_cirugia"];
                                        $var2 = $row["nom_cirugia"];
                                        $var3 = $row["cod_t_cirugia"];
                                        echo "		
                                                <tr>
                                            <td>$var</td><td>$var2</td><td>$var3</td>
                                                        </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- TERCERA MODAL CIRUGIA_MATERIALES-->
        <div class="modal fade" id="mimodalejemplo3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">CIRUG&IacuteA_MATERIALES</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">COD_TIPO_CIRUG&IacuteA</th>
                                        <th scope="col">COD_MATERIALES</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT * FROM CIRUGIA_MATERIALES";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["cod_t_cirugia"];
                                        $var2 = $row["cod_materiales"];
                                        echo "		
                                                <tr>
                                            <td>$var</td>
                                            <td>$var2</td>
                                              </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- CUARTA MODAL CIRUGIA_MEDICAMENTOS-->
        <div class="modal fade" id="mimodalejemplo4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">CIRUG&IacuteA_MEDICAMENTOS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">COD_TIPO_CIRUG&IacuteA</th>
                                        <th scope="col">COD_MEDICAMENTOS</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT * FROM CIRUGIA_MEDICAMENTOS";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["cod_t_cirugia"];
                                        $var2 = $row["cod_medicamentos"];
                                        echo "		
                                                <tr>
                                            <td>$var</td>
                                            <td>$var2</td>
                                              </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- QUINTA MODAL MATERIALES-->
        <div class="modal fade" id="mimodalejemplo5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">MATERIALES</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">COD_MATERIAL</th>
                                        <th scope="col">NOM_MATERIAL</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT * FROM MATERIALES";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["cod_material"];
                                        $var2 = $row["nom_material"];
                                        echo "		
                                                <tr>
                                            <td>$var</td>
                                            <td>$var2</td>
                                              </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEXTA MODAL MEDICAMENTOS-->
        <div class="modal fade" id="mimodalejemplo6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">MEDICAMENTOS</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">COD_MEDICAMENTO</th>
                                        <th scope="col">NOM_MEDICAMENTO</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT * FROM MEDICAMENTOS";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["cod_medicamento"];
                                        $var2 = $row["nom_medicamento"];
                                        echo "		
                                                <tr>
                                            <td>$var</td>
                                            <td>$var2</td>
                                              </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEPTIMO MODAL MEDICO-->
        <div class="modal fade" id="mimodalejemplo7" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">M&EacuteDICO</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">COD_M&EacuteDICO</th>
                                        <th scope="col">NOM_M&EacuteDICO</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT * FROM MEDICO";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["cod_medico"];
                                        $var2 = $row["nom_medico"];
                                        echo "		
                                                <tr>
                                            <td>$var</td>
                                            <td>$var2</td>
                                              </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- OCTAVA MODAL PACIENTE-->
        <div class="modal fade" id="mimodalejemplo8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">PACIENTE</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">COD_PACIENTE</th>
                                        <th scope="col">NOM_PACIENTE</th>
                                        <th scope="col">FECH_NACIMIENTO</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT * FROM PACIENTE";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["cod_paciente"];
                                        $var2 = $row["nom_paciente"];
                                        $var3 = $row["fech_nacimiento"];
                                        echo "		
                                                <tr>
                                            <td>$var</td>
                                            <td>$var2</td>
                                            <td>$var3</td>
                                              </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- NOVENA MODAL SITIO-->
        <div class="modal fade" id="mimodalejemplo9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">SITIO</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">COD_SITIO</th>
                                        <th scope="col">NOM_SITIO</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT * FROM SITIO";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["cod_sitio"];
                                        $var2 = $row["nom_sitio"];
                                        echo "		
                                                <tr>
                                            <td>$var</td>
                                            <td>$var2</td>
                                              </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- DECIMA MODAL TIPO_CIRUGIA-->
        <div class="modal fade" id="mimodalejemplo10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">TIPO_CIRUG&IacuteA</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">COD_TIPO_CIRUG&IacuteA</th>
                                        <th scope="col">NOM_TIPO_CIRUG&IacuteA</th>
                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT * FROM TIPO_CIRUGIA";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["cod_t_cirugia"];
                                        $var2 = $row["nom_t_cirugia"];
                                        echo "		
                                                <tr>
                                            <td>$var</td>
                                            <td>$var2</td>
                                              </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

         <!-- CONSULTA 1 TOTAL DE GANANCIAS-->
         <div class="modal fade" id="mimodalejemplo11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">DINERO_TOTAL</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                    </div>
                    <div class="modal-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                    <tr>
                                        <th scope="col">DINERO_TOTAL</th>

                                    </tr>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $conexion = connectDB();
                                    mysqli_set_charset($conexion, "utf8");
                                    $sql = "SELECT sum( `costo` ) AS DINERO_TOTAL
                                    FROM `PROGRAMACION`";
                                    if (!$result = mysqli_query($conexion, $sql)) die();
                                    disconnectDB($conexion);
                                    while ($row = mysqli_fetch_array($result)) {
                                        $var = $row["DINERO_TOTAL"];
                                        echo "		
                                                <tr>
                                            <td>$ $var</td>
                                                        </tr>";
                                    } ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
          <!-- CONSULTA 2 TOTAL DE DINERO POR PACIENTE-->
          <div class="modal fade" id="mimodalejemplo12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">   
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="myModalLabel">DINERO GANADO POR PACIENTE</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                 </div>
                 <div class="modal-body">
                     <div class="table-responsive">
                         <table class="table">
                             <thead class="thead-dark">
                                 <tr>
                                 <tr>
                                     <th scope="col">PACIENTE</th>
                                     <th scope="col">DINERO_INVERTIDO</th>
                                 </tr>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                 $conexion = connectDB();
                                 mysqli_set_charset($conexion, "utf8");
                                 $sql = "SELECT nom_paciente AS NOMBRE_PACIENTE, sum( costo ) AS GANADO
                                 FROM PROGRAMACION, PACIENTE
                                 WHERE PACIENTE.cod_paciente = PROGRAMACION.cod_paciente
                                 GROUP BY nom_paciente";
                                 if (!$result = mysqli_query($conexion, $sql)) die();
                                 disconnectDB($conexion);
                                 while ($row = mysqli_fetch_array($result)) {
                                    $var = $row["NOMBRE_PACIENTE"];
                                     $var2 = $row["GANADO"];

                                     echo "		
                                             <tr>
                                             <td>$var</td> <td>$ $var2</td>
                                             </tr>";
                                 } ?>
                             </tbody>
                         </table>
                     </div>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>
             </div>
         </div>
     </div>

      <!-- CONSULTA 3 TOTAL CIRUGIAS_TOTALES-->
      <div class="modal fade" id="mimodalejemplo13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">   
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="myModalLabel">CIRUG&IacuteAS_TOTALES_POR_PACIENTE</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                 </div>
                 <div class="modal-body">
                     <div class="table-responsive">
                         <table class="table">
                             <thead class="thead-dark">
                                 <tr>
                                 <tr>
                                     <th scope="col">PACIENTE</th>
                                     <th scope="col">CIRUG&IacuteAS_TOTALES</th>
                                 </tr>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                 $conexion = connectDB();
                                 mysqli_set_charset($conexion, "utf8");
                                 $sql = "SELECT nom_paciente AS PACIENTE, count( PROGRAMACION.cod_cirugia ) AS CIRUGIAS_TOTALES
                                 FROM PROGRAMACION, PACIENTE
                                 WHERE PACIENTE.cod_paciente = PROGRAMACION.cod_paciente
                                 GROUP BY nom_paciente";
                                 if (!$result = mysqli_query($conexion, $sql)) die();
                                 disconnectDB($conexion);
                                 while ($row = mysqli_fetch_array($result)) {
                                    $var = $row["PACIENTE"];
                                     $var2 = $row["CIRUGIAS_TOTALES"];

                                     echo "		
                                             <tr>
                                             <td>$var</td> <td>$var2</td>
                                             </tr>";
                                 } ?>
                             </tbody>
                         </table>
                     </div>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>
             </div>
         </div>
     </div>
</body>

      <!-- CONSULTA 4 CIRUGIAS_TOTALES POR MEDICO-->
      <div class="modal fade" id="mimodalejemplo14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">   
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="myModalLabel">CIRUG&IacuteAS_TOTALES_POR_M&EacuteDICO</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                 </div>
                 <div class="modal-body">
                     <div class="table-responsive">
                         <table class="table">
                             <thead class="thead-dark">
                                 <tr>
                                 <tr>
                                     <th scope="col">M&EacuteDICO</th>
                                     <th scope="col">CIRUG&IacuteAS_TOTALES</th>
                                 </tr>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                 $conexion = connectDB();
                                 mysqli_set_charset($conexion, "utf8");
                                 $sql = "SELECT nom_medico As MEDICO, count( CIRUGIA.cod_cirugia ) AS CIRUGIAS_TOTALES
                                 FROM MEDICO, PROGRAMACION, CIRUGIA
                                 WHERE MEDICO.cod_medico = PROGRAMACION.cod_medico
                                 AND PROGRAMACION.cod_cirugia = CIRUGIA.cod_cirugia
                                 GROUP BY nom_medico";
                                 if (!$result = mysqli_query($conexion, $sql)) die();
                                 disconnectDB($conexion);
                                 while ($row = mysqli_fetch_array($result)) {
                                    $var = $row["MEDICO"];
                                     $var2 = $row["CIRUGIAS_TOTALES"];

                                     echo "		
                                             <tr>
                                             <td>$var</td> <td>$var2</td>
                                             </tr>";
                                 } ?>
                             </tbody>
                         </table>
                     </div>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>
             </div>
         </div>
     </div>
     <!-- CONSULTA 5 CIRUGIAS_TOTALES_POR_TIPO_CIRUGIA-->
     <div class="modal fade" id="mimodalejemplo15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">   
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="myModalLabel">CIRUG&IacuteAS_TOTALES_POR_TIPO CIRUG&IacuteA</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                 </div>
                 <div class="modal-body">
                     <div class="table-responsive">
                         <table class="table">
                             <thead class="thead-dark">
                                 <tr>
                                 <tr>
                                     <th scope="col">TIPO_CIRUG&IacuteA</th>
                                     <th scope="col">CIRUG&IacuteAS_TOTALES</th>
                                 </tr>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                 $conexion = connectDB();
                                 mysqli_set_charset($conexion, "utf8");
                                 $sql = "SELECT nom_t_cirugia AS TIPO_CIRUGIA, count( CIRUGIA.cod_cirugia ) AS CIRUGIAS_TOTALES
                                 FROM CIRUGIA,TIPO_CIRUGIA
                                 WHERE CIRUGIA.cod_t_cirugia=TIPO_CIRUGIA.cod_t_cirugia
                                 GROUP BY nom_t_cirugia";
                                 if (!$result = mysqli_query($conexion, $sql)) die();
                                 disconnectDB($conexion);
                                 while ($row = mysqli_fetch_array($result)) {
                                    $var = $row["TIPO_CIRUGIA"];
                                     $var2 = $row["CIRUGIAS_TOTALES"];

                                     echo "		
                                             <tr>
                                             <td>$var</td> <td>$var2</td>
                                             </tr>";
                                 } ?>
                             </tbody>
                         </table>
                     </div>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>
             </div>
         </div>
     </div>
     <!-- CONSULTA 6 MEDICAMENTOS POR CIRUGIA-->
     <div class="modal fade" id="mimodalejemplo16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">   
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="myModalLabel">TOTAL_MEDICAMENTOS_POR_CIRUG&IacuteA</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                 </div>
                 <div class="modal-body">
                     <div class="table-responsive">
                         <table class="table">
                             <thead class="thead-dark">
                                 <tr>
                                 <tr>
                                     <th scope="col">CIRUG&IacuteA</th>
                                     <th scope="col">TOTAL_MEDICAMENTOS</th>
  
                                 </tr>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                 $conexion = connectDB();
                                 mysqli_set_charset($conexion, "utf8");
                                 $sql = "SELECT nom_cirugia AS CIRUGIA, count( MEDICAMENTOS.cod_medicamento ) AS TOTAL_MEDICAMENTOS
                                 FROM CIRUGIA, TIPO_CIRUGIA, CIRUGIA_MEDICAMENTOS, MEDICAMENTOS
                                 WHERE CIRUGIA.cod_t_cirugia = TIPO_CIRUGIA.cod_t_cirugia
                                 AND TIPO_CIRUGIA.cod_t_cirugia = CIRUGIA_MEDICAMENTOS.cod_t_cirugia
                                 AND CIRUGIA_MEDICAMENTOS.cod_t_cirugia = MEDICAMENTOS.cod_medicamento
                                 GROUP BY nom_cirugia";
                                 if (!$result = mysqli_query($conexion, $sql)) die();
                                 disconnectDB($conexion);
                                 while ($row = mysqli_fetch_array($result)) {
                                    $var = $row["CIRUGIA"];
                                     $var2 = $row["TOTAL_MEDICAMENTOS"];

                                     echo "		
                                             <tr>
                                             <td>$var</td> <td>$var2</td>
                                             </tr>";
                                 } ?>
                             </tbody>
                         </table>
                     </div>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>
             </div>
         </div>
     </div>
      <!-- CONSULTA 7  MATERIALES POR CIRUGIA-->
      <div class="modal fade" id="mimodalejemplo17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">   
         <div class="modal-dialog" role="document">
             <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title" id="myModalLabel">TOTAL_MATERIALES_POR_CIRUG&IacuteA</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                 </div>
                 <div class="modal-body">
                     <div class="table-responsive">
                         <table class="table">
                             <thead class="thead-dark">
                                 <tr>
                                 <tr>
                                     <th scope="col">CIRUG&IacuteA</th>
                                     <th scope="col">TOTAL_MATERIALES</th>
                                 </tr>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php
                                 $conexion = connectDB();
                                 mysqli_set_charset($conexion, "utf8");
                                 $sql = "SELECT nom_cirugia AS CIRUGIA, count( MATERIALES.cod_material ) AS TOTAL_MATERIALES
                                 FROM CIRUGIA, TIPO_CIRUGIA, CIRUGIA_MATERIALES, MATERIALES
                                 WHERE CIRUGIA.cod_t_cirugia = TIPO_CIRUGIA.cod_t_cirugia
                                 AND TIPO_CIRUGIA.cod_t_cirugia = CIRUGIA_MATERIALES.cod_t_cirugia
                                 AND CIRUGIA_MATERIALES.cod_materiales = MATERIALES.cod_material
                                 GROUP BY nom_cirugia";
                                 if (!$result = mysqli_query($conexion, $sql)) die();
                                 disconnectDB($conexion);
                                 while ($row = mysqli_fetch_array($result)) {
                                    $var = $row["CIRUGIA"];
                                     $var3 = $row["TOTAL_MATERIALES"];
                                     echo "		
                                             <tr>
                                             <td>$var</td><td>$var3</td>
                                             </tr>";
                                 } ?>
                             </tbody>
                         </table>
                     </div>

                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                 </div>
             </div>
         </div>
     </div>
     <p align="center">&copy; Jos&eacute Luis Romero & Juan Adrian Rodr&iacuteguez (2020)</p>
</body>

</html>