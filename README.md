
# Food PreOrdering Website

**Online Food Menu for AbhiRuchi  Restaurant**

Co-Developer: https://github.com/KudithiDeekshithReddy

<img width="960" alt="new_page1" src="https://user-images.githubusercontent.com/90315399/184577020-cb20ff2c-1b4d-4243-ab22-ea8a12ff6c65.png">

## 1. Introduction

### 1.1. Overview

Food PreOrdering is a Online Food Menu that enables people to see all the food items that are currently available in the restaurant and their respective prices.If he finds the food item that he is seeking for then he can Preorder the food before going to restaurant.

### 1.2. Motivation

There are two main reasons for developing the application:

1.When we go to a restaurant and order some food then the waiter unexpectedly says the food you ordered is not currently available.

2.It sometimes take more time than usual time to get your order.(Waiting time)

This are two bad situations we might face when we go to restaurant.
### 1.3. Problem Definition

So,It would be better if we have a online menu where we can view all food items and respective prices and also supporting one more feature where we can order our food before going to restaurant.

Thats where we developed our project named "PreOrder Food".Which implements the above mentioned solution.

### 2.1. User Classes and Characteristics

* Typical Users, who are looking for Online Menu and PreOrder their Food before going to restaurant.
* Programmers who are interested in working on the project by further developing it or fix existing bugs.

### 2.2. Operating Environment

* Operating System
    1. Windows
    2. Linux
* Application Server
    1. Apache Tomcat v9.0
* Database
    1. MySQL

### 2.3. Design and Implementation Constraints

    - 2.3.1. Frontend
        - The Frontend is implemented using HTML, CSS.
    - 2.3.2. Backend
         - 2.3.2.1. Database
            Database used is MySQL. It is used for storing User Information and Content Information.
        - 2.3.2.2. Server
            Server used is Apache Tomcat v9.0

## 3. Activities
The following list specifies User Activities while using our Application.

- User Registration: In order to use our Application, user must have an Account.
- User Login: To continue using the application, user must Log In.
- If User is customer:
- User Can Search for Food in 3 different ways:
- 1.using Search option:when user is specific about the food item he is seeking for then he can use search option.
- 2.Category section:when user want to view items of some specific category then he can use search option.
- 3.Food section:when user want to view all the food items then he can use search option.
- PreOrder:Customer can preorder food by entering all his details
- If User is Admin
- Add Food:when some food item is newly prepared by restaurant.
- Update Food:when some updation has to be done some specific food item.
- Delete Food:If some food is out of stock then delete food from menu.
- Add Category:when category is newly added by restaurant.
- Order Details:List of all orders can be viewed.
- User Log out: User can log out of the application anytime.
## 4. Dependencies
- HTML 
- CSS
- MYSQL Database
- XAMPP Server

## 5.ER Diagram
----------------------------------------------------
![ER_DIAGRAM (2)](https://user-images.githubusercontent.com/90315399/182010283-21217ebd-7be6-4226-b5d6-c27dd01e2cc3.jpg)

## 6. Results
- 6.1.. Home Page (Before Login)

<img width="960" alt="new_page1" src="https://user-images.githubusercontent.com/90315399/184577020-cb20ff2c-1b4d-4243-ab22-ea8a12ff6c65.png">

- 6.2.. Sign Up

<img width="960" alt="new_signup" src="https://user-images.githubusercontent.com/90315399/184860982-31f3f37b-1458-4e6f-8551-0704e1ad9f12.png">

-6.3..After successful Sign Up

<img width="960" alt="image" src="https://user-images.githubusercontent.com/90315399/184862028-afeb2f50-190d-4b4f-93fe-2911004567a0.png">

-6.4.. Sign in (Customer)

<img width="958" alt="new_login" src="https://user-images.githubusercontent.com/90315399/184859274-4cb1b857-e771-4075-8a4f-0de2d4965a68.png">

### Results of Customer Panel After Successful Login

-6.4.1.. (Home-Page of Customer's)

![c_home_page](https://user-images.githubusercontent.com/90315399/184865326-f700da9b-8acd-40b8-ad61-0de5e353fa2e.png)

-6.4.2.. (Search Results of "Biryani")

![search_result_of_biryani](https://user-images.githubusercontent.com/90315399/184867466-ab876f36-7a32-4d89-91f7-6546c644e52b.png)

-6.4.3.. (List of Categories)

![list_of_categories](https://user-images.githubusercontent.com/90315399/184868356-614b0bc2-9dff-40e1-888f-ba1ec862d27c.png)

-6.4.4.. (List of Juices after choosing Juice Categoory)

![juice_category](https://user-images.githubusercontent.com/90315399/184871726-624f6ad4-a3f5-4a88-bddc-03acb6176f52.png)

-6.4.4.. (Confirm Order)

![order_form](https://user-images.githubusercontent.com/90315399/184872447-bc8238c8-5c1b-48e2-8874-be427812c46b.png)

6.4.5.. (After Ordering Food Successfully)

![successful_order](https://user-images.githubusercontent.com/90315399/184873908-6741652d-70ec-4482-b7e0-ca6547f333c1.png)

6.4.6..(After Logout)

<img width="960" alt="new_page1" src="https://user-images.githubusercontent.com/90315399/184879915-d31a3e40-8408-4ced-b5b4-6d55a67c9f4f.png">

6.5.. (Admin Login)

![admin_login](https://user-images.githubusercontent.com/90315399/184874902-6f18805c-4e7e-4d2c-9504-d6f29dd46197.png)


### Results of Admin Panel After Successful Login

6.5.1.. (Dashboard)

![admin_home_page](https://user-images.githubusercontent.com/90315399/184879548-3b5ade6b-bd14-428d-ad8f-d7dd63eb52ab.png)
6.5.2.0.. (List of Admin's)

![admin](https://user-images.githubusercontent.com/90315399/184881625-1c8f1d9f-20fe-4a24-9001-2bc56bba6fd9.png)
6.5.2.1.. (After choosing Add Admin Button)

![add_admin](https://user-images.githubusercontent.com/90315399/184882328-b8f13b3c-6ab2-42f8-b62a-cba6cfb8ff67.png)
6.5.2.2.. (After choosing Update Admin Button)

![update_admin](https://user-images.githubusercontent.com/90315399/184882784-9806805b-1a8e-4434-8df4-c326b6aab491.png)
6.5.2.3.. (After choosing Change Password Button)

<img width="956" alt="image" src="https://user-images.githubusercontent.com/90315399/184909209-ed7a86a0-42b8-48ca-a689-5d50d8571c8f.png">

6.5.2.4.. (After choosing Delete Admin Button)

![delete](https://user-images.githubusercontent.com/90315399/184909985-e0f44d85-6e74-4506-9ea2-acc289f1c84b.png)

6.5.3.0.. (Category Section)

![category_](https://user-images.githubusercontent.com/90315399/184920981-c67a5ab9-6199-47ea-a412-2e3fa8019ce8.png)

6.5.3.1.. (After choosing Add Category Button)

<img width="960" alt="image" src="https://user-images.githubusercontent.com/90315399/184921761-fca236ae-9ec2-49b7-b6d6-a841cebc9355.png">

6.5.3.2.. (After successful Addition to Category List)

![manage_cat](https://user-images.githubusercontent.com/90315399/184923386-e461b949-f4df-45d9-bbae-71cbac1970bb.png)

6.5.3.3.. (After Deleting Category)

![cat_ddel](https://user-images.githubusercontent.com/90315399/184924151-3f991ed9-0a35-43f8-b1fb-4f8592b41235.png)

6.5.3.4.. (After Choosing Update Category Button)

![update_cat](https://user-images.githubusercontent.com/90315399/184924636-491c3ae8-d23f-40d1-88ef-c98dc84dd27c.png)

6.5.3.5.. (After Succesfull Updation)

![successful_update](https://user-images.githubusercontent.com/90315399/184925458-2d690c1f-13ac-4fd1-982b-b2e92a8e9a77.png)

6.5.4.0.. (Food Section)

![food_home](https://user-images.githubusercontent.com/90315399/184934831-df0e6751-76a7-49a9-8077-f59b175ecb1c.png)


6.5.4.1.. (After choosing Add Food Button)

![add_food2](https://user-images.githubusercontent.com/90315399/184936228-c3c585d9-2d1b-4e74-ad98-325c835d1378.png)


6.5.4.3.. (After Deleting Food)
![delete_food](https://user-images.githubusercontent.com/90315399/184938798-65c4cdcc-7e6e-41c3-8735-944de2003ebf.png)


6.5.4.4.. (After Choosing Update Food Button)
![update_food](https://user-images.githubusercontent.com/90315399/184939072-47684635-38ef-4421-9e3d-f131391b0012.png)


6.5.4.5.. (After Succesfull Food Updation)
![successful_food](https://user-images.githubusercontent.com/90315399/184939717-bbe3cfd3-6afe-4641-bf47-eced619bccf3.png)


6.5.5.0.. (To View List Of Orders)
![order](https://user-images.githubusercontent.com/90315399/184940077-4afc37e3-d517-4c84-97f8-fc1bc1b79f61.png)


6.5.5.1.. (After choosing Update Order Button)
![update_order](https://user-images.githubusercontent.com/90315399/184940221-c7226e32-3bb9-4335-8d05-29e575317e10.png)


6.5.5.2.. (After Successful Updation)
![successful_update_order](https://user-images.githubusercontent.com/90315399/184940448-7d099357-d202-425c-9c17-601b50d39a6e.png)


6.5.6.0.. (Logout from Admin Panel)
<img width="960" alt="new_page1" src="https://user-images.githubusercontent.com/90315399/184940515-b323fe35-ce20-4daf-ba07-c8fd94e1bb65.png">

## 7. Conclusion and Future Work

### 7.1. Conclusion

The project “PreOrdering Food” has been developed as per the requirement specification. The complete functionality has been thoroughly tested, to eliminate bugs and enhance the user experience.

The design, implementation and the output reports are presented in this project report. The entire project was meticulously designed to ensure seamless user experience and easier incorporation of future modules.

### 7.2. Future Work

The goals of this project were purposely kept within what was believed to be attainable within the allotted timeline and resources. As such, many improvements can be made upon this initial design. That being said, it is felt that the design could be replicated to a much larger scale. The following are the features we wish to add in the future:
- Including voice based searching, Which further reduces the  task of manual work
- Add Online Menu for Multiple Restaurants.

## 8. References

- [Stackoverflow](https://stackoverflow.com)
- [W3Schools](https://www.w3schools.com)
- [Geeksforgeeks](https://www.geeksforgeeks.org)
- [freecodecamp](https://www.freecodecamp.org)
- [Tutorialspoint](https://www.tutorialspoint.com)
- [javatpoint](https://www.javatpoint.com)
- [Udemy](https://www.udemy.com)
