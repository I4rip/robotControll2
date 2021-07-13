<?php
require_once("Database.php");
if(isset($_POST["save"]))
{
    $db = new Database();
    $db->insert_update_delete("update armcontrol set en1='".$_POST['en1']."', en2='".$_POST['en2']."', en3='".$_POST['en3']."', en4='".$_POST['en4']."', en5='".$_POST['en5']."', en6='".$_POST['en6']."' where id='1'");
}
if(isset($_POST["get"]))
{
    $db = new Database();
    $res=$db->getData("select * from armcontrol where id='1'");
    $row= mysqli_fetch_array($res);
    $output='
        <p>Engine 1 - '.$row[1].'</p>
        <p>Engine 2 - '.$row[2].'</p>
        <p>Engine 3 - '.$row[3].'</p>
        <p>Engine 4 - '.$row[4].'</p>
        <p>Engine 5 - '.$row[5].'</p>
        <p>Engine 6 - '.$row[6].'</p>
    ';
    echo $output;
}
?>