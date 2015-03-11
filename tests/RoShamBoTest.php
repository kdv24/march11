<?php

     require_once 'src/RoShamBo.php';



    class RockPaperScissorTest extends PHPUnit_Framework_TestCase
    {


        function test_checkRock()
        {
            //Arrange
            $test_RockPaperScissors = new RockPaperScissor;
            $input1 = "rock";
            $input2 = "rock";
            $output = array();
            //Act
            $result = $test_RockPaperScissors->checkRock($input1, $input2);

            //Arrange
            $output = array("rock", "rock");
            $this->assertEquals($output, $result);
        }
    }








 ?>
