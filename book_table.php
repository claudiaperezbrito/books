<?php
	include 'database.php';
	$query = "SELECT * FROM books ORDER BY book";
	$books = mysqli_query($conn, $query);
?>
<!--let's establish that the connection above permits us to connect to DATABASE on SERVER which is why the tables name needs to be included-->

<!--below we can finally use the html to "build" the table which is how users will see LAL ENTRIES-->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name=viewport content="width=device-width, initial-scale=1">
  <title>booktablas_allbooks</title>
  <!--NOW we connect the css for page & table, respectively-->
  <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/table.css">
</head>

<body>
<div id="tablecontainer">
<!--still using same header-->
<h1>Around the World Via Your Bookshelf</h1>

<p id="new"><a href="enter_book_record.php">Add a book & possible getaway destination!</a></p>
<!--above we just connect to form for user to add new-->


<!--here is OUR TABLE-->
<table class="pure-table pure-table-bordered">
    <tr>
        <th id="book">Book</th>
        <th id="author">Author</th>
        <th id="setting">Setting</th>
        <th id="adaptation">Adaptation</th>
        <th id="settingtwo">Film/TV Setting</th>
    </tr>

<!--NOW the php code that writes all our entries into table,so user can see ALL BOOKS-->
    <tr>
    <?php while ($row = mysqli_fetch_assoc($books)) :  ?>
      <td><?php echo stripslashes($row['book']); ?></td>
      <td><?php echo $row['author']; ?></td>
      <td><?php echo $row['setting']; ?></td>
      <td><?php echo $row['adaptation']; ?></td>
      <td><?php echo $row['settingtwo']; ?></td>
      </tr>

    <?php endwhile;  ?>

</table> <!--end of the table-->

</div>
</body>
</html>
