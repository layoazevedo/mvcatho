<?php

namespace MvCatho\Model;

class Pessoas
{
    private $devel = array(
        'front-end' => array (
            'denis', 'marcelo', 'kota'   
        ),
        'back-end' => array(
            'verzolla', 'rubens', 'burgo'    
        ),
        'arquitetos' => array(
            'quiozini', 'capitao', 'kiki'    
        )
    );
    
    public function getAll()
    {
        return $this->devel;
    }
    
    public function getPessoasPorCargo($cargo)
    {
        return $this->devel[$cargo];
    }
    
    public function getCargoPorPessoa($pessoa)
    {
        foreach ($this->devel as $cargo => $arrPessoas) {
            if(in_array($pessoa, $arrPessoas)) {
                return $cargo;
            }
        }
    }
}
