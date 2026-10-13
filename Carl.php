<?php
require 'solve.php';

$c1 = new Solve();
$c1->set_details(5, 10);
echo $c1->get_details();
echo "<br>";

$c2 = new Solve();
$c2->set_details(20, 30);
echo $c2->get_details();
echo "<br>";

$c3 = new Solve();
$c3->set_details(7, 8);
echo $c3->get_details();
echo "<br>";
?>