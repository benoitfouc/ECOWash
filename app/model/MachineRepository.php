<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 06/04/2017
 * Time: 01:25
 */
namespace App\Model;


class MachineRepository
{
    public function getMachineUser($id){
        $req =SPDO::getInstance()->prepare('SELECT * FROM machine WHERE idpersonne ='.$id.'');
        $req->execute();
        $infoMachine = $req->fetch();
        return $infoMachine;
    }
}
