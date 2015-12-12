#########################################################################################
#																						#
# 						As of Sunday, November 15, 2006									#
#																						#
#########################################################################################

layouts/main.php
- Is the main view, could be considered a welcome page, since it is the base of the website
- Inside the head tag base_url() serves up bootstrap css, js, and custom js and css stylesheets
- Also, the user login is loaded using php and the home_view is passed from the controller to the view

login_view.php
- Stored some basic form attributes using bootstrap in a variable named attributes, and passed the variable to form_open
- I created 2 labels for password and username and stored the information in an array and passed it to form_input for username, and for password passed data variable to form_password.
- Also created a submit button, stored the information in a data array and passed the array to form_submit

Controllers
Controller/users.php
-  First the performs form validation by setting some rules with set_rules()
-  If the user inputted something incorrectly, the errors are stored in a variable called data
-  Flashdata is used to display the data array errors to the login_view.php, and the user is redirect to the home page
-  If no errors are found on the form username and password and stored into variables and passed to the login_user();
-  login user method takes the password and username and finds a user_id that matches.  If the user_id variable is true
-  If the user_id variable is true set the session data and display a flashdata message of login_success
- 

