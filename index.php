<?php $page = 'index';?>
<?php include('header.php');?>
    <div class="wrapper index" id="index">
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
            <!-- MAPA / ALERTAS -->
            <div class="row no-margin" id="mapa-alertas">
                <!-- MAPA -->
                <div class="mapa" id="mapa">
                    <div class="title-section">
                        <div class="vertical-align">
                            <h3>Mapa</h3>
                            <a href=""><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="map" id="googleMap"></div>
                    </div>
                </div>
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
                        <ul class="panel-group ppl" id="group">
                            <li class="panel panel-default">
                                <a class="lugar" data-toggle="collapse" data-parent="#group" href="#collapse-chih">
                                    <i class="fa fa-circle red" aria-hidden="true"></i><span class="bold">   ITESM Chihuahua</span>
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
                                                            <i class="fa fa-circle red" aria-hidden="true"></i>  UPS en Bypass
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="panel panel-default">
                                <a class="lugar" data-toggle="collapse" data-parent="#group" href="#collapse-cdmx">
                                    <i class="fa fa-circle red" aria-hidden="true"></i><span class="bold">   CRIT Cd. México</span>
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
                                                            <i class="fa fa-circle red" aria-hidden="true"></i>  Falla modulo
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
                                                            <i class="fa fa-circle red" aria-hidden="true"></i>  Falla en Inversor
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
            </div>
            <div class="clearfix"></div>
            <!-- SERVIDORES / GRAFICAS -->
            <div class="row no-margin" id="servidores-graficas">
                <div class="servidores" id="servidores">
                    <div class="title-section">
                        <div class="vertical-align">
                            <h3>Servidores</h3>
                            <a href=""><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                <a href="dispositivos.php?serv=chih">
                                    <p class="vertical-align">
                                        <i class="fa fa-circle-o-notch fa-spin fa-fw red"></i>  ITESM CHIH
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="dispositivos.php?serv=gdl">
                                    <p class="vertical-align">
                                        <i class="fa fa-circle-o-notch fa-spin fa-fw green"></i>  CRIT GDL
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="dispositivos.php?serv=mty">
                                    <p class="vertical-align">
                                        <i class="fa fa-circle-o-notch fa-spin fa-fw green"></i>  ITESM MTY
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="dispositivos.php?serv=cdmx">
                                    <p class="vertical-align">
                                        <i class="fa fa-circle-o-notch fa-spin fa-fw green"></i>  CRIT CDMX
                                    </p>
                                </a>
                            </li>
                            <li>
                                <a href="dispositivos.php?serv=slp">
                                    <p class="vertical-align">
                                        <i class="fa fa-circle-o-notch fa-spin fa-fw red"></i>  L'ORÉAL SLP
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="graficas" id="graficas">
                    <div class="title-section">
                        <div class="vertical-align">
                            <h3>Grafica</h3>
                            <a href=""><i class="fa fa-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <div class="demo-container">
                            <div id="chart-demo">
                                <div id="chart" class="pue"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- MODALS -->
            <div class="modal fade" tabindex="-1" role="dialog" id="modal-alertas">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header"></div>
                        <div class="modal-body">
                            <div class="alertas-table">
                                <div class="table-head row no-margin">
                                    <div class="servidor">
                                        <p class="vertical-align">
                                            Servidor
                                        </p>
                                    </div>
                                    <div class="dispositivo">
                                        <p class="vertical-align">
                                            Dispositivo
                                        </p>
                                    </div>
                                    <div class="canal">
                                        <p class="vertical-align">
                                            Canal
                                        </p>
                                    </div>
                                    <div class="valor-canal">
                                        <p class="vertical-align">
                                            Valor Canal
                                        </p>
                                    </div>
                                    <div class="cerrar">
                                        <a class="vertical-align" href="" data-dismiss="modal" aria-label="Close">
                                            <i class="fa fa-times" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-body">
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p class="vertical-align">
                                                <i class="fa fa-circle red" aria-hidden="true"></i>  ITESM CHIH
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p class="vertical-align">
                                                UPS
                                            </p>
                                        </div>
                                        <div class="canal">
                                            <p class="vertical-align">
                                                UPS en Bypass
                                            </p>
                                        </div>
                                        <div class="valor-canal">
                                            <p class="vertical-align">
                                                0
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p class="vertical-align">
                                                <i class="fa fa-circle red" aria-hidden="true"></i>  CRIT Cd. México
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p class="vertical-align">
                                                Planta DC
                                            </p>
                                        </div>
                                        <div class="canal">
                                            <p class="vertical-align">
                                                Falla modulo
                                            </p>
                                        </div>
                                        <div class="valor-canal">
                                            <p class="vertical-align">
                                                62
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p class="vertical-align">
                                                <i class="fa fa-circle red" aria-hidden="true"></i>  CRIT Cd. México
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p class="vertical-align">
                                                Inversor
                                            </p>
                                        </div>
                                        <div class="canal">
                                            <p class="vertical-align">
                                                Falla en Inversor
                                            </p>
                                        </div>
                                        <div class="valor-canal">
                                            <p class="vertical-align">
                                                0
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

        <!--/* PIE */-->

        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
<?php include('footer.php');?>