

<form class="ui form" method="get" action="reservation.php">
  <h3 class="ui dividing header">Filters</h3>

  <div class="field">
     <input type="hidden" id="hotel_id" name="hotel_id" value="<?php echo $_GET['hotel_id']  ?>">
  </div> 
    
  <div class="field">
    <label>Type</label>
    <select class="ui fluid dropdown" name="type">
        <option value='0'>Select Room Type</option>  
        <?php  
           outputFilterOptions($type, 'typeID', 'name');
        ?>
    </select>
  </div>   
  <div class="field">
    <label>In</label>
      
    <input type="date" name="checkin" max="<?php date("Y-m-d")  ?>" value="<?php date("Y-m-d")  ?>">  
        
  </div>
    
    <div class="field">
    <label>Out</label>
    <input type="date" name="checkout" max="<?php date("Y-m-d")  ?>" value="<?php date("Y-m-d")  ?>"> 
        
  </div>  
    
  <button class="small ui orange button" type="submit">
    <i class="filter icon"></i> Filter 
  </button>    

</form>