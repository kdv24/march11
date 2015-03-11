<?php

             class RockPaperScissor

             {
                 public $Rock;
                 public $Paper;
                 public $Scissor;



             function checkWin()
             {

                 $input1 = "rock";
                 $input2 = "paper";

                 $output = array('player1'=>$input1, 'player2'=>$input2);
                 $win = array();

                if($output['player1']=="rock"){
                    if($output['player2']=="paper"){
                        return $output;
                    }
                    elseif($output['player2'=="scissors"]){
                        $output = "player1";
                    }
                    else {
                        return $win;
                    }
                }


                     return $output;


             }












             }






 ?>
