<?php

             class RockPaperScissor

             {
                 public $Rock;
                 public $Paper;
                 public $Scissor;



             function checkWin($input1, $input2)
             {



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
                      return $output;
                }

                elseif($input1 == "paper"){
                    if($input2 =="scissors"){
                        $output = "player2";
                    }
                    elseif($input2 == "rock"){
                        $output = "player1";
                    }
                    else {
                        $output = "tie";
                    }



                     return $output;


             }
             elseif($input1 == "scissors") {
                 if($input2 =="rock") {
                     $output = "player2";
                 }
                 elseif($input2 == "paper"){
                     $output = "player1";
                 }
                 else {
                     $output = "tie";
                 }



                  return $output;


          }





         }







             }






?>
