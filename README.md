# Final_project-CS3380



## World Kitchen
---

<!-- TOC -->
- [World Kitchen](#world-kitchen)
   - [Team Members](#team-members)
   - [Description of Application](#description-of-application)
   - [The Schema For the Database (The Table Definitions)](#the-schema-for-the-database-the-table-definitions)
   - [Explanation of Where the App is doing create, read, update, and delete](#explanation-of-where-the-app-is-doing-create-read-update-and-delete)
   - [Entity Relationship Diagram (ERD)](#entity-relationship-diagram-erd)
   - [Video Demonstration of the Application](#video-demonstration-of-the-application)




<!-- /TOC -->

---

### Team Members
---
- *Yuming Cui*
- *WenKai Fang*
- *Yunzhi Tang*



### Description of Application
---

> An easier way to figure out which dish you want best for the next meal

- This is a website for a resturaut. This website couold let customers to view dishes of restraut and let manger of resutraut to add, delete and update dishes. In home page, viewer will be asked to login as manger or view as customer. 

- The customer version can see the menu of food from 5 different types of cuisine with pictures and leave the comment about the dishes.
- The manager version can login to the website, add dishes, delete the dishes and update dishes information. Manager could also add a new type of cuisine.  




### The Schema For the Database (The Table Definitions)
---

1. **China**
```sql
" CREATE TABLE `worldkitchen`.`China` (\rn\" +
" `id` NUMBER NOT NULL, \r\n" +
" `Menu` VARCHAR(35) NOT NULL, \r\n" +
" `Price` NUMBER NOT NULL, \r\n" +
" `Ingredients` VARCHAR (256) NOT NULL, \r\n" +
" `Sauce` VARCHAR (35) NOT NULL, \r\n"+ 
" `PRIMARY KEY (`id`) \r\n" )
```

2. **Italia**
```sql
" CREATE TABLE `worldkitchen`.`Italia` (\rn\" +
" `id` NUMBER NOT NULL, \r\n" +
" `Menu` VARCHAR(35) NOT NULL, \r\n" +
" `Price` NUMBER NOT NULL, \r\n" +
" `Ingredients` VARCHAR (256) NOT NULL, \r\n" +
" `Sauce` VARCHAR (35) NOT NULL, \r\n"+ 
" `PRIMARY KEY (`id`) \r\n" )
```

3. **Japan**
```sql
" CREATE TABLE `worldkitchen`.`Japan` (\rn\" +
" `id` NUMBER NOT NULL, \r\n" +
" `Menu` VARCHAR(35) NOT NULL, \r\n" +
" `Price` NUMBER NOT NULL, \r\n" +
" `Ingredients` VARCHAR (256) NOT NULL, \r\n" +
" `Sauce` VARCHAR (35) NOT NULL, \r\n"+ 
" `PRIMARY KEY (`id`) \r\n" )
```

4. **Thailand**
```sql
" CREATE TABLE `worldkitchen`.`Thailand` (\rn\" +
" `id` NUMBER NOT NULL, \r\n" +
" `Menu` VARCHAR(35) NOT NULL, \r\n" +
" `Price` NUMBER NOT NULL, \r\n" +
" `Ingredients` VARCHAR (256) NOT NULL, \r\n" +
" `Sauce` VARCHAR (35) NOT NULL, \r\n"+ 
" `PRIMARY KEY (`id`) \r\n" )
```

5. **Vietnam**
```sql
" CREATE TABLE `worldkitchen`.`Vietnam` (\rn\" +
" `id` NUMBER NOT NULL, \r\n" +
" `Menu` VARCHAR(35) NOT NULL, \r\n" +
" `Price` NUMBER NOT NULL, \r\n" +
" `Ingredients` VARCHAR (256) NOT NULL, \r\n" +
" `Sauce` VARCHAR (35) NOT NULL, \r\n"+ 
" `PRIMARY KEY (`id`) \r\n" )
```





### Explanation of Where the App is doing create, read, update, insert, delete and drop
---

- **Create** 
   1. Create new type of cuisine, for example "America", "England".  
   -Create a new table by getting table name from input of user. 
   
   This step is creating a new table in our database. 
      
- **Read**
   1. Read `Menu`, `Price`, `Ingredients` by manager from one table.
   2. Read `Menu`, `Price`, `Ingredients` by customer from one table.
   3. Display all dishes from 5 countries by manager. 
   4. Display all dishes from 5 countries by customer.
   -Select table and display it by getting table name from input of user.
   
   This step is using select sql to get result from database and display result
   
- **Insert**

  1.Add a new dish of a type.
  -Create new dish by getting input 'Menu', 'Price', 'Ingredients' and 'Sauce' of user.
  
  This step is inserting new data into a table of database.
  
- **Update**
   1. Change price of a dish in certain type. 
   - Change the price of a dish in a table by getting input new price and dish id from user.
   
   This step is updating 'Price' data for a specific dish id in table of database.
   
 - **Delete**
   1. Delete a dish inside a country table.
   - Delete a dish by getting input dish 'Menu' from user.
   
   This step is delete specific data in a table of database.

 - **Drop**
   1. Drop a type of cuisine in manager version.
   - Drop a table by getting input of table name from user.
   
   This step is dropping a specific table of database.
### Entity Relationship Diagram (ERD)


