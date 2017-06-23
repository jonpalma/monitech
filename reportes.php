<?php
$page = 'monitoreo';
$nav_index = '';
$nav_graficas = '';
$nav_monitoreo = '';
$nav_reportes = '';
$nav_reportes = 'class="active"';
?>
<?php include('header.php');?>
    <div class="wrapper monitoreo" id="monitoreo">
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
            <!-- REPORTES -->
            <div class="row no-margin" id="reportes">
                <!-- SERVIDORES -->
                <div class="servidores" id="servidores">
                    <div class="title-section">
                        <div class="vertical-align">
                            <h3>Servidores</h3>
                        </div>
                    </div>
                    <div class="content">
                        <div class="title-fixed">
                            <div class="servidor">
                                <p>
                                    SERVIDOR
                                </p>
                            </div>
                            <div class="dispositivo">
                                <p>
                                    DISPOSITIVO
                                </p>
                            </div>
                            <div class="options">
                                <p>
                                    <label for="reporte-chih-planta">Reportes
                                        <select name="slct-servidor" id="slct-servidor">
                                            <option value="">Fallas</option>
                                            <option value="">Desempeño</option>
                                        </select>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="data">
                            <ul>
                                <li>
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p>
                                                ITESM Chihuahua
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p>
                                                Planta Emergencia
                                            </p>
                                        </div>
                                        <div class="options">
                                            <a class="bttn" href="" name="bttnReporte-chih-ups" id="bttnReporte-chih-ups">
                                                Generar Reporte
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p>
                                                ITESM Chihuahua
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p>
                                                UPS
                                            </p>
                                        </div>
                                        <div class="options">
                                            <a class="bttn" href="" name="bttnReporte-chih-ups" id="bttnReporte-chih-ups">
                                                Generar Reporte
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p>
                                                ITESM Chihuahua
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p>
                                                Planta DC
                                            </p>
                                        </div>
                                        <div class="options">
                                            <a class="bttn" href="" name="bttnReporte-chih-planta" id="bttnReporte-chih-planta">
                                                Generar Reporte
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p>
                                                ITESM Chihuahua
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p>
                                                PAC 2
                                            </p>
                                        </div>
                                        <div class="options">
                                            <a class="bttn" href="" name="bttnReporte-chih-pac" id="bttnReporte-chih-pac">
                                                Generar Reporte
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p>
                                                ITESM Chihuahua
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p>
                                                MEDIDOR
                                            </p>
                                        </div>
                                        <div class="options">
                                            <a class="bttn" href="" name="bttnReporte-chih-medidor" id="bttnReporte-chih-medidor">
                                                Generar Reporte
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p>
                                                ITESM Chihuahua
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p>
                                                INVERSOR
                                            </p>
                                        </div>
                                        <div class="options">
                                            <a class="bttn" href="" name="bttnReporte-chih-inversor" id="bttnReporte-chih-inversor">
                                                Generar Reporte
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p>
                                                ITESM Chihuahua
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p>
                                                BATERIAS
                                            </p>
                                        </div>
                                        <div class="options">
                                            <a class="bttn" href="" name="bttnReporte-chih-baterias" id="bttnReporte-chih-baterias">
                                                Generar Reporte
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row no-margin">
                                        <div class="servidor">
                                            <p>
                                                ITESM Chihuahua
                                            </p>
                                        </div>
                                        <div class="dispositivo">
                                            <p>
                                                TEMPERATURA
                                            </p>
                                        </div>
                                        <div class="options">
                                            <a class="bttn" href="" name="bttnReporte-chih-temperatura" id="bttnReporte-chih-temperatura">
                                                Generar Reporte
                                            </a>
                                        </div>
                                    </div>
                                </li>
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