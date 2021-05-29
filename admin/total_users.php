<?php 

$total_users = $function->rowCount('users');


echo '

<div class="col-xl-3 col-sm-6 mb-3">
<div class="card text-white bg-success o-hidden h-100">
<div class="card-body">
<div class="card-body-icon">
<i class="fa fa-fw fa-users fa-3x"></i>
</div>
<div class="mr-5">Registered Users</div>
<table>
                    <tr>
                        <th></th>
                        
                    </tr>' . 

                    '
                    <tr>
                    <td>  ' . $total_users . '</td>
                    </tr>
                    </table>
                    </div>
                    <a href="#" class="btn btn-success">View</a>
</div>
</div>';

?>