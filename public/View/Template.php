<?php require_once 'Model/GlobalLang.php'?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">

    <title><?=TITLE?></title>

    <!-- jQuery -->
    <script type="text/javascript" src="Vendor/js/jquery-3.2.1.min.js"></script>
    <!-- This following line is optional. Only necessary if you use the option css3:false and you want to use other easing effects rather than "linear", "swing" or "easeInOutCubic". -->
    <script src="Vendor/js/fullPage.js-master/vendors/jquery.easings.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://unpkg.com/popper.js"></script>

    <!-- bootstrap -->
    <script type="text/javascript" src="Vendor/js/bootstrap.js" ></script>
    <link href="Vendor/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">

    <!-- font awesome -->
    <link href="Vendor/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">


    <link href="Content/main.css" rel="stylesheet" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="Vendor/js/fullPage.js-2.9.4/jquery.fullPage.css" />




    <!-- This following line is only necessary in the case of using the option `scrollOverflow:true` -->
    <script type="text/javascript" src="Vendor/js/fullPage.js-2.9.4/vendors/scrolloverflow.min.js"></script>

    <script type="text/javascript" src="Vendor/js/fullPage.js-2.9.4/jquery.fullPage.js"></script>

    <script type="text/javascript" src="Vendor/js/fullPage.js-2.9.4/jquery.fullPage.min.js"></script>



    <script type="text/javascript" src="Javascript/home.js"></script>




</head>

<?php include "NavBar.php"?>

<body>
<?php echo $content ?>

</body>

</html>