<?php
$string = 'tasse';
$name = 'café';
$str = 'Ceci est une $string avec mon $name dedans.<br />';
echo $str;
eval( "\$str = \"$str\";" );
echo $str;
?>