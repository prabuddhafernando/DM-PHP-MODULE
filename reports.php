<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reports.css"/>
    <script src="js/reports.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
                                <h3>REPORTS </h3>
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
            <div class="col-lg-2 col-sm-2 col-md-2"  style="height: 100%;width:auto">
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
            <div class="col-lg-10 col-sm-10 col-md-10" style= "height: 100%;text-align: center;background-color: #f2f2f2;">
                <!-- Main pane panel-->
            <div class="row" style="height: 5%;background-color: #e4e4e4">
                <div class="col-sm-2 col-lg-2 col-md-2" style="font-size: x-large;padding-top: 5px;"  >
                   Status
                </div>
                <div class="col-sm-2 col-lg-2 col-md-2" style="color: #0099FF;font-size: large;padding-top: 10px;">
                    Current
                </div>
                <div class="col-sm-2 col-lg-2 col-md-2" style="color: #0099FF;font-size: large;padding-top: 10px;">
                    Archives
                </div>
                <div class="col-sm-2 col-lg-2 col-md-2" style="color: #0099FF;font-size: large;padding-top: 10px;">
                    Other
                </div>

            </div>
            <div class="row"  style="height: 60%;background-color: #f2f2f2;padding-right: 17px;padding-top: 10px;">
                <div class="col-sm-2 col-lg-2 col-md-2" style="height: 100%;"  >

                    <div style="text-align: left;font-size: large;margin: 10px">
                        <div><p>All</p></div>
                            <div><p style="text-decoration: underline">Production</p></div>
                            <div><p style="text-decoration: underline">Delivery</p></div>
                            <div><p style="text-decoration: underline">Returns</p></div>
                            <div><p style="text-decoration: underline">Trends</p></div>

                    </div>
                </div>
                <div class="col-sm-10 col-lg-10 col-md-10" style="height: 100%;background-color: #ffffff;">
                    <div style="margin: 10px;border-color: #cccccc;border-style: solid;border-width: 1px;height: 95%;" >
                        <table class="table table-default" style="text-align: left">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>LAST UPDATE</th>
                                <th> </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row"> <input type="checkbox" class="form-check-input"></th>
                                <td>Delivery 2016</td>
                                <td>ALL DEliverie, On Time and Late</td>
                                <td>23/4/2017</td>
                                <td>
                                    <div class="circle" >
                                        <a href="#" class="btn btn-default btn-circle">More</a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"> <input type="checkbox" class="form-check-input"></th>
                                <td>Delivery 2014</td>
                                <td>Gondl, On Time and too late</td>
                                <td>23/4/2015</td>
                                <td>
                                    <div class="circle" >
                                        <a href="#" class="btn btn-default btn-circle">More</a>
                                    </div>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            </div>
        </div>


    </div>

</div>
</body>
</html>