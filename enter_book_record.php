<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
  <title>books_newbook</title>
</head>
<body>
<div id="entirecontainer">
    <h1>Around the World Via Your Bookshelf</h1>

    <div id="intro"> <!--only wraps around lil intro-->
      <p><em>"Travel is fatal to prejudice, bigotry, and narrow-mindedness."</em> -Mark Twain</p>
      <br>
      <p><b>Discover your next travel destination based on a book.</b></p>
    </div>

<p class="middle" id="all"><a href="book_table.php">View all books</a></p> <!--links to table pg for user to see-->

<div id="books"> <!--FORM enclosing div=BOOKS-->

<form id="bookform" method="post" autocomplete="off"> <!--form BEGINS here & is aided by the js at bottom (when buttons clicked it then prompted to work)-->

<!--question 1 -->
    <label for="book">1. Type in a title of a book.</label>
    <input type="text" name="book" id="book" maxlength="70" required>
    <br>
<!--question 2 -->
    <label for="author">2. Who wrote the book?</label>
    <input type="text" name="author" id="author" maxlength="70" required>
    <br>

<!--question 3 -->
    <label for="setting">3. What is the setting of the book? <em>(i.e. London, England or Kingdom of Westeros)</em></label>
    <input type="text" name="setting" id="setting" maxlength="70" required>
    <br>
<!--question 4 -->
<!--question with options dropdown-->
    <label for="adaptation">4. Was the book adapted into a television show, special or motion picture?</label>
      <select name="adaptation" id="adaptation" required>
        <option value="">Choose an option</option>
        <option value="film">film</option>
        <option value="television">television</option>
        <option value="not yet">not yet</option>
      </select>
      <br>
<!--question5 -->
    <label for="settingtwo">5. If adapted into a film or television show, where was the adaptation filmed? <em>(i.e. Westeros from GOT is filmed in Croatia, Iceland and Spain)</em> Otherwise leave blank.</label>
	   <input type="text" name="settingtwo" id="settingtwo" maxlength="70">


    <input type="submit" id="submit" value="Submit">
  </form><!--form ENDS here-->

</div> <!--#BOOKS div that encloses FORM-->

     <div id="response">
         <p class="announce">Thanks for submitting a book/destination!</p>
         <p class="middle"><a href="enter_book_record.php">Submit another one!</a></p><!--this connects form again for user to add new entry-->
     </div> <!--end of the response-->
</div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"> </script>
     <script src="js/enter.js"></script>
     </body>
     </html>
