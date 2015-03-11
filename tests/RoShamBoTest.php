<?php

     require_once 'src/RoShamBo.php';



    class RockPaperScissorTest extends PHPUnit_Framework_TestCase
    {


        function test_checkValue()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissor;
            $input1 = "rock";
            $input2 = "rock";

            //Act
            $result = $test_RockPaperScissors->checkWin($input1, $input2);

            //Arrange

            $this->assertEquals("tie", $result);
        }

        function test_checkRockWin()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissor;
            $input1 = "rock";
            $input2 = "paper";
            //Act
            $result = $test_RockPaperScissors->checkWin($input1, $input2);

            //Arrange
            $this->assertEquals("player2", $result);
        }
    }








 ?>
