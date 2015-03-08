<div class="container">
	<div class="row-fluid header">
		<h2>Performance Analysis</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content">
		<h4>Hours spent on the goal daily</h4>
		<div style="weight:60%;">
			<canvas id="canvas" style="height:300px;"></canvas>
		</div>
	</div>
</div>
<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*10)};
	var lineChartData = {
		labels : ["03/03/2015","04/03/2015","05/03/2015","06/03/2015","07/03/2015","08/03/2015","09/03/2015"],
		datasets : [
			{
				label: "Goal 1",
				fillColor : "rgba(151,187,205,0.2)",
				strokeColor : "rgba(151,187,205,1)",
				pointColor : "rgba(151,187,205,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(151,187,205,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	}

	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData, {
			responsive: true
		});
	}


</script>
