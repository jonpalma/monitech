<?php $page = 'dispositivos';?>
<?php include('header.php');?>
    <div class="wrapper dispositivos" id="dispositivos">
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
        <!-- ALERTAS / IMAGENES -->
        <div class="row no-margin" id="alertas-imagenes">
            <!-- ALERTAS -->
            <div class="alertas" id="alertas">
                <div class="title-section">
                    <div class="vertical-align">
                        <h3>Alertas</h3>
                        <a href="#modal-alertas" data-toggle="modal" data-target="#modal-alertas">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="content">
                    <ul class="panel-group ppl" id="group-alertas">
                        <li class="panel panel-default">
                            <a class="lugar" data-toggle="collapse" data-parent="#group-alertas" href="#collapse-chih">
                                <span class="pulse-red"></span><span class="bold">   ITESM Chihuahua</span>
                            </a>
                            <div class="clearfix"></div>
                            <div id="collapse-chih" class="panel-collapse collapse in">
                                <ul class="panel-group disp" id="group-chih">
                                    <li role="presentation" class="panel panel-default active">
                                        <a data-toggle="collapse" data-parent="#group-chih" href="#collapse-chih-ups">
                                            UPS
                                        </a>
                                        <div class="clearfix"></div>
                                        <div id="collapse-chih-ups" class="panel-collapse collapse in">
                                            <ul class="canales">
                                                <li>
                                                    <p>
                                                        <span class="pulse-red"></span>  UPS en Bypass
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel panel-default">
                            <a class="lugar" data-toggle="collapse" data-parent="#group-alertas" href="#collapse-cdmx">
                                <span class="pulse-red"></span><span class="bold">   CRIT Cd. México</span>
                            </a>
                            <div class="clearfix"></div>
                            <div id="collapse-cdmx" class="panel-collapse collapse">
                                <ul class="panel-group disp" id="group-cdmx">
                                    <li role="presentation" class="panel panel-default active">
                                        <a data-toggle="collapse" data-parent="#group-cdmx" href="#collapse-cdmx-plantadc">
                                            Planta DC
                                        </a>
                                        <div class="clearfix"></div>
                                        <div id="collapse-cdmx-plantadc" class="panel-collapse collapse in">
                                            <ul class="canales">
                                                <li>
                                                    <p>
                                                        <span class="pulse-red"></span>  Falla modulo
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li role="presentation" class="panel panel-default">
                                        <a data-toggle="collapse" data-parent="#group-cdmx" href="#collapse-cdmx-inversor">
                                            Inversor
                                        </a>
                                        <div class="clearfix"></div>
                                        <div id="collapse-cdmx-inversor" class="panel-collapse collapse">
                                            <ul class="canales">
                                                <li>
                                                    <p>
                                                        <span class="pulse-red"></span>  Falla en Inversor
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="imagenes" id="imagenes">
                <div class="images">
                    <div class="img-container img-ppl" style="background: url(img/index/img1.jpg) no-repeat center center"></div>
                    <div class="img-container img-logo" style="background: url(img/index/logo.png) no-repeat center center"></div>
                </div>
            </div>
        </div>
        <!-- DISPOSITIVOS / CANALES -->
        <div class="row no-margin" id="dispositivos-canales">
            <!-- DISPOSITIVOS -->
            <div class="dispositivos" id="dispositivos">
                <div class="title-section">
                    <div class="vertical-align">
                        <h3>Servidores</h3>
                    </div>
                </div>
                <div class="content">
                    <ul class="panel-group" id="group">
                        <li class="panel panel-default chih">
                            <a data-toggle="collapse" data-parent="#group" href="#collapse-1">
                                <div class="lugar">
                                    <p>
                                        <span class="pulse-green"></span> <span class="bold">ITESM Chihuahua</span><br>
                                    </p>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                            <div id="collapse-1" class="panel-collapse collapse in">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab-1-1" data-target="#tab-1-1" aria-controls="tab-1-1" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Planta Emergencia
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-1-2" data-target="#tab-1-2" aria-controls="tab-1-2" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> UPS
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-1-3" data-target="#tab-1-3" aria-controls="tab-1-3" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Planta DC
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-1-4" data-target="#tab-1-4" aria-controls="tab-1-4" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> PAC 2
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-1-5" data-target="#tab-1-5" aria-controls="tab-1-5" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Medidor
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-1-6" data-target="#tab-1-6" aria-controls="tab-1-6" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Inversor
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-1-7" data-target="#tab-1-7" aria-controls="tab-1-7" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Baterias
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-1-8" data-target="#tab-1-8" aria-controls="tab-1-8" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Temperatura
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel panel-default mty">
                            <a data-toggle="collapse" data-parent="#group" href="#collapse-2">
                                <div class="lugar">
                                    <p>
                                        <span class="pulse-green"></span> <span class="bold">ITESM Monterrey</span><br>
                                    </p>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                            <div id="collapse-2" class="panel-collapse collapse">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation">
                                        <a href="#tab-2-1" data-target="#tab-2-1" aria-controls="tab-2-1" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Planta Emergencia
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-2-2" data-target="#tab-2-2" aria-controls="tab-2-2" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> UPS
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-2-3" data-target="#tab-2-3" aria-controls="tab-2-3" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Planta DC
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-2-4" data-target="#tab-2-4" aria-controls="tab-2-4" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> PAC 2
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-2-5" data-target="#tab-2-5" aria-controls="tab-2-5" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Medidor
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-2-6" data-target="#tab-2-6" aria-controls="tab-2-6" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Inversor
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-2-7" data-target="#tab-2-7" aria-controls="tab-2-7" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Baterias
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-2-8" data-target="#tab-2-8" aria-controls="tab-2-8" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Temperatura
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel panel-default cdmx">
                            <a data-toggle="collapse" data-parent="#group" href="#collapse-3">
                                <div class="lugar">
                                    <p>
                                        <span class="pulse-green"></span> <span class="bold">CRIT Cd. México</span><br>
                                    </p>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                            <div id="collapse-3" class="panel-collapse collapse">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation">
                                        <a href="#tab-3-1" data-target="#tab-3-1" aria-controls="tab-3-1" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Planta Emergencia
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-3-2" data-target="#tab-3-2" aria-controls="tab-3-2" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> UPS
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-3-3" data-target="#tab-3-3" aria-controls="tab-3-3" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Planta DC
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-3-4" data-target="#tab-3-4" aria-controls="tab-3-4" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> PAC 2
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-3-5" data-target="#tab-3-5" aria-controls="tab-3-5" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Medidor
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-3-6" data-target="#tab-3-6" aria-controls="tab-3-6" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Inversor
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-3-7" data-target="#tab-3-7" aria-controls="tab-3-7" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Baterias
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-3-8" data-target="#tab-3-8" aria-controls="tab-3-8" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Temperatura
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel panel-default gdl">
                            <a data-toggle="collapse" data-parent="#group" href="#collapse-4">
                                <div class="lugar">
                                    <p>
                                        <span class="pulse-green"></span> <span class="bold">CRIT Guadalajara</span><br>
                                    </p>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                            <div id="collapse-4" class="panel-collapse collapse">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation">
                                        <a href="#tab-4-1" data-target="#tab-4-1" aria-controls="tab-4-1" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Planta Emergencia
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-4-2" data-target="#tab-4-2" aria-controls="tab-4-2" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> UPS
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-4-3" data-target="#tab-4-3" aria-controls="tab-4-3" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Planta DC
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-4-4" data-target="#tab-4-4" aria-controls="tab-4-4" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> PAC 2
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-4-5" data-target="#tab-4-5" aria-controls="tab-4-5" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Medidor
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-4-6" data-target="#tab-4-6" aria-controls="tab-4-6" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Inversor
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-4-7" data-target="#tab-4-7" aria-controls="tab-4-7" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Baterias
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-4-8" data-target="#tab-4-8" aria-controls="tab-4-8" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Temperatura
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="panel panel-default slp">
                            <a data-toggle="collapse" data-parent="#group" href="#collapse-5">
                                <div class="lugar">
                                    <p>
                                        <span class="pulse-green"></span> <span class="bold">L'ORÉAL San Luis Potosi</span><br>
                                    </p>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                            <div id="collapse-5" class="panel-collapse collapse">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation">
                                        <a href="#tab-5-1" data-target="#tab-5-1" aria-controls="tab-5-1" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Planta Emergencia
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-5-2" data-target="#tab-5-2" aria-controls="tab-5-2" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> UPS
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-5-3" data-target="#tab-5-3" aria-controls="tab-5-3" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Planta DC
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-5-4" data-target="#tab-5-4" aria-controls="tab-5-4" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> PAC 2
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-5-5" data-target="#tab-5-5" aria-controls="tab-5-5" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Medidor
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-5-6" data-target="#tab-5-6" aria-controls="tab-5-6" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Inversor
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-5-7" data-target="#tab-5-7" aria-controls="tab-5-7" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Baterias
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab-5-8" data-target="#tab-5-8" aria-controls="tab-5-8" role="tab" data-toggle="tab">
                                            <span class="pulse-green"></span> Temperatura
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- CANALES -->
            <div class="canales" id="canales">
                <div class="title-section">
                    <div class="vertical-align">
                        <h3>Canales</h3>
                    </div>
                </div>
                <div class="content">
                    <div class="title-fixed">
                        <div class="canal">
                            <p>
                                CANAL
                            </p>
                        </div>
                        <div class="tipo">
                            <p>
                                TIPO
                            </p>
                        </div>
                        <div class="valor">
                            <p>
                                VALOR
                            </p>
                        </div>
                        <div class="unidad">
                            <p>
                                UNIDAD
                            </p>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div role="tabpanel" class="chih tab-pane fade in active" id="tab-1-1">
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-1-2">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/UPS.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-1-3">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Planta.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-1-4">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/PAC.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-1-5">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Medidor.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-1-6">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Inversor.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-1-7">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Baterias.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-1-8">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Temperatura.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="mty tab-pane fade in active" id="tab-2-1">
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-2-2">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/UPS.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-2-3">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Planta.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-2-4">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/PAC.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-2-5">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Medidor.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-2-6">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Inversor.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-2-7">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Baterias.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-2-8">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Temperatura.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="cdmx tab-pane fade in active" id="tab-3-1">
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-3-2">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/UPS.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-3-3">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Planta.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-3-4">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/PAC.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-3-5">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Medidor.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-3-6">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Inversor.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-3-7">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Baterias.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-3-8">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Temperatura.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="gdl tab-pane fade in active" id="tab-4-1">
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-4-2">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/UPS.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-4-3">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Planta.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-4-4">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/PAC.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-4-5">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Medidor.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-4-6">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Inversor.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-4-7">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Baterias.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-4-8">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Temperatura.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="slp tab-pane fade in active" id="tab-5-1">
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-5-2">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/UPS.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-5-3">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Planta.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-5-4">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/PAC.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-5-5">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Medidor.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-5-6">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Inversor.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-5-7">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Baterias.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
                        <div role="tabpanel" class="tab-pane fade" id="tab-5-8">
                            <ul>
                                <?php
                                if(($doc = fopen("archivos/Temperatura.csv", "r")) !== FALSE)
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
                                                        ?>
                                                        <div class="tipo">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 2:
                                                        ?>
                                                        <div class="valor">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
                                                        </div>
                                                        <?php
                                                        break;
                                                    case 3:
                                                        ?>
                                                        <div class="unidad">
                                                            <p>
                                                                <?php echo mb_convert_encoding($datos[$counter], 'utf-8', 'Windows-1252'); ?>
                                                            </p>
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
    <script>
        <?php if(isset($_GET["serv"]))
        {
            echo "$('#dispositivos-canales #dispositivos .panel-collapse').removeClass('in');";
            echo "$('#dispositivos-canales .".$_GET["serv"]." .panel-collapse').addClass('in');";


            echo "$('#dispositivos-canales #dispositivos .panel-collapse li').removeClass('active');";
            echo "$('#dispositivos-canales .".$_GET["serv"]." .panel-collapse li:nth-of-type(1)').addClass('active');";


            echo "$('#dispositivos-canales #canales .tab-pane').removeClass('in active');";
            echo "$('#dispositivos-canales #canales .tab-pane.".$_GET["serv"]."').addClass('in active');";
        }
        ?>
    </script>
<?php include('footer.php');?>