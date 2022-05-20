<?php
$bil = 1;
while($bil <= 20){
if ($bil % 2 == 0 ){
    echo "$bil Berkualitas <br>";
    $bil++;
    if ($bil % 3 == 0) {
    echo "$bil I Love Coding <br>";
    $bil++;
    } else {
        continue;
    }    
}else{
    echo "$bil Santai <br>";
    $bil++;
}

}

?>