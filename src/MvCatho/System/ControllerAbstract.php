<?php

namespace MvCatho\System;

abstract class ControllerAbstract
{
    public function view($name, array $dados = array())
    {
        extract($dados, EXTR_OVERWRITE);
        return include "views/{$name}.phtml";
    }
}
