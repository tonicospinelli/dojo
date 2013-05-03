<?php

class Pagamento
{

    protected $_valorTotal;
    protected $_valorRecebido;

    public function setValorRecebido($valorRecebido)
    {
        $this->_valorRecebido = $valorRecebido;
    }

    public function getValorRecebido()
    {
        return $this->_valorRecebido;
    }

    public function setValorTotal($valorTotal)
    {
        $this->_valorTotal = $valorTotal;
    }

    public function getValorTotal()
    {
        return $this->_valorTotal;
    }

    public function getDiferenca()
    {
        return $this->_valorRecebido - $this->_valorTotal;
    }

    public function getTroco() {
        return array();
    }
}