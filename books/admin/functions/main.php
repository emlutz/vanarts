<?php
//connect to DB
function connect()
{
  $con = mysqli_connect("192.185.103.168", "emilyswe_books", "booksproject", "emilyswe_books");
  return $con;
}

//get page id
function getPage($pageID)
{
  $con = connect();
  $sql = "SELECT pages.*, templates.strFileLocation FROM pages LEFT JOIN templates ON templates.id=pages.nTemplatesID WHERE pages.id='{$pageID}'";
  $arrPage = mysqli_fetch_assoc(mysqli_query($con, $sql));

  return $arrPage;
}

//get navigation links
function getNavLinks($locationID)
{
  $con = connect();
  $sql = "SELECT * FROM links WHERE nLocationsID = '{$locationID}'";
  $result = mysqli_query($con, $sql);

  while($row = mysqli_fetch_assoc($result))
  {
    {
    echo "<li><a href=\"index.php?id={$row['nPagesID']}\">{$row['strName']}</a></li>";
    }
  }
} 

//get data from DB tables
function getTableData($table)
{
  $con = connect();
  $sql = "SELECT * FROM $table";
  $result = mysqli_query($con, $sql);
  return $result;
}

//show data in a grid
function showDataGrid($table, $whichSnippetFile)
{
  $result = getTableData($table);
  while($row = mysqli_fetch_assoc($result))
  {
    include("snippets/".$whichSnippetFile);
  }
}

//display data from DB
function conDisplay($record, $field)
{
  if (isset($record[$field]))
  { 
    echo $record[$field];
  }
}

//get data from DB
function getRecords($sql)
{
  $con = connect();
  $result = mysqli_query($con, $sql);
  return $result;
}

//insert data to DB
function insertRecords($sql)
{
  $con = connect();
  $result = mysqli_query($con, $sql);
  return $result;
}

//run a sql query
function doSQL($sql)
{
  $con = connect();
  mysqli_query($con, $sql);
}
?>