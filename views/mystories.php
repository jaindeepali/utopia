<div class="container">
	<div class="row-fluid header" style="margin-top:2%">
		<h2>Motivational Stories posted by me</h2>
	</div>
	<div class="row-fluid content home-content" style="margin-top:-1.5%">
		<div class="grid" style="width:1000px">
			<div class="hero-unit item">
				<a href='/story/2' height:'150px' width:'150px'><img src='/public/images/mot2.jpg'></a><br><br>
				<b>Motivational story 2</b><br>
				<i class="fa fa-thumbs-up"></i> : 7<br/>
				Added on: 08/03/2105<br/><br>
			</div>
			<div class="hero-unit item">
				<a href='/' height:'150px' width:'150px'><img src='/public/images/jimmy.jpg'></a><br><br>
				<b>Motivational story 5</b><br>
				<i class="fa fa-thumbs-up"></i> : 1<br/>
				Added on: 08/03/2105<br/><br>
			</div>
		</div>
		<a href="/post_story"><button class="btn"style="height: 40px;"><i class="fa fa-edit"></i> &nbsp;Post a story</button></a>
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