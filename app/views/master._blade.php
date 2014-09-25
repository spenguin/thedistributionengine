@include( 'common.header' )
		
	<div class="slider" id="home"> 
			
		<div class="wrap">
				<!---start-da-slider----->
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<p>Can you build the Website of my dreams?</p>
					<h2>Yup<img src="../public/images/coma.png" alt=""> we can do that<img src="../public/images/dot.png" alt=""></h2>
					<a href="#" class="da-link">Learn More</a>
				</div>
				<div class="da-slide">
					<p>Can you build the Website of my dreams?</p>
					<h2>Yup<img src="../public/images/coma.png" alt=""> we can do that<img src="../public/images/dot.png" alt=""></h2>
					<a href="#" class="da-link">Learn More</a>
				</div>
				<div class="da-slide">
					<p>Can you build the Website of my dreams?</p>
					<h2>Yup<img src="../public/images/coma.png" alt=""> we can do that<img src="../public/images/dot.png" alt=""></h2>
					<a href="#" class="da-link">Learn More</a>
				
				</div>
				<div class="da-slide">
					<p>Can you build the Website of my dreams?</p>
					<h2>Yup<img src="../public/images/coma.png" alt=""> we can do that<img src="../public/images/dot.png" alt=""></h2>
						<a href="#" class="da-link">Learn More</a>
				
				</div>
			</div>
		
			<script type="text/javascript" src="../public/js/jquery.cslider.js"></script>
					 <!---strat-slider---->
				    <link rel="stylesheet" type="text/css" href="../public/css/slider.css" />
					<script type="text/javascript" src="../public/js/modernizr.custom.28468.js"></script>
						<script type="text/javascript">
							$(function() {
							
								$('#da-slider').cslider({
									autoplay	: true,
									bgincrement	: 450
								});
							
							});
					</script>
					<!---//End-da-slider----->
			</div>
		</div>
	</div>
</div>
<!---start-services--->
	<div  class="services" id="services" style="border-bottom: 1px solid black;">
		<div class="process-top-grid">
            <div class="wrap">
                <div class="top-grids">
                    <div class="process-top-grid-left">
                        <h3><?php echo $pageTitle[0]; ?><span><?php echo $pageTitle[1]; ?> </span> </h3>
                        @yield( 'content' )
<!--                        <p>Proin iaculis purus Consequent sem cure digni ssim.Donec pottitora entum suscipit aenem rhoncus posuere odio in tincident. ilaculis purus Consequent sem cure digni ssim.Donec pottitora entum suscipit aenem rhoncus posuere odio in tincident. Proin iaculis purus Consequent sem cure digni ssim.</p>
                        <p>Dico omnis graeco eum cu, patrioque vix ludus. Labitur abhorreant. Luptatum iudicabit his. Quidam semper omittam. Reque scaevola ponderum laudem.</p>-->
                    </div>
                    <div class="process-top-grid-right">
                        <a herf="#"> <img src="../public/images/img-right.png" alt=""/> </a>
                    </div>
                    <div class="clear"> </div>
                </div>	
            </div>
		</div>
<!--        <div class="process-bottom-grid">
            <div class="process-bottom-grid-left">
                <img src="../public/images/img-left.png" alt=""/>
            </div>
            <div class="bottom-grids">
                <div class="process-bottom-grid-right">
                    <h3>Identity <span>Branding </span> </h3>
                    <p> Proin iaculis purus Consequent sem cure digni ssim.Donec pottitora entum suscipit aenem rhoncus posuere odio in tincident.ilaculis purus Consequent sem cure digni ssim.Donec pottitora entum suscipit aenem rhoncus posuere odio in tincident. Proin iaculis purus Consequent sem cure digni ssim.</p>
                    <p>Dico omnis graeco eum cu, patrioque vix ludus. Labitur abhorreant. Luptatum iudicabit his. Quidam semper omittam. Reque scaevola ponderum laudem.</p>
                </div>
                <div class="clear"> </div>
            </div>
        </div>-->
	</div> 
	<div class="middle-bottom">
   		<div class="box3">
	   	   	<div class="col_1_of_2 span_1_of_2">
			 <ul class="list1">
			 	<li><img src="../public/images/pic1.png" alt=""/>
			 		<div class="desc"><h4>Branding & Identity</h4><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p></div>
			 		<div class="clear"> </div>
			 	</li>
			  </ul>
			  <ul class="list1">
			 	<li><img src="../public/images/pic2.png" alt=""/>
			 		<div class="desc"><h4>Mobile App Development</h4><p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p></div>
			 		<div class="clear"> </div>
			 	</li>
			  </ul>
			  <ul class="list1">
			 	<li><img src="../public/images/pic3.png" alt=""/>
			 		<div class="desc"><h4>UI/UX</h4><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p></div>
			 		<div class="clear"> </div>
			 	</li>
			  </ul>
			</div>
			<div class="col_1_of_2 span_1_of_2">
			  <ul class="list1">
			 	<li><img src="../public/images/pic4.png" alt=""/>
			 		<div class="desc"><h4>Web &  Graphic Design</h4><p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p></div>
			 		<div class="clear"> </div>
			 	</li>
			  </ul>
			  <ul class="list1">
			 	<li><img src="../public/images/pic5.png" alt=""/>
			 		<div class="desc"><h4>Animations</h4><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam</p></div>
			 		<div class="clear"> </div>
			 	</li>
			  </ul>
			  <ul class="list1">
			 	<li><img src="../public/images/pic6.png" alt=""/>
			 		<div class="desc"><h4>Photography</h4><p>aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea</p></div>
			 		<div class="clear"> </div>
			 	</li>
			  </ul>
			</div>
			<div class="clear"> </div>
		</div>
   	  </div>
 
<!---//end-services----->
 
<!---start-clients----->
	<div  class="clients" id="clients">	 
		<div class="wrap">
			<div class="client-head">
				<h3>Awesome <span>Clients</span></h3>
				<p>See what nice things our clients said about us.</p>
			</div>
			<div class="grids-1">
				<div class="clients_main">
				<div class="client-left">
					<img src="../public/images/client1.jpg" alt="" />	
				</div>
				<div class="client-right">
					<div class="grid_info">
						<p>'' Proin iaculis purus Consequent sem cure digni ssim.Donec pottitora entum suscipit aenem rhoncus ''</p>
						<h4><a href="#">- Jamie Richardson</a>,Founder of cocoa Media</h4>
					</div>	
				</div>
				<div class="clear"> </div>
			</div>
				<div class="clients_main1">
					<div class="client-right">
					<div class="grid_info1">
						<p>'' Proin iaculis purus Consequent sem cure digni ssim.Donec pottitora entum suscipit aenem rhoncus ''</p>
						<h4><a href="#">- Bart Thompson</a>,Founder Rainel</h4>
					</div>	
				</div>
				<div class="client-left1">
					<img src="../public/images/client2.jpg" alt="" />	
				</div>
				<div class="clear"> </div>
			</div>
			</div>
		 </div> 
	</div>
	<!---//end-clients----->
	<!---strat-image-cursuals---->
                  <div class="scroll-slider">
                  	<div class="wrap"> 											 
							<div class="nbs-flexisel-container"><div class="nbs-flexisel-inner"><ul class="flexiselDemo3 nbs-flexisel-ul" style="left: -253.6px; display: block;">					    					    					       
							<li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="../public/images/c3.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="../public/images/c4.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="../public/images/c1.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="../public/images/c2.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="../public/images/c3.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="../public/images/c4.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="../public/images/c1.png"></li><li onclick="location.href='#';" class="nbs-flexisel-item" style="width: 253.6px;"><img src="../public/images/c2.png"></li></ul><div class="nbs-flexisel-nav-left" style="top: 21.5px;"></div><div class="nbs-flexisel-nav-right" style="top: 21.5px;"></div></div></div> 
							<div class="clear"> </div>      
						  <!---strat-image-cursuals---->
								<script type="text/javascript" src="../public/js/jquery.flexisel.js"></script>
								<!---End-image-cursuals---->
								<script type="text/javascript">
								$(window).load(function() {
								    $(".flexiselDemo3").flexisel({
								        visibleItems: 5,
								        animationSpeed: 1000,
								        autoPlay: true,
								        autoPlaySpeed: 3000,            
								        pauseOnHover: true,
								        enableResponsiveBreakpoints: true,
								        responsiveBreakpoints: { 
								            portrait: { 
								                changePoint:480,
								                visibleItems: 1
								            }, 
								            landscape: { 
								                changePoint:640,
								                visibleItems: 2
								            },
								            tablet: { 
								                changePoint:768,
								                visibleItems: 3
								            }
								        }
								    });
								});
								</script>
						<!---->
				  <!---->
				  </div>				
			</div>

				<!---//End-signin---->
		 		
	<!----start-team----->
	<div  class="team" id="team">	 
				<div class="team-members">
					<div class="wrap"> 
						<div class="tm-head">
							<h3>Amezing <span>Team</span></h3>
							<p>These wonderful people make work enjoyable.</p>
						</div>
						<div class="tm-head-grids">
							<div class="tm-head-grid">
								<img src="../public/images/team-member1.png" alt="" />
								<h4>Kimberly Thompson</h4>
								<h5>Marketer</h5>
								<ul class="top-social-icons">
									<li> <a class="twitter simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#"> </a></li>
									<li> <a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li> <a class="pin simptip-position-bottom simptip-movable" data-tooltip="Pintrest" href="#"> </a> </li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="tm-head-grid">
								<img src="../public/images/team-member2.jpg" alt="" />
								<h4>Rico Massimo</h4>
								<h5>Coder</h5>
								<ul class="top-social-icons">
									<li> <a class="twitter simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#"> </a></li>
									<li> <a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li> <a class="pin simptip-position-bottom simptip-movable" data-tooltip="Pintrest" href="#"> </a></li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="tm-head-grid">
								<img src="../public/images/team-member3.jpg" alt="" />
								<h4>Uku Mason</h4>
								<h5>Graphic Designer</h5>
								<ul class="top-social-icons">
									<li> <a class="twitter simptip-position-bottom simptip-movable" data-tooltip="Twitter" href="#"> </a></li>
									<li> <a class="facebook simptip-position-bottom simptip-movable" data-tooltip="Facebook" href="#"> </a></li>
									<li> <a class="pin simptip-position-bottom simptip-movable" data-tooltip="Pintrest" href="#"> </a></li>
									<div class="clear"> </div>
								</ul>
							</div>
							<div class="clear"> </div>
						</div>
						<p class="team-info">Proin iaculis purus consequat sem cure  digni ssim donec porttitora entum suscipit aenean rhoncus posuere odio in tincidunt proin iaculis.</p>
					</div>
				</div>
		</div>
<!----//End-team-----> 
<!----start-contact---->
	 <div  class="contact" id="contact">
		<div class="wrap">
 		<div class="contact-left">		
 			<h3>Say<span>Hello</span> </h3>
 		     <p class="style">Proin iaculis purus Consequent sem cure digni ssim.Donec pottitora entum suscipit aenem rhoncus.</p>		
 		    <ul class="soc_icons">
				<li><a href="#"><i class="icon_1"></i><span>(416) 32402390 </span> </a></li>
				<li><a href="#"><i class="icon_2"></i><span>@twitter </span> </a></li>
				<li><a href="#"><i class="icon_3"></i><span>Plus.com</span> </a></li>
			</ul>
			<ul class="soc_icons">
				<li><a href="#"><i class="icon_4"></i><span>@hello.com</span> </a></li>
				<li><a href="#"><i class="icon_5"></i><span>Facebook </span> </a></li>
				<li><a href="#"><i class="icon_6"></i><span>Pinterest.com</span> </a></li>
			</ul>
			<div class="clear"> </div>
		</div>	
 		<div class="contact-right">		
 		    <div class="form">				
				  			<form method="post" action="#">
							    	<input type="text" class="textbox" value=" Your Name*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Name* ';}">
							    	<input type="text" class="textbox" value="Your Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Email*';}">
										<div class="clear"> </div>
								    <div>
								    	<textarea value="Message:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Message* ';}">Your Message*</textarea>
								    </div>	
								   <div class="submit"> 
								    	<input type="submit" value="Sign in " />
					              </div>
							</form>
						</div>
 		</div>	
 		<div class="clear"> </div>
 	</div>	
</div> 				
<!----//End-contact---->
				
@include( 'common.footer' )               


