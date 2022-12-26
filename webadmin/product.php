<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kanaya Store Admin - Product</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Kanaya Store </span>Admin</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<!-- <div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div> -->
			<div class="profile-usertitle">
				<?php 
					session_start();
					if($_SESSION['status'] == 'login') { ?>
						<div class="profile-usertitle-name"> <?php echo $_SESSION['Name']; ?> </div>
					<?php  } 
						else {
							echo '<script type="text/javascript">alert("You have to login");window.location=\'login.html\';</script>';
						} ?>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		
		<ul class="nav menu">
			<li ><a href="index.php"><em class="fa fa-shopping-cart">&nbsp;</em> Orders</a></li>
			<!-- <li class="active"><a href="index.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li> -->
			<li class="active"><a href="product.php"><em class="fa fa-search">&nbsp;</em> Products</a></li>
			<!-- <li><a href=""><em class="fa fa-users">&nbsp;</em> Users</a></li> -->
			<!-- <li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li> -->
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-users">&nbsp;</em> Users <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="userAdmin.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Admin
					</a></li>
					<li><a class="" href="userCustomer.php">
						<span class="fa fa-arrow-right">&nbsp;</span> Customer
					</a></li>
				</ul>
			</li>
			<li><a href="feedback.php"><em class="fa fa-comments">&nbsp;</em> Feedback</a></li>
			<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Product</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Product</h1>
			</div>
		</div><!--/.row-->
		
		<div class="content">
            <div align="left">
                <a href="#formInsert" data-toggle="modal" class="btn btn-success">
                Add Product
                </a>
            </div>
               <table id="course_table" class="table table-striped">
                    <thead bgcolor="#6cd8dc">
                        <tr class="table-primary">
                           <th width="10%">ID Product</th>
                           <th width="20%">Product Name</th>
                           <th width="15%">Size</th>
                           <th width="20%">Image</th>
                           <th width="15%">Price</th>
                           <th scope="col" width="1%" colspan="2">Action</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php 
                                include "../config/koneksi.php";

                                $query = "SELECT * FROM product";
                                $result = mysqli_query($connect, $query);

                                if (mysqli_num_rows($result) > 0) {
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["ItemId"] ?></td>
                                        <td><?php echo $row["ItemName"] ?></td>
                                        <td><?php echo $row["Size"] ?></td>
                                        <td><img src="../product/<?php echo $row['Image']; ?>" height="125px" width="125px"/></td>
                                        <td><?php echo $row["Price"] ?></td>
                                        <td><a href="productEdit.php?ItemId=<?php echo $row['ItemId']; ?>" data-toggle="modal" class="btn btn-success">
                                            <em class="fa fa-cogs"></em></a>
                                        </td>
                                        <td><a href="productDel.php?ItemId=<?php echo $row['ItemId']; ?>" data-toggle="modal" class="btn btn-danger">
											<em class="fa fa-trash"></em></a></td>
                                    </tr>  
                                    <?php 
                                    }
                                } else {
                                    echo "0 results";
                                }
                            ?>
                        </tr>
                    <tbody>
                </table>
                <br>                
        </div>
		
		<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="formInsert" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                        <h4 class="modal-title">Add Product</h4>
                    </div>
                <div class="modal-body">

                    <form class="form-horizontal" role="form" method="POST" action="productInsertProses.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Product Name</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="inputEmail4" placeholder="" name="nama">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Description</label>
                            <div class="col-lg-10">
								<textarea name="description" class="form-control" id="inputEmail4" cols="64" rows="5"></textarea>
                              <!-- <input type="text" class="form-control" id="inputEmail4" placeholder="" name="nama"> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Size</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="inputEmail4" placeholder="" name="size">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Image</label>
                            <div class="col-lg-10">
                              <input type="file" class="form-control" id="image" placeholder="" name="image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="col-lg-2 control-label">Price</label>
                            <div class="col-lg-10">
                              <input type="text" class="form-control" id="inputEmail4" placeholder="" name="price">
                            </div>
                        </div>                                                    
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                              <button type="submit" class="btn btn-info">Add Product</button>
                            </div>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>

			</div><!--/.col-->
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>