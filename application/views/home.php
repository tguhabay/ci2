<!DOCTYPE html> 
<html lang="en" class="no-js"> 
<head> 
 
  <title>CMS | Dashboard</title> 
  <meta charset="utf-8">   
  <meta name="descript  ion" content="" /> 
  <meta name="keywords" content="" />   
</head> 
<body> 
  <form method="POST">
    <table border="1">
      <tr>
        <td><?php echo $tgl; ?></td>
        <td><input type="text" name="testing_input"></td>
        <td><input type="submit" value="send"></td>
      </tr>
    </table>
  </form>
  <?php echo $testing_input_lho; ?>

    <table>
      
      <tr bgcolor="#dedede">
        <td>id</td>
        <td>text</td>
        <td>dates</td>
        <td></td>
        <td></td>
      </tr>
      
      <?php foreach($show_table as $st){ ?>
        <tr>  
          <td><?php echo $st['id']; ?></td>
          <td><?php echo $st['text']; ?></td>
          <td><?php echo $st['dates']; ?></td>
          <td>update</td>
          <td>delete</td>
        </tr>
      <?php } ?>
      
    </table>  
</body> 
</html> 
 
