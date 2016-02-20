<?php
/**
 * Created by PhpStorm.
 * User: tomas
 * Date: 2/18/2016
 * Time: 9:13 PM
 */
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= 'ProjektX/';

include_once($path . 'API/Orders.php');
include_once($path . 'API/Database.php');


$DBHandler = new DBHandler();
if($_SESSION['userrole'] != 1){
    $DBHandler->query('SELECT * FROM orders');
}
else{
    $DBHandler->query('SELECT * FROM orders WHERE userid=:userid');
    $DBHandler->bind(':userid',$_SESSION['userid']);
}

if(isset($_SESSION['searchRes'])){
    $array = $_SESSION['searchRes'];
    unset($_SESSION['searchRes']);
}
else{
    $array = $DBHandler->resultSet();
}



echo '<ol class="items">';
for($i = 0; $i < count($array); $i++){
    echo '<li>';
    if($_SESSION['userrole'] != 1){
        echo '<span class="orderinfo"><div style="width: 220px; display: inline-block">'.$array[$i]['name'].' '.$array[$i]['surname'].' '.$array[$i]['address'].'</div><div style="width: 150px; display: inline-block">'.$array[$i]['city'].'</div><div style="width: 150px; display: inline-block">'.$array[$i]['postcode'].'</div></span>';
    }
    else{
        echo '<span class="orderinfo"><div style="width: 220px; display: inline-block">'.$array[$i]['address'].'</div><div style="width: 150px; display: inline-block">'.$array[$i]['city'].'</div><div style="width: 150px; display: inline-block">'.$array[$i]['postcode'].'</div></span>';

    }
    echo '<span class="orderinfoprice"> '.$array[$i]['orderprice'].' eur</span>';
        if($array[$i]['shipped'] != '0'){
            echo '<span class="orderinfoship"> shipped </span>';
        }
        else{
            echo '<span class="orderinfoship"> queued </span>';
        }
    echo '<a class="page-link" href="?page=private/pageSettings&settings=orderPreview&orderid='.$array[$i]['orderid'].'"><i class="fa fa-search-plus fa-2x"></i></a>';
    //echo '<a class="page-link" href="?page=private/pageSettings&settings=orderPreview&orderid='.$array[$i]['orderid'].'"><i class="fa fa-pencil-square-o fa-2x"></i></a>';
    echo '<a class="page-link" href="?page=private/pageSettings&settings=editOrder/editOrder&orderid='.$array[$i]['orderid'].'&edit=ship"><i class="fa fa-plane fa-2x"></i></a>';
    echo '</li>';
}
echo '</ol>';
?>

