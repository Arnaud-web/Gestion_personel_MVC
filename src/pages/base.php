<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    	<title>MYsite | <?php if(isset($title)){echo $title;}else{echo "-";}?></title>
	    <link rel="stylesheet" type="text/css" href="/DataTables/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="/DataTables/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="css/adminlte.min.css">
        <script type="text/javascript" language="javascript" src="/DataTables/jquery-3.5.1.js"></script>
	    <script type="text/javascript" language="javascript" src="/DataTables/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" language="javascript" src="/DataTables/dataTables.bootstrap4.min.js"></script>
	    <script type="text/javascript" class="init">
	        $(document).ready(function() {
	            $('#example').DataTable();
            } );
	    </script>
	</head>

<nav class="navbar navbar-expand-sm  justify-content-center" style = "background:rgba(0,0,0,0.3);color:red">

<!-- Links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/employeur">listes des employeurs </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/employeur/new">New employeur </a>
  </li>
</ul>

</nav>
