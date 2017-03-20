<html>
<head>
	<title>Board Partenaires</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
  <!--     Fonts and icons     -->
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> 
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/datatables/dataTables.bootstrap.css">


</head>
<body>
	<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Board Partenaires</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
          <li><a href="<?php echo ROOT_URL; ?>news">News</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li><a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users<strong class="caret"></strong></a>
             <ul class="dropdown-menu">
              <li>
                <a href="<?php echo ROOT_URL; ?>users/liste/">List users</a>
              </li>
              <li class="divider">
              </li>
              <li>
                <a href="<?php echo ROOT_URL; ?>users/add/">Add users</a>
              </li>
              <li class="divider">
              </li>
              <li>
                <a href="<?php echo ROOT_URL; ?>users/location/">Localisation</a>
              </li>
            </ul>
          </li>
          
          <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
        <?php else : ?>
          <li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
          <li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
        <?php endif; ?>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container">

 <div class="row">
  <?php Messages::display(); ?>
  <?php require($view); ?>
</div>

</div><!-- /.container -->

<!--   Core JS Files   -->
<script src="<?php echo ROOT_PATH; ?>assets/js/core/jquery-3.1.0.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT_PATH; ?>assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!-- DataTables -->
<script src="<?php echo ROOT_PATH; ?>assets/js/datatables/jquery.dataTables.js"></script>
<script src="<?php echo ROOT_PATH; ?>assets/js/datatables/dataTables.bootstrap.min.js"></script>
  <!-- GoogleMap -->
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSgmfT8xZImlJpcCa1T03Q2PcyiAs24PQ&callback=initMap"
  type="text/javascript"></script>

<script type="text/javascript">
  $(document).ready( function () {
    $('#table_id').DataTable();
  } );




</body>
</html>