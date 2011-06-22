<?php
    if (isset($query) && count($query) > 0){
    ?>
    <h1>Data User</h1>
    <table width="400" border="1">
    <tr >
     <th>No</th>
     <th>Username</th>
     <th>Fullname</th>
     <th>Edit</th>
     <th>Delete</th>
 </tr>
 <?php
 $i=0;
 foreach ($query as $row){
 $i++;
 echo "<tr class=\"record\">";
 echo    "<td>$i</td>";
 echo    "<td>$row->username</td>";
 echo    "<td>$row->fullname</td>";
 echo    "<td><a href=".base_url()."index.php/user/edit/$row->id>Edit</a></td>";
 echo    "<td><a href=".base_url()."index.php/user/delete/$row->id>Delete</a></td>";
 echo  "</tr>";
 }
 ?>
</table>
<?php
    }
?>