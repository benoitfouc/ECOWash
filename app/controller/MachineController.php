<?php
/**
 * Created by PhpStorm.
 * User: Alexandre
 * Date: 06/04/2017
 * Time: 01:20
 */
namespace App\Controller;

use App\Model\MachineRepository;
use App\Model\UserRepository;
use Core\Controller\Controller;
use Core\HTML\TemplateForm;


class MachineController extends Controller
{
    public function index(){
        $userrepo = new UserRepository();
        $machinerepo = new MachineRepository();
        $infomachine = $machinerepo->getMachineUser($userrepo->getUserId());
        $listeProg=$machinerepo->getAllProgramme();
        $listeTemp = $machinerepo->getAllTemperature();
        $idmachine=$machinerepo->getIdMachineUser($userrepo->getUserId());
        $error="";
        $this->template = 'default';
        $form = new TemplateForm($_POST);

        if(!empty($_POST)){
            var_dump($_POST['minutes'],$_POST['heure']);
            $idtemp=$_POST['temperature'];
            $idprogramme= $_POST['prog'];

            if($_POST['date']){
                if($_POST['heure']>=23){
                    if($_POST['minutes']>=59){
                        
                    }else {
                        $error="Veuillez remplir une heure valide entre 0 et 59";
                    }
                }else {
                    $error="Veuillez remplir une heure valide entre 0 et 23";
                }
                $minute = $_POST['minutes'];
                $heure = $_POST['heure'];
                $date =$_POST['date'];
                $machinerepo->insertLesive($date,$heure,$minute,$idmachine,$idprogramme,$idtemp);
                $error="Lessive Programme";
            }else{
                $error="Remplissez une date";
            }
        }else{
            $error="Veuillez remplir le formulaire";
        }
        $this->render('machine/index', compact('infomachine','form','listeProg','listeTemp'));
    }
}
