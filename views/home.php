<div class="container">
	<div class="row-fluid header banner" style="margin-top:2%">
		<div class="span3 glow">
			<a href="/motivation">
				<span>
				  <img src="/public/images/rainbow.png">
				</span><br/>
				<h2>Motivation</h2>
			</a><br>
		</div>
		<div class="span3 glow">
			<a href="/goals">
				<span>
				  <img src="/public/images/trophy.png">
				</span><br/>
				<h2>Introspection</h2>
			</a><br/>
		</div>
		<div class="span3 glow">
			<a href="/graph">
				<span>
					<img src="/public/images/barchart.png">
				</span><br/>
				<h2>Analysis</h2>
			</a><br/>
		</div>
		<div class="span3 glow">
			<a href="/insights">
				<span>
					<img src="/public/images/eye.png">
				</span><br/>
				<h2>Insight</h2>
			</a><br/>
		</div>
	</div>
	<div class="row-fluid content" style="margin-top:-1.5%;text-align:center;">
		<h4>Staying committed to goals made easy.</h4>
		<b style="font-size:24px">"</b> &nbsp;&nbsp;Productivity is never an accident. It is always the result of a commitment to excellence, intelligent planning, and focused effort.&nbsp;&nbsp; <b style="font-size:24px">"</b> &nbsp;&nbsp;&nbsp;&nbsp;- Paul J. Meyer
		<br>
		<?php
			global $loggedInUser;
			if(!$loggedInUser):
		?>
		<a href = "/login"><button class="btn" style="height: 40px;">Join Now!</button></a>
		<?php endif; ?>
	</div>
	<div class="row-fluid content home-content" style="margin-top:-1.5%">
		<div class="grid" style="width:1000px">
			<div class="hero-unit item">
				<a href='/story/1' height:'150px' width:'150px'><img src='/public/images/motivation.jpg'></a><br><br>
				<b>Motivational story 1</b><br>
				<i class="fa fa-thumbs-up"></i> : 6<br/>
				Added on: 08/03/2105<br/><br>
			</div>
			<div class="hero-unit item">
				<a href='/story/2' height:'150px' width:'150px'><img src='/public/images/mot2.jpg'></a><br><br>
				<b>Motivational story 2</b><br>
				<i class="fa fa-thumbs-up"></i> : 7<br/>
				Added on: 08/03/2105<br/><br>
			</div>
			<div class="hero-unit item">
				<a href='/story/3' height:'150px' width:'150px'><img src='/public/images/steve.jpg'></a><br><br>
				<b>Motivational story 3</b><br>
				<i class="fa fa-thumbs-up"></i> : 3<br/>
				Added on: 08/03/2105<br/><br>
			</div>
			<div class="hero-unit item">
				<a href='/story/4' height:'150px' width:'150px'><img src='/public/images/sheryl.jpg'></a><br><br>
				<b>Motivational story 4</b><br>
				<i class="fa fa-thumbs-up"></i> : 2<br/>
				Added on: 08/03/2105<br/><br>
			</div>
			<div class="hero-unit item">
				<a href='/' height:'150px' width:'150px'><img src='/public/images/jimmy.jpg'></a><br><br>
				<b>Motivational story 5</b><br>
				<i class="fa fa-thumbs-up"></i> : 1<br/>
				Added on: 08/03/2105<br/><br>
			</div>
			<div class="hero-unit item">
				<a href='/' height:'150px' width:'150px'><img src='/public/images/ted.jpg'></a><br><br>
				<b>Motivational story 6</b><br>
				<i class="fa fa-thumbs-up"></i> : 2<br/>
				Added on: 08/03/2105<br/><br>
			</div>
			<div class="hero-unit item">
				<a href='/' height:'150px' width:'150px'><img src='/public/images/bill.jpg'></a><br><br>
				<b>Motivational story 7</b><br>
				<i class="fa fa-thumbs-up"></i> : 1<br/>
				Added on: 08/03/2105<br/><br>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	//Masonry grid
	$('img').on('load', function(){
	    $('.hero-unit').animate({opacity: 1}, 500);
		var $masonryContainer = $('div.grid')
		$masonryContainer.masonry({
	        itemSelector: '.item',
	        columnWidth: 310,
	        gutterWidth: 1,
	        animationOptions: {
			    duration: 400
			  },
			isAnimated: true,
			isFitWidth: true
    	});
    });	
</script>