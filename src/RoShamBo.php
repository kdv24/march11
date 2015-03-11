<?php

             class RockPaperScissor

             {
                 public $Rock;
                 public $Paper;
                 public $Scissor;



             function checkWin()
             {

                  $input1 = "rock";
                  $input2 = "rock";

                 $output = "";


                if($input1 == "rock"){
                    if($input2 =="paper"){
                        $output = "player2";
                    }
                    elseif($input2 == "scissors"){
                        $output = "player1";
                    }
                    else {
                        $output = "tie";
                    }
                }


                     return $output;


             }












             }






 ?>
