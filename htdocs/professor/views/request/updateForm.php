
<html>

<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<body>
<div><br></div>
    <div class="container">

        <div class="card shadow" style="width: 100%;
  max-width: 600px;
  padding: 15px;
  margin: auto;">
            <h5 class="card-header">ใบคำร้องขอฝึกงาน</h5>
            <div class="card-body">
                <div class="mb-3">
                    <form method="get" action="">
                        <label>ชื่อ </label> <input type="text" name="name" class="form-control" value="<?php echo $request->name;?>" readonly="true" required/>   
                </div>
                <div class="mb-3">
                    <form method="get" action="">
                        <label>นามสกุล</label> <input type="text" name="surname" class="form-control" value="<?php echo $request->surname;?>" readonly="true" required/>
                </div>
                <div class="mb-3">
                    <label>รหัสนิสิต</label><input type="text" name="uid" class="form-control" value="<?php echo $request->uid;?>" readonly="true" required/>
                </div>
				<div class="mb-3">
                    <label>ปีการศึกษา</label><input type="int" name="syear" class="form-control" value="<?php echo $request->syear;?>" readonly="true" required/>
                </div>
				<div class="mb-3">
                    <label>ชื่อบริษัท</label> <input type="int" name="syear" class="form-control" value="<?php echo $request->namecompany;?>" readonly="true" required/>
                </div>
				<div class="mb-3">
                    <label>วันที่เริ่มต้นฝึกงาน</label><input type="date" name="startdate" class="form-control" value="<?php echo $request->startdate;?>" readonly="true" required/>
                </div>
                <div class="mb-3">
                    <label>ฝึกงานวันสุดท้าย</label><input type="date" name="enddate" class="form-control" value="<?php echo $request->enddate;?>" readonly="true" required/>
                </div>
                <div class="mb-3">
                    <label>วันที่สร้างคำร้อง</label><input type="date" name="requestdate" class="form-control" value="<?php echo $request->requestdate;?>" readonly="true" required/>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="idstatus" id="2" value=2>
                        <label class="form-check-label" for="2">อนุมัติ</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="idstatus" id="3" value=3>
                        <label class="form-check-label" for="3">ไม่อนุมัติ</label>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">เหตุผล(หากไม่อนุมัติ)</label>
                    <textarea class="form-control" name="reason" rows="3"></textarea>
                </div>
					<input type="hidden" name="idrequest" value="<?php echo $request->idrequest;?>" />
                    <input type="hidden" name="idcompany" value="<?php echo $request->idcompany;?>" />
				
                    <div class="row">
                    <div class="col-sm">
                        <input type="hidden" name="controller" value="request" />
                    </div>
					<div class="col-sm">
                    <a href="index_main.php?controller=request&action=index" class="btn btn-outline-danger btn-lg btn-block" role="button">ยกเลิก</a>
                    </div>

                    <div class="col-sm">
                        <button class="btn btn-outline-success btn-lg btn-block" type="submit" name="action" value="update">บันทึก</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

    <div>
        <br>
    </div>

</body>

</html>








