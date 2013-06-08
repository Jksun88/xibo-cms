<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php include('../../template.php'); ?>
<html>
<head>
  	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  	<title><?php echo PRODUCT_NAME; ?> Documentation</title>
  	<link rel="stylesheet" type="text/css" href="../../css/doc.css">
	<meta name="keywords" content="digital signage, signage, narrow-casting, <?php echo PRODUCT_NAME; ?>, open source, agpl" />
	<meta name="description" content="<?php echo PRODUCT_NAME; ?> is an open source digital signage solution. It supports all main media types and can be interfaced to other sources of data using CSV, Databases or RSS." />  <link href="img/favicon.ico" rel="shortcut icon">
  	<!-- Javascript Libraries -->
  	<script type="text/javascript" src="lib/jquery.pack.js"></script>
  	<script type="text/javascript" src="lib/jquery.dimensions.pack.js"></script>
  	<script type="text/javascript" src="lib/jquery.ifixpng.js"></script>
</head>

<body>
	<h1 lang="en-GB" class="western">Dashboard</h1>
	
	<p>There are two types of dashboard which can be presented to a user on log in.</p>
	
	<h2>Default Dashboard</h2>
	
	<p>When a user first logs in they are presented with the <?php echo PRODUCT_NAME; ?> Dashboard. This
	page presents all the options available to maintain your <?php echo PRODUCT_NAME; ?> Network. </p>
	
	<p><img alt="Default Dashboard" src="dashboard_admin.png"
	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	width="545" height="318"></p>
	
	<a name="Dashboard" id="Dashboard"></a><h2>Dashboard Icons</h2>
	
	<p>The dashboard icons allow the user to navigate to specific sections of the
	<?php echo PRODUCT_NAME; ?> Interface, below is a discription of each icon.</p>
	<ul>
	  <li>Schedule - Access the schedule for each display, and schedule new or existing layouts to displays.</li>
	  <li>Layouts - Links to manage all the user's defined layouts i.e. create, edit or delete layouts.</li>
	  <li>Library - Links to server library to manage its media contentes i.e. create, replace or delete media items.</li>
	  <li>Templates - View the templates that are offered to users when they create new layouts.</li>
	  <li>Users - Allows administration of users on the system (Admins Only).</li>
	  <li>Settings - <?php echo PRODUCT_NAME; ?> server configuration settings (Admins Only)</li>
	  <li>License - Information about the licenses <?php echo PRODUCT_NAME; ?> is released under.</li>
	  <li>Manual - Access <?php echo PRODUCT_NAME; ?> online manual</li>
	</ul>
	
	<a name="Media_Dashboard" id="Media_Dashboard"></a><h2>Media Manager Dashboard</h2>
	
	<p>The media manager dashboard is used to delegate specific tasks to users of
	the system. When a user has had their homepage configured they will no longer
	be able to access admin parts of <?php echo PRODUCT_NAME; ?>. The media manager will replace the default
	dashboard with a simple dashboard, pictured below.</p>
	
	<p><img alt="Media Manager Dashboard" src="dashboard_user.png"
	style="display: block; text-align: center; margin-left: auto; margin-right: auto"
	width="567" height="189"></p>
	
	<p>This icon provides the user with a direct link to the region of the
	template that they have been delegated. To learn more about setting users
	permissions click <a href="../users/overview.php">here</a>.</p>

	<?php include('../../template/footer.php'); ?>
</body>
</html>