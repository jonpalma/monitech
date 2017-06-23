<?php $page = 'graficas';?>
<?php include('header.php');?>
    <script>
        $( function() {
            var dateFormat = "mm/dd/yy",
                from = $( "#from" )
                    .datepicker({
                        defaultDate: "+1w",
                        changeMonth: true,
                        numberOfMonths: 1
                    })
                    .on( "change", function() {
                        to.datepicker( "option", "minDate", getDate( this ) );
                    }),
                to = $( "#to" ).datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1
                })
                    .on( "change", function() {
                        from.datepicker( "option", "maxDate", getDate( this ) );
                    });

            function getDate( element ) {
                var date;
                try {
                    date = $.datepicker.parseDate( dateFormat, element.value );
                } catch( error ) {
                    date = null;
                }

                return date;
            }
        } );
    </script>
    <div class="wrapper graficas" id="graficas">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* MENU-SUP */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="menu-sup" id="menu-sup">
            <audio class="alarma" src="media/beep.mp3" loop="true" autoplay="true"></audio>
            <div class="row no-margin">
                <a class="alertas" href="#"><i class="fa fa-circle notificacion" aria-hidden="true"></i><i class="fa fa-bell" aria-hidden="true"></i></a>
                <a class="usuario" href="#"><i class="fa fa-circle notificacion" aria-hidden="true"></i><i class="fa fa-user" aria-hidden="true"></i></a>
                <a class="opciones" href="#"><i class="fa fa-circle notificacion" aria-hidden="true"></i><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* CONTENT */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div class="content" id="content">
            <!-- ESTADO -->
            <div class="row no-margin" id="estado">
                <div class="estado-container">
                    <div class="lugar">
                        <div class="vertical-align">
                            <p>
                                <span class="bold">PUE</span> Guadalajara<br>
                                Esta semana
                            </p>
                        </div>
                    </div>
                    <div class="grafica-estado" data-pct="1.65">
                        <svg class="svg" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <circle r="40" cx="50" cy="50" fill="transparent" stroke-dasharray="314" stroke-dashoffset="100"></circle>
                            <circle class="bar" r="40" cx="50" cy="50" fill="transparent" stroke-dasharray="314" stroke-dashoffset="0"></circle>
                        </svg>
                    </div>
                </div>
                <div class="estado-container">
                    <div class="lugar">
                        <div class="vertical-align">
                            <p>
                                <span class="bold">PUE</span> Chihuahua<br>
                                Esta semana
                            </p>
                        </div>
                    </div>
                    <div class="grafica-estado" data-pct="1.50">
                        <svg class="svg" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <circle r="40" cx="50" cy="50" fill="transparent" stroke-dasharray="314" stroke-dashoffset="0"></circle>
                            <circle class="bar" r="40" cx="50" cy="50" fill="transparent" stroke-dasharray="314" stroke-dashoffset="0"></circle>
                        </svg>
                    </div>
                </div>
                <div class="estado-container">
                    <div class="lugar">
                        <div class="vertical-align">
                            <p>
                                <span class="bold">PUE</span> Cd. México<br>
                                Esta semana
                            </p>
                        </div>
                    </div>
                    <div class="grafica-estado" data-pct="1.80">
                        <svg class="svg" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <circle r="40" cx="50" cy="50" fill="transparent" stroke-dasharray="314" stroke-dashoffset="0"></circle>
                            <circle class="bar" r="40" cx="50" cy="50" fill="transparent" stroke-dasharray="314" stroke-dashoffset="0"></circle>
                        </svg>
                    </div>
                </div>
                <div class="estado-container">
                    <div class="lugar">
                        <div class="vertical-align">
                            <p>
                                <span class="bold">PUE</span> Monterrey<br>
                                Esta semana
                            </p>
                        </div>
                    </div>
                    <div class="grafica-estado" data-pct="1.73">
                        <svg class="svg" viewPort="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <circle r="40" cx="50" cy="50" fill="transparent" stroke-dasharray="314" stroke-dashoffset="0"></circle>
                            <circle class="bar" r="40" cx="50" cy="50" fill="transparent" stroke-dasharray="314" stroke-dashoffset="0"></circle>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- GRAFICA-UNICA -->
            <div class="row no-margin" id="grafica-unica">
                <!-- GRAFICA -->
                <div class="grafica" id="grafica">
                    <div class="title-section">
                        <div class="vertical-align">
                            <h3>Gráfica</h3>
                        </div>
                    </div>
                    <div class="content">
                        <div class="demo-container">
                            <div id="chart-demo">
                                <div id="chart" class="temp"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <!-- CANALES-GRAFICA -->
            <div class="row no-margin" id="canales-grafica">
                <!-- CANALES -->
                <div class="canales" id="canales">
                    <div class="title-section">
                        <div class="vertical-align">
                            <h3>Canales</h3>
                        </div>
                    </div>
                    <div class="content">
                        <div class="graficar-opciones">
                            <div class="servidor-dispositivo">
                                <div class="vertical-align">
                                    <label for="slct-servidor">Servidor
                                        <select name="slct-servidor" id="slct-servidor">
                                            <option value="">ITESM Chihuahua</option>
                                            <option value="">ITESM Monterrey</option>
                                            <option value="">CRIT Guadalajara</option>
                                            <option value="">CRIT Cd. México</option>
                                            <option value="">L'ORÉAL San Luis Potosi</option>
                                        </select>
                                    </label>
                                    <label for="slct-dispositivo">Dispositivo
                                        <select name="slct-dispositivo" id="slct-dispositivo">
                                            <option value="">Planta Emergencia</option>
                                            <option value="">UPS</option>
                                            <option value="">Planta DC</option>
                                            <option value="">PAC 2</option>
                                            <option value="">Medidor</option>
                                            <option value="">Inversor</option>
                                            <option value="">Baterias</option>
                                            <option value="">Temperatura</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="fecha vertical-align">
                                <div class="vertical-align">
                                    <label for="from">De</label>
                                    <input type="text" id="from" name="from">
                                    <label for="to">a</label>
                                    <input type="text" id="to" name="to">
                                </div>
                            </div>
                        </div>
                        <div class="title-fixed">
                            <div class="canal">
                                <p>
                                    CANAL
                                </p>
                            </div>
                            <div class="unidad">
                                <p>
                                    UNIDAD
                                </p>
                            </div>
                            <div class="options">
                                <p>
                                    <a class="bttn" href="" name="bttnGraficar" id="bttnGraficar">
                                        Graficar
                                    </a>
                                </p>
                            </div>
                        </div>
                        <div class="data">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Planta Emergencia.csv", "r")) !== FALSE)
                                {
                                    while(($datos = fgetcsv($doc, 1000, ",")) !== FALSE)
                                    {
                                        $size = count($datos);
                                        for ($counter = 0; $counter < $size; $counter++)
                                        {
                                            if(!empty(trim($datos[0])))
                                            {
                                                switch ($counter) {
                                                    case 0:
                                                        ?>
                                                        <li>
                                                        <div class="row no-margin">
                                                        <div class="canal">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 1:
                                                        break;
                                                    case 2:
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <div class="options">
                                                            <input type="checkbox" name="check-<?php echo $counter;?>" id="check-<?php echo $counter;?>"
                                                        </div>
                                                        </div>
                                                        </li>
                                                        <?php
                                                        break;
                                                }
                                            }
                                        }
                                    }
                                    fclose($doc);
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

    <!--/* PIE */-->

    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php include('footer.php');?>