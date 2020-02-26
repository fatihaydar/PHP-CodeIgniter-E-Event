<!DOCTYPE html>
<html lang="tr" xmlns="http://www.w3.org/1999/html">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?=base_url()?>/assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?=base_url()?>/assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?=base_url()?>/assets/admin/css/sb-admin.css" rel="stylesheet">


  </head>
<?=$this->session->flashdata("mesaj")?>
  <style>body{
          background: url("<?=base_url()?>uploads/karaman.jpg") no-repeat center center fixed;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          font-family:'HelveticaNeue','Arial', sans-serif;

      }
      a{color:#58bff6;text-decoration: none;}
      a:hover{color:#aaa; }
      .pull-right{float: right;}
      .pull-left{float: left;}
      .clear-fix{clear:both;}
      div.logo{text-align: center; margin: 20px 20px 30px 20px; fill: #566375;}
      div.logo svg{
          width:180px;
          height:100px;
      }
      .logo-active{fill: #44aacc !important;}
      #formWrapper{
          background: rgba(0,0,0,.2);
          width:100%;
          height:100%;
          position: absolute;
          top:0;
          left:0;
          transition:all .3s ease;}
      .darken-bg{background: rgba(0,0,0,.5) !important; transition:all .3s ease;}

      div#form{
          position: absolute;
          width:360px;
          height:320px;
          height:auto;
          background-color: #fff;
          margin:auto;
          border-radius: 5px;
          padding:20px;
          left:50%;
          top:50%;
          margin-left:-180px;
          margin-top:-200px;
      }
      div.form-item{position: relative; display: block; margin-bottom: 20px;}
      input{transition: all .2s ease;}
      input.form-style{
          color:#8a8a8a;
          display: block;
          width: 90%;
          height: 44px;
          padding: 5px 5%;
          border:1px solid #ccc;
          -moz-border-radius: 27px;
          -webkit-border-radius: 27px;
          border-radius: 27px;
          -moz-background-clip: padding;
          -webkit-background-clip: padding-box;
          background-clip: padding-box;
          background-color: #fff;
          font-family:'HelveticaNeue','Arial', sans-serif;
          font-size: 105%;
          letter-spacing: .8px;
      }
      div.form-item .form-style:focus{outline: none; border:1px solid #58bff6; color:#58bff6; }
      div.form-item p.formLabel {
          position: absolute;
          left:26px;
          top:2px;
          transition:all .4s ease;
          color:#bbb;}
      .formTop{top:-22px !important; left:26px; background-color: #fff; padding:0 5px; font-size: 14px; color:#58bff6 !important;}
      .formStatus{color:#8a8a8a !important;}
      input[type="submit"].login{
          float:right;
          width: 112px;
          height: 37px;
          -moz-border-radius: 19px;
          -webkit-border-radius: 19px;
          border-radius: 19px;
          -moz-background-clip: padding;
          -webkit-background-clip: padding-box;
          background-clip: padding-box;
          background-color: #55b1df;
          border:1px solid #55b1df;
          border:none;
          color: #fff;
          font-weight: bold;
      }
      input[type="submit"].login:hover{background-color: #fff; border:1px solid #55b1df; color:#55b1df; cursor:pointer;}
      input[type="submit"].login:focus{outline: none;}

  </style>
<style>
      $(document).ready(function(){
          var formInputs = $('input[type="email"],input[type="password"]');
      formInputs.focus(function() {
          $(this).parent().children('p.formLabel').addClass('formTop');
          $('div#formWrapper').addClass('darken-bg');
          $('div.logo').addClass('logo-active');
      });
      formInputs.focusout(function() {
      if ($.trim($(this).val()).length == 0){
          $(this).parent().children('p.formLabel').removeClass('formTop');
      }
      $('div#formWrapper').removeClass('darken-bg');
      $('div.logo').removeClass('logo-active');
      });
      $('p.formLabel').click(function(){
          $(this).parent().children('.form-style').focus();
      });
      });
</style>










  <body>
  <div id="formWrapper">

      <div id="form">
          <div class="logo" style="width: 300px;height: 100px" >
              <img src="<?=base_url()?>uploads/kardof.png">

          </div>
          <form method="post" action="<?=base_url()?>admin/login/login_ol">
          <div class="form-item">
              <p class="formLabel" > <b style="color: black">Email</b></p>
              <br>
              <input type="email" name="email" id="email" class="form-style" />
          </div>
          <div class="form-item">
              <p class="formLabel"><b style="color:black;">Şifre</b></p>
              <br>
              <input type="password" name="sifre" id="password" class="form-style" />


          </div>
          <div class="form-item">

              <input type="submit" class="login pull-right" value="Giriş Yap">
              <div class="clear-fix"></div>
          </div>
      </div>
  </form>
  </div>
  </body>

</html>
