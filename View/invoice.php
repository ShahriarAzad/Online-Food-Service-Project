<?php require_once "../service/item_service.php";
require_once "../service/order_service.php";
require_once "../service/orderitem_service.php";
require_once "../service/customer_service.php";
session_start();
$Customer="";
	if(isset($_COOKIE["CustomerLogged"]))
	{
		$Customer=customers_GetByEmail($_COOKIE["CustomerLogged"]);
	}
	//var_dump($_GET['order']);
	$order=orders_GetByID($_GET['order']);
	
	$items=orderitems_GetByID($order['OrderID']);
	//var_dump($items);


?>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

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
				<br/>


<div class="container">
        <div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col" colspan=2>Item(s)</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
</tr>
</thead>
<tbody>
<?php 
$total=0;
$count=0;
foreach($items as $item)
{
	?>

<tr>
	<td>
		<h6 class="title text-truncate"><?=items_GetByID($item['ItemID'])['ItemName']?> </h6>
	</td>
	<td>  
		<?=$item['Quantity']?>
	</td>
	<td> 
		<div class="price-wrap text-center"> 
			<var class="price">Tk <?=$item['Quantity']*items_GetByID($item['ItemID'])['Price']?></var> <br/>
			<small class="text-muted">(Tk <?=items_GetByID($item['ItemID'])['Price']?> each)</small>
		</div> <!-- price-wrap .// -->
	</td>
	
</tr> 
<?php
 $total=$total+($item['Quantity']*items_GetByID($item['ItemID'])['Price']);
 $count++;
}
?>

</tbody>
</table>
<hr/>
<b style="text-align:right;padding-right:50px">Total Cost: Tk 120</b><br/>
<hr/>
<div style="padding-left:10px" >
<table  width="100%">
	<tr >
		<td style="text-align:right;padding-right:30px">
			Shop Name :<br/><br/>
		</td>
		<td>
			<?=items_GetByID($items[0]['ItemID'])['ShopName']?><br/><br/>
		</td>
	</tr>
	<tr >
		<td style="text-align:right;padding-right:30px">
			Requested at : <br/><br/>
		</td>
		<td>
			<?=$order['OrderTime']?><br/><br/>
		</td>
	</tr>
	<tr >
		<td style="text-align:right;padding-right:30px">
			Delivery Address : <br/><br/>
		</td>
		<td>
			<?=customers_GetByID($order['CustomerID'])['Address']?> <br/><br/>
		</td>
	</tr>
	<tr >
		<td style="text-align:right;padding-right:30px">
			Payment Method : <br/><br/>
		</td>
		<td>
			Cash on Delivery <br/><br/>
		</td>
	</tr>
	<tr >
		<td style="text-align:right;padding-right:30px">
			Contact No. 
		</td>
		<td>
			<?=customers_GetByID($order['CustomerID'])['PhoneNo']?>
		</td>
	</tr>
</table>
<hr/>
	<b style="font-size:16px">
	Status: <?=$order['Status']?></b><br/>
	Estimated time: 1 hour

	
</div>
<hr/>
<table >
	<tr >
		
		<td class="text-center">
			<button style="width:100px;" class="btn btn-danger" >Cancel</button>
		</td>
	</tr>
</table>
<br/>
</div> <!-- card.// -->

</div> 
<table align="center" style="border:2px solid rgb(255, 237, 97);">
                  <th><a href="contactUS.html">Contact Us&nbsp;&nbsp;</a> </th>
                     <th><a href="terms.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms of use</a> </th>
                    <th><a href="customer.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Support</a> </th>
            
            
                </table>
	 
	 
	 
	  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>