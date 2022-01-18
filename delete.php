<?php
include "model.php";
$model = new model();
$id = $_GET['delete_id'];
$delete = $model->delete($id);
if($delete)
{
    echo "<script> alert('Silinmə uğurlu oldu');</script>";
    echo "<script> window.location.href='index.php';</script>";
}