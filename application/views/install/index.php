<!DOCTYPE html>
<html>
    <style>
        body{
            font-family: 'Open Sans', sans-serif;
        }
    </style>
  <head>
    <title>Bem -vindo ao Assistente de Instalação |Edu App PRO</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet" type="text/css">
    <link href="style/cms/bower_components/select2/dist/css/select2.min.css" rel="stylesheet">
    <link href="style/cms/bower_components/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <link href="style/cms/bower_components/dropzone/dist/dropzone.css" rel="stylesheet">
    <link href="style/cms/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="style/cms/bower_components/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="style/cms/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css" rel="stylesheet">
    <link href="style/cms/icon_fonts_assets/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="style/cms/icon_fonts_assets/picons-thin/style.css" rel="stylesheet">
    <link href="style/cms/css/main.css?version=3.3" rel="stylesheet">
  </head>
  <body class="auth-wrapper login" style="background: url('uploads/bglogin.jpg');background-size: cover;background-repeat: no-repeat;">
      <div class="auth-box-w wider">
        <div class="logo-wy">
          <a href="<?php echo base_url();?>"><img alt="" src="uploads/logo-color.png" width="35%"></a>
        </div>
         <form class="form-horizontal form-groups" method="post" action="<?php echo base_url();?>index.php/install/setup">
             
      <div class="steps-w">
        <div class="step-triggers">
          <a class="step-trigger active" href="#stepContent1">First</a><a class="step-trigger" href="#stepContent2">Second</a><a class="step-trigger" href="#stepContent3">Third</a>
        </div>
        <div class="step-contents">
          <div class="step-content active" id="stepContent1">
            <div class="row">
      <h5 class="form-header">
       Bem - vindo ao Assistente de Instalação do Edu App Pro!
      </h5>
      <h4>Obrigado por comprar Edu App Pro</h4>
      <?php
        session_start();
       if($_SESSION['error'] == '1'):?>
        <div class="alert alert-danger">Ocorreu um erro durante a instalação, verifique se as credenciais do seu banco de dados e os dados de compra estão corretos</div>
      <?php endif;?>
      <p>
        Temos certeza de que seremos a ferramenta para ajudá-lo a melhorar os processos da sua escola.<br> <br> Antes de iniciar o processo de instalação, verifique se você cumpre todas as seguintes condições.<b> Todos são necessários</b> 
      </p>
      <div class="table-responsive" style="margin: 0 auto; text-align:left">
      <table class="table table-lightbor table-lightfont">
        <tr>      
        <td>
                                  <?php
                                            if (is_writable('./application/config/database.php')):?>
                                                         <strong> Obrigatório:</strong> <span style="color:green">- application/config/database.php para ser gravável</span> <i class="picons-thin-icon-thin-0154_ok_successful_check" style="vertical-align:middle;font-size:18px;color:green"></i>
                                        <?php
                                            else:?>
         <strong>  Obrigatório:</strong> <span style="color:red">- aplicativo/config/database.php para ser gravável</span> <i class="picons-thin-icon-thin-0153_delete_exit_remove_close" style="vertical-align:middle;font-size:18px;color:red"></i>
                                        <?php endif;?>
        </td>
        </tr>
        <tr>      
        <td>
                                    <?php
                                            if (is_writable('./application/config/routes.php')):?>
         <strong>  Obrigatório:</strong> <span style="color:green">- application/config/routes.php para ser gravável</span> <i class="picons-thin-icon-thin-0154_ok_successful_check" style="vertical-align:middle;font-size:18px;color:green"></i>
                                        <?php
                                            else:?>
                                                         <strong>  Obrigatório:</strong> <span style="color:red">- application/config/routes.php para ser gravável</span> <i class="picons-thin-icon-thin-0153_delete_exit_remove_close" style="vertical-align:middle;font-size:18px;color:red"></i>
                                        <?php endif;?>

</td>
        </tr>
        <tr>      
        <td>
                            <?php
                                if (in_array  ('curl', get_loaded_extensions())):?>
 <strong> Obrigatório:</strong> <span style="color:green">- Função Php Curl habilitada</span> <i class="picons-thin-icon-thin-0154_ok_successful_check" style="vertical-align:middle;font-size:18px;color:green"></i>
                                        <?php
                                            else:?>
                                                 <strong> Obrigatório:</strong> <span style="color:red"Função Php Curl habilitadaled</span> <i class="picons-thin-icon-thin-0153_delete_exit_remove_close" style="vertical-align:middle;font-size:18px;color:red"></i>
                                        <?php endif;?>
        </td>
        </tr>
      </table>
      </div>
      <legend><span>Verifique a compra (<a target="_blank" href="https://dudumuniz.tech">DM Tech!</a>)</span></legend>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for=""> Nome de usuário*</label><input class="form-control" placeholder="Nome de usuário" required="" name="code_username" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Código de compra*</label><input class="form-control" placeholder="Digite qualquer valor!" name="purchase_code" required="" required type="text">
                </div>
              </div>
            </div>
            <div class="form-buttons-w text-right">
              <a class="btn btn-primary step-trigger-btn" href="#stepContent2"> Continuar</a>
            </div>
          </div>
          <div class="step-content" id="stepContent2">
            <div class="row">
              <legend><span>Configurações do banco de dados</span></legend>
        <p>Você deve criar seu banco de dados com seu provedor de hospedagem, se tiver dúvidas, poderá solicitar esses dados para o suporte à sua hospedagem.
              <div class="col-sm-6">
                <div class="form-group">
                  <label for=""> Database Name*</label><input class="form-control" name="database" required placeholder="Nome do banco de dados de dados" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Host*</label><input class="form-control" placeholder="Hostname" name="hostname" type="text">
                </div>
              </div>
        <div class="col-sm-6">
                <div class="form-group">
                  <label for=""> Nome de usuário do banco de dados*</label><input class="form-control" required placeholder="Nome de usuário do banco de dados" name="dbusername" type="text">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="">Database password*</label><input class="form-control" placeholder="Database Password" name="dbpassword" type="password">
                </div>
              </div>
            </div>
            <div class="form-buttons-w text-right">
              <a class="btn btn-primary step-trigger-btn" href="#stepContent3">Próxima</a>
            </div>
          </div>
          <div class="step-content" id="stepContent3">
      <legend><span>Configurações do sistema</span></legend>
            <div class="row">
      <div class="form-group col-sm-6">
      <label class="col-form-label" for="">Nome do sistema</label>
        <div class="input-group">
        <div class="input-group-addon">
          <i class="picons-thin-icon-thin-0047_home_flat"></i>
        </div>
        <input class="form-control" placeholder="Minha escola" name="system_name" required type="text">
        </div>
      </div>
      <div class="form-group col-sm-6">
      <label class="col-form-label" for=""> Título do sistema</label>
        <div class="input-group">
        <div class="input-group-addon">
          <i class="picons-thin-icon-thin-0003_write_pencil_new_edit"></i>
        </div>
        <input class="form-control" placeholder="Meu aplicativo escolar" name="system_title" required type="text">
        </div>
        </div>
        <div class="form-group col-sm-6">
        <label class="col-form-label" for=""> Linguagem</label>
          <div class="input-group">
          <div class="input-group-addon">
            <i class="picons-thin-icon-thin-0307_chat_discussion_yes_no_pro_contra_conversation"></i>
          </div>
          <select class="form-control" name="language" required="">
                <option value="">Selecione</option>
                <option value="english">Inglês</option>
                <option value="spanish">Espanhol</option>
                <option value="portuguese">Português</option>
                <option value="hindi">Hindi</option>
                <option value="french">Francês</option>
                <option value="serbian">Sérvia</option>
                <option value="arabic">árabe</option>
          </select>
        </div>
        </div>
      <div class="form-group col-sm-6">
      <label class="col-form-label" for=""> Moeda</label>
        <div class="input-group">
        <div class="input-group-addon">
          <i class="picons-thin-icon-thin-0406_money_dollar_euro_currency_exchange_cash"></i>
        </div>
        <input class="form-control" placeholder="$" name="currency" type="text">
        </div>
        </div>
                <div class="col-sm-6">
                <div class="form-group">
                  <label for=""> Nome de usuário do administrador*</label><input class="form-control" required placeholder="Nome de usuário do administrador" name="admin" type="text">
                </div>
              </div>
                    <div class="col-sm-6">
                <div class="form-group">
                  <label for=""> Admin password*</label><input class="form-control" required placeholder="Senha Database" name="adminpass" type="password">
                </div>
              </div>
                          <div class="form-buttons-w text-right">
                             <button class="btn btn-primary" type="submit">Terminar</button>
                          </div>
          </div>
        </div>
      </div>
         </form>
      </div>
    <script src="style/cms/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="style/cms/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="style/cms/bower_components/moment/moment.js"></script>
    <script src="style/cms/bower_components/chart.js/dist/Chart.min.js"></script>
    <script src="style/cms/bower_components/select2/dist/js/select2.full.min.js"></script>
    <script src="style/cms/bower_components/bootstrap-validator/dist/validator.min.js"></script>
    <script src="style/cms/bower_components/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="style/cms/bower_components/tether/dist/js/tether.min.js"></script>
    <script src="style/cms/bower_components/bootstrap/js/dist/util.js"></script>
    <script src="style/cms/bower_components/bootstrap/js/dist/alert.js"></script>
    <script src="style/cms/bower_components/bootstrap/js/dist/button.js"></script>
    <script src="style/cms/bower_components/bootstrap/js/dist/carousel.js"></script>
    <script src="style/cms/bower_components/bootstrap/js/dist/collapse.js"></script>
    <script src="style/cms/bower_components/bootstrap/js/dist/dropdown.js"></script>
    <script src="style/cms/bower_components/bootstrap/js/dist/modal.js"></script>
    <script src="style/cms/bower_components/bootstrap/js/dist/tab.js"></script>
    <script src="style/cms/bower_components/bootstrap/js/dist/tooltip.js"></script>
    <script src="style/cms/bower_components/bootstrap/js/dist/popover.js"></script>
    <script src="style/cms/js/main.js?version=3.3"></script>
  </body>
</html>