<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="<?php echo APPNAME;?>">
    <meta name="author" content="<?php echo AUTHOR;?>">
    <title><?php echo APPNAME;?></title>

  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css';?>">
    
<!--Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css';?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/square/blue.css';?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">    
    <div id="response"></div>
    <form name="loginfrm" id="loginfrm" method="post" name="loginfrm" id="loginfrm" method="post" action="<?php echo site_url("login/check");?>">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
     
        <div class="col-xs-8">
           
        </div>
       
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js';?>"></script

<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js';?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js';?>"></script>
 <link href="<?php echo site_url('assets/plugins/bootstrapValidator/bootstrapValidator.min.css');?>" rel="stylesheet" />
<script src="<?php echo base_url().'assets/plugins/bootstrapValidator/formValidation.min.js';?>"></script>    
<script src="<?php echo base_url().'assets/plugins/bootstrapValidator/bootstrap.min.js';?>"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });

    $('#loginfrm').bootstrapValidator({    
        fields: {
                username: {
                    validators: {
                            notEmpty: {
                            message: 'Username required'
                          }
                     }                    
                },
                password: {
                    validators: {
                            notEmpty: {
                            message: 'Username required'
                        }
                  },
                }
              }
            }).on('success.form.bv', function(e) {                
                e.preventDefault();      
                $("#response").hide();
                var url = $(this).attr('action');
                var data = $(this).serialize();
                var base_url = '<?php echo base_url();?>';
                $.ajax({
                    url:url,
                    type:'POST',
                    data:data,
                    dataType: "JSON"                  
                }).done(function (data){                     
                    if(data.ok == 0){ 
                        $("#response").show();
                        $("#response").html(data.msg);
                        $('#response').delay(5000).fadeOut('slow');                  
                    }else{                                                                                
                        window.location.href = base_url + data.urlpath1 + '/' + data.urlpath2;
                    }
                });
            });


  });

  


</script>
</body>
</html>
