<link rel="stylesheet" href="<?php echo $path; ?>/inc/tags/css/magnific-popup.css">
<script src="<?php echo $path; ?>/inc/plugins/lightbox/jquery.magnific-popup.min.js"></script>

<div class="gallery" >

<?php
$galdir = $tag_var1;
$images = glob("content/media/$galdir/*");
$taken  = array();
$path_new = '';
if (!empty($path)) { $path_new = $path.'/'; }

$opFile = "content/media/". $galdir ."/gallery.txt";

if (file_exists($opFile)) { 
	$fp          = fopen($opFile,"r");    	
	$data        = @fread($fp, filesize($opFile));
	fclose($fp);
	$line        = explode("\n", $data);		


	foreach($line as $test){
		if(!empty($test)){
    		$test_line[] = explode("|", $test); 
		}     	        
	}
        
	foreach ($test_line as $t){
		$image = "content/media/$galdir/".$t[0];
		$info  = pathinfo($image);
		$ext   = $info['extension'];
		if ($ext != 'txt' || empty($ext)){
    		$taken[] = $image;
			echo "<div class='slide'><img src='$path/inc/plugins/timthumb.php?src=$path_new$image&h=$thumbnail_height&w=$thumbnail_width'></div>";
		}  
	}
}

foreach ($images as $image) { 
    if (!in_array($image, $taken)){
    	$info   = pathinfo($image);
		$ext    = $info['extension'];
		if ($ext != 'txt'){
	    	echo "<div class='slide'><a title data-lightbox='BlackBird' ='' href='$path_new$image'><img src='$path/inc/plugins/timthumb.php?src=$path_new$image&h=$thumbnail_height&w=$thumbnail_width'></a></div>";
		}
    }
}

unset($galdir,$images,$test_line,$tag_var1,$image,$opFile,$line,$fp,$data,$test,$taken);
?>

</div>

<script>
$('.gallery').each(function() {
    $(this).magnificPopup({
        delegate: 'a', 
        type: 'image',
        disableOn: 10,
        gallery:{enabled:true}
    });
}); 
</script>