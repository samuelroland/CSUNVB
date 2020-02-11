<?php
ob_start();
$title = "CSU-NVB - Secouriste";
$users = readAdminItems();
?>

<?php
foreach ($users as $user)
?>


<?php
$content = ob_get_clean();
require "gabarit.php";
?>
