<?php
class User{
public  $uid,$name,$surname,$email,$phone,$major,$idTypeuser,$nametype; //var of table quotation
public function User($uid,$name,$surname,$email,$phone,$major,$idTypeuser,$nametype)
{

    $this->uid =$uid ;
    $this->name =$name ;
    $this->surname =$surname ;
    $this->email =$email ;
    $this->phone =$phone ;
    $this->major =$major ;
    $this->idTypeuser =$idTypeuser ;
    $this->nametype =$nametype ;
}
public static function getAll()
{
    $userList = [];
    require("connection_connect.php");
    $sql = "SELECT user.uid,user.name,user.surname,email,phone,major,user.idTypeuser,typeuser.nametype 
    FROM user INNER JOIN typeuser ON user.idTypeuser=typeuser.idTypeuser";
    $result = $conn->query($sql);
    while($my_data = $result->fetch_assoc())
    {
        $uid = $my_data['uid'];
        $name = $my_data['name'];
        $surname = $my_data['surname'];
        $email = $my_data['email'];
        $phone = $my_data['phone'];
        $major = $my_data['major'];
        $idTypeuser = $my_data['idTypeuser'];
        $nametype = $my_data['nametype'];
        $userList[] = new User($uid,$name,$surname,$email,$phone,$major,$idTypeuser,$nametype); 
    }
    require("connection_close.php");
    return $userList;
}
public static function get($id)
{
    require("connection_connect.php");
    $sql = "SELECT * FROM user
    WHERE uid='$id'";
    $result = $conn->query($sql);
    $my_data=$result->fetch_assoc();
    $uid = $my_data['uid'];
    $name = $my_data['name'];
    $surname = $my_data['surname'];
    $email = $my_data['email'];
    $phone = $my_data['phone'];
    $major = $my_data['major'];
    $idTypeuser = $my_data['idTypeuser'];
    require("connection_close.php");
    return new User($uid,$name,$surname,$email,$phone,$major,$idTypeuser,$nametype); 
}

}
?>