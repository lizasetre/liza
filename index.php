<?php
 $json = file_get_contents("https://asetre.herokuapp.com/json.php");

 $data = json_decode($json,true);
 $list = $data['Books'];
?>

<center><h1>5 Best Book to read </h1>

<table border="1px">
  <tr class="head">
    <th>Name</th>
    <th>Author</th>
    <th>Genre</th>
  </tr>
<?php
  foreach($list as $value){
?>
  <tr>
    <td><?php echo $value['BookName'];?></td>
    <td><?php echo $value['Author'];?></td>
    <td><?php echo $value['Genre'];?></td>
  </tr>
<?php
  }
?>
</table>
</center>
