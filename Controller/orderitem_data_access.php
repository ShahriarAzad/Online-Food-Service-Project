<?php require_once "data_access.php"; ?>

<?php
	function orderitems_GetAll()
	{
        $sql = "SELECT * FROM orderitems";        
        $result = executeSQL($sql);
        
        $orderitems = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $orderitems[$i] = $row;
        }
       // var_dump($members);
        return $orderitems;
    }
	
	function orderitems_GetByID($id)
	{
        $sql = "SELECT * FROM orderitems WHERE OrderID='$id'";        
        $result = executeSQL($sql);
        
        $orderitems = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $orderitems[$i] = $row;
        }
       // var_dump($members);
        return $orderitems;
    }
	
	function orderitems_Insert($orderitem)
	{
        $sql = "INSERT INTO orderitems (`OrderItemID`, `OrderID`, `ItemID`, `Quantity`) VALUES (NULL, '$orderitem[OrderID]', '$orderitem[ItemID]', '$orderitem[Quantity]');";
        $result = executeSQL($sql);
        return $result;
    }
	
	
	
	function orderitems_Delete($id)
	{
        $sql = "DELETE FROM orderitems WHERE OrderID='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	
?>