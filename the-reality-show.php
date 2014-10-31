<?php include_once ('head.php'); ?>

<!-- the page title -->
<title>Ne Hi-fi Calendar Girl 2014 - The Reality Show</title>

<style>
	.openpane {
		margin:auto;
		width:420px;
	}
	.openpane iframe {
		margin-bottom:10px;
	}
</style>

<?php 
include_once('page-header.php'); 
include_once ('nav.php'); 
?>

<!-- top row starts -->
<div id="top-row">
<!-- carousel starts -->
<div id="body-copy">
<img src="images/page-headers/09.jpg" />

<h2>The Reality Show</h2> 
<h2><span class="text-muted">Captured moments</span></h2>
 
 <div class="episode">
    <p class="lead">Day 3:</p>
    <a href="page-images/10.jpg" data-lightbox="page-image1" title="Hi-fi Calendar Girl 2014"><img class="page-images" src="page-images/10t.jpg" alt="Hi-fi Calendar Girl 2014" /></a>
    <p>All the 24 contestants arrived at a resort in Sonapur, 30 kilometers away from Guwahati, Assam, where the reality show has been slated to take place. Over the next few days, housed in this resort, the contestants will be demonstrating their talent, wit and attitude to be selected as the faces for Hi-fi Calendar 2014.</p> 
    <p>Soon after their arrival at the resort, the contestants were introduced to the judges and the mentors – <a href="the-judges.php#garima">Garima S.Garg</a>, <a href="the-judges.php#diganta">Diganta Hazarika</a>, <a href="the-judges.php#sukalpa">Sukalpa Das</a>, <a href="the-judges.php#bhabajeet">Bhabajeet Choudhury</a>. Renowned in their own fields, these celebrities will be grooming and guiding the girls throughout the show. International stylist Sasha Waseem joined the show from Hong Kong to mentor the contestants. </p>
    <a href="page-images/11.jpg" data-lightbox="page-image1" title="Hi-fi Calendar Girl 2014"><img class="page-images" src="page-images/11t.jpg" alt="Hi-fi Calendar Girl 2014" /></a><p>Later in the evening, a “Hairstyling round powered by Philips Kerashine”, was organized. In this contest, the contestants had to style their hair and look unique and elegant. Some stylish hair styles managed to impress the judges deeply. The contest generated lot of excitement and the winners in this round automatically qualified for the next level. </p>
    <div class="openpane">
        <iframe width="420" height="315" src="//www.youtube.com/embed/Txi8nD0CCLI" frameborder="0" allowfullscreen></iframe>
        <iframe width="420" height="315" src="//www.youtube.com/embed/COgLjDt4iAU" frameborder="0" allowfullscreen></iframe>
        <iframe width="420" height="315" src="//www.youtube.com/embed/R2u3mSpY9vI" frameborder="0" allowfullscreen></iframe>
    </div>
    <p><span class="opentrigger">Watch Videos</span></p>
 </div>

<div class="episode">
    <p class="lead">Episode  4</p>
    <p>This episode saw interesting activities – the main being ‘Miss Lotus White Glow’. Here the contestants were put through a glow test, where  Zuhili Debbarama was chosen as the ‘Miss Lotus White Glow’ for her flawless snow-white skin. At the end of the episode, 9 contestants were eliminated, leaving the show with top 15 participants. </p>
    <div class="openpane">
        <iframe width="420" height="315" src="//www.youtube.com/embed/4TzryM3iWIA" frameborder="0" allowfullscreen></iframe>
        <iframe width="420" height="315" src="//www.youtube.com/embed/TTxYkq_HDtE" frameborder="0" allowfullscreen></iframe>
    </div>
    <p><span class="opentrigger">Watch Videos</span></p>
</div>

<div class="episode">
    <p class="lead">Episode 5</p>
    <p>This was a fun-filled yet educational round, where model and mentor Sukalpa Das taught the contestants how to model. Once she was confident about the contestants, a photo shoot was held where the contestants posed with Diganta Hazarika, a renowned actor and another mentor at the show.</p>
    <p>The entry of astrologer Jyotish Ratna Bharath Raaj created lot of excitement. He spoke to the contestants and predicted what lay in store for them. This was followed by a ramp walk, where the contestants wore a collection designed by Garima S. Garg, a well known designer and another mentor at the show. The collection was a fusion between traditional and modernity, and the contestants looked stupendous in them. The way they carried themselves and walked the ramp left a lasting impression on the audience.</p>
    <p>At the end of the show, three contestants were eliminated. </p>
    <div class="openpane">
        <iframe width="420" height="315" src="//www.youtube.com/embed/1pYb2kvmWBA" frameborder="0" allowfullscreen></iframe>
        <iframe width="420" height="315" src="//www.youtube.com/embed/uZzyKnjQhso" frameborder="0" allowfullscreen></iframe>
        <iframe width="420" height="315" src="//www.youtube.com/embed/f5awgDPu4QM" frameborder="0" allowfullscreen></iframe>
    </div>
    <p><span class="opentrigger">Watch Videos</span></p>
</div>

<div class="episode">
    <p class="lead">Episode 6</p>
    <p>This episode began with a fitness training by Bhabajeet Choudhury, renowned Mixed Martial Arts star and a mentor at the show. The contestants were given tips on how to remain fit and healthy and the exercises they regularly have to do. This was followed by a photo shoot. </p>
    <p>Later, all the contestants visited a Children’s home, where they danced, sang and played with the children.</p>
</div>


<div class="episode">
    <p class="lead">Episode 7</p>
    <p>This was Day-1 of the two days Grand Finale celebration.  The episode began with everyone paying homage to camera man Somesh, who was killed in an accident as he was returning home after the first day of shoot. </p> 
    <p>Later, the birthday of Tapashree Kalita, a contestant was celebrated. This was followed by a ramp walk where the contestants displayed some bridal wear. The contestants, under the guidance of the mentors, had by now become through professionals and the ramp walk was left the audience in awe. </p>
</div>

<div class="episode">
    <p class="lead">Episode 8</p>
    <p>This was the Grand Finale day.  The episode began with the contestants walking the ramp and answering questions posed by the jury who were also the mentors. Later, amid lot of excitement and celebrations, six out of the nine contestants were declared winners.</p>
</div>


</div>
<!-- carousel ends -->

<?php include_once('branding.php'); ?>

</div>
<!-- top row ends -->
<script>

$('.openpane').hide();

$('.opentrigger').on('click', function () {
			origtext = 'Watch Videos';
			fintext = 'Click to close';
			ele = $(this);
			ele.parent().siblings('.openpane').slideToggle(2000);
			eletxt = ele.text().trim();
			if (eletxt === origtext) {
				ele.text(fintext);
			} else {
				ele.text(origtext);
			}
		});
</script>
<?php include_once('footer.php'); ?>