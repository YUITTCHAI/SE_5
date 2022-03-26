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
						<input type="hidden" name="controller" value="request" class="form-control" placeholder="ค้นหา" aria-label="hospital" aria-describedby="button-addon2">
						<div class=" input-group-append ">
							<button class="btn btn btn-secondary" type="submit" name="action" value="search" id="button-addon2"><i class="fas fa-search"></i> Search</button>
						</div>
						
						<a href=?controller=request&action=newRequest type="button" class="btn btn-primary"><i class="fas fa-folder-plus"></i> ยื่นคำขอฝึกงาน</a>
					
					</div>
				</form>
				<div class="mb-2">
						<a href=?key=&controller=request&action=search type='button' class='btn btn-primary'><i class="fas fa-search-location"></i> คำขอทั้งหมด</a>
						<a href=?key=waiting&controller=request&action=search type='button' class='btn btn-primary'><i class="fas fa-search-location"></i> สถานะรอดำเนินการ</a>
						<a href=?key=approve&controller=request&action=search type='button' class='btn btn-primary'><i class="fas fa-search-location"></i> สถานะอนุมัติ</a>
						<a href=?key=decline&controller=request&action=search type='button' class='btn btn-primary'><i class="fas fa-search-location"></i> สถานะไม่อนุมัติ</a>
				</div>
		<table class="shadow table table-hover">
  			<thead class="thead-dark">
    			<tr align='center' >
     			 <th scope="col">ID</th>
     			 <th scope="col">รหัสนิสิต</th>
    			 <th scope="col">ชื่อ</th>
    			 <th scope="col">นามสกุล</th>
		  		 <th scope="col">ชื่อบริษัท</th>
                 <th scope="col">วันที่ยื่น</th>
	 			 <th scope="col">สถานะ</th>
				 <th scope="col">รายละเอียด</th>
   			   </tr>
  			</thead></tr>
			<tbody style="background-color: #EFEFEF">
<?php foreach($request_list as $request)
{
	echo"<tr align='center' > 
	<td data-lable='ID'>{$request->idrequest}</td>
	<td data-lable='รหัสนิสิต'>{$request->uid}</td> 
	<td data-lable='ชื่อ'>{$request->name}</td>
	<td data-lable='นามสกุล'>{$request->surname}</td> 
	<td data-lable='ชื่อบริษัท'>{$request->namecompany}</td>
	<td data-lable='วันที่ยื่น'>{$request->requestdate}</td>
    <td data-lable='สถานะ'>{$request->status}</td>
    <td data-lable='รายละเอียด'><a href=?controller=request&action=detailRequest&idrequest=$request->idrequest class='btn btn-outline-warning' role='button' ata-placement='right' title='รายละเอียด'><i class='fas fa-folder-open'></i> รายละเอียด</a></td>
	";
}
echo "</table>";
?>
				</tbody>
			</div>
	</body>

</html>
