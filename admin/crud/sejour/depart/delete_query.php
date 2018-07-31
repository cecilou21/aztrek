<?php
require_once '../../../security.php';
require_once '../../../../model/database.php';

$id = $_POST["id"];
$sejour_id = $_POST["sejour_id"];

deleteEntity("depart", $id);

header("Location: ../update_form.php?id=".$sejour_id);
