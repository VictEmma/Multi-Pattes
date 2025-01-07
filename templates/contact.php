<?php
/**
    * Template Name: Contact
*/
?>
CONTACT HTML 
<br>
<aside>
<h2>Email</h2>
<?php the_field(selector: "email"); ?>
<hr>
<h2>Coordonées GPS</h2>
<?php $coordinates = get_field(selector: "coordinates"); ?> 
<p>Latitude: <?php echo $coordinates['latitude']; ?></p>
<p>Longitude: <?php echo $coordinates['longitude']; ?></p>
<hr>
<h2>Logo</h2>
<?php $image = get_field(selector: "image"); ?>
<img src="<?php echo ($image ['sizes']['custom_size']);?>" height="<?php echo ($image ['sizes']['custom_size-height']);?>" width="<?php echo ($image ['sizes']['custom_size-width']);?>" alt='<?php echo ($image ['alt']);?>'>
<hr>
<pre>
<?php var_dump($image); ?>
</aside>
</pre>