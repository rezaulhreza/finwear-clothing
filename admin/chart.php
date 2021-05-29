<?php 
$dataPoints = array();

$title='Chart for Sales';
require '../application/config/connection.php';
require_once '../application/config/functions.php';


require 'head.php';
?>
<div class="container">
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3>Line Series</h3>
                <?php require 'data.php'?>
            </div>
            <div class="panel-body">
                <div id="chart1"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
       
    </div>
</div>   
</div>

<style>
#graphCanvas{
  width:110px;
  height: 10px;
}
</style>


			
			<div id="chart-container">
        <canvas id="graphCanvas" width="150px;" height='120px'></canvas>
    </div>

    </div>
    </div>
   

</body>


	<script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var ordered_date = [];
                    var total = [];

                    for (var i in data) {
                        ordered_date.push(data[i].ordered_date);
                        total.push(data[i].total);
                    }

                    var chartdata = {
                        labels: total,
                        datasets: [
                            {
                                label: 'Daily Sales',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: <?php echo json_encode($total__sales); ?>

                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                });
            }
        }
        </script>
        


          
              <hr>
              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">Another chart will go after this</h3>
                  </div>
                  <div class="panel-body">
                 

                </div>
              </div>
            </div>
          </div>
        </body>

        <!-- jQuery -->
	
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.2.7/morris.min.js" integrity="sha512-nF4mXN+lVFhVGCieWAK/uWG5iPru9+/z1iz0MJbYTto85I/k7gmbTFFFNgU+xVRkF0LI2nRCK20AhxFIizNsXA==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.3.0/raphael.min.js" integrity="sha512-tBzZQxySO5q5lqwLWfu8Q+o4VkTcRGOeQGVQ0ueJga4A1RKuzmAu5HXDOXLEjpbKyV7ow9ympVoa6wZLEzRzDg==" crossorigin="anonymous"></script>
        <script language="JavaScript" type="text/javascript">
        
        </script>
</html>