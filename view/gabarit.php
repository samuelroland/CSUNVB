<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?= $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">
    <!-- CSS pour pages -->
    <link href="/css/drugs.css" rel="stylesheet">

    <!-- Icons -->
    <link href="assets/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="assets/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

    <!-- Javascript de l'application -->
    <script src="js/global.js"></script>
    <script src="js/admin.js"></script>
    <script src="js/shiftEnd.js"></script>
    <script src="js/stups.js"></script>
    <script src="js/todoList.js"></script>

</head>
<body>

<div class="container">

    <header>
        <div class="row banner">
            <img class="col-2" src="/assets/images/logo.png">
            <a href="index.php" class="col-10 text-center mt-5 text-decoration-none"><h1>CSU-NVB</h1></a>
            <?php if(isset($_SESSION["user"])){?>
            <a href='index.php?action=disconnect' class="btn btn-primary m-1 pull-right">Disconnect</a>
            <p>Welcome <strong><?php echo $_SESSION["user"][1]?></strong></p>
            <?php } else { ?>
                <a href="?action=tryLogin" class="btn btn-primary m-1 pull-right">Login</a>
                <a href="?action=createAccount" class="btn btn-primary m-1 pull-right">Créer un Compte</a>

            <?php } ?>


        </div>
    </header>

    <div>
        <?= $content; ?>
    </div>

</body>
</html>
