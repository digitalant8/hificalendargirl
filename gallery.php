<?php include_once ('head.php'); ?>

<!-- the page title -->
<title>The HiFi Calendar Girl photo gallery</title>
<style>
	.imgdiv {display:none;};
	.hidden { display:none; }
	#pager {margin: 10px auto;}
	#pager span {padding:10px 25px; cursor:pointer; background-color:#5c604d; color:#ffbad2; font-weight:bold; display:inline-block;}
	#pager span:hover { background-color:#ffbad2; color:#5c604d}
</style>
<?php 
include_once('page-header.php'); 
include_once ('nav.php'); 
?>



<!-- top row starts -->
<div id="top-row">
<!-- carousel starts -->
<div id="body-copy">

<img src="images/page-headers/01.jpg" />

	<h2>Photo Gallery
		<br /><span class="text-muted">Hi-fi Calendar Girl 2014</span></h2>
        <div class="gallery-images">
<?php 
		$totalImages = 67; // change this number when you add new images
		$counter = 1;
		$divcount = 1;
		echo '<div id="imgbox'.$divcount.'" class="imgdiv">';
		for ($i = $totalImages; $i > 0 ; $i--) {
			if ($counter > 11 && $counter % 12 == 1){
				echo '<div id="imgbox'.$divcount.'" class="imgdiv">';
			}
			if ($i < 10){
				echo '<a href="gallery/calendar-girl-2014-0'.$i.'.jpg" data-lightbox="gallery1" title="Hi-fi Calendar Girl 2014 Audition"><img src="gallery/calendar-girl-2014-0'.$i.'-t.jpg" alt="Hi-fi Calendar Girl 2014" /></a>';
			} else {
				echo '<a href="gallery/calendar-girl-2014-'.$i.'.jpg" data-lightbox="gallery1" title="Hi-fi Calendar Girl 2014 Audition"><img src="gallery/calendar-girl-2014-'.$i.'-t.jpg" alt="Hi-fi Calendar Girl 2014" /></a>';
			}
			
			if ($counter > 11 && $counter % 12 == 0){
					echo '</div>';
					$divcount++;
			}
			$counter++;
		}
		if ($totalImages % 12 != 0) {
				echo '</div>';
				echo ('<div id="pager">');
					for ($i = 1; $i <= $divcount; $i++) {
					echo('<span>'.$i.'</span>');
						}
				echo ('</div>');
			} else {
				echo ('<div id="pager">');
					for ($i = 1; $i < $divcount; $i++) {
					echo('<span>'.$i.'</span>');
						}
				echo ('</div>');
			}

		?>
            
        </div>
</div>
<!-- carousel ends -->

<?php include_once('branding.php'); ?>

</div>
<!-- top row ends -->

<script type="text/javascript">

$('#imgbox1').fadeIn(1000);
$('#pager span').click(function(e) {
    index = $(this).text();
	$('.imgdiv').hide();
	$('#imgbox'+index).fadeIn(1000);
});
spanwidth=$('#pager span').outerWidth();
count = <?php echo $totalImages ?> / 12;
mod = <?php echo $totalImages ?> % 12;
if (mod == 0) {
		width = spanwidth*count;
	} else {
		width = spanwidth*(count+1);
	}
$('#pager').css("width",width+"px");
</script>

<?php include_once('footer.php'); ?>