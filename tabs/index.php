<!doctype html>
<html>
	<head>
		<script type="text/javascript" src="../components/ga.js"></script>
		<link href="../components/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet" />
		<link href="../components/bootstrap/css/bootstrap-responsive.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="row">
					<div class="col-span-">
						<h1>Tabs</h1>
						<ul class="breadcrumb">
						  <li><a href="../">Home</a></li>
						  <li class="active">Tabs</li>
						</ul>
						<table class="table table-striped table-bordered table-condensed">
							<tbody>
							<?php
							$directory = "";
							$tabs = glob($directory . "*.txt");
							foreach ($tabs as $file) {
							?>
							<tr>
								<td><a href="<?php echo $file; ?>"><?php echo $file; ?></a></td>
							</tr>
							<?php
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>

