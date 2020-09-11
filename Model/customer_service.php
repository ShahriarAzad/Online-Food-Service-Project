<?php require_once "../data/customer_data_access.php"; ?>

<?php

	function isUniqueEmail($Email){
        $customers  = customers_GetAll();
        $isUnique = true;
        foreach($customers as $user){
            if($user['Email']==$Email){
                $isUnique = false;
                break;
            }
        }
        return $isUnique;
    }
	
	function dateDifference($stDate)
	{
		$datetime1 = new DateTime("$stDate");//start time
		$date=date('m/d/Y h:i:s a', time());
		$datetime2 = new DateTime("$date");//end time
		$interval = $datetime1->diff($datetime2);
		return $interval->format('%Y years %m months %d days');
	}
	
	function isValidEmail($email)
	{
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  return false;
		}
		return true;
	}
	
	function isValidName($name)
	{
		if(preg_match("/^([a-zA-Z' ]+)$/",$name)){
			return true;
		}else{
			return false;
		}
	}

?>