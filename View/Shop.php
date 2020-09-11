<?php require_once "../service/item_service.php"; ?>
<?php require_once "../service/customer_service.php"; ?>
<?php
	session_start();
	$Customer="";
	if(isset($_COOKIE["CustomerLogged"]))
	{
		$Customer=customers_GetByEmail($_COOKIE["CustomerLogged"]);
	}
	if($_SESSION['Items']==null)
		{
			$_SESSION['Items']=array();
		}
	$ShopName=$_GET['ShopName'];
	$items=items_GetByShopName($ShopName);
?>
<html>
     <head>
	    <title> <?=$ShopName?> </title>
		</head>
		<body>
             <table align="center" bgcolor="#f5f566" heigth ="60%" width="100%">
                <tr>  
                  <td> 
                    <i><h1 style="color:orange;">Flavour Thief</h1><i>
            </td>
              
               </tr>
           
           <br/>
           <tr align="right">
                <th>    </th>
                    <?php if(!isset($_COOKIE["CustomerLogged"]))
						{ ?>
                    <th>
					<a href="login.php" style="background-color:orange;" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;               Login</a> 
					</th>
                    <th><a href="Register.php" style="background-color:orange;">SignUp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </th>
						<?php }
						else
						{ ?>
					
					<th>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <?=$Customer["Name"]?>
					</th>
                    <th><a href="logout.php" style="background-color:orange;">Logout&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                    </th>
						<?php } ?>
                  </tr> 
                  

                </table>
				<table style="border:2px solid rgb(255, 181, 74);">
					<tr>
						<td>
							<h3 align="left" ><a href="homepage.php"> Home.</a> 
							  <P><?=$ShopName?></P>
							</h3>
						</td>
						<td>
							<h3 align="right" ><a  href="cart.php" >Cart(<?=sizeof($_SESSION['Items'])?>)</a>
							</h3>
						</td>
					</tr>
				</table>
          
          <br/>
			        <table align="center" bgcolor="#ff0000" height="10%" width="100%">
				<tr>
                    <td>
                        <i><h2 style="color:white;"><?=$ShopName?></h2><i>
            </td>
			<td style="background: url(<?=str_replace(' ', '', $ShopName)?>.jpg); background-size: cover; width: 20vw; height: 30vh; color: white">
			</td>
			
			<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<table>
  <tr>
    <th>Item</th>
    <th>Price</th>
    <th>Order</th>
  </tr>
  <?php
		foreach($items as $item)
		{
	  ?>
	  <tr>
		<td><?=$item['ItemName']?></td>
		<td><?=$item['Price']?> BDT</td>
		<td><button style="border-radius:10px;" onclick="location.href='addtocart.php?ID=<?=$item['ItemID']?>&del=-1';">Add </button></td>
	  </tr>
	  <?php
		}
	?>
  
</table>

<?php
	if(sizeof($items)<1)
	{
		echo "<h3 align='center'>There are no items</h3><br/><br/>";
	}
	?>

<td  style="background: url(p2.jpg); background-size: cover; width: 100vw; height: 100vh; color: white">
                
                </td>
            </table>

                <P style="border:2px solid rgb(255, 237, 97);"><h3 align="center" >We suppot the following payment methods</h3></P>

                <table align="center" style="border:2px solid rgb(255, 237, 97);">
                  <th> Cash on Delivary </th>
                    <th> &nbsp;&nbsp;&nbsp;Bkash </th>
                    <th>&nbsp;&nbsp;&nbsp;Nogod </th>
            <th>&nbsp;&nbsp;&nbsp;Visa </th>
                    <th>&nbsp;&nbsp;&nbsp;Master Card </th>
            
                </table>
                <br/>
                

                <table align="center" style="border:2px solid rgb(255, 237, 97);">
                  <th><a href="contactUS.html">Contact Us&nbsp;&nbsp;</a> </th>
                     <th><a href="terms.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms of use</a> </th>
                    <th><a href="customer.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Support</a> </th>
            
            
                </table>
    </body> 

</html>             
