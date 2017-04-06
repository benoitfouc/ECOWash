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
        $this->template = 'default';
        $form = new TemplateForm();
        $this->render('machine/index', compact('infomachine','form'));
    }
}
