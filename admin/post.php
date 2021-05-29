<?php


date_default_timezone_set('Europe/London');


require_once '../application/config/connection.php';
require_once  '../application/config/functions.php';

if (!isset($_SESSION['user'])) {
  header('Location:index.php');
}

$message = "";

if(isset($_POST['submit'])) {

  $id = $function->setID('id', 'products');
  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $QuantityInStock = $_POST['QuantityInStock'];

  $date_registered = date("F j, Y, g:i A");


  if ($_FILES['photo']['tmp_name']) {

    $target_dir = "../images/products/"; //directory where the images will be saved
    $path = $target_dir . basename($_FILES['photo']['name']);

    $ext = getimagesize($_FILES['photo']['tmp_name']);
    if ($ext == false) {
        die("Invalid Image. You can only upload an Image!");
    } else {
        //variable allowed will go through the given indexes
        //if the extension does not match then it will not allow that image to be uploaded

        $allowed = array('jpg', 'png', 'jpeg');
        if (in_array(pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION), $allowed)) {
            if (move_uploaded_file($_FILES['photo']['tmp_name'],$path)) {
                $paths = basename($_FILES['photo']['name']);
            } //error message
            else {
                die('Unable to upload Image');
            }
            //error message
        } else {
            die('Only jpg, png and jpeg files are allowed.');
        }
    }
} else {
    //if no image is uploaded then set the path empty
    $paths = '';
}


  $data = [
    'id' => $id,
    'name' => $name,
    'description' => $description,
    'price' => $price,
    'QuantityInStock'=>$QuantityInStock,
    'photo' => $paths,
    'date_registered' => $date_registered,
  ];

  try {
    $query = "INSERT INTO products (id, name, description, price,photo, QuantityInStock,date_registered) 
    VALUES (:id, :name, :description, :price,:photo, :QuantityInStock,:date_registered)";
    $function->insert($query, $data);

    $message = '
    <div class="col-md-10 bs-callout bs-callout-success">
    <h4 id="title">Post Successful</h4>
    Thanks! Your post has been successfully created.
    </div>
    ';
  } catch (Exception $e) {
    $message = '
    <div class="col-md-10 bs-callout bs-callout-danger">
    <h4>Post Failed</h4>
    Sorry, something went wrong
    </div>
    ';
  }

}

require 'post.html.php';