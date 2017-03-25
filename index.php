<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dash-Board</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/index.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.canvasjs.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>


</head>


<body>


<div class="container-fluid">
    <div class="row">
        <div class="row navigationBarStyle">
            <div class="navbar-brand"></div>
            <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
                <div class="container-fluid" style="padding:22px 40px 0px 24px">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logoHedder" ><img src="images/dashboard/rectangle_u19.png" /> </div>

                        <!-- <div class="navbar-brand" href="#"><span><img src="images/lograt-logo.png"style="height: 40px;width: 100px" alt=""></span>
                             AutoSuport</div>-->
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="uib-collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left" style="padding-left: 38%;margin-top: -11px;">
                            <li class="containerWord topBotomBordersOut" >
                                <h3>DHASH BOARD </h3>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" >
                            <li class="containerWord topBotomBordersOut">
                                <a class="nivFront"  ui-sref="dashboard" role="button">Manjula Gunarathne</a>
                            </li>
                            <li class="containerWord topBotomBordersOut">
                                <img src="images/dashboard/u21.png" style="padding:10px;cursor: pointer;"/>
                            </li>

                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container -->
            </nav>


    </div>

    <div class="row" style="background-color: #e4e4e4;height: 1000px;padding-top: 37px">
        <!--item menu-->
        <div class="col-lg-1 col-sm-1 col-md-1"  style="height: 100%;width:auto">
            <div id="menuitm" >
            <div class="btn-group-vertical " role="group" style="width: 100%">
                <button class="list-group-item" id="dashboard" onclick="location.href='index.html';"><img src="images/dashboard/u17.png" style="padding:10px;cursor: pointer;" /></button>
                <button class="list-group-item" id="production" onclick="location.href='production.html';"><img src="images/dashboard/u11.png" style="padding:10px;cursor: pointer;"/></button>
                <button class="list-group-item" id="delivery" onclick="location.href='delivery.html';"><img src="images/dashboard/u9.png" style="padding:10px;cursor: pointer;"/></button>
                <button class="list-group-item" id="reports" onclick="location.href='reports.html';"><img src="images/dashboard/u235.png" style="padding:10px;cursor: pointer;"/></button>
                <button class="list-group-item" id="staff" onclick="location.href='staff.html';"><img src="images/dashboard/u7.png" style="padding:10px;cursor: pointer;"/></button>
                <button class="list-group-item" id="client" onclick="location.href='client.html';"><img src="images/dashboard/client.png" style="padding:10px;cursor: pointer;"/></button>
            </div>
            </div>
        </div>
        <!-- middle pane -->
        <div id="middlepane" class="col-lg-9 col-sm-10 col-md-7" style="background-color:#e4e4e4;height: 100%;text-align: center;padding-left: 25px;padding-right: 28px;">

            <div class="row" style="background-color: #f2f2f2;">
                <div class="col-sm-11" >
                    <h3 >STATUS</h3>
                </div>
                <div class="col-sm-1" >
                    <img src="images/dashboard/u21.png" style="padding:10px;cursor: pointer;"/>
                </div>
            </div>

            <div class="row" style="height: 37%;background-color: #f2f2f2;">

                <div class="col-sm-4" style="height: 100%;" >

                    <div class="row" id="n1" style="height: 80%">
                        <!--Pie Chart -->
                        <div class="progress-pie-chart"  data-percent="89">
                            <div class="ppc-progress">
                                <div class="ppc-progress-fill"></div>
                            </div>
                            <div class="ppc-percents">
                                <div class="pcc-percents-wrapper">
                                    <span>%</span>
                                </div>
                            </div>
                        </div>
                        <!--End Chart -->
                    </div>
                    <div class="row" >
                            <p style="font-size: 25px">Processing</p>
                    </div>

                </div>
                <div class="col-sm-4" style="height: 100%;">
                    <div class="row" id="n2" style="height: 80%">
                        <!--Pie Chart -->
                        <div class="progress-pie-chart " data-percent="69">
                            <div class="ppc-progress">
                                <div class="ppc-progress-fill"></div>
                            </div>
                            <div class="ppc-percents">
                                <div class="pcc-percents-wrapper">
                                    <span>%</span>
                                </div>
                            </div>
                        </div>
                        <!--End Chart -->
                    </div>
                    <div class="row" >
                        <p style="font-size: 25px">Pending</p>
                    </div>

                </div>
                <div class="col-sm-4" style="height: 100%;">
                    <div class="row" id="n3" style="height: 80%">
                        <!--Pie Chart -->
                        <div class="progress-pie-chart" data-percent="58">
                            <div class="ppc-progress">
                                <div class="ppc-progress-fill"></div>
                            </div>
                            <div class="ppc-percents">
                                <div class="pcc-percents-wrapper">
                                    <span>%</span>
                                </div>
                            </div>
                        </div>
                        <!--End Chart -->
                    </div>
                    <div class="row" >
                        <p style="font-size: 25px">Completed</p>
                    </div>
                </div>
            </div>

            <div class="row" style="background-color: #e4e4e4;;height: 40%;padding-top: 10px;">
                <div class="col-xs-4" style="background-color: #f2f2f2;;height: 100%;width: 36%;    margin-right: 2%;">
                    <div class="row">
                        <div  style="    width: 75%;display:  inline-block" >
                            <h5 >ON LEAVE</h5>
                        </div>
                        <div  style="  display: inline-block" >
                            <img src="images/dashboard/u21.png" style="padding:10px;cursor: pointer;"/>
                        </div>

                    </div>
                <div class="row" style="height: 40%;padding-left:15px;text-align: left">
                    <div class="row" style="display:  inline-flex;">
                        <table class="table table-inverse" style="position: absolute;padding: 10px">

                            <tbody>
                            <tr>
                                <td>Mark</td><td style="text-align: right;color: #4db53c">Otto</td>
                            </tr>
                            <tr>
                                <td>Mark</td><td style="text-align: right;color: #4db53c">Otto</td>
                            </tr>
                            <tr>
                                <td>Jacob</td><td style="text-align: right;color: #4db53c">Thornton</td>

                            </tr>
                            </tbody>
                        </table>
                    </div>


                </div>


                </div>
                <!--<div  class="col-xs-1" style="width:37px;"></div>-->
                <div class="col-xs-8" style="background-color: #f2f2f2;height: 100%;width: 62%">

                    <div class="row" style="height: 14%">
                        <div  style="    width: 86%;display:  inline-block" >
                            <h5 >PRODUCTION TREND</h5>
                        </div>
                        <div  style="  display: inline-block" >
                            <img src="images/dashboard/u21.png" style="padding:10px;cursor: pointer;"/>
                        </div>

                    </div>
                    <div class="row" style="padding-left:15px;padding-right:15px;text-align: left" >
                        <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    </div>
                </div>

            </div>

        </div>
        <!-- right pane -->
        <div id="rightpane" class="col-lg-2 col-sm-1 col-md-1" style="background-color:white;height: 100%;padding: 10px;">

            <div class="list-group">
                <div class="list-group-item" style="text-align: center">PENDING DELIVERY</div>
                <div class="list-group-item">
                    <div class="list-group">
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading"><u>TSips</u></h4>
                            <div class="btn-group btn-group" role="group" aria-label="...">
                                <div class="btn-group" role="group" >
                                    <img class="location_img" src="images/dashboard/u181.png"/>
                                </div>
                                <div class="btn-group" role="group">
                                    <p class="list-group-item-text">Kandy, Sri Lanka </p>
                                </div>

                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading"><u>TSips</u></h4>
                            <div class="btn-group btn-group" role="group" aria-label="...">
                                <div class="btn-group" role="group" >
                                    <img class="location_img" src="images/dashboard/u181.png"/>
                                </div>
                                <div class="btn-group" role="group">
                                    <p class="list-group-item-text">Kandy, Sri Lanka </p>
                                </div>

                            </div>
                        </a>
                        <a href="#" class="list-group-item">
                            <h4 class="list-group-item-heading"><u>TSips</u></h4>
                            <div class="btn-group btn-group" role="group" aria-label="...">
                                <div class="btn-group" role="group" >
                                    <img class="location_img" src="images/dashboard/u181.png"/>
                                </div>
                                <div class="btn-group" role="group">
                                    <p class="list-group-item-text">Kandy, Sri Lanka </p>
                                </div>

                            </div>
                        </a>

                        <a href="#" class="list-group-item" style="text-align: center;">

                            <div class="btn-group btn-group" role="group" aria-label="...">

                                <div class="btn-group" role="group">
                                    <div class="btn btn-primary " href="#" role="button">Load more</div>
                                </div>

                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>


    </div>


</div>

</div>
</body>
</html>