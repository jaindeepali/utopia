<div class="container">
	<div class="row-fluid header">
		<h2>Performance Analysis</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content graph-content">
		<div class="row-fluid">
			<center><h4>Hours spent on the goal daily</h4></center><br>
			<div style="width:45%;" class='span5'>
				Goal #1:
				<canvas id="canvas1" style="height:300px;"></canvas>
			</div>
			<div style="width:45%;" class='span5'>
				Goal #2:
				<canvas id="canvas2" style="height:300px;"></canvas>
			</div>
		</div>
		<div class="row-fluid">
			<br><br><br><br>
			<center><h4>Relative hours spent on the goals in the last week</h4></center><br>
			<center><div style="width:45%;">
				<canvas id="chart-area" style="height:300px;"></canvas>
			</div></center>
		</div>
	</div>
</div>
<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*10)};
	var lineChartData1 = {
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

	var lineChartData2 = {
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

	var doughnutData = [
			{
				value: 40,
				color:"#F7464A",
				highlight: "#FF5A5E",
				label: "Goal #1"
			},
			{
				value: 33,
				color: "#46BFBD",
				highlight: "#5AD3D1",
				label: "Goal #2"
			},
			{
				value: 9,
				color: "#FDB45C",
				highlight: "#FFC870",
				label: "Goal #3"
			},
			{
				value: 5,
				color: "#949FB1",
				highlight: "#A8B3C5",
				label: "Goal #4"
			}
		];

	window.onload = function(){
		var ctx = document.getElementById("canvas1").getContext("2d");
		window.myLine = new Chart(ctx).Line(lineChartData1, {
			responsive: true
		});
		var ctx2 = document.getElementById("canvas2").getContext("2d");
		window.myLine = new Chart(ctx2).Line(lineChartData2, {
			responsive: true
		});
		var ctx3 = document.getElementById("chart-area").getContext("2d");
		window.myDoughnut = new Chart(ctx3).Doughnut(doughnutData, {responsive : true});
	}


</script>
