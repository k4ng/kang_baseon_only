<?=$header;?>
    <body>
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="<?php echo site_url('auth'); ?>" class="logo"><span><?=$this->config->item('auth_text')['text1'];?><span><?=$this->config->item('auth_text')['text2'];?></span></span></a>
                <h5 class="text-muted m-t-0 font-600"><?=$this->config->item('auth_text')['tagline'];?></h5>
            </div>
        	<div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Sign In</h4>
                    <h5 class="font-bold m-b-0" style="color: red;"><?=$this->session->flashdata('fail_m');?></h5>
                </div>
                <div class="panel-body">
                    <?php echo form_open("auth/verify",array("class" => "form-horizontal m-t-20"));?>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" name="access" type="text" placeholder="Username" value="<?=$this->session->flashdata('fail');?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" name="password" type="password" placeholder="Password">
                            </div>
                        </div>

                        <!-- <div class="form-group ">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-custom">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">
                                        Remember me
                                    </label>
                                </div>

                            </div>
                        </div> -->

                        <div class="form-group text-center m-t-30">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12">
                                <a href="<?php echo site_url('auth/recover_password');?>" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                            </div>
                        </div>
                    <?php echo form_close();?>

                </div>
            </div>
            <!-- end card-box-->

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Don't have an account? <a href="<?php echo site_url('auth/create_account'); ?>" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                </div>
            </div>
            
        </div>
        <!-- end wrapper page -->
<?=$footer;?>