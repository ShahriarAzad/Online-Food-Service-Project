<?php require_once "data_access.php"; ?>

<?php
	function user_GetAll()
	{
        $sql = "SELECT * FROM user";        
        $result = executeSQL($sql);
        
        $user = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $user[$i] = $row;
        }
       // var_dump($members);
        return $user;
    }
	
	function user_GetByID($ID)
	{
        $sql = "SELECT * FROM user WHERE ID='$ID'";        
        $result = executeSQL($sql);
        
        $user = mysqli_fetch_assoc($result);
        
        return $user;
    }
	
	
	function user_Insert($user)
	{
        $sql = "INSERT INTO user (`ID`, `Name`, `Username`, `Password`, `Contact No`, `Email`, `Address`) VALUES (NULL, '$user[Name]', '$user[Username]', '$user[Password]', '$user[Contact No]', '$user[Email]', '$user[Address]');";
        $result = executeSQL($sql);
        return $result;
    }
	
	function user_Update($user)
	{
        $sql = "UPDATE user SET  Name='$user[Name]', Username='$user[Username]', Password='$user[Password]', `Contact No`='$user[Contact No]', Email='$user[Email]', Address='$user[Address]' WHERE ID='$user[ID]';";
        $result = executeSQL($sql);
        return $result;
    }
	
	function user_Delete($ID)
	{
        $sql = "DELETE FROM user WHERE ID='$ID'";
        $result = executeSQL($sql);
        return $result;
    }
	
	
?>