<?php

namespace MvCatho\Controller;

use MvCatho\System\ControllerAbstract;
use MvCatho\Model\Funcionario;
use MvCatho\Model\Pessoas;

class TesteController extends ControllerAbstract
{
    public function comprimentar()
    {
        /*$funcionario = new Funcionario();
        $dados['func'] = $funcionario->getAll();
        
        $this->view('comprimentar', $dados);*/
        
        //$model = new Pessoas();
        //$dados['cargo'] = $model->getCargoPorPessoa('burgo');
        
        $array = array();
        $this->view('comprimentar', $array);
        
        /*print "<pre>";
        var_dump($model);
        print "<hr />";
        print_r($model->getPessoasPorCargo('arquitetos'));
        print_r($model->getCargoPorPessoa('burgo'));*/
        
    }
}