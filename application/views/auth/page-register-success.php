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
                    <h4 class="text-uppercase font-bold m-b-0">Confirm Email</h4>
                </div>
                <div class="panel-body text-center">
                    <img src="<?=asset_path();?>/images/mail_confirm.png" alt="img" class="thumb-lg m-t-20 center-block" />
                    <p class="text-muted font-13 m-t-20"> A email has been send to <b><?=$this->session->flashdata('regsuccess_email');?></b>. Please check for an email from we and click on the included link to verify your email. </p>
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