 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<br>
 	<h1>Send Mail</h1>
    <form action="send" method="post">
    	{{csrf_field()}}
    	To: <input type="text" name="to">
    	Message: <textarea name="message" cols="30" rows="10"></textarea>
    	<input type="submit" value="send">
    </form>

 </body>
 </html>