Note: To run this program which contains a mail function we need the user(the server) to change the following:
->Go to php folder in xampp and open php.ini
	->search and find mail function and set the following parameters as such(if the lines are commented please remove the comment)
	->https://php.net/smtp
	   SMTP=smtp.gmail.com
	  https://php.net/smtp-port
	  smtp_port=587
	->sendmail_from = rishithreddyaduma@gmail.com
	->sendmail_path= "Insert location of sendmail.exe here"
->Go to sendmail folder and open sendmail.ini
	->change the following
	-> smtp_server=smtp.gmail.com
	->smtp_port=587
	->auth_username=rishithreddyaduma@gmail.com
	->auth_password=mmaqfprdbkaflkhj

Please restart the Xampp servers and run signin.php first

Instead of creating separate files for the project's frontend and backend,we combined the HTML, JavaScript,
 and minimal CSS with PHP files to implement the whole project portion.
->signin.php   : This php file corresponds to where users like administrator,port authorities,shipping companies 
		 gets logged in to their account .If they want to create an account, signup option to direct them 
		 to corresponding signup php page.

->signup.php   : This file adds the shipping companies.

->welcome1.php : This file is where shipping companies gets directed to when they sign-in and here shipping
		 comapanies/Ships can request dock allotment by providing their ship id and date of arrival of ship.
		 Similarly they can request for their dock departure.

->viewships.php: This file is where shipping companies gets directed after clicking viewships in welcome1.php page.
		 In this page, the details of the ships were shown in a table.

->welcome2.php : This file is where administrator gets directed to after signing-in.Here admin can manage port 
		 authorities like adding authorities by filling in username,password and e-mail of port-Authorities,
		 Can see authorities, And Remove authority by giving username of authority. 

->welcome3.php : This file is where port authorities gets directed to after signing-in.Here port authorities 
	         can view the docking and departure requests and view dock availabilty from the button on 
		 navigation bar and assign them dock numbers as per the size of ship.After asssigning the
		 ships whoever requested gets an e-mail regarding dock details or to leave dock, in case of departure.	

->dockdet.php  : This file is where port authorities gets directed to, when they click dockdetails in 
		 navigation bar in welcome3.php page.Here in this page, details of the ships whichever occupied the 
		 docks is shown in a table.

->style.css    : This is the only frontend part which was written as a separate file inorder to be accessed by all the
		 PHP files, eventhough most of the PHP files had their own part of minute css.

Additional to the above functionality each page is being applied by a navigation bar which consists of "HOME" button 
which navigates the users to the sign-in page.And the navigation bar consists of logo of the 'PORT' and 'profile' attribute
to view the user details and a logout button navigating to sign-in page.

'SESSIONS' management has been done so that, any user cannot Jump-over pages from the pagelinks.so, that every user has to go through
some protocols inorder to view specific page.sessions were also used so that the user need not to enter the data which he entered 
previously.

These are the details of the files on which the website runs-on.
Although, the software is very user friendly, these are the guidelines which will be useful to use the software.

