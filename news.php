<!DOCTYPE html>
<html manifest="manifest.appcache">
    <head>
        <title id="#top">News</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/style2.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
    
input[type=text] {
  width: 100px;
  -moz-box-sizing:border-box;
  -webkit-box-sizing:border-box; 
  -o-box-sizing:border-box; 
  -ms-box-sizing:border-box;
  box-sizing: border-box;
  border: 2px solid #ccc;
  font-size: 16px;
  background-color: white;
  background-image: url('images/searchicon.png');
  background-position: 1px 10px;
  background-repeat: no-repeat;
  padding: 12px 20px 12px 25px;
  -webkit-transition: width 0.5s ease-in-out;
  -moz-transition: width 0.5s ease-in-out;
  -o-transition: width 0.5s ease-in-out;
  -ms-transition: width 0.5s ease-in-out;
  transition: width 0.5s ease-in-out;
}
.search{
    position: absolute;
    bottom: 30px;
    left: 600px;
    width: 300px;
}
input[type=text]:focus {
  width: 100%;
}
/*Metoda translate e 2D Transformimeve*/
.banner{

    -webkit-transform: translate(10px, 10px);
    -moz-transform: translate(10px, 10px);
    -o-transform: translate(10px, 10px);
    -ms-transform: translate(10px, 10px);
    transform: translate(10px, 10px);
}
h1{
    -webkit-transform: translate3d(1px, 2px, 3px);
    -moz-transform: translate3d(1px, 2px, 3px);
    -o-transform: translate3d(1px, 2px, 3px);
    -ms-transform: translate3d(1px, 2px, 3px);
    transform: translate3d(1px, 2px, 3px);
}
/*Ndryshimi i background position me metoden translate te 3D Animacioneve*/
body{
    animation: fade-slide-down 0.6s ease-out forwards;
}
@-webkit-keyframes fade-slide-down {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: none;
  }
}
@-moz-keyframes fade-slide-down {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: none;
  }
}
@-o-keyframes@keyframes fade-slide-down {
  0% {
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: none;
  }
}

}
@keyframes fade-slide-down {
  0% {
    -webkit-opacity:0;
    -moz-opacity:0;
    -o-opacity:0;
    -ms-opacity:0;
    opacity: 0;
    transform: translateY(-20px);
  }
  100% {
    opacity: 1;
    transform: none;
  }
}


        </style>
<script type="text/javascript">
var now = new Date();
var min = now.getMinutes();

//Nese minutat jane numer ??ift atehere background ka ngjyre light pink
if (min%2==0){
document.write ('<body style="background-color: #ffe6ff">');
}
//Nese minutat jane numer tek atehere background eshte light blue
if (min%2==1){
document.write ('<body style="background-color: #ebfafa">');
}
</script>
    </head>
    <body>  
        <header>
              <div class="nav1">
          <a href="index.php">Home</a> |
        <a href="news.php">News</a> |
        <a href="reviews.php">Reviews</a> |
        <a href="pricing.php">Pricing</a> |
        <a href="contact.php">Contact</a> |
        <a href="about.php">About</a>
        <p class="info">Tel: +383 49 000 000 | Mail: ak42549@ubt-uni.net, az41597@ubt-uni.net, fm41566@ubt-uni.net</p><hr>
        </div>
      
        </header>
        <div class="banner">
            <h1>Tech News</h1><br>
               <p> The latest tech news about the world's best (and sometimes worst) hardware, apps, and much more. From top companies like Google and Apple to tiny startups vying for your attention, 5gArena has the latest in what matters in technology daily. We give you the information, tools and advice that will help you decide what to buy and how to get the most out of the tech in your life</p><br>
            <ol>
                <h3 style="color: #FF7112; font-size: 30px;"><b>Each month, hundreds of people come to 5gArena to: </b></h3>
            <li>Read the latest technology news and unbiased product reviews.</li>
            <li>Find the products that are right for them.</li>
            <li>Learn how to get the most out of the technology they have.</li>
            <li>Ask opinions/reviews about the technology and the consumer electronics they live with every day.</li>
                </ol></div><br><BR>

</div>
 <img  src="images/background.jpg" width="100%" height="100%"><br><br><br><hr id="samsung">
<div class="newsbelow">
    <h1 >Samsung is working on a Night Sight response called Bright Night</h1>
    <p id="date"><time><i>Date posted: 23-Dec-2018</time></i></p>
    <img src="images/news.jpg">
    <figcaption>The new mode is expected to debut with the Galaxy S10 </figcaption><br>

    <p>Code discovered in the latest Android Pie build for Samsung???s Galaxy Note 9 suggests the company is working on a new night photography mode called Bright Night, reports XDA-Developers. The code says that it will allow you to ???take bright pictures even in very dark conditions,??? which is similar to the functionality we???ve seen from Google???s Night Sight mode and Huawei???s Night Mode.

Given how Samsung likes to debut new photography features with each flagship handset, XDA speculates that the company might be about to do the same with Bright Night and the upcoming Galaxy S10, which is expected to be announced at the end of February 2019. Samsung released new scene optimizer technology with the Note 9 in August, following the addition of super slow-mo to the S9. After their initial releases, both technologies were later brought to older handsets, which explains how this code has cropped up in a Note 9 build when it???s expected to be announced alongside the S10.</p><hr id=iphone>
<h1 >Don???t expect a 5G iPhone before 2020</h1>
<p id="date"><time><i>Date posted: 22-Dec-2018</i></time></p>
<img src="images/news1.jpg">
<br><br>
<p>A new report from Bloomberg today reiterates what we???ve been hearing about Apple???s timeline for adopting the next generation of cellular connectivity, 5G, by suggesting the first compatible iPhone won???t come before 2020. Earlier rumors and reports pointed to the 2020 iPhone as the likeliest candidate to add 5G support, even though mobile carriers and Apple???s Android rivals are going to be rolling the new technology out all through 2019.
Citing multiple sources familiar with Apple???s plans,Bloomberg suggests that Intel is the most likely candidate to provide the 5G modem, as has previously been reported.<Br>That makes sense in light of Apple???s ongoing dispute with Qualcomm, the leading designer and maker of modem chips, and rivalrous relationship with Samsung and Huawei, two other semiconductor giants who are investing heavily in 5G but happen to have their own smartphone lineups competing against the iPhone.
Before 5G, Apple was also slower than the broader phone market in adopting 4G, which has proven to be a good decision for the company. While other major brands forced 4G LTE components into their devices as early as possible ??? compromising on both size and battery life in the process ??? <br>Apple waited until the technology was more mature and thus made a seamless transition. There are no guarantees that the market will be as patient in waiting for 5G, though if there???s one thing the iPhone has proven over the years, it???s the resilience of its popularity even when it???s not on the cutting edge of every possible spec.</p><hr>
<h1>Apple???s 2019 iPhones may feature an upgraded Face ID camera</h1>
<p id="date"><time><i>Date posted: 10-Dec-2018</i></time></p>
<img src="images/news2.jpg"><br><br>
<p>A new report from noted Apple analyst Ming-Chi Kuo suggested that Apple???s 2019 iPhone offerings will come with an upgraded Face ID camera system. The report also suggests that Apple might introduce another range-sensing system with a Time of Flight 3D camera in its 2019 or 2020 iPads (potentially with the 2020 iPhones. This type of sensor measures the time in which a light dot travels between the camera and subject, and could be used to capture 3D images. The system could potentially be used for augmented reality experiences or to improve the quality of images or 3D images, which Kuo notes could then be ???edited by an Apple Pencil on an iPad.??? Introduced last year with the iPhone X, Face ID uses more than 30,000 infrared dots to map your face. At the time, we noted that while the system works great in the dark, it was a bit more inconsistent under mixed or brighter lighting conditions.<br> Having a system that helps cut through additional light noise should make the system better for users ??? important, because the system certainly isn???t going away anytime soon.</p><hr id="microsoft">
<h1 >Windows 10 is also getting an icon design overhaul</h1>
<p id="date"><time><i>Date posted: 02-Dec-2018</i></time></p>
<img src="images/news3.jpg">
<figcaption>Microsoft appears to be planning on overhauling its Windows 10 icons alongside its Office suite.</figcaption><br>
<p>A new report from noted Apple analyst Ming-Chi Kuo suggested that Apple???s 2019 iPhone offerings will come with an upgraded Face ID camera system. The report also suggests that Apple might introduce another range-sensing system with a Time of Flight 3D camera in its 2019 or 2020 iPads (potentially with the 2020 iPhones. This type of sensor measures the time in which a light dot travels between the camera and subject, and could be used to capture 3D images.<br> The system could potentially be used for augmented reality experiences or to improve the quality of images or 3D images, which Kuo notes could then be ???edited by an Apple Pencil on an iPad.??? Introduced last year with the iPhone X, Face ID uses more than 30,000 infrared dots to map your face. At the time, we noted that while the system works great in the dark, it was a bit more inconsistent under mixed or brighter lighting conditions. Having a system that helps cut through additional light noise should make the system better for users ??? important, because the system certainly isn???t going away anytime soon.</p><hr>
<h1>Google Photos for iOS adds portrait depth editing</h1>
<p id="date"><time><i>Date posted: 01-Dec-2018</i></time></p>
<img src="images/news4.jpg">
<figcaption>And Color Pop will give your images more punch</figcaption><br>
<p>In early October, Google rolled out a depth-editing feature for Google Photos on Android, allowing users to adjust the bokeh intensity of their portrait photos. A month later, that same feature has now come to the iOS version. For any portrait images you???ve taken, you can adjust the blur and also tap to change the focus area of those shots.<br>Google seems to be doing its own processing when you move the depth slider around; the results are noticeably different ??? in some cases, better ??? than what I get with Apple???s Photos app. There are several other camera and photo editing apps that can utilize the depth data from the iPhone to increase or decrease bokeh. Tapping an area of the photo to change the focus didn???t make a huge difference in my short time testing that feature. Dialing back the blur basically does the same thing.</p><hr>
<h1>The famous iPhone's ringtone is called Marimba</h1>
<p id="date"><time><i>Date posted: 01-Dec-2018</i></time></p>
<img src="images/news7.jpg">
<br><br>
<p>Ringtones are that sound which makes it obvious and easy for one  to find out whose phone is ringing when placed a bit away from you. We see that now-a-days everybody loves to personalize their cell phones with custom ringtones, and when things come for iPhone . Well it???s  a fact that Apple  doesn???t make it obvious about  how to do so ??? it???s not as simple as assigning one of your songs as your iPhone ringtone..In 2005, the most popular ringtone in the world was an obscure 1902 guitar riff, the classic Nokia ring tone. Millions of cell phones, up to 1.8 billion times per day, echoed the monophonic and polyphonic version as the default ring tone. Although adequate as a call alert, it was far from ideal, and Steve had a particular dislike for the ringtone. When Apple began the development of what became the iPhone, it was clear that they would use high fidelity audio files and not simple low quality beeps and MIDI ring tones for a lot of reasons. There were cell phones that could play audio files as ringtones, but the process was cumbersome and fraught with challenges. In 2005, the ringtone business was a billion dollar industry with the cell companies as the primary gatekeepers. In the early years, ringtones could cost up to $5 per tone. But the ringtone business was never a focus of Apple when creating the iPhone. They had far more lucrative revenue models in the works.</p><br>
<p>Listen to this ringtone here below.</p>
<audio controls>
  <source src="videos/audio.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<p>Listen to iPhone's X newest ringtone.</p>
<audio controls>
  <source src="videos/audio1.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
<hr>
  <form method="get" action="news2.php#continue">
    <button type="submit" id="continuebutton">Continue reading..</button>
</form>
  </div>
    <div class="middle" align="right" >
 <a href="#top">
  <img src="images/top.png" alt="top" title="Go to the top"></a>
</div>
<footer>
                <div class="footerdiv"> 
                    <p>Copyright ?? 2019 5gArena - All Rights Reserved</p>
                    <p style="float: right;">Made by AK, AZ &amp; FM</p>
                </div>
            </footer>

</body>

</html> 