<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="<?php echo base_url('dist/js/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('dist/js/bootstrap.min.js')?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('dist/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('dist/css/seiCSS.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('dist/css/sb-admin-2.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('dist/font-awesome-4.1.0/font-awesome.min.css');?>">
    <title><?php echo $title?></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-info panel-transparent">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-5">
                                <img class="img-responsive img-rounded" src="<?php echo base_url('dist/img/banner.gif')?>">
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="hidden-xs hidden-sm"><br><br><br><br></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs nav-justified text-danger">
                                            <li role="presentation">
                                                <a href="<?php echo site_url('home');?>"><span class="glyphicon glyphicon-home"></span></a>
                                            </li>
                                            <li role="presentation">
                                                <a href="<?php echo site_url('profile');?>"><span class="glyphicon glyphicon-user"></span></a>
                                            </li>
                                            <li role="presentation"><a href="<?php echo site_url('gallery');?>"><span class="glyphicon glyphicon-picture"></span></a></li>
                                            <li role="presentation"><a href="<?php echo site_url('portfolio');?>"><span class="glyphicon glyphicon-th-list"></span></a></li>
                                            <li role="presentation"><a href="<?php echo site_url('contact');?>"><span class="glyphicon glyphicon-phone"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Main Content-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!--
                                    <div class="panel-heading">
                                        Basic Tabs
                                    </div> -->
                                    <!-- /.panel-heading -->
                                    <div class="panel-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a href="#home" data-toggle="tab">Home</a>
                                            </li>
                                            <li><a href="#profile" data-toggle="tab">Profile</a>
                                            </li>
                                            <li><a href="#messages" data-toggle="tab">Messages</a>
                                            </li>
                                            <li><a href="#settings" data-toggle="tab">Settings</a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="home">
                                                <h4>Home Tab</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                            <div class="tab-pane fade" id="profile">
                                                <h4>Profile Tab</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                            <div class="tab-pane fade" id="messages">
                                                <h4>Messages Tab</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                            <div class="tab-pane fade" id="settings">
                                                <h4>Settings Tab</h4>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                        </div>
                        <!--endMainContent-->
                        <div class="row">
                            <div class="col-md-12">
                                <br>
                                <p class="text-right">&copy;2014 <a href="http://www.twiter.com/sei_rifat/">sei_rifat</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>