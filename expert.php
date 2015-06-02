<?php
$page="expert";
$tab="profile";

$title="AHT";
$msg="";

include "includes/app.php";
Fun::gotohome($DB);

include "includes/top.php";
include "includes/menu/menu.php";
?>



<?php
include "includes/bottom.php";

$DB->close();

?>