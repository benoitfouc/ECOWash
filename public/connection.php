<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 04/04/2017
 * Time: 10:47
 */
include"../include/header.php"
?>
<title>Connexion</title>
</head>
<body>
<?php include"../include/navBar.php" ?>
<div class="row">
    <div class="col-md-3">

    </div>
    <div class="col-md-6 ">
        <div class="form-group">
            <form method="post">
            <label for="usr">Email :</label>
            <input type="text" class="form-control" id="usr">
        </div>
        <div class="form-group">
            <label for="pwd">Mot de passe:</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div class="form-group">
            <input type="submit" value="Envoyer !">

        </div>
            </form>
    </div>
    <div class="col-md-3">

    </div>
</div>
</body>
</html>
