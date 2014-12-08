<!-- BEGIN PAGE LEVEL STYLES -->
<link href="<?php echo site_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css'); ?> " rel="stylesheet" type="text/css"/>
<link href="<?php echo site_url('assets/admin/pages/css/profile.css'); ?> " rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE LEVEL STYLES -->

<script src="<?php echo site_url('assets/global/plugins/ckeditor-full/ckeditor.js" type="text/javascript'); ?> "></script>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN PAGE CONTENT-->
<div class="row profile">
    <div class="col-md-12">
        <!--BEGIN TABS-->
        <div class="tabbable tabbable-custom tabbable-full-width">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#overview-tab" data-toggle="tab">
                        Overview </a>
                </li>
                <li>
                    <a href="#update-profile-tab" data-toggle="tab">
                        Update Profile </a>
                </li>

                <li>
                    <a href="#help-tab" data-toggle="tab">
                        Help </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="overview-tab">
                    <div class="row">
                        <div class="col-md-3">
                            <ul class="list-unstyled profile-nav">
                                <li>
                                    <img src="<?php echo base_url(); ?>uploads/users/<?php echo $user_profile_info->image; ?>" class="img-responsive" alt=""/>

                                </li>

                                <li>
                                    <a href="<?php echo site_url('admin/message/inbox/'); ?>">
                                        MY Messages 
                                    </a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('admin/lectureresult/index/add/');?>">
										Add New Lecture / Result
                                    </a>
                                </li>
								

                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-12 profile-info">
                                    <header class="">
                                        <h1><?php echo ucwords($user_profile_info->username); ?></h1>
                                        <h5><?php echo ucwords($user_profile_info->company); ?></h5>
                                    </header>
                                   
                                    <ul class="well list-inline">
                                        <li>
                                            <i class="fa fa-envelope"></i> Email: <?php echo $user_profile_info->email; ?>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone"></i> Mobile: <?php echo $user_profile_info->phone; ?>
                                        </li>
                                        </br>
                                        
                                    </ul>
                                </div>
                                <!--end col-md-12-->


                            </div>
                            <!--end row-->
                            <div class="tabbable tabbable-custom tabbable-custom-profile">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#profile-info-tab" data-toggle="tab">
                                            Profile Info</a>
                                    </li>
                                   
                                </ul>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!--tab_1_2-->
                <div class="tab-pane" id="update-profile-tab">
                    <div class="row profile-account">
                        <div class="col-md-3">
                            <ul class="ver-inline-menu tabbable margin-bottom-10">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab_1-1">
                                        <i class="fa fa-cog"></i> Profile info </a>
                                    <span class="after">
                                    </span>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab_2-2">
                                        <i class="fa fa-picture-o"></i> Change Image </a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('auth/change_password'); ?>">
                                        <i class="fa fa-lock"></i> Change Password </a>
                                </li>
                                
                            </ul>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div id="tab_1-1" class="tab-pane active">
                                    <?php echo validation_errors(); ?>
                                    <?php echo form_open('admin/profile'); ?>
                                    <div class="form-group">

                                        <label class="control-label">Full Name</label>
                                        <?php echo form_input('username', set_value('username', $profile->username), 'class="form-control"', 'placeholder="Name'); ?>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Mobile Number</label>
                                        <?php echo form_input('phone', set_value('phone', $profile->phone), 'class="form-control"', 'placeholder="Mobile Number'); ?>
                                    </div>

                                    <div class="margiv-top-10">
                                        <?php echo form_submit('submit', 'Save', 'class="btn green"'); ?>

                                        <a href="#" class="btn default">
                                            Cancel </a>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                                <div id="tab_2-2" class="tab-pane">
                                    <p>
                                        Please Upload your Profile Picture First-> select image Second-> submit. Done!!
                                        </p>
                                    <?php
                                    $attributes = array('enctype' => 'multipart/form-data');
                                    echo form_open('admin/profile/upload_avatar', $attributes);
                                    ?>

                                    <div class="form-group">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                <img src="

                                                     <?php echo base_url(); ?>uploads/users/<?php echo $user_profile_info->image; ?>" alt=""/>
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px;
                                                 max-height: 150px;
                                                 ">
                                            </div>
                                            <div>
                                                <span class="btn default btn-file">
                                                    <span class="fileinput-new">
                                                        Select image </span>
                                                    <span class="fileinput-exists">
                                                        Change </span>
                                                    <input type="file" name="files[]">
                                                </span>
                                                <a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
                                                    Remove </a>
                                            </div>
                                        </div>
                                        <div class = "clearfix margin-top-10">
                                            <span class = "label label-danger">
                                                NOTE!</span>
                                            <span>
                                                Attached image thumbnail is supported in Latest Firefox, Chrome, Opera, Safari and Internet Explorer 10 only </span>
                                        </div>
                                    </div>
                                    <div class = "margin-top-10">
                                        <button type="submit" class = "btn green">
                                            Submit </button>
                                        <a href = "#" class = "btn default">
                                            Cancel </a>
                                    </div>
                                    <?php echo form_close(); ?>
                                </div>
                                <div id = "tab_3-3" class = "tab-pane">
                                </div>
                                <div id = "tab_4-4" class = "tab-pane">
                                    <form action = "#">
                                        <table class = "table table-bordered table-striped">
                                            <tr>
                                                <td>
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..
                                                </td>
                                                <td>
                                                    <label class = "uniform-inline">
                                                        <input type = "radio" name = "optionsRadios1" value = "option1"/>
                                                        Yes </label>
                                                    <label class = "uniform-inline">
                                                        <input type = "radio" name = "optionsRadios1" value = "option2" checked/>
                                                        No </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                </td>
                                                <td>
                                                    <label class = "uniform-inline">
                                                        <input type = "checkbox" value = ""/> Yes </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                </td>
                                                <td>
                                                    <label class = "uniform-inline">
                                                        <input type = "checkbox" value = ""/> Yes </label>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    Enim eiusmod high life accusamus terry richardson ad squid wolf moon
                                                </td>
                                                <td>
                                                    <label class = "uniform-inline">
                                                        <input type = "checkbox" value = ""/> Yes </label>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--end profile-settings-->
                                        <div class = "margin-top-10">
                                            <a href = "#" class = "btn green">
                                                Save Changes </a>
                                            <a href = "#" class = "btn default">
                                                Cancel </a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end col-md-9 -->
                    </div>
                </div>
                <!--end tab-pane-->

                <!--end row-->

                <!--end tab-pane-->
                <?php $this->load->view('admin/profile_help.php');?>
            </div>
        </div>
        <!--END TABS-->
    </div>
</div>
<!-- END PAGE CONTENT-->
<script src="<?php echo site_url('assets/global/plugins/jquery-1.11.0.min.js" type="text/javascript'); ?> "></script>

<script type="text/javascript" src=<?php echo site_url('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js'); ?>></script>
<!-- END PAGE LEVEL PLUGINS -->

