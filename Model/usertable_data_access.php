<?php require_once "data_access.php"; ?>

<?php
	function usertable_GetAll()
	{
        $sql = "SELECT * FROM usertable";        
        $result = executeSQL($sql);
        
        $usertable = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $usertable[$i] = $row;
        }
       // var_dump($members);
        return $usertable;
    }
	
	function usertable_GetByID($id)
	{
        $sql = "SELECT * FROM usertable WHERE id='$id'";        
        $result = executeSQL($sql);
        
        $usertable = mysqli_fetch_assoc($result);
        
        return $usertable;
    }
	
	
	function usertable_Insert($usertable)
	{
        $sql = "INSERT INTO usertable (`id`, `first name`, `last name`, `email`, `phone`, `username`, `password`, `gender`, `dob`) VALUES (NULL, '$usertable[first name]', '$usertable[last name]', '$usertable[email]', '$usertable[phone]', '$usertable[username]', '$usertable[password]', '$usertable[gender]', '$usertable[dob]');";
        $result = executeSQL($sql);
        return $result;
    }
	
	function usertable_Update($usertable)
	{
        $sql = "UPDATE usertable SET  `first name`='$usertable[first name]', `last name`='$usertable[last name]', email='$usertable[email]', phone='$usertable[phone]', username='$usertable[username]', password='$usertable[password]', gender='$usertable[gender]', dob='$usertable[dob]' WHERE id='$usertable[id]';";
        $result = executeSQL($sql);
        return $result;
    }
	
	function usertable_Delete($id)
	{
        $sql = "DELETE FROM usertable WHERE id='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	
?>