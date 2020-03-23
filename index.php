<?php

/*  $board = array(array('.','.','.','.','.'),
                 array('.','o','.','.','.'),
                 array('.','#','o','.','.'),
                 array('.','.','.','.','.'),
                 array('.','.','.','.','.'));
  $check = array(2, 1);
*/


 $board = array(array('.','.','.','.','.'),
                array('.','#','#','#','.'),
                array('#','#','o','o','o'),
                array('.','o','#','#','.'),
                array('.','.','.','.','.'));
 
 $check = array(2, 1);
 
echo traverse ($board, $check);

function traverse($board, $check)
{
  
     echo "inside traverse: if - ".$board[$check[0]][$check[1]]."<br>" ;
    $visitedArr = array();

     if(is_alive($board,$check))
     {
        echo "inside if"."<br>";
        array_push($visitedArr, $board[$check[0]][$check[1]]);
        return "true";
     }
     else{
         
         $traverseTop = $traverseBottom = $traverseRight = $traverseLeft = 0;
             echo "inside else"."<br>";
            //Top
            $goTop = array($check[0]-1,$check[1]);
            if($board[$check[0]-1][$check[1]] == '#')
              $traverseTop = traverse($board, $goTop);
            
            //Bottom
             $goBottom = array($check[0]+1,$check[1]);
             if($board[$check[0]+1][$check[1]] == '#')
               $traverseBottom = traverse($board, $goBottom);
             
            
            //Right
             $goRight = array($check[0],$check[1]+1);
             if($board[$check[0]][$check[1]+1] == '#')
                 $traverseRight = traverse($board, $goRight);
            
            //Lefthttp://phpfiddle.org/#tabs-b
             $goLeft = array($check[0],$check[1]-1);
              if($board[$check[0]][$check[1]-1] == '#')
                 $traverseLeft = traverse($board, $goLeft);
            
            if ($traverseTop || $traverseBottom || $traverseRight || $traverseLeft)
                return "true";
        
            return false;
                
        }
  //  print_r($visitedArr);
}    
 
function is_alive($board,$check)
{
    echo "inside isalive"."<br>";
    $s = 5;
    $top = checkTop($check,$board);
    $bottom = checkBottom($check,$board);
    $right = checkRight($check,$board);
    $left = checkLeft($check,$board);
    
    if($top || $bottom || $left || $right)
        return true;
   
    return false;
}

function checkRight($location,$board){
   
    if($board[$location[0]][$location[1]+1]){
         echo "Right - ".$board[$location[0]][$location[1]+1]."<br>";
        if($board[$location[0]][$location[1]+1] == '.')
            return true;
    }
    return false;
}
function checkLeft($location,$board){
    if($board[$location[0]][$location[1]-1]){
         echo "Left - ".$board[$location[0]][$location[1]-1]."<br>";
       if($board[$location[0]][$location[1]-1] == '.')
            return true;
    }
    return false;
}

function checkBottom($location,$board){
   
    if($board[$location[0]+1][$location[1]]){
         echo "Bottom - ".$board[$location[0]+1][$location[1]]."<br>";
        if($board[$location[0]+1][$location[1]] == '.')
            return true;
        }
    
    return false;
}

function checkTop($location,$board){
    
    if($board[$location[0]-1][$location[1]]){
        echo "Top - ".$board[$location[0]-1][$location[1]]."<br>";
        if($board[$location[0]-1][$location[1]] == '.')
            return true;
   }
    return false;
}

?>
