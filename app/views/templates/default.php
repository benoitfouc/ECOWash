<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>AppMvcMouli</title>
    <link href="<?= PATH ?>/public/css/bootstrap.css" rel="stylesheet">
    <link href="<?= PATH ?>/public/css/styles.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="<?=PATH?>/public/js/jsPourChange.js"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default" style="margin-top: 20px">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?= PATH ?>/home/index">PHPappMvc</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php if(\App\Model\UserRepository::logged()): ?>
                    <li><a href="<?= PATH ?>/user/profil">Profil</a></li>
                    <?php endif ?>
                    <?php if(\App\Model\UserRepository::logged()): ?>
                        <li><a href="<?= PATH ?>/machine/index">Votre Machine</a></li>
                    <?php endif ?>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eco Wash <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?=PATH?>/home/resume">ECO WASH</a></li>
                            <li><a href="<?=PATH?>/home/faq">F.A.Q</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php if(\App\Model\UserRepository::logged()): ?>
                    <li><a href="<?= PATH ?>/user/logout">Deconnexion</a></li>
                    <?php else: ?>
                    <li><a href="<?= PATH ?>/user/register">S'enregistrer</a></li>
                    <li><a href="<?= PATH ?>/user/login">Connexion</a></li>
                    <?php endif ?>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <?php echo $content; ?>
</div>
</body>
