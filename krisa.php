<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Howl's Mystical Phonebook</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="krisastyle.css" rel="stylesheet" type="text/css">
</head/
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="logo">
<img src="kl.png" alt>
    </a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#home" class="w3-bar-item w3-button"><i class="fa fa-window-restore"></i>HOME</a>
      <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-info-circle"></i>ABOUT</a>
      
      <a href="phonecontact.php" class="w3-bar-item w3-button"><i class="fa fa-address-card-o"></i> PHONEBOOK</a>
      <a href="logout.php"class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i>LOGOUT</a>
     
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#home" class="w3-bar-item w3-button">HOME</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT DETAILS</a>


    <a href="phonecontact.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> PHONEBOOK</a>
      <a href="logout.php"class="w3-bar-item w3-button"><i class="fas fa-sign-out-alt"></i>LOG OUT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small"><p>Welcome back, <?=$_SESSION['name']?>!</p></span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium"><p>Welcome back, <?=$_SESSION['name']?>!</p></span><br>
    <span class="w3-large">Cursed by a witch, a young woman joins forces with a self-indulgent wizard and his walking castle.<br>Guided by a mystical phonebook, they seek redemption and strive to break the curse. <br> Will they succeed? The phonebook holds their fate.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">More Info</a></p>
  </div> 
 
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">QUOTES FROM THE MOVIE</h3>
  <p class="w3-center w3-large"> </p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
<img src="ow.jpg" alt="Image Description" style="width: 280px; height: 150px;">
      <p>Howl: I feel terrible, like there's a weight on my chest.<br>
Young Sophie: A heart's a heavy burden.</p>
    </div>
    <div class="w3-quarter">
 <img src="R.jpeg" alt="Image Description" style="width: 280px; height: 150px;">
      <p>[after Sofi puts a pan and bacon on Calcifer]<br>
Calcifer: Here's another curse for you - may all your bacon burn.</p>
    </div>
    <div class="w3-quarter">
 <img src="ho.png" alt="Image Description" style="width: 280px; height: 150px;">
    <p>Young Sophie: Let's run! Don't fight them, Howl!<br>
Howl: Sorry, I've had enough of running away, Sophie. Now I've got something I want to protect. It's you.</p>
    </div>
    <div class="w3-quarter">
<img src="ol.jpg" alt="Image Description" style="width: 280px; height: 150px;">
      <p>Old Sophie: When you're old, all you want to do is stare at the scenery. It's so strange. I've never felt so peaceful before.</p>
    </div>
  </div>
</div>


<div class="w3-container" style="background-color: #91ABB4; padding:80px 30px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Synopsis</h3>
      <p>Will Sophie and Howl succeed in breaking the curse that has bound Sophie's true form? Will their shared journey lead to personal growth and a love that transcends appearances? The phonebook becomes a beacon of guidance, leading them toward a destiny filled with magic, self-discovery, and the power of love.</p>
<p><a href="#work" class="w3-button w3-black bold-text"><i class="fa fa-th"></i> Previews</a></p>
 </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="weh.jpg" alt="Buildings" width="700" height="150">
    </div>
  </div>
</div>

<!-- "Statistics" -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">8.2/10</span>
    <br>IMDb Rating
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">14 wins</span>
    <br>Oscars
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">#162</span>
    <br>Top Rated Movie
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">60+</span>
    <br>Screenings Across World
  </div>
</div>

<!-- pekshor Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">Preview/Screeencaps</h3>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="it.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="itt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="ittt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="et.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="ett.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="ettt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="itttt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
    <div class="w3-col l3 m6">
      <img src="etttt.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Critics Consensus</h3>
<p>Exquisitely illustrated by master animator Miyazaki, Howl's Moving Castle will delight children with its fantastical story and touch the hearts and minds of older viewers as well. <br><a href="https://www.rottentomatoes.com/m/howls_moving_castle/reviews?intcmp=rt-what-to-know_read-critics-reviews">Read critic reviews</a></p>
</div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-plus w3-margin-right"></i>Positive</p>
      <div class="w3-grey">
        <div class="w3-container w3-light-green w3-center" style="width:75%">75%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-random w3-margin-right"></i>Mixed</p>
      <div class="w3-grey">
        <div class="w3-container w3-yellow w3-center" style="width:15%">15%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-minus w3-margin-right"></i>Negative</p>
      <div class="w3-grey">
        <div class="w3-container w3-red w3-center" style="width:10%">10%</div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container" style="background-color: #B7BCC0; padding: 30px 16px;" id="contact">
  <h3 class="w3-center">BOOK A MOVIE TICKET</h3>
  <p class="w3-center w3-large">Endless Entertainment, Anytime Anywhere. Send us a message!</p>
  <div style="margin-top:0px">
      <br>
      <div class="w3-container">
  <div class="w3-row">
    <div class="w3-col m6">
    <div class="w3-card w3-padding" style="background-color: #C1CAD0;">
      <p class="w3-left w3-left">Personal Information:</p>
      <br>
  <br>
        <p><i class="fa fa-user-circle-o fa-fw w3-xxlarge w3-margin-right"></i>Name: Khryzza Lyn Linatoc</p>
        <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i>Phone: +63 976 337 1905</p>
        <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"></i>Email: 2020547@ub.edu.ph</p>
      </div>
    </div>
    <div class="w3-col m6">
      <div class="w3-right">
        <form action="https://www.clickthecity.com/movies/tickets/" target="_blank">
          <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name" style="width: 500px;"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email" style="width: 500px;"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Movie" required name="Movie" style="width: 500px;"></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message" style="width: 500px;"></p>
           <button class="w3-button w3-black" type="submit">
            <i class="fa fa-film"></i> BOOK NOW!
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

    <!-- Image of ghibli-->
    <img src="sg.jpg" class="w3-image" style="width:100%; height:30% ;margin-top:28px">
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/khryzzaaa">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    </a>
    <a href="https://instagram.com/khryzzaaa?igshid=OGQ5ZDc2ODk2ZA==">
    <i class="fa fa-instagram w3-hover-opacity"></i>
    </a>
     <a href="https://twitter.com/khryzzaaa">
    <i class="fa fa-twitter w3-hover-opacity"></i>
   </a>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-grey">w3.css</a></p>
</footer>
<script src="kscript.js"></script>
</body>
</html>