window.onload = function () {


    $('#dashboard').css('background','#e4e4e4');


    var chart = new CanvasJS.Chart("chartContainer",
        {
            theme: "theme1",
            title: {
                text: ""
            },
            animationEnabled: true,
            axisX: {
                valueFormatString: "MMM",
                interval: 1,
                intervalType: "month"

            },
            axisY: {
                includeZero: false

            },
            data: [
                {
                    type: "line",
                    //lineThickness: 3,
                    dataPoints: [
                        {x: new Date(2012, 00, 1), y: 450},
                        {x: new Date(2012, 01, 1), y: 414},
                        {
                            x: new Date(2012, 02, 1),
                            y: 520,
                            indexLabel: "highest",
                            markerColor: "red",
                            markerType: "triangle"
                        },
                        {x: new Date(2012, 03, 1), y: 460},
                        {x: new Date(2012, 04, 1), y: 450},
                        {x: new Date(2012, 05, 1), y: 500},
                        {x: new Date(2012, 06, 1), y: 480},
                        {x: new Date(2012, 07, 1), y: 480},
                        {
                            x: new Date(2012, 08, 1),
                            y: 410,
                            indexLabel: "lowest",
                            markerColor: "DarkSlateGrey",
                            markerType: "cross"
                        },
                        {x: new Date(2012, 09, 1), y: 500},
                        {x: new Date(2012, 10, 1), y: 480},
                        {x: new Date(2012, 11, 1), y: 510}

                    ]
                }


            ]
        });

    chart.render();
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

