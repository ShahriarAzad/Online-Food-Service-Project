<?php require_once "../service/customer_service.php"; ?>
<?php
	session_start();
	$Customer="";
	if(isset($_COOKIE["CustomerLogged"]))
	{
		$Customer=customers_GetByEmail($_COOKIE["CustomerLogged"]);
	}
    $name=array();
    $dhaka=array();
    $chottrogram=array();
    array_push($dhaka,'BFC','Northend Coffee','Sultan Dine','Takeout','Pizza Guy');
    array_push($chottrogram,'Tava','Suger Bun','Chillox','Mejjan Hayle Ayun','Handi');

    if(isset($_POST['dhaka']))
    {
        if($_POST['dhaka']=='Dhaka') { $name=$dhaka; } 
        else{ echo "error"; }
    }

    if(isset($_POST['chottrogram']))
    {
        if($_POST['chottrogram']=='Chottrogram') { $name=$chottrogram; } 
        else { echo "error"; }
    }

    if(isset($_POST['start']))
    {
        $a=$_POST['location'];
		$_SESSION['Items']=array();
        header("Location: Shop.php?ShopName=$a");
		
        
    }
?>
<html>
    <head>
    	<meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--font awsome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    
    <title>Flavour  </title>
    <link rel="icon" href="favicon.ico">
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
        </style>
    </head>
    <body>
        
        <form method="post">
        

        <section class="navigation-bar">
          
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
							        <li><a href="#">home</a></li>
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
									<li><a href="admin.php"></a></li>
									
                            </ul>

							</div>

                          </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                      </nav>
        </section>
        <!-- Navbar -->

               
        <!-- carousel -->
        <section class="slider-section">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                      
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="item active">
                            <img class="img-responsive" src="1.jpg" alt="1">
                          </div>
                          <div class="item">
                            <img class="img-responsive" src="2.jpg" alt="2">
                          </div>
                          <div class="item">
                            <img class="img-responsive" src="3.jpg" alt="3">
                          </div>
                          <div class="item">
                            <img class="img-responsive" src="top_bg4.jpg" alt="4">
                          </div>

                          <div class="carousel-caption">

                            <div class="choose">
                                <span class="choose"> Location:</span>
                                <input class="btn hbtn" type="submit" name="dhaka" value="Dhaka"/>
                                <input class="btn hbtn" type="submit" name="chottrogram" value="Chottrogram"/>


                                <span class="choose"> Restaurants </span>

                                <select style="color: black" name="location">
                                <option value="null"> <p> Choose Restaurants </p></option>
                                <?php

                                foreach($name as $items)
                                {
                                ?>
                                <option value="<?php  echo $items; ?>"> <?php echo $items; ?></option>
                                
                                <?php } ?>
                                </select> 
                                </div>
                                <input class="btn hbtn" type="submit" name="start" style="margin-top: 40px; padding: 5px 25px;" value="Go" /> 
                              </div>

                    
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                </div>
        </section>
        <!-- carousel -->

                     

                   
                     <section >
                      <div id="about" class="about">
                         <h1 style="border:2px solid rgb(255, 237, 97);" align="center" >&nbsp;&nbsp;About Us</h1>
                        <br/>
                     
                      <section class="about-area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Who we are and what we do?</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="sub-heading pb-5">Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce nec ante vitae lacus aliquet vulputate. Donec scelerisque accumsan molestie. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>

                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin malesuada et mauris ut lobortis. Sed eu iaculis sapien, eget luctus quam. Aenean hendrerit varius massa quis laoreet. Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                </div>
            </div>

            <div class="row align-items-center mt-70">
                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="img/core-img/salad.png" alt="">
                        <h3><span class="counter">1287</span></h3>
                        <h6>Amazing receipies</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="img/core-img/hamburger.png" alt="">
                        <h3><span class="counter">25</span></h3>
                        <h6>Burger receipies</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="img/core-img/rib.png" alt="">
                        <h3><span class="counter">471</span></h3>
                        <h6>Meat receipies</h6>
                    </div>
                </div>

                <!-- Single Cool Fact -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-fact">
                        <img src="img/core-img/pancake.png" alt="">
                        <h3><span class="counter">326</span></h3>
                        <h6>Desert receipies</h6>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <img class="mb-70" src="img/bg-img/about.png" alt="">
                    <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec varius dui. Suspendisse potenti. Vestibulum ac pellentesque tortor. Aenean congue sed metus in iaculis. Cras a tortor enim. Phasellus posuere vestibulum ipsum, eget lobortis purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin malesuada et mauris ut lobortis. Sed eu iaculis sapien, eget luctus quam. Aenean hendrerit varius massa quis laoreet. Donec quis metus ac arcu luctus accumsan. Nunc in justo tincidunt, sodales nunc id, finibus nibh. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                </div>
            </div>
        </div>
    </section>
                      <h1  align="center">   <button color="#FFF8DC"> <font size="5"><a href="readMore.html"> Read more  </a>
                      </font></button> </h1>
                    </div>

                    <div id="popular" class="popular">

                      <h1 style="border:2px solid rgb(255, 237, 97);" align="left" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Popular cuisines</h1>
                <table >
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Flowers</td>
                        <td >&nbsp;        </td>
                        <td>South Indian</td>
                        <td>&nbsp;         </td>
                        <td>Biriwani</td>
                        

                    </tr>

                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pasta</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;         </td>
                        <td>Chicken</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;         </td>
                        <td>Set menu</td>
                    </tr>

                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valentines day</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;        </td>
                        <td>Ribs</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;        </td>
                        <td>Indonesian</td>
                        
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bread</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;        </td>
                        <td>Sweets</td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;        </td>
                        <td>Frozen</td>
                        
                    </tr>

                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Desserts</td>
                         <td>&nbsp;&nbsp;&nbsp;&nbsp;       </td>
                        <td>Korean</td>
                         <td>&nbsp;&nbsp;&nbsp;&nbsp;       </td>
                        <td>Portuguese</td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rolls-Wrap</td>
                         <td>&nbsp;&nbsp;&nbsp;&nbsp;       </td>
                        <td>Pan Asian</td>
                         <td>&nbsp;&nbsp;&nbsp;&nbsp;       </td>
                        <td>BBq</td>
                    </tr>

                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ice cream</td>
                         <td>&nbsp;&nbsp;&nbsp;&nbsp;       </td>
                        <td>Chocolate</td>
                         <td>&nbsp;&nbsp;&nbsp;&nbsp;       </td>
                        <td>Japanese</td>
                    </tr>
    
                </table>

                <table>

                <td  style="background:url("img_p2.jpg"); cover; width: 100vw; height: 100vh; color: white">
                
                </td>
            </table>
                 
                 </div>

                 <div id="payment" class="payment">

                <P style="border:2px solid rgb(255, 237, 97);"><h3 align="center" >We suppot the following payment methods</h3></P>

                <table align="center" style="border:2px solid rgb(255, 237, 97);">
                    <th> Cash on Delivary </th>
                    <th> &nbsp;&nbsp;&nbsp;Bkash </th>
                    <th>&nbsp;&nbsp;&nbsp;Nogod </th>
                    <th>&nbsp;&nbsp;&nbsp;Visa </th>
                    <th>&nbsp;&nbsp;&nbsp;Master Card </th>
                    
                </table>
                <br/>
              </div>
                
                <div id="contact" class="contact">
                <table align="center" style="border:2px solid rgb(255, 237, 97);">
                    <th><a href="contactUS.html">Contact Us&nbsp;&nbsp;</a> </th>
                     <th><a href="terms.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms of use</a> </th>
                    <th><a href="customer.html">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Customer Support</a> </th>
                    
                    
                </table>
              </div>

              </section>
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