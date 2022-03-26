<?php
class RequestController
{
    public function index()
    {
        $request_list = Request::getAll();
        require_once('views/request/index_request.php');
    }

    public function newRequest()
    {
        $request_list = Request::getAll();
        $company_list = Company::getAll();
        $user_list = User::getAll();
        require_once('views/request/newRequest.php');
    }
    public function detailRequest()
    {
        $id = $_GET['idrequest'];
        $request = Request::get($id);
        require_once('views/request/detailRequest.php');
    }

    public function addRequest()
    {
        $uid=$_GET['uid'];
        $syear=$_GET['syear'];
        $idcompany=$_GET['idcompany'];
        $startdate=$_GET['startdate'];
        $enddate=$_GET['enddate'];
        $requestdate=$_GET['requestdate'];
        $idstatus=$_GET['idstatus'];

        Request::add($uid,$syear,$idcompany,$startdate,$enddate,$requestdate,$idstatus); //call function Add on quotationModel
        RequestController::index(); //call function index on QuotationController
    }

    public function updateForm()
    {
        $id = $_GET['hi_date'];
        $home = Home::get($id);
        $medical_list = Medical::getAll();
        $atk_list = ATK::getAll();
        require_once('views/home_isolation/updateForm.php');
    }

    public function update()
    {
        $hospital_id = $_GET['hospital_id'];
        $hospital_name = $_GET['hospital_name'];
        $hospital_address = $_GET['hospital_address'];
        $hospital_subArea = $_GET['hospital_subArea'];
        $hospital_area = $_GET['hospital_area'];
        $hospital_province = $_GET['hospital_province'];
        $hospital_postalCode = $_GET['hospital_postalCode'];
        Hospital::update($hospital_id,$hospital_name,$hospital_address,$hospital_subArea,$hospital_area,$hospital_province,$hospital_postalCode);
        HomeController::index();
    }
    public function deleteConfirm()
    {
        $hospital_id = $_GET['hospital_id'];
        $hospital = Hospital::get($hospital_id);
        require_once('views/home_isolation/deleteConfirm.php');
    }
    public function delete()
    {
        $hospital_id=$_GET['hospital_id'];
        Hospital::delete($hospital_id); //delete quotation
        HomeController::index();
    }
    public function search()
	{
		$key=$_GET['key'];
		$request_list=Request::search($key);
		require_once('views/request/index_request.php');
	}
}
?>