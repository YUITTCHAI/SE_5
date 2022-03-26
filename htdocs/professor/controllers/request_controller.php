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
        $id = $_GET['idrequest'];
        $request = Request::get($id);
        require_once('views/request/updateForm.php');
    }

    public function update()
    {
        $idrequest = $_GET['idrequest'];
        $uid = $_GET['uid'];
        $idcompany = $_GET['idcompany'];
        $idstatus = $_GET['idstatus'];
        $startdate = $_GET['startdate'];
        $enddate = $_GET['enddate'];
        $requestdate = $_GET['requestdate'];
        $syear = $_GET['syear'];
        $reason = $_GET['reason'];
        Request::update($idrequest,$uid,$idcompany,$idstatus,$startdate,$enddate,$requestdate,$syear,$reason);
        RequestController::index();
    }
    public function search()
	{
		$key=$_GET['key'];
		$request_list=Request::search($key);
		require_once('views/request/index_request.php');
	}
}
?>