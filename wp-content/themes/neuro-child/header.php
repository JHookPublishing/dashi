<?php 
/**
* Header template used by Neuro
*
* Authors: Tyler Cunningham, Trent Lapinski
* Copyright: © 2012
* {@link http://cyberchimps.com/ CyberChimps LLC}
*
* Released under the terms of the GNU General Public License.
* You should have received a copy of the GNU General Public License,
* along with this software. In the main directory, see: /licensing/
* If not, see: {@link http://www.gnu.org/licenses/}.
*
* @package Neuro.
* @since 2.0
*/

	global $options, $ne_themeslug, $ne_themename; // call globals

?>
	<?php response_head_tag(); ?>
<!-- End @response head_tag hook content-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> <!-- wp_enqueue_script( 'comment-reply' );-->
<?php wp_head(); ?> <!-- wp_head();-->
<meta name="alexaVerifyID" content="w-QbHTlqSZ579fw4BSJ2zCXIXIY" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6902154-20']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head><!-- closing head tag-->

<!-- Begin @response after_head_tag hook content-->
	<?php response_after_head_tag(); ?>
<!-- End @response after_head_tag hook content-->
	
<!-- Begin @response before_header hook  content-->
	<?php response_before_header(); ?> 
<!-- End @response before_header hook content -->
<!-- Adding wrapper class for sticky footer -->
<div class="wrapper">			
<header>

<?php if ($options->get($ne_themeslug.'_subheader') == '1') { response_subheader();} ?>
<div class="container">
	<div class="row">
		<div id="header_wrap">
	<?php
		foreach(explode(",", $options->get('header_section_order')) as $fn) {
			if(function_exists($fn)) {
				call_user_func_array($fn, array());
			}
		}
	?>
		</div>
	</div>	
</div>
<!-- Begin @response_navigation hook-->	
	<?php if ($options->get($ne_themeslug.'_full_menu') == '1') { response_navigation();} ?>
<!-- End @response_navigation hook-->	

</header>

<!-- Begin @response after_header hook -->
	<?php response_after_header(); ?> 
<!-- End @response after_header hook -->