<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PHOTOKRUB - ค้นหาช่างภาพ ถ่ายรูปพรีเว็ดดิ้ง งานแต่ง รับปริญญา งานอีเว้นท์ต่างๆ</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('css/modern-business.css" rel="stylesheet')?>">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('font-awesome/css/font-awesome.min.css" rel="stylesheet')?>" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('home')?>">PHOTOKRUB</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">สมัครสมาชิก
                    <small>กรอกข้อมูลส่วนตัว</small>
                </h1>
            </div>
        </div>
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <form action="register_add" method="post">
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Username :</label>
                          <input type="text" class="form-control" name="username" required data-validation-required-message="Please enter your email address.">
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Password :</label>
                          <input type="password" class="form-control" name="password" required data-validation-required-message="Please enter your email address.">
                      </div>
                  </div>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Confirm Password :</label>
                          <input type="password" class="form-control" name="conpassword" required data-validation-required-message="Please enter your email address.">
                      </div>
                  </div>
                  <hr>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>ชื่อ - นามสกุล :</label>
                            <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>เบอร์โทรศัพท์ :</label>
                            <input type="tel" class="form-control" name="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email :</label>
                            <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Line :</label>
                            <input type="text" class="form-control" name="appline" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Facebook :</label>
                            <input type="text" class="form-control" name="fb" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                </form>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>© 2017 Photokrub.com All rights reserved.</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="<?php echo base_url('js/jquery.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>

    <!-- Contact Form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="<?php echo base_url('js/jqBootstrapValidation.js')?>"></script>
    <script src="<?php echo base_url('js/contact_me.js')?>"></script>

</body>

</html>
