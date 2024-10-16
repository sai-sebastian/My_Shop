<html>
   <head>
     <meta charset="utf-8">
     <title> Welcome </title>
   </head>
   <body>
     <p>Enter the name: </p>
     <form action="<?php echo $_SERVER['PHP_SELF'];?>">
       <p><label for="name"> Name : </label>
	<input type="text" name= "name" id= "name"/></p>
       <p><input type="submit" value= "submit"/></p>
     </form>
   </body>
</html>
