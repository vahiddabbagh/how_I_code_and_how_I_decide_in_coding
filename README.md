
## About my coding strategy 

When I want to code, I follow these criteria:

- read other relevant codes, to know the standard way of coding in that particular situation. 
- I try to understand and use the coding standard such as clean code principles such as KISS: Keep It Simple Stupid and DRY: Don't Repeat Yourself. 
- Writing explanation of each class and functions.
- try to keep each class and function simple, clean, small and aim to do just one thing. 
- I try to use ready packages and using their API instead of writing it myself. Because, it is simpler, faster, professional, other can understand it, it has documentation which can use later when I return to my code.

## Explaining the code
This file is a controller for user model. This file is based on Laravel framework. In this file, class UserController extends Laravel controller class. In this class and its methods served API request from vuejs dashboard. This class includes: 
-	Index: for fetching users and extra information province, city and role. 
-	Store: creating new user
-	Show: get data of an specific user providing user id.
-	Update: update user data providing user id and extra data.
-	Complexes: Fetch Complex facilities of a specific user which is manager of that facility. 
-	Places: Fetch places (gyms) of a specific user which is manager of that facility.
-	Likes: Fetch all likes of a user’s complexes and places. 
-	Comments: Fetch all comments of a user’s complexes and places.
-	Transactions: Fetch all transactions of a user’s complexes and places.
-	Notifications: Fetch all notifications of a user’s complexes and places.

## Decision process
During writing of this code I follow the instruction of Laravel documentation. I try to write as minimum as possible and keep it very simple. With this I can find and solve error easily or update it later with minimum effort. 


