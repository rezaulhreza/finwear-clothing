<?php 

session_start();

if (!isset($_SESSION['user'])) {
	header("Location:../index.php");

}



$title='Dashboard';


require 'head.php';




require '../application/config/connection.php';
require  '../application/config/functions.php';

require 'sales.php';
require 'total_orders.php';
require 'total_items.php';
require 'total_users.php';
require 'post.php';


?> 


</body>
</htmL>
