<?php require_once "data_access.php"; ?>

<?php
	function items_GetAll()
	{
        $sql = "SELECT * FROM items";        
        $result = executeSQL($sql);
        
        $items = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $items[$i] = $row;
        }
       // var_dump($members);
        return $items;
    }
	
	function items_GetByID($id)
	{
        $sql = "SELECT * FROM items WHERE ItemID='$id'";        
        $result = executeSQL($sql);
        
        $item = mysqli_fetch_assoc($result);
        
        return $item;
    }
	
	function items_GetByShopName($name)
	{
        $sql = "SELECT * FROM items WHERE ShopName LIKE '$name'";        
        $result = executeSQL($sql);
        
        $items = array();
        for($i=0; $row=mysqli_fetch_assoc($result); ++$i){
            $items[$i] = $row;
        }
       // var_dump($members);
        return $items;
    }
	
	function items_Insert($item)
	{
        $sql = "INSERT INTO items (`ItemID`, `ItemName`, `ShopName`, `Price`) VALUES (NULL, '$item[ItemName]', '$item[ShopName]', '$item[Price]');";
        $result = executeSQL($sql);
        return $result;
    }
	
	function items_Update($item)
	{
        $sql = "UPDATE items SET ItemName = '$item[ItemName]', ShopName='$item[ShopName]', Price='$item[Price]' WHERE ItemID='$item[ItemID]';";
        $result = executeSQL($sql);
        return $result;
    }
	
	function items_Delete($id)
	{
        $sql = "DELETE FROM items WHERE ItemID='$id'";
        $result = executeSQL($sql);
        return $result;
    }
	
	
?>