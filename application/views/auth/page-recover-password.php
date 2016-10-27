<?=$header;?>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="text-center">
                <a href="<?php echo site_url('auth/create_account'); ?>" class="logo"><span><?=$this->config->item('auth_text')['text1'];?><span><?=$this->config->item('auth_text')['text2'];?></span></span></a>
                <h5 class="text-muted m-t-0 font-600"><?=$this->config->item('auth_text')['tagline'];?></h5>
            </div>
            
            <div class="m-t-40 card-box">
                <div class="text-center">
                    <h4 class="text-uppercase font-bold m-b-0">Reset Password</h4>

                    <p class="text-muted m-b-0 font-13 m-t-20">Enter your email address and we'll send you an email with instructions to reset your password.  </p>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal m-t-20" action="index.html">

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" required="" placeholder="Enter email">
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20 m-b-0">
                            <div class="col-xs-12">
                                <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light" type="submit">Send Email</button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-center">
                    <p class="text-muted">Return to <a href="<?php echo site_url('auth');?>" class="text-primary m-l-5"><b>Sign in</b></a></p>
                </div>
            </div>

        </div>
        <!-- end wrapper page -->
<?=$footer;?>