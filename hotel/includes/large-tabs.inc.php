<section class="ui doubling stackable grid container">
    <div class="sixteen wide column">
    
        <div class="ui top attached tabular menu ">
          <a class="active item" data-tab="first">Description</a>
          <a class="item" data-tab="second">Media Links</a>
          <a class="item" data-tab="third">Reviews</a>
        </div>
        <div class="ui bottom attached active tab segment" data-tab="first">
         <?php echo  "Here at Hotel Armitage, we provide an experience that leaves an impact for years to come. Quality service, high class accomodations, and daily events make it something to behold. If that sounds like an experience, then you've come to the right place."; ?>
        </div>
        <div class="ui bottom attached tab segment" data-tab="second">

<table class="ui definition very basic collapsing celled table">
    <tbody>
      <tr>
        <td>Google Link</td>
        <td>
        <a class="header" href="https://www.google.com/search?q=<?php echo $hotels['name']?>">google.com</a>
        </td>                       
      </tr>                       
      <tr>
         <td>Maps Link</td>
          <td>
            <a class="header" href="https://www.google.com/maps/@<?php echo $hotels['latitude']?>,<?php echo $hotels['longitude']?>,14z">maps.google.com</a>
          </td>                       
      </tr>
     
      <tr>
        <td>Twitter Link</td>
        <td>
          <a class="header" href="https://twitter.com/<?php echo $hotels['name']?>">www.twitter.com</a>
          </td>                       
      </tr>                      
    </tbody>
</table>

        </div>
        <div class="ui bottom attached tab segment" data-tab="third">

          <div class="ui feed">
              
              <?php foreach ($reviews as $rev) { ?>
              
              <div class="event">
                <div class="content">
                    <div class="date"><?php echo $rev["date"]; ?></div>
                    <div class="meta">
                        <a class="like">
                          <?php echo generateReviewStars($rev["rating"]); ?>
                        </a>
                    </div>                    
                    <div class="summary">
                        <?php echo $rev["comment"] ?>       
                    </div>       
                </div>
              </div>
              <div class="ui divider"></div>    
              
              <?php } ?>
              
          </div>                
            
        </div>            
    
    </div>        
</section> 