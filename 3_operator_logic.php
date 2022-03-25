<?php

echo "Masukan bilangan pertama : ";
$bilangan = trim(fgets(STDIN));
echo "Masukan bilangan pembagi : ";
$pembagi = trim(fgets(STDIN));

function bagi($bilangan, $pembagi){
    if($bilangan < $pembagi){
        return 0;
    }else{
        return 1 + bagi($bilangan - $pembagi, $pembagi);
    }
}

echo bagi($bilangan, $pembagi);