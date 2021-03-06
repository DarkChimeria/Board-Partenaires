<?php
/* Smarty version 3.1.29, created on 2017-03-11 09:58:24
  from "C:\wamp64\www\tm\tpl\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58c3ca40e37423_65685531',
  'file_dependency' => 
  array (
    'becbba09802dfa5b89d5b2c3dee1ba739a241f1f' => 
    array (
      0 => 'C:\\wamp64\\www\\tm\\tpl\\header.tpl',
      1 => 1489226302,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58c3ca40e37423_65685531 ($_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="includes/design/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="includes/design/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<!-- Bootstrap core CSS     -->
	<link href="includes/design/css/bootstrap.min.css" rel="stylesheet" />

	<!--  Material Dashboard CSS    -->
	<link href="includes/design/css/material-dashboard.css" rel="stylesheet"/>

	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="includes/design/css/style.css" rel="stylesheet" />

	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

	<!-- DataTables -->
	<link rel="stylesheet" href="includes/design/js/datatables/dataTables.bootstrap.css">

	<!-- BootStrap Alert -->
	<?php echo '<script'; ?>
 src="includes/libs/swal2/sweetalert2.min.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="includes/libs/swal2/sweetalert2.min.css" type="text/css" />


</head>

<body>

	<div class="wrapper">

		<div class="sidebar" data-color="purple" data-image="includes/design/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

		    <div class="logo">
		    	<a href="http://www.creative-tim.com" class="simple-text">
		    		Creative Tim
		    	</a>
		    </div>

		    <div class="sidebar-wrapper">
		    	<ul class="nav">
		    		<li class="active">
		    			<a href="dashboard.html">
		    				<i class="material-icons">dashboard</i>
		    				<p>Dashboard</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="user.html">
		    				<i class="material-icons">person</i>
		    				<p>User Profile</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="table.html">
		    				<i class="material-icons">content_paste</i>
		    				<p>Table List</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="typography.html">
		    				<i class="material-icons">library_books</i>
		    				<p>Typography</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="icons.html">
		    				<i class="material-icons">bubble_chart</i>
		    				<p>Icons</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="maps.html">
		    				<i class="material-icons">location_on</i>
		    				<p>Maps</p>
		    			</a>
		    		</li>
		    		<li>
		    			<a href="notifications.html">
		    				<i class="material-icons text-gray">notifications</i>
		    				<p>Notifications</p>
		    			</a>
		    		</li>
		    		<li class="active-pro">
		    			<a href="upgrade.html">
		    				<i class="material-icons">unarchive</i>
		    				<p>Upgrade to PRO</p>
		    			</a>
		    		</li>
		    	</ul>
		    </div>
		</div>

		<div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Material Dashboard</a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">dashboard</i>
									<p class="hidden-lg hidden-md">Dashboard</p>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">notifications</i>
									<span class="notification">5</span>
									<p class="hidden-lg hidden-md">Notifications</p>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Mike John responded to your email</a></li>
									<li><a href="#">You have 5 new tasks</a></li>
									<li><a href="#">You're now friend with Andrew</a></li>
									<li><a href="#">Another Notification</a></li>
									<li><a href="#">Another One</a></li>
								</ul>
							</li>
							<li>
								<a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
									<p class="hidden-lg hidden-md">Profile</p>
								</a>
							</li>
						</ul>

						<form class="navbar-form navbar-right" role="search">
							<div class="form-group  is-empty">
								<input type="text" class="form-control" placeholder="Search">
								<span class="material-input"></span>
							</div>
							<button type="submit" class="btn btn-white btn-round btn-just-icon">
								<i class="material-icons">search</i><div class="ripple-container"></div>
							</button>
						</form>
					</div>
				</div>
			</nav>
<?php }
}
