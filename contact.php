<!DOCTYPE html>
<html manifest="manifest.appcache">
    <head>
        <title>Contact</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <style type="text/css">
          body{
           // background-image: url(images/tree.png), url(images/background9.jpg);
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: 200px 200px, 100% 100%;
            background-position: 570px 300px, 0px 0px;
          } 
          /*Text Shadow: horizontal shadow, vertical shadow dhe blur radius*/
          button{  
            font-weight: bolder;
            border-radius: 10px;
              }
          button:hover{
            text-shadow: 2px 2px 5px #000000;  
          }
        </style>
        <script>
function validateForm() {
  //Validimi i Emrit
  var x = document.forms["contactform"]["firstname"].value;
  if (!x.match(/^[a-zA-Z ]{2,30}$/)) {
    alert("Name must be filled out correctly");
    return false;
  }
  //Validimi i Mbiemrit
  var x = document.forms["contactform"]["lastname"].value;
  if (!x.match(/^[a-zA-Z ]{2,30}$/)) {
    alert("Lastname must be filled out correctly");
    return false;
  }
  //Validimi i Email
    var x = document.forms["contactform"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
    alert("Not a valid e-mail address");
    return false;
  }
  //Validimi i select - opsioneve
       if (document.getElementById("subject").selectedIndex == 0) {
       alert("A subject must be choosen");
       return false;
     }
  //Validimi i Moshes - radio button
    var age = document.getElementsByName('age');
        var ageValue = false;
        for(var i=0; i<age.length;i++){
            if(age[i].checked == true){
                ageValue = true;    
            }
        }
        if(!ageValue){
            alert("Age must be choosen");
            return false;
        }
    //Validimi i pergjigjjes - checkbox
        var answer = document.getElementsByName('answer');
        var ansValue = false;
        for(var i=0; i<answer.length;i++){
            if(answer[i].checked == true){
                ansValue = true;    
            }
        }
        if(!ansValue){
            alert("An answer must be choosen");
            return false;
        }
    //Validimi i mesazhit - textarea
       if (document.getElementById("message").value == "" ) {
       alert("Message must be filled out");
       return false;
        }
          }
    function validateLogin(){
           //Validimi i Passwordit
    var x = document.forms["loginform"]["pass"].value;
    var r =document.forms["loginform"]["repass"].value;
        if(!x.match(/^[a-zA-Z0-9]{8,}$/)){
          alert("Password must be contain at least one number and one uppercase and lowercase letter, and at least 8 or more cahracters");
          return false;
        }
        if(!r.match(/^[a-zA-Z0-9]{8,}$/)){
          alert("Password must be contain at least one number and one uppercase and lowercase letter, and at least 8 or more cahracters");
          return false;
        }
        if (!(x == r)) {
        alert("Passwords are not the same, please try again");
          return false;
    }
    }
</script> 
    </head> 
    <body>  <header>
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
      <table> <tr>
                    
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
                  </table>

        </div>
        </header> 
        
    <br><br><br><br>
       <h1 id="title1">Contact</h1><br><hr id="hrcontact"> 
<div id="container1" align="center">
    <div class="contact-wrapper">
       <form class="contactform" action="thankyou.php" name="contactform" onsubmit="return validateForm()">
        
           <label>Name:</label>
           <input type="text" name="firstname" placeholder="Your name.." autofocus minlength="3">
           <label>Last Name: </label>
           <input type="text" name="lastname" placeholder="Your last name.." maxlength="20">
          
           <label>Email: </label>
           <input type="email" name="email" placeholder="Email.." multiple autocomplete="off">
           <label>Subject: </label>
           <select id="subject" name="reason" >
            <option value="hidden" selected disabled hidden>Choose here..</option>
              <option value="reason1">I have problems with my phone</option>
              <option value="reason2">I don't know how to use my TV</option>
              <option value="reason3">I can't choose between Samsung and iPhone</option>
              <option value="reason4">I can't find a product</option>
              <option value="reason5">Other</option>
           </select>
           <label>Age: </label>
           <input type="radio" name="age" value="under 18">
           <label>Under 18</label>
           <input type="radio" name="age" value="19 to 30">
           <label>19 to 30</label>
           <input type="radio" name="age" value="31 to 50">
           <label>31 to 50</label> <br><Br>
          <label>How would you like us to respond: </label>
           <input type="checkbox" name="answer" required>
           <label>Email</label>
           <input type="checkbox" name="answer">
           <label>Text Message</label>
           <input type="checkbox" name="answer">
           <label>Call</label><br><br>
           <label>City:</label><br>
           <input list="city" 
    style="width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 6px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;">
        <datalist id="city">
            <option value="Gjilan">
            <option value="Prishtine">
            <option value="Mitrovice">
            <option value="Ferizaj">
            <option value="Gjakove">
            <option value="Prizren">
            <option value="Peje">
        </datalist> <br><br>
           <label>Message: </label>
           <textarea id="message" name="message" placeholder="Write something.. " style="height: 120px;"></textarea>
           <input type="submit" onclick="clickCounter()" value="Send Message" formtarget="_blank">
       </form><br><hr><br>
<div class="loginbox" align="center">
        <h2 style="text-align: center;">Sign Up Here</h2><br>
        <form class="loginform" name="loginform" style="width: 350px" onsubmit="return validateLogin()">
            <p style="text-align: left;">Username:</p>
            <input type="text" name="" placeholder="Enter Username.."><keygen name="key">
            <p style="text-align: left;">Password</p>
            <input type="password" name="pass" placeholder="Enter Password.."><br>
            <p style="text-align: left;">Retype Password</p>
            <input type="password" name="repass" placeholder="Retype Password.."><br>
            <input type="submit" name="" value="Sign Up" formmethod="post"><br><br>
            <a href="pricing.php">Lost your password?</a><br>
            <a href="pricing.php">Already have an account?</a><br><br></form>
            <form onsubmit="return false" oninput="level.value = flevel.valueAsNumber">
  <label for="rate">Do you mind rating us?</label><br><br>  
  <input name="flevel" id="rate" type="range" min="0" max="10" value="0"> 
  <output for="rate" name="level">0</output>/10
</form>
        <div id="result"></div>
    </div>
     </div>
   </div>
       <hr id="hrcontact"><br>
 <div id="container2" align="center">
   <div id="leftdiv">
      <h2>Opening Hours</h2><br>
      <p><b>Monday - Friday </b><br> 09:00am - 08:00pm</p> <br>
      <p><b>Saturday </b><br> 11:00am - 06:00pm </p><br>
      <p><b>Sunday<b><br><mark style="background-color: red">Closed</mark></p>
   </div>
    <div id="rightdiv">
      <h2><b>Contact Details</b></h2><br>
      <address>
      <p>Lagjja Kalabria <br> 10000 Prishtine, Kosovo.<br><br><b><a href="mailto:tringasg4@gmail.com">info@5gArena.com</a></b><br>Tel: +383 49 000 000<br>Fax: 038 000 000<br>Web: <b>www.5gArena.com</b> </p>
    </address>
    </div><br><br><br><br><br><br><br><br><br><br>
</div>
<span style="position: absolute;  left: 720px; ">
 <button type="button"
onclick="document.getElementById('date_time_button').innerHTML = Date(), localClickCounter()">
Click and see Date and Time.</button>
<p id="date_time_button"></p>
<p id="localResult"></p>
</span>
<span style="position: absolute; left: 480px; ">
  <button onclick="myLocation()">Click here to get Location</button>
  <p id="demo"></p>
</span>
<script type="text/javascript">
var x = document.getElementById("demo");
function myLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition, showError);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      x.innerHTML = "User denied the request for Geolocation."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML = "Location information is unavailable."
      break;
    case error.TIMEOUT:
      x.innerHTML = "The request to get user location timed out."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML = "An unknown error occurred."
      break;
  }
}
function clickCounter() {
  if (typeof(Storage) !== "undefined") {
    if (sessionStorage.clickcount) {
      sessionStorage.clickcount = Number(sessionStorage.clickcount)+1;
    } else {
      sessionStorage.clickcount = 1;
    }
    document.getElementById("result").innerHTML = "You have clicked the button " + sessionStorage.clickcount + " time(s) in this session.";
  } else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
function localClickCounter() {
  if (typeof(Storage) !== "undefined") {
    if (localStorage.clickcount) {
      localStorage.clickcount = Number(localStorage.clickcount)+1;
    } else {
      localStorage.clickcount = 1;
    }
    document.getElementById("localResult").innerHTML = "You have clicked the clockbutton " + localStorage.clickcount + " time(s).";
  } else {
    document.getElementById("localResult").innerHTML = "Sorry, your browser does not support web storage...";
  }
}
</script>
<footer>
                <div class="footerdiv" style="position: absolute; margin-top: 60px; "> 
                  <p>Copyright &copy; 2019 5gArena - All Rights Reserved</p>
                  <p style="float: right;">Made by AK, AZ & FM</p>
                </div>
            </footer>
    </body>
</html> 