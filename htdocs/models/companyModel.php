<?php
class Company{
public $idcompany ,$namecompany,$address,$phone,$detail; //var of table quotation
public function Company($idcompany ,$namecompany,$address,$phone,$detail)
{
    $this->idcompany =$idcompany ;
    $this->namecompany =$namecompany ;
    $this->address =$address ;
    $this->phone =$phone ;
    $this->detail =$detail ;

    
}
public static function getAll()
{
    $companyList = [];
    require("connection_connect.php");
    $sql = "SELECT * FROM company";
    $result = $conn->query($sql);
    while($my_data = $result->fetch_assoc())
    {
        $idcompany = $my_data['idcompany'];
        $namecompany = $my_data['namecompany'];
        $address = $my_data['address'];
        $phone = $my_data['phone'];
        $detail = $my_data['detail'];
        $companyList[] = new Company($idcompany ,$namecompany,$address,$phone,$detail); 
    }
    require("connection_close.php");
    return $companyList;
}
public static function search($key)
    {
        $CompanyList=[];
        require_once("connection_connect.php");
        $sql = "select * from company
        where (idcompany like '%$key%' or namecompany like '%$key%' or address like '%$key%' or phone like '%$key%' or detail like '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $idcompany=$my_row['idcompany'];
            $namecompany=$my_row['namecompany'];
            $address=$my_row['address'];
            $phone=$my_row['phone'];
            $detail=$my_row['detail'];
            $CompanyList[] = new Company($idcompany ,$namecompany,$address,$phone,$detail);
        }
        require("connection_close.php");
        return $CompanyList;
    }
}
?>