<?php require_once "../service/customer_service.php"; ?>
<?php
$unerr=$pwerr="";

	if(isset($_GET['a']))
	{
		$unerr="*You Must Login";
	}

      	 
	if(isset($_POST['Login']))
	{
		 $un=$_POST['username'];
		$pw=$_POST['password'];

		if(!isValidEmail($un))
		{
			
			//echo "Please provide username and password";
			$unerr="*Inavlid Email format";
		}
		else if($pw=="")
		{
			
			
			$pwerr="Please give password";
		}

		else if(customers_GetByEmail($un)!=null)
		{
			
			if(customers_GetByEmail($un)['Password']==$pw){
			setcookie("CustomerLogged",$un,time()+30*24*60*60);
			//var_dump($_COOKIE["CustomerLogged"]);
			header("location:homepage.php");
			}
			else
				$pwerr="*Wrong Password";		
		}
		else
		{
							
			$unerr="*Email not found";
			 
			
		}
	}
	


?>



<html>
	<head>
		
	
        
    		<title> <?=$ShopName?> </title>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/custom.css">
        <style type="text/css">
            .choose{
                font-size: 20px;
            }
            .hbtn{
                color: orange;
            }
			.ft{
				 color: orange;
                background: brown;
                font-size: inherit;
                font-style: italic
			}
			.ttl{
				background: orange;
			}
			.out{
				 border: 4px solid rgb(275, 181, 74);
                         color: #732626; 
                         display: table-caption
			}
			
        </style>
		</head>
		<body>
		<form method="post">
<!-- Navbar -->
        <section class="navigation-bar">
		
		<nav class="navbar navbar-light" style="background-color: #e3f2fd;">
  <!-- Navbar content -->
</nav>
          
                <nav class="navbar navbar-default navbar-fixed-top">
                        <div class="container">
                          <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand"><h1 class="ft">Flavour Thief</h1><span>.</span></a>
                          </div>
                      
                          <!-- Collect the nav links, forms, and other content for toggling -->
                          
						  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class="ttl">
                            
                            <ul class="nav navbar-nav navbar-right " >
							        <li><a href="homepage.php">home</a></li>
                                    <li><a href="#about">about us</a></li>
                                    <li><a href="#contact">contact</a></li>
									<?php if(!isset($_COOKIE["CustomerLogged"]))
						{ ?>
                                    <li><a href="login.php">login</a>l</li>
                                    <li><a href="Register.php">sign up</a></li>
									<?php }
						else
						{ ?>		<li><a href="logout.php">Logout</a></li>
					
						<?php } ?>
									<li><a href=>admin</a></li>
                            </ul>
							</div>
                          </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                      </nav>
        </section>
        <!-- Navbar -->
		
		</br>
                
			<center>
				<h3>Admin here</h3>
				</br>
				
					<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
					
					  <table class="out">
						 
						
						 <tr>
							<td>Email:</td>
							<td>
							<input type="text" name="username" required /><span style="color:red" >&nbsp; <?=$unerr?></span>
									
							</td>
						</tr>
						<tr>
						<td>Password:</td>
						<td>
                        <input type="password" name="password" required /><span style="color:red" >&nbsp; <?=$pwerr?></span>               
						</td>
						</tr>
						<tr>
							<td></td>
							<td><input type="submit" value="Login" name="Login"/></td>
							<td>
								Not yet a Member?<a href="Register.php">Register</a>
							</td>
						</tr>
						</table>
					</form>
				
			</center>
			 <table>

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
            </form>
	
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>
          $('.carousel').carousel({
              interval: 1000;
              })
            </script>

    </body>
 </html>     
		
	