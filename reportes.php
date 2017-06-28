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
                        <div class="fecha">
                            <div class="col-xs-8 vertical-align">
                                <label for="from">De</label>
                                <input type="text" id="from" name="from">
                                <label for="to">a</label>
                                <input type="text" id="to" name="to">
                            </div>
                            <div class="col-xs-4 vertical-align">
                                <a class="bttn bttn-generar-reporte" name="bttnReporte-chih-ups" id="bttnReporte-chih-ups" href="#rep-1" data-target="#rep-1" role="tab" data-toggle="tab">
                                    Generar Reporte
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="ver-reporte tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="rep-1">

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