<?php #form-orders.php
/**
 * Comic Book Subscription Form
 *
 *
 * Scaps data and returns a list
 * Users can select items and quantities from list
 * Users can also order polybacks, backboards, white boxs
 * show total with tax, subtotal
 * allow order revision
 * submit final order
 *
 *
 * @TODO   Remove unneeded checks (Genger)
 * @TODO   Add login? If new? Recover Password?
 * @TODO   Show Comic img thumbnails
 * @TOSO   make images links so folks can check out offerings
 *
 **/


include '_inc/myToolbox-inc.php';       //Session, THIS_PAGE
include '_inc/myHeader-inc.php';        //Uses THIS_PAGE
include './_Classes/OrderForm.php';     //Class


$myOrder = new OrderForm();            //Instantiate object



$myOrder->getOrderForm();


























include '_inc/myFooter-inc.php';
