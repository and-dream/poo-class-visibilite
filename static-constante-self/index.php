<?php

require_once './SimulateurCredit.php';
require_once './Mathematique.php';

SimulateurCredit::setQuotient(100);
echo SimulateurCredit::info(25697);
echo '<br>';

echo Mathematique::addition(2,9);
echo '<br>';
echo Mathematique::multiplication(4,25);
echo '<br>';
echo Mathematique::soustraction(55,33);
echo '<br>';
echo Mathematique::division(29,3);


