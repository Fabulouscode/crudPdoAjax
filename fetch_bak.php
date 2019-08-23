<?php
require_once("connection.php");
$database = new connection();
$db = $database->open();

try{
    $sql = 'SELECT * FROM members';
    $id = 1;
    foreach($db->query($sql)->$rows){?>
  <tr>
  <td><?php echo $id?></td>

  <td><?php echo $rows['firstname'] ?></td>
  <td><?php echo $rows['lastname'] ?></td>
  <td><?php echo $rows['address'] ?></td>
  <td><?php echo $rows['email'] ?></td>
  <td>
  <button class="btn btn-success btn-sm edit"  data-id="<?php echo $rows['id'] ?>"><span class="glyphicon glyphicon-edit">Edit</button>
  <utton class=" btn btn-danger btn-sm delete" data-id="<?php echo $rows['id'] ?>"><span class="glyphicon glyphicon-trash">Delete</button>
  </td>
  </tr>
<?php
    }

}catch(PDOException $e){
    echo = 'you some problems'. $e->Message();

}
$database->close();

?>