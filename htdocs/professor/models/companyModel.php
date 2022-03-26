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

}
?>