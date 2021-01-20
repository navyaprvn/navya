
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo site_url();?>assets/css/jquery.dataTables.min.css">
</head>
<body>
	<div style='height:20px;'></div>  
    <div style="padding: 10px" class="output">
		<table id="myTable" class="display">
		    <thead>
		        <tr>
		            <th>Username</th>
		            <th>Password</th>
		            <th>Action</th>
		        </tr>
		    </thead>
		    <tbody id="table_body">
		    </tbody>
		</table>
    </div>
<script type="text/javascript" src="<?php echo site_url();?>assets/js/jquery.min.js"></script> 

<script type="text/javascript" src="<?php echo site_url();?>assets/js/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="<?php echo site_url();?>assets/js/custom.js"></script> 
</body>
</html>
