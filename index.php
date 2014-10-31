<?php include_once ('head.php'); ?>

<!-- the page title -->
<title>HiFi Calendar Girl</title>

    <script src="sliderjs/jquery.js"></script>
    <script src="sliderjs/amazingslider.js"></script>
    <script src="sliderjs/initslider-1.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel.js"></script>

<link href="css/front.css" rel="stylesheet" type="text/css" />
<?php include_once ('nav.php'); ?>



<!-- top row starts -->
<div id="top-row">
<!-- carousel starts -->
<div id="vid-screen">

<div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 32px;">
        <ul class="amazingslider-slides" style="display:none;">
            <li><img width="auto" height="600px" src="slides/01.jpg" alt="24 stunning girls…
" /></li>
            <li><img width="auto" height="600px" src="slides/02.jpg" alt="Chosen by the who-is-who of fashion fraternity" /></li>
            <li><img width="auto" height="600px" src="slides/03.jpg" alt="Groomed by renowned stylist and international  mentor – Sasha Waseem" /></li>
            <li><img width="auto" height="600px" src="slides/05.jpg" alt="Will take part in a reality show…where a battle of wits, beauty and brains  will unleash" /></li>
            <li><img width="auto" height="600px" src="slides/06.jpg" alt="With their style, glamour and elegance
" /></li>
            <li><img width="auto" height="600px" src="slides/07.jpg" alt="6 girls will  emerge victorious
" /></li>
            <li><img width="auto" height="600px" src="slides/12.jpg" alt="Are you going to be one of them?
" /></li>
            <li><img width="auto" height="600px" src="slides/10.jpg" alt="The hunt is on…
" /></li>
            <li><img width="auto" height="600px" src="slides/11.jpg" alt="Presenting a reality show … One you have never seen before!!!
" /></li>
        </ul>
        <ul class="amazingslider-thumbnails" style="display:none;">
            <li><img src="slides/thumbs/01-tn.jpg" /></li>
            <li><img src="slides/thumbs/02-tn.jpg" /></li>
            <li><img src="slides/thumbs/03-tn.jpg" /></li>
            <li><img src="slides/thumbs/05-tn.jpg" /></li>
            <li><img src="slides/thumbs/06-tn.jpg" /></li>
            <li><img src="slides/thumbs/07-tn.jpg" /></li>
            <li><img src="slides/thumbs/12-tn.jpg" /></li>
            <li><img src="slides/thumbs/10-tn.jpg" /></li>
            <li><img src="slides/thumbs/11-tn.jpg" /></li>
        </ul>
    </div>

</div>
<!-- carousel ends -->

<?php include_once('branding.php'); ?>

</div>
<!-- top row ends -->

<div id="carousel-wrap">
<div id="carousel">
	<a href="http://www.youtube.com/embed/cu-rOeOs8iE?autoplay=true" target="_blank"><img class="img-thumbs" src="images/video-thumbs/01.jpg" /></a>
	<a href="http://www.youtube.com/embed/MNiF064y6bs?autoplay=true" target="_blank"><img class="img-thumbs" src="images/video-thumbs/03.jpg" /></a>
	<a href="http://www.youtube.com/embed/2iaV55H0frw?autoplay=true" target="_blank"><img class="img-thumbs" src="images/video-thumbs/04.jpg" /></a>
	<a href="http://www.youtube.com/embed/-aQ7o6qwMfk?autoplay=true" target="_blank"><img class="img-thumbs" src="images/video-thumbs/05.jpg" /></a>
	<a href="http://www.youtube.com/embed/vLQA5RRVT0k?autoplay=true" target="_blank"><img class="img-thumbs" src="images/video-thumbs/06.jpg" /></a>
	<a href="http://www.youtube.com/embed/-imuipDpNtY?autoplay=true" target="_blank"><img class="img-thumbs" src="images/video-thumbs/07.jpg" /></a>
	<a href="http://www.youtube.com/embed/wNKMcWxQ4iM?autoplay=true" target="_blank"><img class="img-thumbs" src="images/video-thumbs/08.jpg" /></a>
</div>
</div>

<div id="middle-row">
<h1><a name="concept" id="concept">Beauty: Discovered &amp; Captured</a></h1>
	<div id="bottom-left" class="bottom">
	<p>Everyone has a beauty within, waiting to be unleashed and magnified into a powerhouse of grace, elegance and confidence. This is what Hi-fi Calendar Girl 2014 is all about. It is about discovering the beauty within, grooming it to an extent that it becomes an epitome of exquisiteness. Later the essence of beauty would be captured in the pages of Hi-fi Calendar 2014. </p>

<p>A reality show launched by Ne Hi-fi, Hi-fi Calendar Girl 2014 will invite models and aspiring models to join the show. Initial screening will choose 24 participants, who will then battle it out for the top 6 spots. The chosen 6 winners will then feature in Hi-if Calendar Girl 2014. This is the first time such a reality show is being launched in the Northeast and there is</p></div>

<div id="bottom-right" class="bottom"><p> immense excitement all around.</p> 
<p>What is even more exciting is that the 24 contestants will also be groomed by top experts of the regional fashion industry, and will be personally mentored by Sasha Waseem, an International Fashion Photographer and Model Coordinator based out of Hong Kong. Also present in the show will be Xing Wang Prestige, a Hong Kong based Model, Talent &amp; Event Management agency, who will not only guide and groom the 6 selected girls for the final calendar shoot, but will also give them exposure to the Asian fashion industry.</p>

<p>The buzz is growing only louder. Do tune in to watch the show. </p>

	</div>
    <div class="clear-both"></div>
</div>

<script>
$(document).ready(function() {
	     
// Using custom configuration
$("#carousel").carouFredSel({
	items               : 5,
	direction           : "left",
	height				: 120,
	width				: 940,
	scroll : {
 		items           : 4,
 		easing          : "elastic",
 		duration        : 1000,                        
 		pauseOnHover    : true
		}                  
	});
	
});

</script>

<?php include_once('footer.php'); ?>