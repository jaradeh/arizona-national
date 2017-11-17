<?php
/* @var $this yii\web\View */

$this->title = 'Arizona National';
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Version 2.0</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-tasks"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Projects</span>
                        <span class="info-box-number"><?php echo $projects ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-shield"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Services</span>
                        <span class="info-box-number"><?php echo $services ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix visible-sm-block"></div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-file-code-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Careers Available</span>
                        <span class="info-box-number"><?php echo $careers ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-yellow"><i class="fa fa-file-pdf-o"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Received Resume</span>
                        <span class="info-box-number"><?php echo $resume ?></span>
                    </div>
                    <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <br /><br /><br />
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-sm-2">
                            <center><img src="/images/logo-1.png" class="img-responsive"></center>
                        </div> 
                        <div class="col-sm-10">
                            <h1>Arizona National admin</h1>
                        </div>
                        <div class="col-sm-12">
                            <p>Start managing your website from one place </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="panel-group">
                    <div class="panel panel-default">
                        <div class="panel-heading">Projects & Services</div>
                        <div class="panel-body">
                            <a href="/backend/web/projects">Projects</a>
                        </div>
                        <div class="panel-body">
                            <a href="/backend/web/services">Services</a>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Contact(s) requests</div>
                        <div class="panel-body">
                            <a href="/backend/web/contact">Contact Us</a>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">Careers & Resume</div>
                        <div class="panel-body">
                            <a href="/backend/web/careers">Careers</a>
                        </div>
                        <div class="panel-body">
                            <a href="/backend/web/resume">Resume</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
