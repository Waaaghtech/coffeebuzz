<?php session_start();
include_once('tools.php');
styleCLink();

/**
 * Staff page
 * 
 * have no access to account database
 * have limited access to menu item database
 * i.e: can only mark a menu item as unavaliable,
 * can not add or remove menu item
 * 
 * have current order list <dev>
 * display the current order that need to be fullfilled 
 * each current order item have an order number and a discription
 * each current order item has two buttons, accept & raise issue
 * order can only be compelete after accepted
 * if an order item cannot be fullfilled due to the lacking of matirial,
 * the staff can click "raise issue" button to inform the customer in any time.
 * 
 */
?>


<!doctype HTML>

<html>



</html>