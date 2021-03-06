
<?php

   session_start();
    require_once './db/dbConnection.php';
?>


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
                        <button class="list-group-item" id="dashboard" onclick="location.href='index.php';"><img src="images/dashboard/u17.png" style="padding:10px;cursor: pointer;" /></button>
                        <button class="list-group-item" id="production" onclick="location.href='production.php';"><img src="images/dashboard/u11.png" style="padding:10px;cursor: pointer;"/></button>
                        <button class="list-group-item" id="delivery" onclick="location.href='delivery.php';"><img src="images/dashboard/u9.png" style="padding:10px;cursor: pointer;"/></button>
                        <button class="list-group-item" id="reports" onclick="location.href='reports.php';"><img src="images/dashboard/u235.png" style="padding:10px;cursor: pointer;"/></button>
                        <button class="list-group-item" id="staff" onclick="location.href='staff.php';"><img src="images/dashboard/u7.png" style="padding:10px;cursor: pointer;"/></button>
                        <button class="list-group-item" id="client" onclick="location.href='client.php';"><img src="images/dashboard/client.png" style="padding:10px;cursor: pointer;"/></button>

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
                                    <button  id="removeElememt" class="btn btn-lg btn-secondary" >remove</button>
                                    <!-- Modal for add client -->
                                    <div class="modal fade" id="myModal" role="dialog">
                                        <div class="modal-dialog" style="width: 80%;height: 80%">

                                            <!-- Modal content-->
                                            <div class="modal-content"  style="height: 100%;font-size: 19px;">
                                                <div class="modal-header" style="background: aliceblue;text-align: center;">
                                                    <h3 class="modal-title">Add New Client</h3>
                                                </div>
                                                <div class="modal-body" >
                                               <!--  form starting  -->
                                                    <form id="inserting" action="./dto/insert_client.php" method="post" style="width:100%;padding-left: 18% ;padding-right: 10%;">
                                                        <div class= "row" style="padding: 30px;">

                                                            <table class="table" style="width:100%">

                                                                <thead  class="table">
                                                                <tr style="border-radius: 5px;">
                                                                    <th style="text-align: center;border: 1px solid rgba(0, 153, 255,1)">
                                                                        <div class="btn-group" role="group"  >

                                                                            <span>
                                                                               <b>Client Number</b>
                                                                           </span>
                                                                        </div>
                                                                    </th>
                                                                    <th style="background-color: rgba(0, 153, 255, 1);text-align: center;width: 80%;text-align: center">
                                                                        <div class="btn-group" role="group" >
                                                                            <b style="color: #fbfaff">  T7 </b>
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
                                                                        <input type="text"  class="form-control clearfix tagfield" id="hiden" name="contact_person" style="width: 100%;display: none;"/>
                                                                        <div  class="input form-control  textarea clearfix tagfield" id="live" name="Contact" style="width: 100%;"></div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Address</td>
                                                                    <td>
                                                                        <input type="text" class="form-control" name="address" style="width: 100%"/>
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
                                                                            <button class="btn cancel" type="reset"><b>reset</b></button>
                                                                            <button id="resetbtn" class="btn" type="reset"><b>cancel</b></button>


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
                    <div class="col-sm-11 col-lg-11 col-md-11" style="height: initial;background-color: #ffffff;">
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
                                 <?php
                                    $sql = "SELECT * FROM client";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {

                                        $ID = $row['ID'];
                                        $c_name=$row["client_name"];

                                        $address =$row["address"];
                                        $country =$row["country"];

                                         $sql2 = "select contacts from contactperson where ID =".$ID;
                                         $result2 = $conn->query($sql2);


                                            $templist = "";
                                            if ($result2 ->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result2->fetch_assoc()) {
                                                    $templist = $templist.'<li>'.$row['contacts'].'</li>';
                                                }
                                            }

                                        echo '<tr>
                                                <th scope="row"> <input type="checkbox" name="location[]" value="'.$c_name.'" class="form-check-input"></th>
                                                <td>'.$c_name.'</td>
                                                <td>
                                                    <ul>
                                                       '.$templist.'
                                                        
                                                    </ul>
                                                </td>
                                                <td>'.$address.'</td>
                                                <td>'.$country.'</td>
                                                <td>
                                                    <div class="circle" >
                                                        <a href="#" class="btn  btn-circle">More</a>
                                                    </div>
                                                </td>
                                            </tr>';

                                        }
                                    }
                                    ?>


                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>



            </div>
        </div>


    </div>

    <script type="application/javascript">

        var contactArray =[];
        var persons = new Taggle($('.tagfield.textarea')[0], {
            onBeforeTagAdd: function(event, tag) {
            },
            onTagAdd: function(event, tag) {
                console.log("onTagAdd"+ tag);

                for(var i=0;i<persons.getTags().elements.length;i++){
                    var v = persons.getTags().elements[i].textContent;
                    var d = v.substr(0,(v.length-1))
                    //console.log(d);
                    contactArray.push(d);
                }

                for (var i = 0; i < contactArray.length; i++) {
                   console.log(contactArray[i]);
                }
                var myJSON = "";
                 myJSON = JSON.stringify(contactArray);
                document.getElementById("hiden").value = myJSON;


                $('.taggle').css('background', '#8fd6f5');
            },
            onBeforeTagRemove: function(event, tag) {
               return true;
            },
            onTagRemove: function(event, tag) {
               // console.log("onTagRemove"+ tag);
            },
        });

            $( ".cancel" ).click(function() {
                // handle this

            });
            $( "#resetbtn" ).click(function() {

                $('.modal').modal('toggle');

            });




        $( "#removeElememt" ).click(function() {
            var checkboxes = document.getElementsByName('location[]');

            if(checkboxes.length>0){

            var myarray = [];
            var myJSON = "";
            for (var i=0, n=checkboxes.length;i<n;i++)
            {
                if (checkboxes[i].checked)
                {
                   myarray.push(checkboxes[i].value);
                }
            }
                if(myarray.length>0){

                    myJSON = JSON.stringify(myarray);
                    var form = document.createElement("form");
                    form.setAttribute("method", "post");
                    form.setAttribute("action", "./dto/delete_client.php");
                    var cid = document.createElement("input");
                    cid.setAttribute("name", "clients");
                    cid.setAttribute("value", myJSON);
                    form.appendChild(cid);
                    document.body.appendChild(form);
                    form.submit();

                }else{
                    alert("please select atleat one record!");
                }

            }else{
                alert("no records to delete");
            }

        });


    </script>

     <?php $conn->close(); ?>
</div>
</body>
</html>