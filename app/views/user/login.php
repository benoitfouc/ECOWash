<h2 class="center">Page Login</h2>

<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form method="post">
            <?= $form->input('email', 'Email', ['required'=>'true','type' => 'email']); ?>
            <?= $form->input('password', 'Mot de passe', ['required'=>'true','type' => 'password']); ?>
            <?= $form->submit('Se connecter !','submit'); ?>
        </form>
    </div>
</div>
<p class="center red bold"><?php echo $error; ?></p>
