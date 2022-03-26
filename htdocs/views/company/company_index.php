<html>
	<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</head>
	
	<body>
		<div class="container">
			<div><br></div>
			<form method="get" action="">
					<div class=" shadow input-group mb-3 " >
						<input type="text" name="key"class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
						<input type="hidden" name="controller" value="company" class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
						<div class=" input-group-append ">
							<button class="btn btn btn-secondary" type="submit" name="action" value="search" id="button-addon2"><i class="fas fa-search"></i> Search</button>
						</div>
						
					
					</div>
				</form>
		<table class="shadow table table-hover">
  			<thead class="thead-dark">
    			<tr align='center' >
     			 <th scope="col">Company</th>
     			 <th scope="col">Address</th>
    			 <th scope="col">Phone</th>
    			 <th scope="col">detail</th>

   			   </tr>
  			</thead></tr>
			<tbody style="background-color: #EFEFEF">
<?php foreach($companyList as $company)
{
	echo"<tr align='center' > 
	<td data-lable='Comnay'>{$company->namecompany}</td>
	<td data-lable='Address'>{$company->address}</td> 
	<td data-lable='Phone'>{$company->phone}</td>
	<td data-lable='detail'>{$company->detail}</td> 
    
	";
}
echo "</table>";
?>
				</tbody>
			</div>
	</body>

</html>
