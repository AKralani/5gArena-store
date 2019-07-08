<?php 
session_start();
 if(isset($_SESSION['username'])) { 
		session_destroy() ;
		header("Location: index.php");
   		exit;
    } 
?>
<html manifest="manifest.appcache"><head>
        <title>About</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
		<script src="script/jquery.min.js"></script>
    </head>
    <body>  
	<div class="responsive">
       <header>
	   <div class="responsive">
            <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php">Home</a> |
	<a href="brands.php">Brands</a> |
    <a href="news.php">News</a> |
    <a href="reviews.php">Reviews</a> |
    <a href="pricing.php">Pricing</a> |
    <a href="contact.php">Contact</a> |
    <a href="about.php">About</a>
</div>

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
      <table> <tbody><tr>
                    
                <td><h1>5gArena</h1>
                <p id="description">Your best choice for technology</p></td>
                        
                    
                    <td class="table"> <h3><a href="index.php">Home</a></h3>
                    <p>Welcome to the best place for technology news and much more.</p></td>
                    
					<td class="table"> <h3><a href="brands.php">Brands</a></h3>
                    <p>Phone finder, the ultimate resource for 5G handset information.</p></td>

                <td class="table"> <h3><a id="product" href="news.php">News</a></h3>
                    <p>Newest information about technology including videos and audios.</p></td>
                    

                <td class="table"> <h3><a href="reviews.php">Reviews</a></h3>
                    <p>Thinking of bying a product? Take a look at our reviews for a better purchase. </p></td>


                
                    </tr>
                  </tbody></table>

        </div>
		</div>
        </header> 
        <section>
		<div class="responsive">
            <div class="section1">
    		<script>
			function create(){
				
				var emri = document.getElementById('emri').value;
				var mbiemri = document.getElementById('mbiemri').value;
				var email = document.getElementById('email').value;
				var username = document.getElementById('username').value;
				var password = document.getElementById('password').value;
		var dataString = 'emri='+emri+'&mbiemri='+mbiemri+'&email='+email+'&username='+username+'&password='+password;
		$.ajax({
			type: 'POST',
			url: 'krijo_user.php',
			data: dataString,
			success: function(data){
			if(data == 'sukses'){
				document.location.href = "login.php";
			}else{
				$("#error").php("<div class='errori'>* Ky user gjendet !</div>");
					return false;
				}
			}
		});
	      }
			</script>
                
                <div class="section11">

                    <div class="section11a">

                      <form class="login-form" method="post">
		<input type="text" placeholder="emri" id="emri" required /><br>
	  <input type="text" placeholder="mbiemri" id="mbiemri" required /><br>
	  <input type="text" placeholder="email" id="email" required /><br>
      <input type="text" placeholder="username" id="username" required /><br>
      <input type="password" placeholder="password" id="password" required /><br>
	  <div id="error" style="margin-top:20px;">
	  </div>
      <button type = "button"  onclick = "create()" id="log">Create</button>
	  
    </form>
	
	
            
                </div>
                <div class="section22">
                    <div class="section22a">
                        
                    </div>
                    <div class="section22a">
                        
                    </div>
                    <div class="section22a">
                         
                    </div>
        </div><br><br><br><br><br><br><br><br>
        </div><br><br><br>
		</div>
        </section>
         
            <footer>
			<div class="responsive">
                <div class="footerdiv"> 
                	<p>Copyright © 2019 5gArena - All Rights Reserved</p>
                	<p style="float: right;">Made by AK, AZ &amp; FM</p>
                </div>
				</div>
            </footer>

<script type="text/javascript">
<div class="responsive">

    images[0] = "images/galaxys10.jpg";
</div>
    
</script>
</div>
</div>
</body></html>












