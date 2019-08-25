<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Victory Sriwijaya Education | Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="<?php echo base_url();?>theme/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>theme/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>theme/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
  <link rel="shortcut icon" href="<?php echo base_url();?>img/mini-logo.jpg">
  <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>theme/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>theme/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>theme/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <script>
function togglePassword() {
  var upass = document.getElementById('upass');
  var toggleBtn = document.getElementById('toggleBtn');
  if(upass.type == "password"){
    upass.type = "text";
    toggleBtn.value = "Hide";
  } else {
    upass.type = "password";
    toggleBtn.value = "Show";
  }
}
</script>
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
    <img src="<?php echo base_url();?>img/logo.jpg" style="width: 50%;height: 50%">
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Masukan Username dan Password</p>
        
    <form action="<?php echo base_url()?>login/verifikasi" method="POST">
          <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="Username" name='username' id="uname" required/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" id="upass" name='password' required/>
 <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
       
      <div class="form-group has-feedback">   
      <div class="col-xs-4">
      <input id="toggleBtn" class="btn btn-warning btn-block btn-sm" type="button" onclick="togglePassword()" value="Show">           
      </div>
            <div class="col-xs-4">                      
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <a href="#">Lupa password</a><br>


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url();?>theme/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <script src="<?php echo base_url();?>theme/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>theme/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>theme/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>theme/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>theme/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>theme/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>theme/plugins/fastclick/fastclick.min.js"></script>
    <script src="<?php echo base_url();?>theme/dist/js/app.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>theme/dist/js/demo.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
     <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
  </body>
</html>