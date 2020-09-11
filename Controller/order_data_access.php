<?php require_once "data_access.php"; ?>

<?php
	function orders_GetAll()
	{
        $sql = "SELECT * FROM orders";        
        $result = executeSQL($sql);
        
        $orders = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $orders[$i] = $row;
        }
       // var_dump($members);
        return $orders;
    }
	
	function orders_GetByID($id)
	{
        $sql = "SELECT * FROM orders WHERE OrderID='$id'";        
        $result = executeSQL($sql);
        
        $order = mysqli_fetch_assoc($result);
        
        return $order;
    }
	
	function orders_GetByCustomerID($id)
	{
        $sql = "SELECT * FROM orders WHERE CustomerID='$id'";        
        $result = executeSQL($sql);
        
        $orders = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $orders[$i] = $row;
        }
       // var_dump($members);
        return $orders;
    }
	
	function orders_Insert($order)
	{
        $sql = "INSERT INTO orders (`OrderID`, `CustomerID`, `TotalCost`, `Status`, `OrderTime`) VALUES (NULL, '$order[CustomerID]', '$order[TotalCost]', '$order[Status]', NULL);";
        $result = executeSQL($sql);
        return $result;
    }
	
	function orders_Update($order)
	{
        $sql = "UPDATE orders SET CustomerID = '$order[CustomerID]', TotalCost='$order[TotalCost]', Status='$order[Status]', OrderTime='$order[OrderTime]' WHERE orders.OrderID = $order[OrderID];";
        $result = executeSQL($sql);
        return $result;
    }
	
	function orders_Delete($id)
	{
        $sql = "DELETE FROM orders WHERE OrderID='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	
?>