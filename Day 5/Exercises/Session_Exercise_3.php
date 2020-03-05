<?php
/*
    Step 1: 
	    Let's assume you have an online shopping website.
	    Create a form to signin into your beautiful website.

	    It will ask : username, mail adress, phone number, password.

	    You have to make sure every fields are filled.

    Step 2: 
    	Once the user signin you have to do two things :

    		1. Create a file with all the information about your user.
    		You should also save the SESSION ID inside.
    		The file should look like 'template.txt'.

    		2. Create a session and save the username, the mail and preference about products.

	Step 3:
		Create a page 'account.php' that will ask the user preferences about products (use a form).
		It will display a multi-select option.
		Example: hat, shoe, shirt, cap, glasses.... (whatever you're selling)


		When the user send the form, you have to save its informations into the file AND into the session.

    Step 4 (bonus): 
		
		Add a mechanism to retrieve session even if your cookie sessionID is gone.
		For this, you have to let the user logedin. 
		If it is successfully login, look for its session id (in the file) and try to retrieve the previous session.

 */