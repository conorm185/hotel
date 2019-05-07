<div class="ui top attached tabular menu ">
    <a class="active item" data-tab="details"><i class="image icon"></i>Details</a>
    <a class="item" data-tab="museum"><i class="university icon"></i>Museum</a>
    <a class="item" data-tab="genres"><i class="theme icon"></i>Genres</a>
    <a class="item" data-tab="subjects"><i class="cube icon"></i>Subjects</a>    
</div>
                
<div class="ui bottom attached active tab segment" data-tab="details">
  <table class="ui definition very basic collapsing celled table">
    <tbody>
      <tr>
        <td>Artist</td>
        <td><?php echo 'here1'; ?></td>                       
      </tr>
      <tr>                       
        <td>Year</td>
        <td><?php echo  'here1'; ?></td>
      </tr>       
      <tr>
        <td>Medium</td>
        <td><?php echo  'here1'; ?></td>
      </tr>  
      <tr>
        <td>Dimensions</td>
        <td><?php echo  'here1'; ?></td>
      </tr>        
    </tbody>
  </table>
</div>

<div class="ui bottom attached tab segment" data-tab="museum">
    <table class="ui definition very basic collapsing celled table">
      <tbody>
        <tr>
          <td>Museum</td>
          <td>
            <?php echo 'here2'; ?>
          </td>
        </tr>       
        <tr>
          <td>Accession #</td>
          <td>
            <?php echo  'here2'; ?>
          </td>
        </tr>  
        <tr>
          <td>Copyright</td>
          <td>
            <?php echo  'here2'; ?>
          </td>
        </tr>       
        <tr>
          <td>URL</td>
          <td>
            <?php echo 'here2'; ?>
          </td>
        </tr>        
      </tbody>
    </table>    
</div>   

<div class="ui bottom attached tab segment" data-tab="genres">
    <ul class="ui list">
      <?php /*foreach ($genres as $gen) { ?>
        <li class="item">
          <?php echo generateLink('single-genre.php?id='. $gen['GenreID'], $gen['GenreName']); ?>
        </li>
      <?php } */?>
    </ul>
</div>  

<div class="ui bottom attached tab segment" data-tab="subjects">
    <ul class="ui list">
          <?php /*foreach ($subjects as $sub) { ?>
            <li class="item">
              <?php echo generateLink('single-subject.php?id='. $sub['SubjectID'], $sub['SubjectName']); ?>
            </li>
          <?php }*/ ?>
    </ul>
</div>  