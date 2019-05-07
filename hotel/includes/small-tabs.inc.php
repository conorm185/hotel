<div class="ui top attached tabular menu ">
    <a class="active item" data-tab="details"><i class="image icon"></i>Details</a>
    <a class="item" data-tab="museum"><i class="university icon"></i>Location</a>    
</div>
                
<div class="ui bottom attached active tab segment" data-tab="details">
  <table class="ui definition very basic collapsing celled table">
    <tbody>
      <tr>
        <td>Rooms</td>
        <td><?php echo $rooms['COUNT(roomID)']; ?></td>                       
      </tr>
      <tr>                       
        <td>Floors</td>
        <td><?php echo  'yes'; ?></td>
      </tr>       
      <tr>
        <td>Pool</td>
        <td><?php echo  'yes'; ?></td>
      </tr>  
      <tr>
        <td>Gym</td>
        <td><?php echo  'yes'; ?></td>
      </tr>        
    </tbody>
  </table>
</div>

<div class="ui bottom attached tab segment" data-tab="museum">
    <table class="ui definition very basic collapsing celled table">
      <tbody>
        <tr>
          <td>Street</td>
          <td>
            <?php echo $hotels['address']; ?>
          </td>
        </tr>       
        <tr>
          <td>City</td>
          <td>
            <?php echo $hotels['city']; ?>
          </td>
        </tr>  
        <tr>
          <td>State</td>
          <td>
            <?php echo $hotels['state']; ?>
          </td>
        </tr>       
        <tr>
          <td>Zip Code</td>
          <td>
            <?php echo $hotels['zip']; ?>
          </td>
        </tr>        
      </tbody>
    </table>    
</div>   
