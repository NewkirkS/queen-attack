<?php

    require_once "src/Queen.php";

    class QueenTest extends PHPUnit_Framework_TestCase
    {
        function testHorizontal()
        {
            //Arrange
            $test_Queen = new Queen(4, 4);
            $targetX = 4;
            $targetY = 8;
            //Act
            $result = $test_Queen->canAttack($targetX, $targetY);
            //Assert
            $this->assertEquals(true, $result);
        }

        function testVertical()
        {
            //Arrange

            //Act

            //Assert

        }

        function testDiagonal()
        {
            //Arrange

            //Act

            //Assert

        }
    }
 ?>
