<?php
require_once "../service/customer_service.php";
	
	$nameerr="";
	$emailerr="";
	$passerr="";
	
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$phone=$_POST['phone'];
		$confirmPass = $_POST['Confirmpassword'];
		$address= $_POST['address'];
		
		if(!isValidName($name))
		{
			$nameerr="*Invalid Name";
		}
		else if(!isValidEmail($email))
		{
			$emailerr="*Invalid Email";
		}
		else if(!isUniqueEmail($email))
		{
			$emailerr="*Email already exist";
		}
		else if($password!=$confirmPass)
		{
			$passerr="*Password doesn't match";
		}
		else
		{
			$customer['Name']=$name;
			$customer['Email']=$email;
			$customer['Password']=$password;
			$customer['PhoneNo']=$phone;
			$customer['Address']=$address;
			customers_Insert($customer);
			header("location:login.php");
			
		}
		
		
		
	}
?>
<html>
	<head>
		<title>HOME page </title>
		
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
			.in{ border: 4px solid rgb(275, 181, 74);
                         color: #732626; 
                         display: table-caption}

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
                
    			
    			<br/>
		<form method="post" action="Register.php">
			
		
			
			<br/>
			
			
			<table>
			 
			
           
			
			 <table class="in" align="center" heigth ="60%" width="270%"> 
										 <tr>
											   
												 <th align="center"><font size="6"> Register Here</font> </th>
										 </tr>
										 
										  <tr>
											   
												 <th align="left"><br/><br/><br/></th>
										 </tr>
										
										 
										  <tr>
										  
											   <td> <font align="right" color="black"> &nbsp;&nbsp;&nbsp;
											   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
											   Name :  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											   <input type="text" name="name" id="fname" onblur="fname()" required><span style="color:red" >&nbsp; <?=$nameerr?></span>  </font> 
											  &nbsp;<font  color="white"><label><?= $flabel; ?>  <span id="f_name"></span> </label> </font></td>
										 </tr>
										 
										 
										 
										 
										  <tr>
										       <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  </tr>
										  
										 
										 <tr>
										        <td> <font align="left" color="black">  &nbsp;&nbsp;&nbsp;
											   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="text" name="email"   id="email" onblur="email()"  required /> <span style="color:red" >&nbsp; <?=$emailerr?></span> </font><font  color="white"><label><?= $emal; ?> </label><span id="e_mail"></span></font> </td>
										  </tr>
										  
										   <tr>
										         <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  </tr>
										  
										   <tr>
										         <td> <font align="left" color="black">&nbsp;&nbsp;&nbsp;
											   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
												 Phone : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												 <input type="text" name="phone" id="phone" onblur="phone()"  required /> <font  color="white"><label><?= $p; ?> </label>  <span id="p_hone">  </span></font> </font> </td>
										  </tr>
										   <tr>
										         <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  </tr>
										  
										  <tr>
										        <td> <font align="left" color="black">  &nbsp;&nbsp;&nbsp;
											   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Address : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="text" name="address"  size="35"    required />  </font><font  color="white"><label><?= $emal; ?> </label><span ></span></font> </td>
										  </tr>
										  
										   <tr>
										         <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  </tr>
										  
										  
										  
										  
										  
										  
										   <tr>
										           <td> <font align="left" color="black">&nbsp;&nbsp;&nbsp;
											   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="password" name="password" onblur="password()"  required /> <font  color="white"><label><?= $pws; ?> </label>   <span id="p_assword">  </span></font> </font> </td>
										  </tr>
										  
										  <tr>
										            <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  </tr>
										  
										   <tr>
										            <td> <font align="left" color="black">&nbsp;&nbsp;&nbsp;
											   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   <input type="password" name="Confirmpassword"  id="cpassword" onblur="cpassword()" required /><span style="color:red" >&nbsp; <?=$passerr?></span><font  color="white"><label><?= $cp; ?> </label> <span id="c_password">  </span></font>  </font> </td>
										  </tr>
										  
										  <tr>
										            <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  </tr>
										  
											  
											  
										  
										  
										  
											<tr>
											
															<td> <font align="left" color="black">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="submit" >  </font>  </td>
															<td> <font align="right" color="black">
															Already a user? <a href="login.php">Login Here</a>
															</td>
											</tr>
										  
									
										  
										  
						 </table>
						 </table>
						 
						 </br></br></br></br>
					
	
				
				 
               </tr>
			   
			
            </table>
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
						
			
  
	
			

