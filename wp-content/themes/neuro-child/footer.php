<?php 

	global $options, $ne_themeslug // call globals

?>
	


<!-- For sticky footer -->
<div class="push"></div>  
</div>	<!-- End of wrapper -->

<?php if ($options->get($ne_themeslug.'_disable_footer') != "0"):?>	

</div><!--end container wrap-->
<div class="footer"> <!-- Footer class for sticky footer -->
    <div id="footer" class="container">
     		<div class="row" id="footer_container">
    			<div id="footer_wrap">	
	<!-- Begin @response footer hook content-->
		<?php response_footer(); ?>
	<!-- End @response footer hook content-->
				</div>
			<div class="row" >
				<div id="credit" class="twelve columns">
				<h1 style="color:#fff;">This website is not the official DASH website OR affiliated with the Kardashians.  This website is for informational use.</h1>
				<a href="http://www.tkqlhce.com/jf104tenkem1779A5B5132754832" target="_blank" onmouseover="window.status='http://www.zappos.com/bin/zapposset?src=cj&ref=comjun';return true;" onmouseout="window.status=' ';return true;">Free Shipping at Zappos!</a><img src="http://www.tqlkg.com/qg121ax0pvtEKKMNIOIEGFKIHLGF" width="1" height="1" border="0"/>
				</div>
			</div>
	<?php endif;?>
	

			</div><!--end footer_wrap-->
	</div><!--end footer-->


<?php if ($options->get($ne_themeslug.'_disable_afterfooter') != "0"):?>

	<div id="afterfooter" class="container">
		<div class="row" id="afterfooterwrap">	
		<!-- Begin @response afterfooter hook content-->
			<?php response_secondary_footer(); ?>
		<!-- End @response afterfooter hook content-->
				
		</div> <!--end afterfooter-->	
	</div> 	
	<?php endif;?>
	
	<?php wp_footer(); ?>	
</body>

</html>
