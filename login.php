<?php 
session_start();
 if(isset($_SESSION['username'])) { 
		session_destroy() ;
		header("Location: index.php");
   		exit;
    } 
?>

        <title>About</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="loginstyle.css" rel="stylesheet" type="text/css" />
		<script src="script/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
	
    </head>
    <body>  
	<div class="responsive">
       <header>
	   <div class="responsive">
<?php include 'menu.php'?>

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
    
                
                <div class="section11">

                    <div class="section11a">

                <form class="login-form" method="post">
      <input type="text" placeholder="username" id="username"/><br>
      <input type="password" placeholder="password" id="password"/><br>
      <button type = "button" onclick = "Logohu()" id="log">Log In</button>
      <p class="message" id="notreg">Not registered? <a href="signup.php">Create an account</a></p>
	  
    </form>
	
			</td>
			</tr>
			</table>
			</td>
		  </tr>
		  <tr>
			
		</table></td>
		<script>
			function Logohu(){
			var username = document.getElementById('username').value;
		var password = document.getElementById('password').value;
		var dataString = 'username='+username+'&password='+password;
	
		$.ajax({
  type: 'POST',
  url: 'kycu.php',
  data: dataString,
   success: function(data){
	   if(data == 'sukses'){
		   alert("Mireseerdhet ne webfaqen tone "+username);
		   document.location.href = "index.php";
	   }else{
		   $("#error").php("<div class='errori'>* Nuk keni casje !</div>");
		             return false;
	   }
   }
});
             	
	      }
			</script>
            
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
<div class="responsive">
</div>
<script type="text/javascript">



    
</script>
</div>
</div>
</body></html>


