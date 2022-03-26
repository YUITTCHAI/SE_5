<?php
$controllers=array('pages'=>['home','error'],'request'=>['index','newRequest','addRequest','updateForm','update','detailRequest','delete','search']
,'company'=>['index','search']);//list controller and action
function call($controller,$action)
{
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages"        :       $controller = new PagesController();
                                    break;
        case "request"    :         require_once("models/requestModel.php");
                                    require_once("models/companyModel.php");
                                    require_once("models/userModel.php");
                                    $controller = new RequestController();
                                    break;
        case "company"     :        require_once("models/companyModel.php");
                                    $controller = new CompanyController();  
                                    break ;                    
                      
    }
    $controller->{$action}();
}
if(array_key_exists($controller,$controllers))
{	
    if(in_array($action,$controllers[$controller]))
	{ 	
        call($controller,$action);
     }else{	
        call('pages','error');
    }
}else{	
    call('pages','error');
	}

?>