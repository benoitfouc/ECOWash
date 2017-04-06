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
        $req =SPDO::getInstance()->prepare('SELECT * FROM machine WHERE idpersonne ='.$id.'.');
        $req->execute();
        $infoMachine = $req->fetch();
        return $infoMachine;
    }
    public function getReservoirStatut($id){
        $req =SPDO::getInstance()->prepare('SELECT * FROM `machine` INNER JOIN reservoir ON machine.idreservoir = reservoir.id WHERE idpersonne ='.$id.'.');
        $req->execute();
        $infoReservoir = $req->fetch();
        return $infoReservoir;
    }
    public function insertLesive($date,$heure,$minute,$idmachine,$idprogramme,$idtemperatures){
        $req=SPDO::getInstance()->prepare('INSERT INTO lessive(datedebut,heure,minutes,idmachine,idprogramme,idtemperatures)VALUES(:date,:heure,:minute,:idmachine,:idprogramme,:idtemperatures)');
        $req->bindValue(':date',$date);
        $req->bindValue(':heure',$heure);
        $req->bindValue(':minute',$minute);
        $req->bindValue(':idmachine',$idmachine);
        $req->bindValue(':idprogramme',$idprogramme);
        $req->bindValue(':idtemperatures',$idtemperatures);
        $req->execute();
    }
    public function getIdMachineUser($iduser){
        $req=SPDO::getInstance()->query('SELECT * FROM machine WHERE idpersonne ='.$iduser.'.');
        $datas = $req->fetchAll();
        foreach ($datas as $value) {
            $idmachine = $value['id'];

        }
        return $idmachine;
    }
    public function getAllProgramme()
    {
        $array = array();
        $req = SPDO::getInstance()->query('SELECT * FROM programme ORDER BY id ASC');
        $datas = $req->fetchAll();
        foreach ($datas as $value) {
            $string = $value['id'] . ' - ' . $value['libelle'];
            array_push($array, $string);
        }
        return $array;
    }
    public function getAllTemperature() {
        $array = array();
        $req = SPDO::getInstance()->query('SELECT * FROM temperatures ORDER BY id ASC');
        $datas = $req->fetchAll();
        foreach ($datas as $value){
            $string = $value['id'].' - '.$value['libelle'];
            array_push($array,$string);
        }
        return $array;
    }
}
