<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Production</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/client.css"/>
    <link type="text/css" href="css/twilight.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/projects.min.css">
    <link rel="stylesheet" type="text/css" href="css/taggle.css">
    <script src="js/client.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/rainbow-custom.min.js"></script>
    <script src="js/taggle.min.js"></script>

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
                                <h3>CLIENT </h3>
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
            <div class="col-lg-10 col-sm-10 col-md-10" style= "background-color:gold;height: 100%;text-align: center;background-color: #e4e4e4">


                <div class="row"  style="height: 60%;padding-right: 17px;padding-top: 10px;">
                    <div class="row" style="text-align: left;padding: 10px;" >
                        <div class="btn-group" role="group" >
                            <div >
                                <!-- pop up main-->
                                <div class="container">
                                    <!-- Trigger the modal with a button -->
                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">+ Add New</button>
                                    <button class="btn btn-lg btn-secondary" >remove</button>
                                    <!-- Modal for add client -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog" style="width: 80%;height: 80%">

                                            <!-- Modal content-->
                                            <div class="modal-content"  style="height: 100%;font-size: 19px;">
                                                <div class="modal-header" style="background: aliceblue;text-align: center;">
                                                    <h3 class="modal-title">Add New Client</h3>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/action_page.php" method="post">
                                                        <div class= "row" style="padding: 30px;">

                                                            <table class="table" style="display: grid;width:100%">

                                                                <thead  class="table">
                                                                <tr style="border-radius: 5px;">
                                                                    <th style="width: 140px;text-align: center;border: 1px solid rgba(0, 153, 255,1);">
                                                                        <div class="btn-group" role="group"  >
                                                                            <b>Client Number</b>
                                                                        </div>
                                                                    </th>
                                                                    <th style="background-color: rgba(0, 153, 255, 1);width: 224px;text-align: center;">
                                                                        <div class="btn-group" role="group" >
                                                                            <b style="color: #fbfaff">  T7</b>
                                                                        </div>
                                                                    </th>
                                                                </tr>
                                                                </thead>

                                                                <tbody style="text-align: left">
                                                                <tr>

                                                                    <td>Client Name</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" name="cname" style="width: 100%"/>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Contact Person</td>
                                                                    <td  style="width: 80%;">
                                                                        <!--<input type="text"  class="form-controlform-control" name="contcperson" style="width: 100%"/>-->
                                                                        <div  class="input textarea clearfix tagfield"  style="width: 100%;"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" name="add" style="width: 100%"/>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Country</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" name="country" style="width: 100%"/>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td>

                                                                        <div style="text-align: right;">
                                                                            <input class="btn btn-primary" type="submit" value="Process" style="font-weight: bold;">
                                                                            <button class="btn" type="reset"><b>Cancel</b></button>

                                                                        </div>

                                                                    </td>
                                                                </tr>

                                                                </tbody>
                                                            </table>


                                                        </div>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                    <div class="col-sm-11 col-lg-11 col-md-11" style="height: 100%;background-color: #ffffff;">
                        <div style="margin: 10px;border-color: #cccccc;border-style: solid;border-width: 1px;height: 95%;" >

                            <table class="table table-default" style="text-align: left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Client Name</th>
                                    <th>Contact Person</th>
                                    <th>Address</th>
                                    <th>Country</th>
                                    <th> </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"> <input type="checkbox" class="form-check-input"></th>
                                    <td>Champika  Thondilage</td>
                                    <td>
                                        <ul>
                                            <li>senaka</li>
                                            <li>sumeda</li>
                                            <li>kekunawa</li>
                                        </ul>
                                    </td>
                                    <td>Improving</td>
                                    <td>21/4/2017</td>
                                    <td>
                                        <div class="circle" >
                                            <a href="#" class="btn  btn-circle">More</a>
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

    <script type="application/javascript">


        var persons = new Taggle($('.tagfield.textarea')[0], {
            onBeforeTagAdd: function(event, tag) {
            },
            onTagAdd: function(event, tag) {
                console.log("onTagAdd"+ tag);
                for(var i=0;i<persons.getTags().elements.length;i++){
                    var v = persons.getTags().elements[i].textContent;
                    var d = v.substr(0,(v.length-1))
                    console.log(d);
                }

                $('.taggle').css('background', '#8fd6f5');
            },
            onBeforeTagRemove: function(event, tag) {
               return true;
            },
            onTagRemove: function(event, tag) {
                console.log("onTagRemove"+ tag);
            },
        });

       /* function dome() {
                for(var i=0;i<persons.getTags().elements.length;i++){
                    var v = persons.getTags().elements[i].textContent;
                    var d = v.substr(0,(v.length-1))
                    console.log(d);
                }
        }*/

    </script>
</div>
</body>
</html>