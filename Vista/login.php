<?php 
    if (isset($_GET['E'])) {

       $error110='Error: Verifique el usuario o la contraseña';
        
    }
    else{
        $error110="";
    }
 ?>
<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/login_two_columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:26:54 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>MAHSA | Login </title>

    <link href="../content/css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="../content/css/animate.css" rel="stylesheet">
    <link href="../content/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">Bienvenido </h2>


            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" method="POST" action="../controlador/validalogin.php">
                        <div class="form-group">
                            <input type="text" value="ar17" name="xnu" class="form-control" placeholder="Usuario" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" value="12345" name="xnp" class="form-control" placeholder="Contraseña" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Entrar</button>

                        <!-- <a href="#">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a> -->
                    </form>
                        <p><span style="font-weight: bold;color: red;"><?php echo $error110; ?></span></p>
                    <p class="m-t">
                        <small>MAHSA &copy; <?php echo date('Y'); ?></small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Mahsa 
            </div>
            <div class="col-md-6 text-right">
               <small>© <?php echo date('Y'); ?></small>
            </div>
        </div>
    </div>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.7.1/login_two_columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Oct 2017 15:26:54 GMT -->
</html>
