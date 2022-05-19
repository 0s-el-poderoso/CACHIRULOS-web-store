<?php
session_start();

if (!(isset($_SESSION['adm'])) and !(isset($_SESSION['usr'])) and !(isset($_SESSION['prv']))){ header('Location: ../login.php'); }

if (isset($_SESSION['location'])){ $location = ($_SESSION['location']); }
if (isset($_SESSION['mensaje'])){ $mensaje = ($_SESSION['mensaje']); }
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CACHIRULOS - Procesando...</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../vendors/linericon/style.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="../vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="../vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="../vendors/animate-css/animate.css">
    <!-- main css -->    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <style>
        body {
            background: url(../img/thumb-white.jpg); 
            background-size: cover; 
            background-attachment: fixed;
        }

        div #cont{
            position: relative;
        }

        div #div-info{
            position: absolute;
            align-items: center;
            display: grid;
            top: -3rem;
            bottom: 0;
            left: 0;
            right: 0;
            max-width: 30%;
            min-width: 10rem;
            max-height: 10%;
            min-height: 5rem;
            margin: auto;
            border-radius: 10px;
        }

        p{
            margin-top: initial;
            margin-bottom: initial;
        }
    </style>
</head>

<body style="background-color: #eee;">

    <div class="container" id="cont">
        <div class="col-md-12 text-center badge-info" id="div-info">
            <?php if (isset($mensaje)) { ?>
                <p><?php echo $mensaje; ?></p>
            <?php } ?>
        </div>
    </div>

</body>

<script type="text/javascript" src="../js/jquery-3.4.1.js"></script>
<script>
    function redireccionar(){ var next_dir = '<?php echo $location; ?>';
        window.location = next_dir; } 
        setTimeout ("redireccionar()", 3000);
</script>

</html>

<?php
$_SESSION['location'] = null;
$_SESSION['mensaje'] = null;
?>