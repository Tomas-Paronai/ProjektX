<?php
/**
 * Created by PhpStorm.
 * User: Matus Kacmar
 * Date: 7. 1. 2016
 * Time: 16:26
 */
session_start();

if(isset($_GET['productid']) && isset($_GET['name']) && isset($_GET['price'])) {
    if(isset($_SESSION['cart'])) {

        $cartContent = $_SESSION['cart'];

        $match = null;
        $i = 0;
        $product = $_GET['productid'];

        foreach($cartContent as $cart) {

            $cartProduct = $cart['id'];

            if($product === $cartProduct) {
                $match = $i;
                break;
            }
            $i++;
        }

        if($match === null) {
            array_push($cartContent,$_GET['productid']);

            $sizeOfCart = sizeof($cartContent);
            $sizeOfCart--;

            $cartContent[$sizeOfCart] = array(
                'id'=>$_GET['productid'],
                'count'=>1,
                'name' =>$_GET['name'],
                'price'=>$_GET['price'],
            );
        }
        else {
            $count = $cartContent[$match]['count'];
            $count++;
            $cartContent[$match]['count'] = $count;
        }

        $_SESSION['cart'] = $cartContent;

        $location = "Location:../?page=productPreview&product=" . $_GET['productid'];
        header($location);
        exit();
    }
    else {
        $cartContent = array(0=>array(
            'id'=>$_GET['productid'],
            'count'=>1,
            'name'=>$_GET['name'],
            'price'=>$_GET['price']
        ));
        $_SESSION['cart'] = $cartContent;

        $location = "Location:../?page=productPreview&product=" . $_GET['productid'];
        header($location);
        exit();
    }
}
else {
    die("HOOOPS SOMETHING WENT WRONG!");
}