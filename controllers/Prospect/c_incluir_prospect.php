<?php
session_start();

require_once('ControllerProspect.php');
require_once('../../models/Prospect.php');

use models\Prospect; //necessário a model de prospect pela necessidade de um objeto do tipo prospect como parâmetro
use controllers\ControllerProspect;

$ctrlProspect = new ControllerProspect(); 



if(isset($_POST['cadastrar'])){
    $prospect = new Prospect();
    $prospect->addProspect($_POST['nome'], $_POST['email'], $_POST['celular'],
                            $_POST['facebook'], $_POST['whatsapp']);
}

try{
    $ctrlProspect->salvarProspect($prospect);
    unset($ctrlProspect);
    unset($prospect);
    $_SESSION['prospectSalvo'] = "Salvos com sucesso"; 
    header("Location: ../../index.php");
}catch(Exception $e){
    $_SESSION['erroProspectNovo'] = $e->getMessage();
    unset($ctrlProspect);
    unset($prospect);
    header("Location: ../../views/Prospect/v_incluir_prospect.php");
}
?>