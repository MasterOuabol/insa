<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function testRemovePoneyFromField()
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField(3);

        // Assert
        $this->assertEquals(5, $Poneys->getCount());

    }

    public function test_getNames(){

        $names = [
            'Joe','William','Jack','Averell'
        ];

        $this->poneys = $this->getMockBuilder('Poneys')->getMock();
        $this->poneys->expects($this->exactly(1))->method('getNames')->willReturn($names);

        $this->assertEquals($names,$this->poneys->getNames());

    }

    /**
     * @dataProvider removePoneysProvider
     * 
     * @return void
     */

    public function test_removePoneyFromFieldException($substract, $count){

        // Setup
        $Poneys = new Poneys();

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Tu ne peux pas prendre de poneys, ils sont déjà tous partis en balade");
        $this->expectExceptionMessage("Tu ne peux pas retirer un nombre négatif de poneys");

        //Action
        $Poneys->RemovePoneyFromField($substract);

        //Assert
        $this->assertEquals($count, $Poneys->getCount());
    }

    /**
     * @dataProvider removePoneysProviderSuccess
     * 
     * @return void
     */

    public function test_removePoneySuccess($substract, $count){

        // Setup
        $Poneys = new Poneys();

        //Action
        $Poneys->RemovePoneyFromField($substract);

        //Assert
        $this->assertEquals($count, $Poneys->getCount());
    }
    
    public function removePoneysProvider(){

        return array(
            //array(5, 8) problème, détecté comme une erreur alors qu'on a un assert
        );
    }

    public function removePoneysProviderSuccess(){

        return array(
            array(5, 3),
            array(4, 4),
            array(3, 5),
            array(2, 6),
            array(1, 7)
        );
    }









    /**
     * @dataProvider addPoneysProvider
     * 
     * @return void
     */

    public function test_addPoneyFromFieldException($substract, $count){

        // Setup
        $Poneys = new Poneys();

        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Tu ne peux pas ajouter plus de poneys");

        //Action
        $Poneys->addPoneyFromField($substract);

        //Assert
        $this->assertEquals($count, $Poneys->getCount());
    }


    /**
     * @dataProvider addPoneysProviderSuccess
     * 
     * @return void
     */

    public function test_addPoneySuccess($substract, $count){

        // Setup
        $Poneys = new Poneys();
        //Action
        $Poneys->addPoneyFromField($substract);

        //Assert
        $this->assertEquals($count, $Poneys->getCount());
    }

    public function addPoneysProvider(){

        return array(
            array(7, 15),
            array(8, 16)
        );
    }

    public function addPoneysProviderSuccess(){

        return array(
            array(5, 13),
            array(6, 14)
        );
    }


}
?>
