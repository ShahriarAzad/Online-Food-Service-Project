<?php require_once "data_access.php"; ?>

<?php
	function customers_GetAll()
	{
        $sql = "SELECT * FROM customers";        
        $result = executeSQL($sql);
        
        $customers = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $customers[$i] = $row;
        }
       // var_dump($members);
        return $customers;
    }
	
	function customers_GetByID($id)
	{
        $sql = "SELECT * FROM customers WHERE CustomerID='$id'";        
        $result = executeSQL($sql);
        
        $customer = mysqli_fetch_assoc($result);
        
        return $customer;
    }
	
	function customers_GetByEmail($email)
	{
        $sql = "SELECT * FROM customers WHERE Email='$email'";        
        $result = executeSQL($sql);
        
        $customer = mysqli_fetch_assoc($result);
        
        return $customer;
    }
	
	
	function customers_Insert($customer)
	{
        $sql = "INSERT INTO `customer` (`CustomerId`, `Name`, `Email`, `Password`, `Phone no`, `address`) VALUES (\'1\', \'Name\', \'Email\', \'Password\', \'11\', \'Address\')";
        $result = executeSQL($sql);
        return $result;
    }
	
	function customers_Update($customer)
	{
        $sql = "UPDATE customers SET  Name='$customer[Name]', Email='$customer[Email]', Password='$customer[Password]', PhoneNo='$customer[PhoneNo]', Address='$customer[Address]' WHERE CustomerID='$customer[CustomerID]';";
        $result = executeSQL($sql);
        return $result;
    }
	
	function customers_Delete($id)
	{
        $sql = "DELETE FROM customers WHERE CustomerID='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	
?>