
<!DOCTYPE html>

    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
	<?php 
session_start();
$db = mysqli_connect("localhost","root","","mobilestore");
 if(isset($_SESSION['username'])) {
	 $username = $_SESSION['username'];
	
	
	$queryUser = "select id_klienti from klienti where uname = '$username';";
	$resultUser = mysqli_query($db,$queryUser);
	$user = mysqli_fetch_array($resultUser);
	
	?>
	 <tr>
				<td><span class="name"></span></td>
				<td></td>
			
				<td><a href = "login.php"><button id = "buton_login" type = "button">Log Out</button></a></td>	
				
			  </tr>
			  <?php
	}
	
	
	
	
	
	else{
		?>
		  <tr>
				<td><span class="name"></span></td>
				<td></td>
			
				<td><a href = "login.php"><button id = "buton_login" type = "button">Log In</button></a></td>	
				
			  </tr>
			  <?php
			  
			  
			  
	}
	
	
 ?>
    <body style="background-color:#eae6d6;">  
	
	<?php
 if(isset($_SESSION['username'])) {
	include 'menu.php'?>
	<div class="responsive">
	<table>
       <td id="login">
					<form method="post" action="index.php"></form>

					</td>
		<td id="header" valign="top"><table border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td width="303"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			
			  <tr>
			  <td><a href = "tabela.php" ><button id="shopping" style="display: none;"type = "button">Shopping Cart</button></a></td>
			  </tr>
			<tr>
			
			</tr>
			</table></td>
				

		  </tr>
		</table></td>
					</table>
			
			   


<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
  <p class="info">Tel: +383 49 000 000 | Mail: ak42549@ubt-uni.net, az41597@ubt-uni.net, fm41566@ubt-uni.net</p><hr>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
      <div class="nav2">
      <table> <tr>
                    
                <td class="col-md-3"><h1>5gArena</h1>
                <p id="description">Your best choice for technology</p></td>
                        
                    
                    <td class="col-md-2"> <h3><a href="index.php">Home</a></h3>
                    <p>Welcome to the best place for technology news and much more.</p></td>
                    
					<td class="col-md-2"> <h3><a href="brands.php">Brands</a></h3>
                    <p>Phone finder, the ultimate resource for 5G handset information.</p></td>

                <td class="col-md-2"> <h3><a id="product" href="news.php">News</a></h3>
                    <p>Newest information about technology including videos and audios.</p></td>
                    

                <td class="col-md-3"> <h3><a href="reviews.php">Reviews</a></h3>
                    <p>Thinking of bying a product? Take a look at our reviews for a better purchase. </p></td>


                
                    </tr>
                  </table>

        </div>
		</div>
        </header> 
        <section>
		<div class="responsive">
            <div class="section1">
    
                
                <div class="section11">

                    <div class="section11a">

                        <p id="title"><em>The new generation of smartphones...</em></p>
                        <p>If you're looking for a new mobile phone, then you've come to the right place.
                        We're the first for smartphones and range the latest mobile releases from brands like Samsung, Apple, Huawei and Nokia. You'll find the very best products of technology. </p><br>
                        <a href="reviews.php"><em> Go to reviews &#8811;</em></a>
                    

					
					
					
					<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0" >
	  <tr class="kryefaqja">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	 

	  <tr><td height="1" bgcolor="#ffffff"></td></tr>
	  <tr>
		<td valign="top">
		<table width="1091" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
			
			<td width="900" valign="top" bgcolor="#f1eee3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			 <tr>
				<td class="main-head"><h1>Products</h1></td>
			</tr>
			  <tr><td><br></td></tr>
			 
				  <!-- qitu -->
				  
			<?php 

$connect = mysqli_connect("localhost", "root", "", "mobilestore");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="index.php"</script>';
			}
		}
	}
}

?>

		
	
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			
			<br /><br />
			<?php
			
				$query = "SELECT id_produkti,emri,display,camera,memory,batery,price,stock FROM mobilestore.produkti;";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["id_produkti"]; ?>">
					<div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row['emri']; ?>.jpg"  class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["emri"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["emri"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
				
	

		  </tr>
		</table>
		</td>
	  </tr>
	  <tr>
	  <td>
	  </td>
		 
	  </tr>
	  <tr>
	  	<td>
	  	</td>

	  </tr>
	</table>
	</tr>
	</table>				
					
					
	
		
                    </div>

                    <div class="section11b">
                        <img name="slide" src="images/img1.jpg" width="500" height="300" alt="Foto e teknologjise" class="responsive1">
                       
                    </div>
            
                </div>
                <div class="section22">
                    <div class="section22a">
                        <img src="images/bestphone.jpg" width="300px" height="150px" alt="Telefont me te mire">
                    </div>
                    <div class="section22a">
                        <img src="images/fold.jfif" width="300px" height="150px" alt="Galaxy Fold">
                    </div>
                    <div class="section22a">
                         <img src="images/lenovo.jpg" width="300px" height="150px" alt="Lenovoe fleksibil">
                    </div>
        </div>
        </div><br><br><br>
		</div>
		
 <?php } 
 
 else {
	include 'menu.php'?>
	<div class="responsive">
	<table>
       <td id="login">
					<form method="post" action="index.php"></form>

					</td>
		<td id="header" valign="top"><table border="0" cellspacing="0" cellpadding="0">
		  <tr>
			<td width="303"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			
			  <tr>
			  <td><a href = "tabela.php" ><button id="shopping" style="display: none;"type = "button">Shopping Cart</button></a></td>
			  </tr>
			<tr>
			
			</tr>
			</table></td>
				

		  </tr>
		</table></td>
					</table>
			
			   


<div id="main">
  
  <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Menu</span>
  <p class="info">Tel: +383 49 000 000 | Mail: ak42549@ubt-uni.net, az41597@ubt-uni.net, fm41566@ubt-uni.net</p><hr>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
      <div class="nav2">
        <table> <tr>
                    
                <td class="col-md-3"><h1>5gArena</h1>
                <p id="description">Your best choice for technology</p></td>
                        
                    
                    <td class="col-md-2"> <h3><a href="index.php">Home</a></h3>
                    <p>Welcome to the best place for technology news and much more.</p></td>
                    
					<td class="col-md-2"> <h3><a href="brands.php">Brands</a></h3>
                    <p>Phone finder, the ultimate resource for 5G handset information.</p></td>

                <td class="col-md-2"> <h3><a id="product" href="news.php">News</a></h3>
                    <p>Newest information about technology including videos and audios.</p></td>
                    

                <td class="col-md-3"> <h3><a href="reviews.php">Reviews</a></h3>
                    <p>Thinking of bying a product? Take a look at our reviews for a better purchase. </p></td>


                
                    </tr>
                  </table>

        </div>
		</div>
        </header> 
        <section>
		<div class="responsive">
            <div class="section1">
    
                
                <div class="section11">

                    <div class="section11a">

                        <p id="title"><em>The new generation of smartphones...</em></p>
                        <p>If you're looking for a new mobile phone, then you've come to the right place.
                        We're the first for smartphones and range the latest mobile releases from brands like Samsung, Apple, Huawei and Nokia. You'll find the very best products of technology. </p><br>
                        <a href="reviews.php"><em> Go to reviews &#8811;</em></a>
                    

					
					
					
					<table width="1003" border="0" align="center" cellpadding="0" cellspacing="0" >
	  <tr class="kryefaqja">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	 

	  <tr><td height="1" bgcolor="#ffffff"></td></tr>
	  <tr>
		<td valign="top">
		<table width="1091" border="0" align="center" cellpadding="0" cellspacing="0">
		  <tr>
			
			<td width="900" valign="top" bgcolor="#f1eee3"><table width="100%" border="0" cellspacing="0" cellpadding="0">
			 <tr>
				
			</tr>
			  <tr><td><br></td></tr>
			 
				  <!-- qitu -->
				  
			

		
	
		<br />
		<div class="container">
			<br />
			<br />
			<br />
			
			<br /><br />
			<?php
			$connect = mysqli_connect("localhost", "root", "", "mobilestore");
				$query = "SELECT id_produkti,emri,display,camera,memory,batery,price,stock FROM mobilestore.produkti;";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["id_produkti"]; ?>">
					<div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row['emri']; ?>.jpg"  class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["emri"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["emri"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="button" name="add_to_cart" style="margin-top:5px;" onclick="asklogin()" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
				
	

		  </tr>
		</table>
		</td>
	  </tr>
	  <tr>
	  <td>
	  </td>
		 
	  </tr>
	  <tr>
	  	<td>
	  	</td>

	  </tr>
	</table>
	</tr>
	</table>				
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					
					<script>
					function asklogin(){
						alert("please login to add items in cart");
					}
					
					</script>
					
					
					
					
					
					
					
					
					
					
					
					
                    </div>

                    <div class="section11b">
                        <img name="slide" src="images/img1.jpg" width="500" height="300" alt="Foto e teknologjise" class="responsive1">
                       
                    </div>
            
                </div>
                <div class="section22">
                    <div class="section22a">
                        <img src="images/bestphone.jpg" width="300px" height="150px" alt="Telefont me te mire">
                    </div>
                    <div class="section22a">
                        <img src="images/fold.jfif" width="300px" height="150px" alt="Galaxy Fold">
                    </div>
                    <div class="section22a">
                         <img src="images/lenovo.jpg" width="300px" height="150px" alt="Lenovoe fleksibil">
                    </div>
        </div>
        </div><br><br><br>
		</div>
		
 <?php } ?>
		
		
		
        </section>
		<br><br>
         <div class="section33">
                    <div class="section33a">
                        <h1>APPLE</h1>
                        <hr>
                         <figure>
                            <img src="images/apple.png" width="60" height="60"  alt="Iphone news" align="left">
                            <figcaption> Discover the innovative world of <u><b>Apple</b></u> and shop everything iPhone, iPad, Apple Watch, Mac, and 
                            <a href="news.php#iphone" target="_blank"> Apple TV &#8811;</a></figcaption>
                        </figure>


                    </div>
                    <div class="section33a">
                        <h1>SAMSUNG</h1>
                        <hr>
                         <figure>
                            <img src="images/samsung1.png" width="60" height="60"  alt="Samsung" align="left">
                            <figcaption> Discover the latest in electronic & smart appliance technology with  <u><b>Samsung.</b></u> Find the next big thing from tablets & smartphones to 
                            <a href="news.php#samsung" target="_blank"> laptops & tvs &#8811;</a></figcaption>
                        </figure>
                    </div>
                    <div class="section33a">
                         <h1>GOOGLE</h1>
                         <hr>
                          <figure>
                            <img src="images/pixel.png" width="60" height="60"  alt="Microsoft" align="left">
                            <figcaption>Night Sight on <u><b>Pixel 3</b></u> and <u><b>Pixel 3 XL</b></u> brings out all the best details and colors of your low light pics that you'll never want to use your 
                            <a href="news.php#microsoft" target="_blank">flash again &#8811;</a></figcaption>
                        </figure>
                    </div>

                    <hr style="margin:30px 20px;">	                  
                    <div class="section33b">
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                       <h2>About Our Site</h2>
                       <hr style="margin-top: 15px; margin-bottom: 15px;">
                       <p>Over our long history, our social purpose and commitment to the community has remained the same; to deliver <a href="news.php">news about technology</a>and opportunities that matter to everyone.</p><br>
                       <p>Our solution experts are here to answer your questions, help you troubleshoot issues, improve your experience & increase satisfaction with our solutions. We also help you choose the best product based on your needs!</p><br>
                       <p>Find more about some products reviews <a href="reviews.php">here.</a><br></p>
                    </div>


                  
            </div>
           

</body>

	<script type="text/javascript" src="script.js"></script>
<script type="text/javascript">

    var i=0;
    var images =[];
    var time = 1000;

    images[0] = "images/galaxys10.jpg";
    images[1] = "images/iphonexs.jpg";
    images[2] = "images/huaweip30.jpg";
    images[3] = "images/huaweix.jpg";
    function changeImage() {
        document.slide.src = images[i];

            if(i < images.length - 1){
      // Add 1 to Index
      i++; 
    } else { 
        // Reset Back To O
        i = 0;
    }

    // Run function every x seconds
    setTimeout("changeImage()", time);
}

// Run function when page loads
window.onload=changeImage;
    
</script>
</html>