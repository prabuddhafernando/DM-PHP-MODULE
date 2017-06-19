window.onload = function () {


    $('#dashboard').css('background','#e4e4e4');



    $( document ).ready(function() {
        var chartData = {
            node: "chartContainer",
            dataset: [122, 65, 80, 84, 33, 55, 95, 15, 268, 47, 72, 69],
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            pathcolor: "#288ed4",
            fillcolor: "#8e8e8e",
            xPadding: 100,
            yPadding: 0,
            ybreakperiod: 50,
        };
        drawlineChart(chartData);
    });
}

$(function(){

    var $ppc1 = $('#n1 .progress-pie-chart'),
        percent = parseInt($ppc1.data('percent')),
        deg = 360*percent/100;
    if (percent > 50) {
        $ppc1.addClass('gt-50-1');
        $('.gt-50-1').css({'background-color':'#e5f53d'});
    }else{
       $('#n1 .ppc-progress-fill').css('background','#e5f53d');
    }

    $('#n1 .ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
    $('#n1 .ppc-percents span').html(percent+'%');



    var $ppc2 = $('#n2 .progress-pie-chart'),
        percent = parseInt($ppc2.data('percent')),
        deg = 360*percent/100;
    if (percent > 50) {
        $ppc2.addClass('gt-50-2');
        $('.gt-50-2').css({'background-color':'#2eaff5'});
    }else{
        $('#n2 .ppc-progress-fill').css('background','#2eaff5');

    }

    $('#n2 .ppc-progress-fill').css('transform','rotate('+ deg +'deg)');

    $('#n2 .ppc-percents span').html(percent+'%');

    var $ppc3 = $('#n3 .progress-pie-chart'),
        percent = parseInt($ppc3.data('percent')),
        deg = 360*percent/100;
    if (percent > 50) {
        $ppc3.addClass('gt-50-3');
        $('.gt-50-3').css({'background-color':'#21f886'});
    }else{
        $('#n3 .ppc-progress-fill').css('background','#21f886');
    }

    $('#n3 .ppc-progress-fill').css('transform','rotate('+ deg +'deg)');
    $('#n3 .ppc-percents span').html(percent+'%');


});

