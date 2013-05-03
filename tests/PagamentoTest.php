<?php
/**
 * Created by JetBrains PhpStorm.
 * User: antonio
 * Date: 03/05/13
 * Time: 13:13
 * To change this template use File | Settings | File Templates.
 */

namespace Test;


class PagamentoTest extends \PHPUnit_Framework_TestCase
{

    public function testInstaciarPagamento()
    {
        $pagamento = new \Pagamento();
        $this->assertInstanceOf('Pagamento', $pagamento);
    }
    
    public function testDefinirEPegarValorTotalAPagar(){
        $pagamento = new \Pagamento();
        $pagamento->setValorTotal(10);
        $valorTotal = $pagamento->getValorTotal();

        $this->assertEquals(10,$valorTotal);
    }


    public function testDefinirEPegarValorRecebido(){
        $pagamento = new \Pagamento();
        $pagamento->setValorRecebido(10);
        $valorRecebido = $pagamento->getValorRecebido();

        $this->assertEquals(10,$valorRecebido);
    }

    public function testDiferenca(){
        $pagamento = new \Pagamento();
        $pagamento->setValorRecebido(10);
        $pagamento->setValorTotal(5);
        $troco = $pagamento->getDiferenca();
        $this->assertEquals(5, $troco);
    }

    public function testCedulasTroco(){
        $pagamento = new \Pagamento();
        $pagamento->setValorRecebido(10);
        $pagamento->setValorTotal(5);
        $troco = $pagamento->getDiferenca();
        $this->assertEquals(5, $troco);

        $cedulas = $pagamento->getTroco($troco);

        $this->assertTrue(is_array($cedulas));
        $this->assertEquals($cedulas[0]);

    }

}
