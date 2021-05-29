<?php
require_once '../application/config/connection.php';

             
              
             $totalValue='total';
             $data = ['total' =>$totalValue];
             $total__sales=$function->getSalesData($data);
             
             $JSONString=json_encode($total__sales);
             echo 'Yearly Sales: <br>';
             echo json_encode($total__sales);
             
             return $JSONString;
       
                          
                           ?>