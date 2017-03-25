<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delivery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/delivey.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="./js/delivary.js"></script>
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
                                <h3>DELIVERY </h3>
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
            <div class="col-lg-10 col-sm-10 col-md-10" style= "height: 100%;background-color: #f2f2f2">
                <!-- title inside invoice pane-->


                <div class="container tablebord" >
                    <div class="row cls" >
                        <div class="col-md-12">
                            <div class="panel panel">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="cols-lg-1 col-sm-1 col-md-1">
                                            <span class="pull-left clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                                        </div>
                                        <div class="cols-lg-3 col-sm-3 col-md-3" style="text-align: left;">
                                            <h3 class="panel-title">PENDING</h3>
                                        </div>
                                        <div class="cols-lg-2 col-sm-2 col-md-2">
                                            <select  class="form-control" name="delay" style="width: 100%">
                                                <option value="volvo">Immediate</option>
                                                <option value="saab">Within 1 Day</option>
                                                <option value="fiat">Within 2 Day</option>
                                                <option value="audi">Within 3 Day</option>
                                            </select>
                                        </div>
                                        <div class="cols-lg-2 col-sm-2 col-md-2">
                                            <select class="form-control" name="condition" style="width: 100%">
                                                <option value="volvo">Finished</option>
                                                <option value="saab">Under Production</option>
                                            </select>
                                        </div>
                                        <div class="cols-lg-4 col-sm-4 col-md-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                 <!--   table body-->
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client</th>
                                            <th>Status</th>
                                            <th>Contact Person</th>
                                            <th>Destination</th>
                                            <th>Due</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Freelan</td>
                                            <td>50%</td>
                                            <td>Sarath Weerasinghe </td>
                                            <td>Matara, LK </td>
                                            <td>20 Feb 2017</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Addidas</td>
                                            <td>75%</td>
                                            <td>Lisa Stanfold </td>
                                            <td>New York,US </td>
                                            <td>20 Feb 2017</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Bawani</td>
                                            <td>50%</td>
                                            <td>Siripal Manavad</td>
                                            <td>Kundasale, LK </td>
                                            <td>20 Feb 2017</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="cols-lg-1 col-sm-1 col-md-1">
                                            <span class="pull-left clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                                        </div>
                                        <div class="cols-lg-3 col-sm-3 col-md-3" style="text-align: left;">
                                            <h3 class="panel-title">RETURNS</h3>
                                        </div>
                                        <div class="cols-lg-2 col-sm-2 col-md-2">
                                            <select class="form-control" name="delay" style="width: 100%">
                                                <option value="volvo">Immediate</option>
                                                <option value="saab">Within 1 Day</option>
                                                <option value="fiat">Within 2 Day</option>
                                                <option value="audi">Within 3 Day</option>
                                            </select>
                                        </div>
                                        <div class="cols-lg-2 col-sm-2 col-md-2">
                                            <select class="form-control" name="condition" style="width: 100%">
                                                <option value="volvo">Finished</option>
                                                <option value="saab">Under Production</option>
                                            </select>
                                        </div>
                                        <div class="cols-lg-4 col-sm-4 col-md-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!--   table body-->
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client</th>
                                            <th>Status</th>
                                            <th>Contact Person</th>
                                            <th>Destination</th>
                                            <th>Due</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Freelan</td>
                                            <td>50%</td>
                                            <td>Sarath Weerasinghe </td>
                                            <td>Matara, LK </td>
                                            <td>20 Feb 2017</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Addidas</td>
                                            <td>75%</td>
                                            <td>Lisa Stanfold </td>
                                            <td>New York,US </td>
                                            <td>20 Feb 2017</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Bawani</td>
                                            <td>50%</td>
                                            <td>Siripal Manavad</td>
                                            <td>Kundasale, LK </td>
                                            <td>20 Feb 2017</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="cols-lg-1 col-sm-1 col-md-1">
                                            <span class="pull-left clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                                        </div>
                                        <div class="cols-lg-3 col-sm-3 col-md-3" style="text-align: left;">
                                            <h3 class="panel-title">DELIVERED</h3>
                                        </div>
                                        <div class="cols-lg-2 col-sm-2 col-md-2">
                                            <select class="form-control" name="delay" style="width: 100%">
                                                <option value="volvo">Immediate</option>
                                                <option value="saab">Within 1 Day</option>
                                                <option value="fiat">Within 2 Day</option>
                                                <option value="audi">Within 3 Day</option>
                                            </select>
                                        </div>
                                        <div  class="cols-lg-2 col-sm-2 col-md-2">
                                            <select class="form-control" name="condition" style="width: 100%">
                                                <option value="volvo">Finished</option>
                                                <option value="saab">Under Production</option>
                                            </select>
                                        </div>
                                        <div class="cols-lg-4 col-sm-4 col-md-4">
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <!--   table body-->
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Client</th>
                                            <th>Status</th>
                                            <th>Contact Person</th>
                                            <th>Destination</th>
                                            <th>Due</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Freelan</td>
                                            <td>50%</td>
                                            <td>Sarath Weerasinghe </td>
                                            <td>Matara, LK </td>
                                            <td>20 Feb 2017</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Addidas</td>
                                            <td>75%</td>
                                            <td>Lisa Stanfold </td>
                                            <td>New York,US </td>
                                            <td>20 Feb 2017</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Bawani</td>
                                            <td>50%</td>
                                            <td>Siripal Manavad</td>
                                            <td>Kundasale, LK </td>
                                            <td>20 Feb 2017</td>
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


    </div>

</div>
</body>
</html>