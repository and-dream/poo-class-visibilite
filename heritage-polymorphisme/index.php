<?php

require_once './Article.php';
require_once './Aliment.php';
require_once './Conserve.php';

$pull = new Article ('pull',99);
echo $pull->getName();
echo $pull->setName('sweat')->getName();
echo '<br>';
echo $pull->displayProduct();

$cookie = new Aliment('cookie matcha', 5, '20 juillet 2023');
echo $cookie->displayPrice();
echo '<br>';
// var_dump (get_class_methods($cookie));
// var_dump($cookie);

echo $cookie->displayProduct();
echo '<br>';


$conserve = new Conserve ('melange forestier', 2.49, '20 juillet 2024', ['sulfite', 'exhausteur de gout', 'acide citrique', 'arome naturel']);
// var_dump($conserve);

echo $conserve->displayProduct();
echo '<br>';

// echo $conserve->getListExcipient();
foreach ($conserve->getListExcipient() as $excipient){
    echo $excipient;
}

echo '<br>';
echo implode(', ', $conserve->getListExcipient());