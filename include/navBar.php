<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 03/04/2017
 * Time: 15:19
 */
?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Afficher la navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" style="padding-top: 5px;" href="index.php"><img src="../images/logo.png" width="90"></img></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li id="Connexion" class="active"><a href="connection.php">Connexion</a></li>
                <li id="Compte"><a href="#">Mon compte</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Machine(s) <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li id="Machine"><a href="maMachine.php">Configuration</a></li>
                        <li><a href="#">Alertes</a></li>
                        <li><a href="#">Statistiques</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
