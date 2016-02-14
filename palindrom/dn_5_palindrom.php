<?php

    $word = $_POST['palindrom'];

    $word_split = str_split($word);

    $n = count($word_split) - 1;

    $palindrom = true;
    
    $count=0;
    while($count<=$n)
    {
        if($word_split[$n] == $word_split[$count])
        {
            $count++;
            $n--;        
        }
        else
        {
            $palindrom = false;
            break;
        }
        
    }
    
    
    if($palindrom)
    {
       echo 'paliiiii :)';
    }
    else
    {
        echo 'ne pali :(';   
    }

?>