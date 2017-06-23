$(document).ready(function() {
    var arr_url = window.location.href.split('/');
    var pathname = arr_url[arr_url.length-1];

    $('.navbar-nav > li > a[href="'+pathname+'"]').parent().addClass('active');
});


/* SONIDO-ALARMA */
$('#menu-sup .row a.alertas > i.notificacion').css('display', 'block');

$('#menu-sup .row a.alertas').click(function () {
    $('#menu-sup .row a.alertas > i.notificacion').css('display', 'none');
    $('audio.alarma').attr("src", "");
});


/* ESTADO */
$(document).ready(function()
{
    $('.estado-container').find('.grafica-estado').each(function() {

        var number = parseFloat($(this).data('pct')).toFixed(2);
        var val = (number / 2) * 100;
        var $circle = $(this).find('.bar');

        if (isNaN(val))
        {
            val = 100;
        }
        else
        {
            var r = $circle.attr('r');
            var c = Math.PI*(r*2);

            if (val < 0) { val = 0;}
            if (val > 100) { val = 100;}

            var pct = (val/100)*c;

            $circle.css({ strokeDashoffset: -pct});
        }
    });
});


/* DISPOSITIVOS / CANALES */
$('#dispositivos-canales ul.nav-tabs > li').click(function () {
    $('#dispositivos-canales ul.nav-tabs > li').removeClass('active');
});


/* GRAFICA-PUE */
$(function(){
    var chart = $("#chart.pue").dxChart({
        palette: "violet",
        dataSource: dataSource_pue,
        title: "PUE",
        commonSeriesSettings: {
            type: "spline",
            argumentField: "day"
        },
        commonAxisSettings: {
            grid: {
                visible: true
            }
        },
        margin: {
            bottom: 20
        },
        series: [
            { valueField: "gdl", name: "Guadalajara" },
            { valueField: "chih", name: "Chihuahua" },
            { valueField: "cdmx", name: "Cd. México" },
            { valueField: "mty", name: "Monterrey" }
        ],
        tooltip: {
            enabled: true
        },
        valueAxis: {
            valueType: "numeric",
            grid: {
                opacity: 0.2
            }
        },
        legend: {
            verticalAlignment: "top",
            horizontalAlignment: "right"
        },
        "export": {
            enabled: true
        }
    }).dxChart("instance");
});

var dataSource_pue = [{
    day: 1,
    gdl: 1.51,
    chih: 1.63,
    cdmx: 1.83,
    mty: 1.46
},{
    day: 2,
    gdl: 1.59,
    chih: 1.51,
    cdmx: 1.76,
    mty: 1.42
},{
    day: 3,
    gdl: 1.62,
    chih: 1.52,
    cdmx: 1.74,
    mty: 1.46
},{
    day: 4,
    gdl: 1.68,
    chih: 1.48,
    cdmx: 1.69,
    mty: 1.40
},{
    day: 5,
    gdl: 1.59,
    chih: 1.50,
    cdmx: 1.66,
    mty: 1.46
},{
    day: 6,
    gdl: 1.55,
    chih: 1.57,
    cdmx: 1.71,
    mty: 1.46
},{
    day: 7,
    gdl: 1.74,
    chih: 1.64,
    cdmx: 1.68,
    mty: 1.51
}];


/* GRAFICA-TEMP */
$(function(){
    var chart = $("#chart.temp").dxChart({
        palette: "violet",
        dataSource: dataSource_temp,
        title: "Temperatura",
        commonSeriesSettings: {
            type: "spline",
            argumentField: "day"
        },
        commonAxisSettings: {
            grid: {
                visible: true
            }
        },
        margin: {
            bottom: 20
        },
        series: [
            { valueField: "general", name: "General" },
            { valueField: "pasillo_frio", name: "Pasillo Frio" }
        ],
        tooltip: {
            enabled: true,
            customizeTooltip: function (arg) {
                return {
                    text: arg.valueText + "&#176C"
                };
            }
        },
        valueAxis: {
            valueType: "numeric",
            grid: {
                opacity: 0.2
            },
            label: {
                customizeText: function() {
                    return this.valueText + "&#176C";
                }
            }
        },
        legend: {
            verticalAlignment: "top",
            horizontalAlignment: "right"
        },
        "export": {
            enabled: true
        }
    }).dxChart("instance");
});



var dataSource_temp = [{
    day: 1,
    general: 28.3,
    pasillo_frio: 15.3
}, {
    day: 2,
    general: 27.8,
    pasillo_frio: 15.0
},{
    day: 3,
    general: 28.4,
    pasillo_frio: 15.8
},{
    day: 4,
    general: 28.7,
    pasillo_frio: 15.9
},{
    day: 5,
    general: 29.2,
    pasillo_frio: 16.1
},{
    day: 6,
    general: 28.7,
    pasillo_frio: 15.9
},{
    day: 7,
    general: 29.0,
    pasillo_frio: 16.0
},{
    day: 8,
    general: 29.6,
    pasillo_frio: 16.4
},{
    day: 9,
    general: 28.9,
    pasillo_frio: 16.2
},{
    day: 10,
    general: 28.7,
    pasillo_frio: 15.8
},{
    day: 11,
    general: 28.2,
    pasillo_frio: 15.4
},{
    day: 12,
    general: 27.8,
    pasillo_frio: 15.2
},{
    day: 13,
    general: 27.4,
    pasillo_frio: 15.1
},{
    day: 14,
    general: 27.2,
    pasillo_frio: 14.9
},{
    day: 15,
    general: 27.3,
    pasillo_frio: 14.9
},{
    day: 16,
    general: 26.7,
    pasillo_frio: 14.8
},{
    day: 17,
    general: 27.1,
    pasillo_frio: 14.8
},{
    day: 18,
    general: 27.4,
    pasillo_frio: 14.9
},{
    day: 19,
    general: 27.3,
    pasillo_frio: 14.9
},{
    day: 20,
    general: 27.0,
    pasillo_frio: 14.7
},{
    day: 21,
    general: 27.3,
    pasillo_frio: 14.8
},{
    day: 22,
    general: 27.7,
    pasillo_frio: 14.9
},{
    day: 23,
    general: 28.1,
    pasillo_frio: 15.0
},{
    day: 24,
    general: 28.4,
    pasillo_frio: 15.1
},{
    day: 25,
    general: 28.1,
    pasillo_frio: 15.0
},{
    day: 26,
    general: 28.2,
    pasillo_frio: 14.9
},{
    day: 27,
    general: 28.6,
    pasillo_frio: 15.2
},{
    day: 28,
    general: 28.9,
    pasillo_frio: 15.2
},{
    day: 29,
    general: 29.1,
    pasillo_frio: 15.4
}, {
    day: 30,
    general: 28.8,
    pasillo_frio: 15.6
}];





/* ALERTAS DISPOSITIVOS */
$('#dispositivos-canales .panel-group .panel-default .lugar').find('p').each(function()
{
    var text = $(this).text();
    if(text.toLowerCase().indexOf("itesm chihuahua") >= 0)
    {
        $(this).find('i').addClass('red');
    }
    if(text.toLowerCase().indexOf("crit cd. méxico") >= 0)
    {
        $(this).find('i').addClass('red');
    }
});
$('#dispositivos-canales .panel-group .panel-default #collapse-1').find('a').each(function()
{
    var text = $(this).text();
    if(text.toLowerCase().indexOf("ups") >= 0)
    {
        $(this).find('i').addClass('red');
    }
});
$('#dispositivos-canales .panel-group .panel-default #collapse-3').find('a').each(function()
{
    var text = $(this).text();
    if(text.toLowerCase().indexOf("planta dc") >= 0)
    {
        $(this).find('i').addClass('red');
    }
    if(text.toLowerCase().indexOf("inversor") >= 0)
    {
        $(this).find('i').addClass('red');
    }
});
$('#dispositivos-canales #canales #tab-1-1').find('li').each(function()
{
    if($(this).find('.canal p').text().toLowerCase().indexOf("ups en bypass") >= 0)
    {
        $(this).find('.row').addClass('red-bg');
        $(this).find('.row p').addClass('white');
    }
});
$('#dispositivos-canales #canales #tab-3-2').find('li').each(function()
{
    if($(this).find('.canal p').text().toLowerCase().indexOf("falla modulo") >= 0)
    {
        $(this).find('.row').addClass('red-bg');
        $(this).find('.row p').addClass('white');
    }
});
$('#dispositivos-canales #canales #tab-3-5').find('li').each(function()
{
    if($(this).find('.canal p').text().toLowerCase().indexOf("falla en inversor") >= 0)
    {
        $(this).find('.row').addClass('red-bg');
        $(this).find('.row p').addClass('white');
    }
});




/* CAMBIAR DATOS */
window.setInterval(function(){
    $('#dispositivos-canales #canales .tab-pane .valor').find('p').each(function()
    {
        if(parseInt($(this).text()))
        {
            var valor = parseInt($(this).text());
            if (Math.floor(Math.random() * 2 + 1) > 1) {
                var new_valor = Math.abs(valor + 1);
            }
            else {
                var new_valor = Math.abs(valor - 1);
            }

            if (new_valor == 0) {
                $(this).text('0');
            }
            else if (!Math.abs(new_valor)) {
                $(this).text('');
            }
            else {
                $(this).text(new_valor);
            }
        }
    });
}, 60000);