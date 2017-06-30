<?php $page = 'reportes'; ?>
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
    <div class="wrapper reportes" id="reportes">
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* MENU-SUP */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <?php include('menu.php');?>
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
                                <span class="bold">PUE</span> CRIT Guadalajara<br>
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
                                <span class="bold">PUE</span> ITESM Chihuahua<br>
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
                                <span class="bold">PUE</span> CRIT Cd. México<br>
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
                                <span class="bold">PUE</span> ITESM Monterrey<br>
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
            <!-- REPORTES -->
            <div class="row no-margin" id="reportes">
                <!-- SERVIDORES -->
                <div class="servidores" id="servidores">
                    <div class="title-section">
                        <div class="vertical-align">
                            <h3>Reportes</h3>
                        </div>
                    </div>
                    <div class="content">
                        <div class="reporte-opciones">
                            <div class="servidor-dispositivo">
                                <div class="vertical-align">
                                    <label for="slct-servidor">Servidor
                                        <select name="slct-servidor" id="slct-servidor">
                                            <option value="1">ITESM Chihuahua</option>
                                            <option value="1">ITESM Monterrey</option>
                                            <option value="1">CRIT Guadalajara</option>
                                            <option value="1">CRIT Cd. México</option>
                                            <option value="1">L'ORÉAL San Luis Potosi</option>
                                        </select>
                                    </label>
                                    <label for="slct-dispositivo">Dispositivo
                                        <select name="slct-dispositivo" id="slct-dispositivo">
                                            <option value="1">Planta Emergencia</option>
                                            <option value="2">UPS</option>
                                            <option value="3">Planta DC</option>
                                            <option value="4">PAC 2</option>
                                            <option value="5">Medidor</option>
                                            <option value="6">Inversor</option>
                                            <option value="7">Baterias</option>
                                            <option value="8">Temperatura</option>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="fecha">
                                <div class="col-xs-8 vertical-align">
                                    <label for="from">De</label>
                                    <input type="text" id="from" name="from">
                                    <label for="to">a</label>
                                    <input type="text" id="to" name="to">
                                </div>
                                <div class="col-xs-4 vertical-align">
                                    <a class="bttn bttn-generar-reporte" name="bttnReporte" id="bttnReporte" data-trgt="#tab-0-0">
                                        Generar Reporte
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="ver-reporte content">
                            <div class="title-fixed">
                                <div class="row no-margin cabezal">
                                    <div class="servidor">
                                        <p>
                                            SERVIDOR: Pruebas
                                        </p>
                                    </div>
                                    <div class="dispositivo">
                                        <p>
                                            DISPOSITIVO: TUXTLA MOD 1 9390 1630
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-0-0">
                                    <ul>
                                        <li>
                                            <div class="row no-margin">
                                                <p>
                                                    CANALES:
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-1-1">
                                    <ul>
                                        <li>
                                            <div class="row no-margin">
                                                <p>
                                                    CANALES:
                                                </p>
                                            </div>
                                        </li>
                                        <?php
                                        if(($doc = fopen("archivos/Planta Emergencia Rep.csv", "r")) !== FALSE)
                                        {
                                            $mainCounter = 0;
                                            while(($datos = fgetcsv($doc, 1000, ",")) !== FALSE)
                                            {
                                                $size = count($datos);
                                                for ($counter = 0; $counter < $size; $counter++)
                                                {
                                                    if(!empty(trim($datos[0])))
                                                    {
                                                        switch ($mainCounter)
                                                        {
                                                            case 0:
                                                                ?>
                                                                <li class="canal">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 1:
                                                                ?>
                                                                <li class="fecha-inicio">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 2:
                                                                ?>
                                                                <li class="fecha-fin">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                        }

                                                        if($mainCounter >= 3)
                                                        {
                                                            $mainCounter = 0;
                                                        }
                                                    }
                                                }
                                            }
                                            fclose($doc);
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-1-2">
                                    <ul>
                                        <li>
                                            <div class="row no-margin">
                                                <p>
                                                    CANALES:
                                                </p>
                                            </div>
                                        </li>
                                        <?php
                                        if(($doc = fopen("archivos/UPS Rep.csv", "r")) !== FALSE)
                                        {
                                            $mainCounter = 0;
                                            while(($datos = fgetcsv($doc, 1000, ",")) !== FALSE)
                                            {
                                                $size = count($datos);
                                                for ($counter = 0; $counter < $size; $counter++)
                                                {
                                                    if(!empty(trim($datos[0])))
                                                    {
                                                        switch ($mainCounter)
                                                        {
                                                            case 0:
                                                                ?>
                                                                <li class="canal">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 1:
                                                                ?>
                                                                <li class="fecha-inicio">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 2:
                                                                ?>
                                                                <li class="fecha-fin">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                        }

                                                        if($mainCounter >= 3)
                                                        {
                                                            $mainCounter = 0;
                                                        }
                                                    }
                                                }
                                            }
                                            fclose($doc);
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-1-3">
                                    <ul>
                                        <li>
                                            <div class="row no-margin">
                                                <p>
                                                    CANALES:
                                                </p>
                                            </div>
                                        </li>
                                        <?php
                                        if(($doc = fopen("archivos/Planta Rep.csv", "r")) !== FALSE)
                                        {
                                            $mainCounter = 0;
                                            while(($datos = fgetcsv($doc, 1000, ",")) !== FALSE)
                                            {
                                                $size = count($datos);
                                                for ($counter = 0; $counter < $size; $counter++)
                                                {
                                                    if(!empty(trim($datos[0])))
                                                    {
                                                        switch ($mainCounter)
                                                        {
                                                            case 0:
                                                                ?>
                                                                <li class="canal">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 1:
                                                                ?>
                                                                <li class="fecha-inicio">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 2:
                                                                ?>
                                                                <li class="fecha-fin">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                        }

                                                        if($mainCounter >= 3)
                                                        {
                                                            $mainCounter = 0;
                                                        }
                                                    }
                                                }
                                            }
                                            fclose($doc);
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-1-4">
                                    <ul>
                                        <li>
                                            <div class="row no-margin">
                                                <p>
                                                    CANALES:
                                                </p>
                                            </div>
                                        </li>
                                        <?php
                                        if(($doc = fopen("archivos/PAC Rep.csv", "r")) !== FALSE)
                                        {
                                            $mainCounter = 0;
                                            while(($datos = fgetcsv($doc, 1000, ",")) !== FALSE)
                                            {
                                                $size = count($datos);
                                                for ($counter = 0; $counter < $size; $counter++)
                                                {
                                                    if(!empty(trim($datos[0])))
                                                    {
                                                        switch ($mainCounter)
                                                        {
                                                            case 0:
                                                                ?>
                                                                <li class="canal">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 1:
                                                                ?>
                                                                <li class="fecha-inicio">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 2:
                                                                ?>
                                                                <li class="fecha-fin">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                        }

                                                        if($mainCounter >= 3)
                                                        {
                                                            $mainCounter = 0;
                                                        }
                                                    }
                                                }
                                            }
                                            fclose($doc);
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-1-5">
                                    <ul>
                                        <li>
                                            <div class="row no-margin">
                                                <p>
                                                    CANALES:
                                                </p>
                                            </div>
                                        </li>
                                        <?php
                                        if(($doc = fopen("archivos/Medidor Rep.csv", "r")) !== FALSE)
                                        {
                                            $mainCounter = 0;
                                            while(($datos = fgetcsv($doc, 1000, ",")) !== FALSE)
                                            {
                                                $size = count($datos);
                                                for ($counter = 0; $counter < $size; $counter++)
                                                {
                                                    if(!empty(trim($datos[0])))
                                                    {
                                                        switch ($mainCounter)
                                                        {
                                                            case 0:
                                                                ?>
                                                                <li class="canal">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 1:
                                                                ?>
                                                                <li class="fecha-inicio">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 2:
                                                                ?>
                                                                <li class="fecha-fin">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                        }

                                                        if($mainCounter >= 3)
                                                        {
                                                            $mainCounter = 0;
                                                        }
                                                    }
                                                }
                                            }
                                            fclose($doc);
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-1-6">
                                    <ul>
                                        <li>
                                            <div class="row no-margin">
                                                <p>
                                                    CANALES:
                                                </p>
                                            </div>
                                        </li>
                                        <?php
                                        if(($doc = fopen("archivos/Inversor Rep.csv", "r")) !== FALSE)
                                        {
                                            $mainCounter = 0;
                                            while(($datos = fgetcsv($doc, 1000, ",")) !== FALSE)
                                            {
                                                $size = count($datos);
                                                for ($counter = 0; $counter < $size; $counter++)
                                                {
                                                    if(!empty(trim($datos[0])))
                                                    {
                                                        switch ($mainCounter)
                                                        {
                                                            case 0:
                                                                ?>
                                                                <li class="canal">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 1:
                                                                ?>
                                                                <li class="fecha-inicio">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 2:
                                                                ?>
                                                                <li class="fecha-fin">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                        }

                                                        if($mainCounter >= 3)
                                                        {
                                                            $mainCounter = 0;
                                                        }
                                                    }
                                                }
                                            }
                                            fclose($doc);
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-1-7">
                                    <ul>
                                        <li>
                                            <div class="row no-margin">
                                                <p>
                                                    CANALES:
                                                </p>
                                            </div>
                                        </li>
                                        <?php
                                        if(($doc = fopen("archivos/Baterias Rep.csv", "r")) !== FALSE)
                                        {
                                            $mainCounter = 0;
                                            while(($datos = fgetcsv($doc, 1000, ",")) !== FALSE)
                                            {
                                                $size = count($datos);
                                                for ($counter = 0; $counter < $size; $counter++)
                                                {
                                                    if(!empty(trim($datos[0])))
                                                    {
                                                        switch ($mainCounter)
                                                        {
                                                            case 0:
                                                                ?>
                                                                <li class="canal">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 1:
                                                                ?>
                                                                <li class="fecha-inicio">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 2:
                                                                ?>
                                                                <li class="fecha-fin">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                        }

                                                        if($mainCounter >= 3)
                                                        {
                                                            $mainCounter = 0;
                                                        }
                                                    }
                                                }
                                            }
                                            fclose($doc);
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab-1-8">
                                    <ul>
                                        <li>
                                            <div class="row no-margin">
                                                <p>
                                                    CANALES:
                                                </p>
                                            </div>
                                        </li>
                                        <?php
                                        if(($doc = fopen("archivos/Temperatura Rep.csv", "r")) !== FALSE)
                                        {
                                            $mainCounter = 0;
                                            while(($datos = fgetcsv($doc, 1000, ",")) !== FALSE)
                                            {
                                                $size = count($datos);
                                                for ($counter = 0; $counter < $size; $counter++)
                                                {
                                                    if(!empty(trim($datos[0])))
                                                    {
                                                        switch ($mainCounter)
                                                        {
                                                            case 0:
                                                                ?>
                                                                <li class="canal">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 1:
                                                                ?>
                                                                <li class="fecha-inicio">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                            case 2:
                                                                ?>
                                                                <li class="fecha-fin">
                                                                    <div class="row no-margin">
                                                                        <p>
                                                                            <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                                        </p>
                                                                    </div>
                                                                </li>
                                                                <?php
                                                                $mainCounter++;
                                                                break;
                                                        }

                                                        if($mainCounter >= 3)
                                                        {
                                                            $mainCounter = 0;
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
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* PIE */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <script type="text/javascript">
            $('#bttnReporte').click(function() {
                var serv = $("#slct-servidor").val();
                var disp = $("#slct-dispositivo").val();

                var trgt_in = '#tab-' + serv + '-' + disp;
                var trgt_out = '#' + $('.ver-reporte .tab-pane.active').attr('id');

                if(trgt_in != trgt_out){
                    $('.ver-reporte ' + trgt_out).removeClass('in');
                    setTimeout(function () {
                        $('.ver-reporte ' + trgt_out).removeClass('active');
                    },100);

                    $('.ver-reporte ' + trgt_in).addClass('active');
                    setTimeout(function () {
                        $('.ver-reporte ' + trgt_in).addClass('in');
                    },200);
                }
            });
        </script>
<?php include('footer.php');?>