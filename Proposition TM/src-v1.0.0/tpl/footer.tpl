<footer class="footer">
	<div class="container-fluid">
		<nav class="pull-left">
			<ul>
				<li>
					<a href="#">
						Home
					</a>
				</li>
				<li>
					<a href="#">
						Company
					</a>
				</li>
				<li>
					<a href="#">
						Portfolio
					</a>
				</li>
				<li>
					<a href="#">
						Blog
					</a>
				</li>
			</ul>
		</nav>
		<p class="copyright pull-right">
			&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://www.creative-tim.com">Creative Tim</a>, made with love for a better web
		</p>
	</div>
</footer>
</div>
</div>

</body>

<!--   Core JS Files   -->
<script src="includes/design/js/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="includes/design/js/bootstrap.min.js" type="text/javascript"></script>
<script src="includes/design/js/material.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="includes/design/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="includes/design/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<!-- Material Dashboard javascript methods -->
<script src="includes/design/js/material-dashboard.js"></script>

<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="includes/design/js/demo.js"></script>

<!-- DataTables -->
<script src="includes/design/js/datatables/jquery.dataTables.js"></script>
<script src="includes/design/js/datatables/dataTables.bootstrap.min.js"></script>

<!-- Bootstrap Alert -->
<script src="includes/design/js/alertdelete.js"></script>

<script type="text/javascript">
	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
			demo.initDashboardPageCharts();

		});
	</script>

	<!-- page script -->
	<script>
		$(function () {
			$("#example1").DataTable({
				"paging": true,
				"searching": false
			});
			// $('#example2').DataTable({
			// 	"paging": true,
			// 	"lengthChange": false,
			// 	"searching": false,
			// 	"ordering": true,
			// 	"info": true,
			// 	"autoWidth": false
			// });
		});
	</script>

	</html>
