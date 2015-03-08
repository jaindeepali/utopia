<div class="container">
	<div class="row-fluid header">
		<h2>Performance Analysis</h2>
	</div>
	<br/><br/><br/><br/>
	<div class="row-fluid content graph-content">
		<div class="row-fluid">
			<center><h4>Hours spent on the goal daily</h4></center><br>
			<div style="width:45%;" class='span6'>
				Goal #1:
				<canvas id="canvas1" style="height:300px;"></canvas>
			</div>
			<div style="width:45%;" class='span6'>
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
		<div class="row-fluid">
			<br><br><br><br>
			<center><h4>Planned vs. actual time spent on the goal daily</h4></center><br><br>
			<center><div id="bar-chart-legend">
				<span style="background-color:rgba(220,220,220,0.5);padding:10px;margin:10px;">Planned Time</span>&nbsp;
				<span style="background-color:rgba(151,187,205,0.5);padding:10px;margin:10px;">Actual Time</span>
			</div></center><br><br>
			<div style="width:45%;" class="span6">
				Goal #1:
				<canvas id="bar-chart-area1" style="height:300px;"></canvas>
			</div>
			<div style="width:45%;" class="span6">
				Goal #2:
				<canvas id="bar-chart-area2" style="height:300px;"></canvas>
			</div>
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
				data : [3,4,1,4,4,5,6]
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
				data : [9,7,3,3,8,2,8]
			}
		]

	}

	var doughnutData = [
			{
				value: 27,
				color:"#F7464A",
				highlight: "#FF5A5E",
				label: "Goal #1"
			},
			{
				value: 40,
				color: "#46BFBD",
				highlight: "#5AD3D1",
				label: "Goal #2"
			}
		];

	var barChartData1 = {
		labels : ["03/03/2015","04/03/2015","05/03/2015","06/03/2015","07/03/2015","08/03/2015","09/03/2015"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [5,6,3,2,7,4,6]
			},
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [3,4,1,4,4,5,6]
			}
		]

	}

	var barChartData2 = {
		labels : ["03/03/2015","04/03/2015","05/03/2015","06/03/2015","07/03/2015","08/03/2015","09/03/2015"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [10,4,6,1,7,4,9]
			},
			{
				fillColor : "rgba(151,187,205,0.5)",
				strokeColor : "rgba(151,187,205,0.8)",
				highlightFill : "rgba(151,187,205,0.75)",
				highlightStroke : "rgba(151,187,205,1)",
				data : [9,7,3,3,8,2,8]
			}
		]

	}

	window.onload = function(){
		var ctx = document.getElementById("canvas1").getContext("2d");
		window.myLine1 = new Chart(ctx).Line(lineChartData1, {
			responsive: true
		});
		var ctx2 = document.getElementById("canvas2").getContext("2d");
		window.myLine2 = new Chart(ctx2).Line(lineChartData2, {
			responsive: true
		});
		var ctx3 = document.getElementById("chart-area").getContext("2d");
		window.myDoughnut = new Chart(ctx3).Doughnut(doughnutData, {responsive : true});
		var ctx4 = document.getElementById("bar-chart-area1").getContext("2d");
		window.myBar1 = new Chart(ctx4).Bar(barChartData1, {
			responsive : true
		});
		var ctx5 = document.getElementById("bar-chart-area2").getContext("2d");
		window.myBar2 = new Chart(ctx5).Bar(barChartData2, {
			responsive : true
		});
		var legend = window.myBar1.generateLegend();
	}


</script>
