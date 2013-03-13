<?php 
/**
* Single template used by Neuro.
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

	global $options, $ne_themeslug, $post, $sidebar, $content_grid; // call globals
	response_sidebar_init(); // sidebar init
	get_header(); // call header

?>

<div class="container">
	<div class="row">
		<div class="wrap">
						<script type="text/javascript"><!--
google_ad_client = "ca-pub-9478214494697009";
/* dash_top_linkss */
google_ad_slot = "9197294149";
google_ad_width = 728;
google_ad_height = 15;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<a href="http://www.tkqlhce.com/o665uoxuowBHHJKFLFBDCKEKHHD" style="margin-left:165px;" target="_blank" onmouseover="window.status='http://www.zappos.com/bin/zapposset?src=cj&ref=comjun';return true;" onmouseout="window.status=' ';return true;"> Free Shipping on Halloween Costumes!!!!!!!!! </a><img src="http://www.lduhtrp.net/8i115p59y31NTTVWRXRNPOWQWTTP" width="1" height="1" border="0" />
			<div class="row">
			<?php if ($options->get($ne_themeslug.'_single_breadcrumbs') == "1") { response_breadcrumbs();}?>
			</div>
	<!--Begin @Core post area-->
		<?php response_index(); ?>
	<!--End @Core post area-->
		</div>
	</div>
</div><!--end container-->

<?php get_footer(); ?>