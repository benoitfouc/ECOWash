<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 03/04/2017
 * Time: 15:07
 */
?>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <?php include"../include/navBar.php" ?>
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6 ">
            <div class="form-group">
                <label for="usr">Email :</label>
                <input type="text" class="form-control" id="usr">
            </div>
            <div class="form-group">
                <label for="pwd">Mot de passe:</label>
                <input type="password" class="form-control" id="pwd">
            </div>
        </div>
        <div class="col-md-3">

        </div>

    </div>
</body>
</html>
