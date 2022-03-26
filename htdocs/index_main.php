<?php
session_start();
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}?>

<html>

<head>

    <meta http-equiv="Content-Language" content="th">
    <meta http-equiv="content-Type" content="text/html; charset=window-874">
    <meta http-equiv="content-Type" content="text/html; charset=tis-620">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

        <style>
body  {
	width:100%;
  background-repeat: no-repeat;
  background-attachment: fixed;
	background-size: cover;
	background-position: center;
	
}
.dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
    pointer-events: none;
}
		
.table{
	width: 100%;
	border-collapse: collapse;	
		}
.table td,.table th{
	padding: 12px 15px;
	border: 1px solid #ddd;
	text-align: center;
}
@media(max-width: 500px){
	.table thead{
		display: none;
	}
	.table, .table tbody, .table tr, .table td{
		display: block;
		width: 100%;
	}
	.table tr{
		margin-bottom:15px;
	}
	.table td{
		text-align: right;
		padding-left: 50%;
		text-align: right;
		position: relative;
	}
	.table td::before{
		content: attr(data-lable);
		position: absolute;
		left: 0;
		width: 50%;
		padding-left:15px;
		font-size:15px;
		font-weight: bold;
		text-align: left;
	}
}

</style>
</head>

<body>
    <nav class="shadow navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e2d224;"> 
        <div class="container-fluid">
            <a class="navbar-brand mb-0 h1" href="?controller=pages&action=home">Internship</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="?controller=pages&action=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?controller=request&action=index">Internship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="?controller=company&action=index">Company</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <?php echo $_SESSION['uid']; print " ";echo $_SESSION['name']; print " ";echo $_SESSION['surname']; print " ";?>     
                </span>
                <form class="form-inline my-2 my-lg-0">
      		<a href="logout.php" class="btn btn-outline-danger" role="button"><i class="fas fa-sign-in-alt"></i> Logout</a>
    		</form>
            </div>
        </div>
    </nav>


    <?php require_once("routes.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous">
    </script>
</body>

</html>