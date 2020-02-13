<?php
 $json = file_get_contents("https://liza.herokuapp.com/json.php");

 $data = json_decode($json,true);
 $list = $data['Books'];
?>

<center><h1>5 Best Book to read </h1>

<table border="1px">
  <tr class="head">
    <th>BookName</th>
    <th>Author</th>
    <th>Genre</th>
  </tr>
<?php
  foreach($list as $value){
?>
  <tr>
    <td><?php echo $value['bookname'];?></td>
    <td><?php echo $value['author'];?></td>
    <td><?php echo $value['genre'];?></td>
  </tr>
<?php
  }
?>
</table>
</center>
