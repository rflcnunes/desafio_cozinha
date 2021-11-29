<?php

require_once("infos.php");
require_once("ingredientes.php");

class Cozinha {
    private $id_cozinha;
    private dateTime $hora_abertura;
    private dateTime $hora_fechamento;
    private $prato_principal;

    function getID () {
        return $this->id_cozinha;
    }

    function setID ($id_cozinha) {
        $this->id_cozinha = $id_cozinha;
    }
    
    function getPratoPrincipal () {
        return $this->prato_principal;
    }

    function setPratoPrincipal ($prato_principal) {
        $this->prato_principal = $prato_principal;
    }

    function getAbertura (): dateTime {
        return $this->hora_abertura;
    }

    function setAbertura (dateTime $hora_abertura) {
         $this->hora_abertura = $hora_abertura;
    }

    function getFechamento (): dateTime  {
        return $this->hora_fechamento;
    }

    function setFechamento (dateTime $hora_fechamento) {
         $this->hora_fechamento = $hora_fechamento;
    }
}