<?php
include "includes/app.php";

echo $DB."Mohit..";
Disp::disp_table(Sql::getArray("show tables"));
Disp::disp_table(Sql::getArray("show tables"));



closedb();

?>