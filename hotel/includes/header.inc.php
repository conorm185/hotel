<?php


?>

<header>
    <div class="ui attached stackable grey inverted  menu">
        <div class="ui container">
            <nav class="right menu">
                <?php
                
                if(isset($_SESSION['email']) ){  ?>
                
                <div class="ui simple  dropdown item">
                  <i class="user icon"></i>
                  Account
                    <i class="dropdown icon"></i>
                  <div class="menu">
                    <a class="item" href="profile.php"><i class="edit icon"></i> Edit Profile</a>
                    <a class="item" href="login.php"><i class="globe icon"></i> Choose Language</a>
                    <a class="item" href="settings.php"><i class="settings icon"></i> Account Settings</a>
                    <a class="item" href="logout.php"><i class="sign out icon"></i> Logout</a>
                  </div>
                </div>
                <a class=" item" href="view-reservations.php">
                  <i class="archive icon"></i> Reservation History
                </a>        
                <a class=" item">
                  <i class="shop icon"></i> Cart
                </a>
                
                <?php }else{?>
                
                
                <a class=" item" href="login.php">
                  <i class="sign in icon"></i> Login
                </a> 
                
                <?php } ?>
                
            </nav>            
        </div>     
    </div>   
    
    <div class="ui attached stackable borderless huge menu">
        <div class="ui container">
            <h2 class="header item">
              <img src="images/logo.png" class="ui small image" >
            </h2>  
            <a class="item" href="index.php">
              <i class="home icon"></i> Home
            </a>       
            <a class="item" href="about.php">
              <i class="tag icon"></i> About Us
            </a>      
            <a class="item" href="reservation.php">
              <i class="bookmark icon" ></i> Choose Location
            </a>
			<a class="item" href="contact.php">
              <i class="phone icon"></i> Contact
            </a>       
            <div class="right item">
                <div class="ui mini icon input">
                  <input type="text" placeholder="Search ...">
                  <i class="search icon"></i>
                </div>
            </div>      

        </div>
    </div>   
    
</header>