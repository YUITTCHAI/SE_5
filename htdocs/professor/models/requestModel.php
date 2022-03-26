<?php
class Request{
public  $idrequest,$uid,$name,$surname,$idcompany,$namecompany,$idstatus,$status,$startdate,$enddate,$requestdate,$syear,$reason; //var of table quotation
public function Request($idrequest,$uid,$name,$surname,$idcompany,$namecompany,$idstatus,$status,$startdate,$enddate,$requestdate,$syear,$reason)
{

    $this->idrequest =$idrequest ;
    $this->uid   =$uid  ;
    $this->name   =$name  ;
    $this->surname   =$surname  ;
    $this->idcompany =$idcompany ;
    $this->namecompany	   =$namecompany	  ;
    $this->idstatus =$idstatus ;
    $this->status   =$status  ;
    $this->startdate =$startdate ;
    $this->enddate =$enddate ;
    $this->requestdate =$requestdate ;
    $this->syear =$syear ;
    $this->reason =$reason ;
}
public static function getAll()
{
    $requestList = [];
    require("connection_connect.php");
    $sql = "SELECT request.idrequest, request.uid , user.name, user.surname ,request.idcompany,company.namecompany, request.idstatus,status.status,startdate,enddate,requestdate,syear,reason FROM user INNER JOIN request INNER JOIN company INNER JOIN status
    WHERE user.uid = request.uid AND request.idcompany = company.idcompany AND request.idstatus = status.idstatus";
    $result = $conn->query($sql);
    while($my_data = $result->fetch_assoc())
    {
        $idrequest = $my_data['idrequest'];
        $uid = $my_data['uid'];
        $name = $my_data['name'];
        $surname = $my_data['surname'];
        $idcompany = $my_data['idcompany'];
        $namecompany = $my_data['namecompany'];
        $idstatus = $my_data['idstatus'];
        $status = $my_data['status'];
        $startdate = $my_data['startdate'];
        $enddate = $my_data['enddate'];
        $requestdate = $my_data['requestdate'];
        $syear = $my_data['syear'];
        $reason = $my_data['reason'];
        $requestList[] = new Request($idrequest,$uid,$name,$surname,$idcompany,$namecompany,$idstatus,$status,$startdate,$enddate,$requestdate,$syear,$reason); 
    }
    require("connection_close.php");
    return $requestList;
}
public static function get($id)
{
    require("connection_connect.php");
    $sql = "SELECT request.idrequest, request.uid , user.name, user.surname ,request.idcompany,company.namecompany, request.idstatus,status.status,startdate,enddate,requestdate,syear,reason FROM user INNER JOIN request INNER JOIN company INNER JOIN status
    WHERE user.uid = request.uid AND request.idcompany = company.idcompany AND request.idstatus = status.idstatus AND idrequest='$id'";
    $result = $conn->query($sql);
    $my_data=$result->fetch_assoc();
    $idrequest = $my_data['idrequest'];
    $uid = $my_data['uid'];
    $name = $my_data['name'];
    $surname = $my_data['surname'];
    $idcompany = $my_data['idcompany'];
    $namecompany = $my_data['namecompany'];
    $idstatus = $my_data['idstatus'];
    $status = $my_data['status'];
    $startdate = $my_data['startdate'];
    $enddate = $my_data['enddate'];
    $requestdate = $my_data['requestdate'];
    $syear = $my_data['syear'];
    $reason = $my_data['reason'];
    return new Request($idrequest,$uid,$name,$surname,$idcompany,$namecompany,$idstatus,$status,$startdate,$enddate,$requestdate,$syear,$reason);
}
public static function add($uid,$syear,$idcompany,$startdate,$enddate,$requestdate,$idstatus)
{
    require("connection_connect.php");
    $sql="INSERT INTO request( uid, idcompany, idstatus, startdate, enddate, requestdate, syear) 
    VALUES ('$uid','$idcompany','$idstatus','$startdate','$enddate','$requestdate','$syear')";
    $result=$conn->query($sql);
    require("connection_close.php");
    return "add success $result rows";
}
public static function update($idrequest,$uid,$idcompany,$idstatus,$startdate,$enddate,$requestdate,$syear,$reason)
{
    require("connection_connect.php");
    $sql = "UPDATE request SET uid='$uid',idcompany='$idcompany',idstatus='$idstatus',startdate='$startdate',enddate='$enddate',requestdate='$requestdate',syear='$syear',reason='$reason'
    WHERE request.idrequest='$idrequest'";
    $result = $conn->query($sql);
    require("connection_close.php");
    return "update success $result row";
}
public static function search($key)
    {
        $requestList=[];
        require_once("connection_connect.php");
        $sql = "select * from table_request
        where (idrequest like '%$key%' or uid like '%$key%' or name like '%$key%' or surname like '%$key%' or idcompany like '%$key%' or namecompany like '%$key%' or
        idstatus like '%$key%' or status like '%$key%' or startdate like '%$key%' or enddate like '%$key%' or requestdate like '%$key%' or syear like '%$key%' or reason like '%$key%')";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $idrequest=$my_row['idrequest'];
            $uid=$my_row['uid'];
            $name=$my_row['name'];
            $surname=$my_row['surname'];
            $idcompany=$my_row['idcompany'];
            $namecompany=$my_row['namecompany'];
            $idstatus=$my_row['idstatus'];
            $status=$my_row['status'];
            $startdate=$my_row['startdate'];
            $enddate=$my_row['enddate'];
            $requestdate=$my_row['requestdate'];
            $syear=$my_row['syear'];
            $reason=$my_row['reason'];
            $requestList[] = new Request($idrequest,$uid,$name,$surname,$idcompany,$namecompany,$idstatus,$status,$startdate,$enddate,$requestdate,$syear,$reason);
        }
        require("connection_close.php");
        return $requestList;
    }
}
?>