	<div class="footer-wrap">
		<footer class="footer kickass-w">
			<!--<section class="footer-meta">
				<h3>Some Headline</h3>
				<ul>
					<li>Some Headline</li>
					<li>Some Headline</li>
					<li>Some Headline</li>
				</ul>
				<h3>Some Headline</h3>
				<ul>
					<li>Some Headline</li>
					<li>Some Headline</li>
					<li>Some Headline</li>
				</ul>
			</section>
			<section class="footer-meta">
				<h3>Some Headline</h3>
				<p>This multi-part tutorial from WPShout takes a detailed look at each of the various template files and gives a simple description of how it all works in “plain english”. Code samples without the HTML makes it easy to identify the WordPress template tags.</p>
				<p>Code samples without the HTML makes it easy to identify the WordPress template tags.</p>
			</section>-->
			<h4>Some footer shtuff is going here.</h4>
		</footer>
	</div>
	<a href="" id="cta">
		Click ME!?!
	</a>
	<!--<form role="search" id="search">
		<fieldset>
			<label for="q">
				<input type="text" name="q" id="q" placeholder="search site" />
			</label>
			<input type="submit" value="Search" />
		</fieldset>
	</form>-->
<!-- scripts -->
<?php	
if($mobile==true){
	echo '<script src="javascripts/mobile.js"></script>';
}else{
	echo '<script src="http://code.jquery.com/jquery-latest.min.js"></script>';
	//echo '<script src="javascripts/responsiveslides.min.js"></script>';
	echo '<script src="javascripts/desktop.js"></script>';
}
?>
</body>
</html>