<?php 
   require_once "face/config.php";
   $redirectURL = base_url()."auth/loginfacebook/";
   $permissions = ['email'];
   $loginURL2 = $helper->getLoginUrl($redirectURL, $permissions);
?>

<?php $title = $this->db->get_where('settings' , array('type'=>'system_title'))->row()->description; ?>
<?php $system_name = $this->db->get_where('settings' , array('type'=>'system_name'))->row()->description; ?>
<?php
  include_once 'src/Google_Client.php';
  include_once 'src/contrib/Google_Oauth2Service.php';
  $clientId = $this->db->get_where('settings', array('type' => 'google_sync'))->row()->description;
  $clientSecret = $this->db->get_where('settings', array('type' => 'google_login'))->row()->description;
  $redirectURL = base_url().'auth/login/';
  $gClient = new Google_Client();
  $gClient->setApplicationName('google');
  $gClient->setClientId($clientId);
  $gClient->setClientSecret($clientSecret);
  $gClient->setRedirectUri($redirectURL);
  $google_oauthV2 = new Google_Oauth2Service($gClient);
  $authUrl = $gClient->createAuthUrl();
  $output = filter_var($authUrl, FILTER_SANITIZE_URL);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_phrase('login');?> | <?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/login/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/login/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/login/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>style/login/css/iofrm-theme16.css">
    <link href="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'favicon'))->row()->description;?>" rel="icon">
   
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
   
   <style>
        @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

*{
    margin: 0px;
    padding: 0px;
}

body{
    position: relative;
    font-family: 'Exo', sans-serif;
}


.context {
    height: 90%;
    z-index: 999;
    width: 100%;
    position: absolute;

}

.context h1{
    text-align: center;
    color: #fff;
    font-size: 50px;
}


.area{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    background: #9048AC;
    background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);  
    width: 100%;
    height:100%;
    
   
}

.circles{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.circles li{
    position: absolute;
    display: block;
    list-style: none;
    width: 20px;
    height: 20px;
    color:rgba(255, 255, 255, 0.425);
    animation: animate 25s linear infinite;
    bottom: -150px;
    
}

.circles li:nth-child(1){
    left: 20%;
    width: 80px;
    font-size: 5em;
    animation-delay: 1s;
}


.circles li:nth-child(2){
    font-size: 5em;
    height: 20px;
    animation-delay: 2s;
    animation-duration: 10s;
}

.circles li:nth-child(3){
    font-size: 5em;
    left: 65%;
    width: 20px;
    height: 20px;
    animation-delay: 3s;
}

.circles li:nth-child(4){
    font-size: 5em;
    left: 15%;
    width: 60px;
    height: 60px;
    animation-delay: 0s;
    animation-duration: 18s;
}

.circles li:nth-child(5){
    font-size: 5em;
    left: 95%;
    width: 20px;
    height: 20px;
    animation-delay: 0s;
}

.circles li:nth-child(6){
    font-size: 5em;
    left: 80%;
    width: 110px;
    height: 110px;
    animation-delay: 2.5s;
}

.circles li:nth-child(7){
    font-size: 5em;
    left: 2%;
    width: 150px;
    height: 150px;
    animation-delay: 5s;
}

.circles li:nth-child(8){
    font-size: 5em;
    left: 85%;
    width: 25px;
    height: 25px;
    animation-delay: 10s;
    animation-duration: 30s;
}

.circles li:nth-child(9){
    font-size: 5em;
    left: 20%;
    width: 15px;
    height: 15px;
    animation-delay: 2s;
    animation-duration: 35s;
}

.circles li:nth-child(10){
    font-size: 5em;
    left: 85%;
    width: 150px;
    height: 150px;
    animation-delay: 0s;
    animation-duration: 11s;
}



@keyframes animate {

    0%{
        transform: translateY(0) rotate(0deg);
        opacity: 1;
        border-radius: 0;
    }

    100%{
        transform: translateY(-1000px) rotate(720deg);
        opacity: 0;
        border-radius: 50%;
    }

}
    </style>

</head>
<body>

    <div class="context">
    <div class="form-body without-side" style="margin: 0;">
        <div class="row" style="margin: 0;">
            <div class="form-holder" style="margin: 0;">
                <div class="form-content" style="max-height:80%;margin:0;top: 5%;max-height: 50vh;padding: 30px;">
                    <div class="form-items" style="box-shadow: 1px 5px 8px #3a3a3a;max-height:80%;">
                        <center><img class="logo-size" src="<?php echo base_url();?>uploads/<?php echo $this->db->get_where('settings', array('type' => 'logo'))->row()->description;?>" alt="" style="width:120px;"></center>
                        <br><h5 style="text-align:center;text-shadow:1px 2px 3px #3a3a3a;font-weight: bold;"><?php echo get_phrase('Faça login na sua conta');?></h5><br>
                         <?php if($this->session->userdata('error') == '1'):?>    
                            <div class="form-login-error">
                                <center><div class="alert alert-danger"><?php echo get_phrase('erro de login');?></div></center>
                            </div>
                        <?php endif;?>
                        <?php if($this->session->userdata('failed') == '1'):?>
                            <div class="alert alert-danger" style="text-align: center; font-weight: bold;"><?php echo get_phrase('Erro rede social');?></div>
                        <?php endif;?>
                        <?php if($this->session->userdata('success_recovery') == '1'):?>
                            <div class="alert alert-success" style="text-align: center; font-weight: bold;"><?php echo get_phrase('Redefinição de senha');?></div>
                        <?php endif;?>
                        <?php if($this->session->userdata('failedf') == '1'):?>
                            <div class="alert alert-danger" style="text-align: center; font-weight: bold;"><?php echo get_phrase('Erro rede social');?></div>
                        <?php endif;?>
                        <form method="post" action="<?php echo base_url();?>login/auth/">
                            <input class="form-control" type="text" name="username" placeholder="<?php echo get_phrase('nome de usuário');?>" required>
                            <input class="form-control" type="password" name="password" placeholder="<?php echo get_phrase('Senha');?>" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn"><?php echo get_phrase('login');?></button> <a href="<?php echo base_url();?>forgot_password/"><?php echo get_phrase('esqueci minha senha');?></a>
                            </div>
                        </form>
                        <?php if($this->db->get_where('settings', array('type' => 'social_login'))->row()->description == 1):?>
                            <div class="other-links" style="text-align:center">
                                <div class="text"><?php echo get_phrase('ou');?></div>
                                <a href="<?php echo $loginURL2;?>"><i class="fab fa-facebook-f"></i>Facebook</a><a href="<?php echo $output;?>"><i class="fab fa-google"></i>Google</a>
                            </div>
                        <?php else:?><br><br>
                        <?php endif;?>
                        <div class="page-links">
                            <a href="<?php echo base_url();?>terms/"><?php echo get_phrase('termos e Condições');?></a>
                            <?php if($this->db->get_where('settings', array('type' => 'register'))->row()->description == 1):?><a href="<?php echo base_url();?>register/"><?php echo get_phrase('Criar Conta');?></a><?php endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="area" >
            <ul class="circles">
                    <li class='fas fa-school'></li>
                    <li class='fas fa-pencil-alt'></li>
                    <li class="fa fa-graduation-cap" aria-hidden="true"></li>
                    <li class="fa fa-user-circle"></li>
                    <li  class="fa fa-font" aria-hidden="true"></li>
                    <li class="fa fa-list-alt" aria-hidden="true"></li>
                    <li class="fa fa-bus" aria-hidden="true"></li>
                    <li class="fa fa-venus-mars" aria-hidden="true"></li>
                    <li class="fa fa-cog" aria-hidden="true"></li>
                    <li class='fas fa-pencil-alt'></li>
            </ul>
</div>
    
    <script src="<?php echo base_url();?>style/login/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>style/login/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>style/login/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>style/login/js/main.js"></script>
</body>
</html>