</div> <!-- page-wrapper -->

<div id="footer-wrapper">
	<a href="http://www.tuttodinternet.com">Tuttodinternet.com</a> - Multiple URLs Checker by <a href="https://gabry3795.github.io">@gabry3795</a> &copy; <?php echo date('Y') ?> - v <?php echo $ver; ?><br/>
	<?php require('script/visit.php') ?>
	<?php echo $old_links_tested ?> urls tested | 
	<?php echo $counterVal; ?> visitors | 
	<?php echo $req_old; ?> requests | 
	<?php echo round($old_links_tested / $req_old,2)  ?> URL<?php if($counterVal >= 2){echo "s";} ?> per request <br />

	<div style="text-align:center">
	</div>
	<br />
	<span style="font-size:12px">
	Feel free to contact me for problems or suggestions<br />
	<a href="mailto:tuttodinternet@live.it">tuttodinternet &lt;at&gt; live.it</a> 
	</span>

	<?php // include '../wp-content/themes/LightenMag/ads/728x90-Header.php' ?>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-52513908-2', 'auto');
	  ga('send', 'pageview');

	</script>
	
</div> <!-- footer-wrapper -->
</div> <!-- page-wrapper -->
</div> <!-- main-wrapper -->

</body>
</html>