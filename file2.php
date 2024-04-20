<?php

// readfile("text.txt");

// or 

$fpoint = fopen('text2.txt','w');

fwrite($fpoint, 'Hello World!!!!!');

$fpoint = fopen('text2.txt','a');

fwrite($fpoint, 'Hello World!!!!!');

?>