# WebTechnologiesPractical
A Github for all Practical Tasks for Web Technologies Group 1 Team 2

# Task Sheet 1:
Task 1 and 2 are in PDF Format 
</br>
The Rest will be in HTML Format

## Sheet 1 Task 1 (General questions)
1.1. Please compare the topologies star, bus, and meshed. What are the main advantages and
drawbacks of those options?
1.2. What are the main differences between a circuit-switching and a packet-switching network?
Please explain by using an appropriate example.
1.3. As you already know, communication on the internet is organized in layers. Please create an
example sketch with four layers that considers the following situation:</br>
• Two companies are interacting with each other by using well-defined protocols.</br>
• The bosses are sending messages via their administrative employees.</br>
• However, before the administration passes the messages to the postal carrier, a lawyer checks,
if compliance rules are considered.</br>
• Compliance checks will also be done before passing a received message to the boss.</br></br>
Note: don’t forget to name the protocols that are used on different layers.

## Sheet 1 Task 2 (Conceptual Model)
In this task you should develop a structural workflow model of your website. Start first by defining a
topic for your web-shop, e.g., clothes, vegetables, electronic etc. It must be possible to find at least
two categories and two sub-categories for each category.
Please use pages as nodes and page changes as edges. Write down the interactions for page changes
at the edges, e.g., “enter login information”, “logout”, “register”, “show a category or product” etc.
You don’t need to consider concrete categories in this task – keep it abstract at this point (e.g., show
category instead of show shoes).
Try to find all important interactions that are relevant for this example and check their correctness. It
should not be possible to result in deadlock situations!

## Sheet 1 Task 3-10 (HTMLs)
### Task 3 (index.html)
This main homepage must contain all starting options to use the website. You will need a small menu
of links containing at least two different categories, the login to the customer area, and a link to the
seller information. The functionality must not be implemented yet, you can just include relative links
to the expected HTML files.
Define at least two different categories that are matching the topic of your website (e.g., shoes) and
two sub-categories for each (e.g., sneaker). Use relative links to category pages (that don’t exist yet!).
Use the following pattern: <categoryName>LIst.html → shoesList.html, sneakerList.html


### Task 4 (login.html)
Implement a view for users’ login. The corresponding form should offer two input options. With the
first input the username should be requested while the second input requests a valid password from
the user. Each field should be displayed in a line with a corresponding label.
In addition, two buttons are necessary. The first button navigates to the registration form
(registration.html) and the second button should send the entered values to the server. The server
may check the input (not in this exercise sheet!).


### Task 5 (registration.html)
If the user is not yet registered, a registration form should be used to create a user account. The form
should offer three input options. With the first entry, the username should be entered, the second
and the third entries, the password and the confirmation of the password should be requested.
Each field should be displayed in a line with the corresponding label. In addition, two buttons are to
be created. The first button should give the option to cancel the input and navigate back to the login
form. The second button allows to send the entered values to the server.
The server may check the input (not in this exercise sheet!).


### Task 6 (logout.html)
If the user is logged out from the users area, a simple view is required for confirmation. This view
shows a message that the user is logged out and gives a link to navigate to the login page (login.html)
or to the main page (index.html). You can also add a figure if you like.

### Task 7 (customer.html)
The personal information of each user is shown in the users area and can be updated. At this stage
only the username is presented and the current password. Both are presented in form fields in order
to allow to change them.
As the functionality is not implemented yet and the user data is not available, please use sample data
to develop this page as an example.

### Task 8 (about.html)
Implement a simple information page for sellers data.

### Task 9 (<categoryName>List.html)
In this task you should implement a sequential list of products from a certain category/subcategory,
e.g., list shoes or list of sneakers. It is up to you how you want to present the product in a list. You can
use a small picture and a short description text, you can use a price etc. It is important that there must
be a link to the products detailed information. When you click on the link, the product page
(<product_id>.html) must be opened.

### Task 10 (<product_id>.html)
In this last task you must implement the pages for the products that you have. Each product must
have an individual page with detailed information. In this task it is sufficient, if you implement a
product’s page for one example product of your web-shop, e.g., sneakerMax203.
It is up to you what kind of information you are aiming to present in this task but you will definitely
need a button to add this product to the shopping cart. The shopping cart itself will be implemented
in later exercise sheets. 

# Task Sheet 2:

## Sheet 2 Task 1 (First style definitions)
• Change the font-family to the one of your choice and the font-size to 12.<br>
• Change paragraphs to justify using text-align to right.<br>
• Change the background-color of table headers to light gray.<br>
• Center the entire content.<br>
• Realize different styles for the links in the document.<br>
• Additionally change the style of the links when the mouse is placed over the link.

## Sheet 2 Task 2 (Forms)
Configure the form fields and change their appearance. Frames and spacing should be changed. A
uniform font-face is also required. The font size is to be adjusted dependent on the usage of the
text, e.g., header, paragraph etc.

## Sheet 2 Task 3 (Freestyle)
Now, you can design your we-shop as you like. Use individual images and develop your own CI
(Corporate Identity). All pages should follow a common style that you implement in the file
“mystyle.css”.

### Table of Contents:
- index.html: The First and Foremost Page visited in a website. This contains all the information a User needs to know on their first visit, such as Registering an Account to the Webshop or Viewing possible products available.
- login.html: A Page Accessible within index.html, containing a total of 2 text fields, one for the Username and one for Password. Pretty Self-explanatory. A Link to the Registration can also be reached for first-time users without their account.
- logout.html: A Simple Page which will be shown after the User selects "LOG OUT" in any page of the website. The next time the User access this website, they must relogin once again through the Home Page.
- registration.html: As mentioned above, the registration page is accessed in the login.html for first-time Users of the webshop. The main difference between the Login Page is that we also ask for further User Information such as their Name, Age, Address, Overall Interests, etc.
- customer.html: A Page which a User can manually and permanently modify their Username and Password
- about.html: An About Page has the information of the Companies and their
