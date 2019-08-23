<?php

function connect()
{
  $con = mysqli_connect("localhost", "root", "", "population");
  return $con;
}

function getData($sql)
{
  $con = connect();
  $results = mysqli_query($con, $sql);
  return $results;
}

function saveData($sql)
{
  $con = connect();
  mysqli_query($con, $sql);
}

function deleteData($table, $id)
{
  $con = connect();
  mysqli_query($con, "DELETE FROM $table WHERE id='".$id."'");
}

function showData($sql, $arrFields)
{
  $result = getData($sql);
  while($arrData = mysqli_fetch_assoc($result))
  {
    ?>
    <tbody>
      <tr>
      <?php
      foreach($arrFields as $fieldName)
      {?>
        <td><?=$arrData[$fieldName]?></td>
      <?php
      }?>
        <td><a href="delete.php?id=<?=$arrData["id"]?>">Delete</a></td>
      </tr>
    </tbody>
  </table>
  <?php
  }
}

function showTableHeader($arrFields)
{
  ?>
  <table class="u-full-width">
    <thead>
      <tr>
  <?php
  foreach($arrFields as $fieldName)
  {?>
        <th><?=$fieldName?></th>
    <?php
  }?>
        <th>Delete</th>
      </tr>
    </thead>
  <?php
}?>