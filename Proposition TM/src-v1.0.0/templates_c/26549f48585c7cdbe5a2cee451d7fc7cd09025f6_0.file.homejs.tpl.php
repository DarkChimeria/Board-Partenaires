<?php
/* Smarty version 3.1.29, created on 2017-03-07 21:10:08
  from "C:\wamp64\www\tm\tpl\home\homejs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58bf21b04d5649_29582295',
  'file_dependency' => 
  array (
    '26549f48585c7cdbe5a2cee451d7fc7cd09025f6' => 
    array (
      0 => 'C:\\wamp64\\www\\tm\\tpl\\home\\homejs.tpl',
      1 => 1488921007,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58bf21b04d5649_29582295 ($_smarty_tpl) {
?>
<!--   Core JS Files   -->
<?php echo '<script'; ?>
 src="includes/design/js/jquery-3.1.0.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="includes/design/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="includes/design/js/material.min.js" type="text/javascript"><?php echo '</script'; ?>
>

<!--  Charts Plugin -->
<?php echo '<script'; ?>
 src="includes/design/js/chartist.min.js"><?php echo '</script'; ?>
>

<!--  Notifications Plugin    -->
<?php echo '<script'; ?>
 src="includes/design/js/bootstrap-notify.js"><?php echo '</script'; ?>
>

<!--  Google Maps Plugin    -->
<?php echo '<script'; ?>
 type="text/javascript" src="https://maps.googleapis.com/maps/api/js"><?php echo '</script'; ?>
>

<!-- Material Dashboard javascript methods -->
<?php echo '<script'; ?>
 src="includes/design/js/material-dashboard.js"><?php echo '</script'; ?>
>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<?php echo '<script'; ?>
 src="includes/design/js/demo.js"><?php echo '</script'; ?>
>

<!-- DataTables -->
<?php echo '<script'; ?>
 src="includes/design/js/datatables/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="includes/design/js/datatables/dataTables.bootstrap.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
			demo.initDashboardPageCharts();

		});
	<?php echo '</script'; ?>
>

	<!-- page script -->
	<?php echo '<script'; ?>
>
		$(function () {
			$("#example1").DataTable();
			$('#example2').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": false,
				"ordering": true,
				"info": true,
				"autoWidth": false
			});
		});
	<?php echo '</script'; ?>
>

	</html><?php }
}
