<?php 

$totalValue='total';
$data = ['total' =>$totalValue];
$total__sales=$function->getSales($data);


$total = $total__sales[0];


if(count($total__sales) < 0 ){
	echo 'No sales so far!';
}

else{
	echo '
	
	<div class="container">
	<h1>Dashboard</h1>



	<div class="row">


	<div class="col-xl-3 col-sm-6 mb-3">
	<div class="card text-white bg-secondary o-hidden h-100">
	<div class="card-body">
	<div class="card-body-icon">
	<i class="fa fa-line-chart fa-3x" aria-hidden="true"></i>
	</div>
	<div class="mr-5">Total Sales</div>
	<table>
						<tr>
							<th></th>
							
						</tr>' . 
	
						'
						<tr>
						<td>£ ' . $total . '</td>
						</tr>
						</table>
						</div>
						<a href="chart.php" class="btn btn-secondary">View</a>
	</div>
	</div>';



}
?>
