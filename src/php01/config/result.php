<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$hope = htmlspecialchars($_POST['hope'], ENT_QUOTES);
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "私の名前は、" . $name . '<br />';
print "ご希望の商品は、" . $hope . '<br />';
print "注文数は、" . $number . '<br />';
