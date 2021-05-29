<?php 

$stockItems = $function->stockCount('QuantityInStock','products');




echo '

<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-dark o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-archive fa-3x"></i>
</div>
<div class="mr-5">Items in stock</div>
<table>
                    <tr>
                        <th></th>
                        
                    </tr>' . 

                    '
                    <tr>
                    <td>  ' . $stockItems . '</td>
                    </tr>
                    </table>
                    </div>
                    <a href="#" class="btn btn-dark">View</a>
</div>
</div>';


?>