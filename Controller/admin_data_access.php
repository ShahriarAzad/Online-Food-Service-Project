<?php require_once "data_access.php"; ?>

<?php
	function admins_GetAll()
	{
        $sql = "SELECT * FROM admin";        
        $result = executeSQL($sql);
        
        $admins = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $admins[$i] = $row;
        }
       // var_dump($members);
        return $admins;
    }
	
	function admins_GetByID($id)
	{
        $sql = "SELECT * FROM admin WHERE id='$id'";        
        $result = executeSQL($sql);
        
        $admin = mysqli_fetch_assoc($result);
        
        return $admin;
    }
	
	
	function admins_Insert($admin)
	{
        $sql = "INSERT INTO `admin` (`id`, `username`, `password`) VALUES (\'1\', \'admin\', \'admin\')";
        $result = executeSQL($sql);
        return $result;
    }
	
	function admins_Update($admin)
	{
        $sql = "UPDATE admin SET  username='$admin[username]', password='$admin[password]' WHERE id='$admin[id]';";
        $result = executeSQL($sql);
        return $result;
    }
	
	function admins_Delete($id)
	{
        $sql = "DELETE FROM admin WHERE id='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	
?>