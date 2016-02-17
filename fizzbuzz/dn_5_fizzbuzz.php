<?php

    //$meja=20;
    
    //var_dump($_POST);

    $meja = $_POST['meja'];

    if (is_numeric($meja) && $meja>=0 )
    {
        for($i=1; $i<=$meja; $i++) 
        {
            if($i % 3 == 0 && $i % 5 ==0)
            {
                echo 'fizzbuzz';
            }
            elseif($i % 3 == 0) 
            {
                echo 'fizz';
            }
            elseif($i % 5 == 0) 
            {
                echo 'buzz';
            }
            else 
            {
                echo $i;
            }

            echo ', ';
        }

        echo '. . .';
    } 
    else
    {
        echo "Vnesi pozitivno stevilo.";
    }
    
?>