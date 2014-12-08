<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Admin Panel | Harpara High School</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="<?=$this->config->item('admin_assets_url');?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="<?=$this->config->item('admin_assets_url');?>assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=$this->config->item('admin_assets_url');?>assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="<?=$this->config->item('admin_assets_url');?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="<?=$this->config->item('admin_assets_url');?>assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href="<?=$this->config->item('admin_assets_url');?>assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="<?=$this->config->item('admin_assets_url');?>assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="<?=$this->config->item('admin_assets_url');?>assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="error-body no-top">
<div class="container">
  <div class="row login-container column-seperation">  
    <div class="col-md-4 col-md-offset-4">
      <div class="row-fluid">
        <h3>Admin <span class="semi-bold">Panel</span></h3>
        <p class="text-success">Enter your username and password to login</p>                
          <!-- <div class="alert alert-error">
            <button data-dismiss="alert" class="close"></button>
            Danger:&nbsp;The daily <a class="link" href="#">cronjob</a> has failed.                 
          </div> -->
          <?php echo $message;?>
          
          <?php $attributes = array('class' => 'email', 'id' => 'myform');
          echo form_open("auth/login", $attributes);?>

          <div class="row form-row">
            <div class="input-append col-md-10 col-sm-10 primary">
              <!-- <input type="text" placeholder="someone@example.com" class="form-control" id="appendedInput"> -->
              <?php 
                $data = array(
                //'name'        => 'username',
                //'id'          => 'username',
                //'value'       => 'johndoe',
                //'maxlength'   => 'someone@example.com',
                'name'          => 'identity',
                'placeholder'   => 'someone@example.com',
                'class'         => 'form-control',
                'id'            => 'appendedInput'
              );
              echo form_input($data);?>
              <span class="add-on"><span class="arrow"></span><i class="fa fa-align-justify"></i> </span> </div>
          </div>
          <div class="row form-row">
            <div class="input-append col-md-10 col-sm-10 primary">
              <!-- <input type="password" placeholder="your password" class="form-control" id="appendedInput2"> -->
              <?php
              $password = array(
                'type'          => 'password',
                'name'          => 'password',
                'placeholder'   => 'Your Password',
                'class'         => 'form-control',
                'id'            => 'appendedInput2'
              );
               echo form_input($password);?>
              <span class="add-on"><span class="arrow"></span><i class="fa fa-lock"></i> </span> </div>
          </div>
          <div class="row">
            <div class="control-group  col-md-10">
              <div class="checkbox checkbox check-success"> <a href="<?php echo base_url().'auth/forgot_password'; ?>">Trouble login in?</a>&nbsp;&nbsp;
                <!-- <input type="checkbox" id="checkbox1" value="1"> -->
                <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                <label for="checkbox1">Keep me reminded </label>
              </div>
            </div>
          </div>
          <div>
              <!-- <button class="btn btn-primary btn-cons-md" type="submit"> Login</button> -->
              <?php
                $button = array(
                  'class' => 'btn btn-primary btn-cons pull-left',
                  'type' => 'submit'
                );
                echo form_button($button, 'Log In');
              ?>
          </div>

          <?php echo form_close();?>
      </div>
    </div>        
  </div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="<?=$this->config->item('admin_assets_url');?>assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="<?=$this->config->item('admin_assets_url');?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?=$this->config->item('admin_assets_url');?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="<?=$this->config->item('admin_assets_url');?>assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="<?=$this->config->item('admin_assets_url');?>assets/js/login.js" type="text/javascript"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>
</html>