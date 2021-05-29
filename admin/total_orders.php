<?php 

$total_orders = $function->rowCount('orders');


echo '

<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-info o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-fw fa-shopping-cart fa-3x"></i>
</div>
<div class="mr-5">Total Orders</div>
<table>
                    <tr>
                        <th></th>
                        
                    </tr>' . 

                    '
                    <tr>
                    <td>  ' . $total_orders . '</td>
                    </tr>
                    </table>
                    </div>
                    <a href="#" class="btn btn-info">View</a>
</div>
</div>';

?>