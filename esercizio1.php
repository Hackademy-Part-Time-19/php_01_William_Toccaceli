<?php

for($i=0; $i<101; $i++)

if($i !== 0 && $i % 3 == 0){
    echo "PHP";
}

elseif($i !== 0 && $i % 5 == 0){
    echo "Javascript";
}

else ($i !== 0 && $i % 3 == 0 && $i % 5 == 0){
    echo "HACKADEMY";
}