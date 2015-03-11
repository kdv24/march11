<?php

     require_once 'src/RoShamBo.php';



    class RockPaperScissorTest extends PHPUnit_Framework_TestCase
    {


        // function test_checkValue()
        // {
        //     //Arrange
        //     $test_RockPaperScissors = new RockPaperScissor;
        //     $input1 = "rock";
        //     $input2 = "rock";
        //     $output = array();
        //     //Act
        //     $result = $test_RockPaperScissors->checkWin($input1, $input2);
        //
        //     //Arrange
        //     $output = array('player1'=>"rock", 'player2'=>"rock");
        //     $this->assertEquals($output, $result);
        // }

        function test_checkRockWin()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissor;
            $input1 = "rock";
            $input2 = "paper";
            $output = array();
            //Act
            $result = $test_RockPaperScissors->checkWin($input1, $input2);

            //Arrange
            $output = array('player1'=>"rock", 'player2'=>$input2);
            $this->assertEquals($output, $result);
        }
    }








 ?>
