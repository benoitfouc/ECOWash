<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <h2>Votre machine</h2>
    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <span>Votre premier bac<?php if($infomachine['premier'] ==1):?> est rempli<?php endif ?></span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php if($infomachine['premier']== 1){?> 100%;<?php }else{?>0%;<?php }?>">
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <span>Votre deuxieme bac<?php if($infomachine['second'] ==1):?> est rempli<?php endif ?></span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php if($infomachine['second']== 1){?> 100%;<?php }else{?>0%;<?php }?>">
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <span>Votre troisieme bac<?php if($infomachine['troisieme'] ==1):?> est rempli<?php endif ?></span>
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:<?php if($infomachine['troisieme']== 1){?> 100%;<?php }else{?>0%;<?php }?>">
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <form method="post">
            <?= $form->select('bac', 'Quelque bac souhaiter vous lancer', ['required'=>'true','onchange'=>'action','id'=>'bac'],$options=['1','2','3']); ?>

            <div id="premier" style="display:none ;">
                <?= $form->select?>
            </div>
            <div id="second" style="display:none ;">
                SECOND
            </div>
            <div id="troisieme" style="display:none ;">
                TROISEME
            </div>
            <?= $form->submit('Lancer la machine !','submit'); ?>
        </form>
    </div>
    <div class="col-md-3"></div>
</div>
<?php var_dump($infomachine,$infomachine['premier'])?>
