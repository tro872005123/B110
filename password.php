<?php
$hash=password_hash("ABC123!@#",PASSWORD_BCRYPT);
echo $hash;
echo "<br>hash length" .strlen($hash);
?>