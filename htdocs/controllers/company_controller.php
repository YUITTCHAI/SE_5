<?php
class CompanyController
{
    public function index()
    {
        $companyList = Company::getAll();
        require_once('views/company/company_index.php');
    }
    public function search() 
    {
        $key=$_GET['key'];
        $companyList=Company::search($key);
        require_once('views/company/company_index.php');
    }
}
?>