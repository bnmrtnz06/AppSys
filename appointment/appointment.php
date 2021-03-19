
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Clinica Abeleda | Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">

    <link href="css/date/style.css" rel="stylesheet">
    <link href="css/date/style1.css" rel="stylesheet">
    <link href="css/date/blocks.css" rel="stylesheet">
    <link href="css/date/date/bootstrap-datepicker.css" rel="stylesheet">
    <link href="css/date/date/bootstrap-datepicker3.css" rel="stylesheet">
    <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
    <link href="css/date/material.css" rel="stylesheet">
</head>
<body id="page-top" class="landing-page no-skin-config">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top navbar-expand-md" role="navigation">
            <div class="container">
                <a class="navbar-brand" href="index.html">CLINICA ABELEDA</a>
                <div class="navbar-header page-scroll">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="nav-link page-scroll" href="#page-top">Home</a></li>
                        <li><a class="nav-link page-scroll" href="#features">Services</a></li>
                        <li><a class="nav-link page-scroll" href="#contact">Contact</a></li>
                        <li><a class="nav-link page-scroll" href="#">Appointment</a></li>
                        <li><a class="nav-link page-scroll" href="login.html">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<br><br><br><br>
<section id="promo-1" class="content-block promo-1 min-height-600px bg-offwhite">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <h2>Make appointment today!</h2>
                        <p>Click to make an appointment!</p>

                        <!-- date textbox -->

                        <div class="input-group" style="margin-bottom:10px;">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar">
                                </i>
                            </div>
                            <input class="form-control" id="date" name="date" value="<?php echo date("Y-m-d")?>" onchange="showUser(this.value)"/>
                        </div>

                        <!-- date textbox end -->

                        <!-- script start -->
                        <script>

                            function showUser(str) {

                                if (str == "") {
                                    document.getElementById("txtHint").innerHTML = "";
                                    return;
                                } else {
                                    if (window.XMLHttpRequest) {
                                        // code for IE7+, Firefox, Chrome, Opera, Safari
                                        xmlhttp = new XMLHttpRequest();
                                    } else {
                                        // code for IE6, IE5
                                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                                    }
                                    xmlhttp.onreadystatechange = function() {
                                        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                                            document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                                        }
                                    };
                                    xmlhttp.open("GET","getschedule.php?q="+str,true);
                                    console.log(str);
                                    xmlhttp.send();
                                }
                            }
                        </script>

                        <!-- script start end -->

                        <!-- table appointment start -->
                        <div id="txtHint"><b> </b></div>

                        <!-- table appointment end -->
                    </div>
                    <!-- /.col -->
                   <!--  <div class="col-md-6 col-md-offset-1">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="http://www.youtube.com/embed/FEoQFbzLYhc?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div> -->
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </section>
        <!-- Start of modal -->
                                    <div class="modal inmodal fade" id="myModal6" tabindex="-1" role="dialog"  aria-hidden="true">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                    <h4 class="modal-title">Order Form</h4>

                                                </div>
                                                <div class="modal-body">

                                                        <form method="POST" action="additem.php">

                                                            <div class="form-group row"><label class="col-sm-4 col-form-label">Product Name</label>
                                                                <div class="col-sm-8"><input type="text" class="form-control" name="product_name">
                                                                </div>



                                                         <div class="col-lg-2">
                                                <div class="input-group">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                                  <span class="glyphicon glyphicon-minus"></span>
                                                </button>
                                            </span>
                                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
                                            <span class="input-group-btn">
                                                <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                                    <span class="glyphicon glyphicon-plus"></span>
                                                </button>

        									<button type="submit" class="btn btn-primary" name="add">Submit</button>

                                            </span>

                                        </div>
                                </div>
                                        </div>
                                </div>
        	</div>
        </div>
                                                      </form>  </div>
                                                </div>
                                            </div>
                                        </div>
                                <!-- End of modal -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/date/jquery.js"></script>
<script src="js/date/date/bootstrap-datepicker.js"></script>
<script src="js/date/moment.js"></script>
<script src="js/date/transition.js"></script>
<script src="js/date/collapse.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/date/bootstrap.min.js"></script>
<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
$('#myInput').focus()
})
</script>
<!-- date start -->

<script>
$(document).ready(function(){
    var date_input=$('input[name="date"]'); //our date input has the name "date"
    var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
    date_input.datepicker({
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
    })

})

</script>

<!-- date end -->
</html>
