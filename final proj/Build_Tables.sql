DROP SCHEMA IF EXISTS final_project_cs315;
CREATE SCHEMA final_project_cs315;

DROP TABLE IF EXISTS Student;
CREATE TABLE Student (
       Lname		VARCHAR(15) NOT NULL,
       Fname		VARCHAR(15) NOT NULL,
       JCardNo		VARCHAR(8) PRIMARY KEY,
       JCashBalance		DOUBLE NOT NULL,
       nYear			INTEGER NOT NULL,
       CustomerID		INTEGER NOT NULL,
       nPassword		VARCHAR(15) NOT NULL,
       MealPlan		VARCHAR(15) NOT NULL,
       NumberOfMealSwipes		INTEGER NOT NULL,
       DiningDollarBalance		INTEGER NOT NULL
);

DROP TABLE IF EXISTS DiningHallHours;
CREATE TABLE DiningHallHours (
       DiningHall		VARCHAR(25) NOT NULL,
       nDate		VARCHAR(15) NOT NULL,
       Meal			VARCHAR(15) NOT NULL,
       StartTime		VARCHAR(15) NOT NULL,
       EndTime		VARCHAR(15) NOT NULL,
       MenuID		VARCHAR(15) NOT NULL
);

DROP TABLE IF EXISTS Orders;
CREATE TABLE Orders (
       OrderNo		INTEGER NOT NULL,
       PaymentType		VARCHAR(15) NOT NULL,
       CustomerID			INTEGER NOT NULL,
       OrderStatus		VARCHAR(15) NOT NULL,
       DeliveryPreference		VARCHAR(15) NOT NULL,
       TimeUntilPickUp			INTEGER NOT NULL,
       nDate		VARCHAR(15) NOT NULL,
       Food		VARCHAR(25) NOT NULL,
       MenuID		INTEGER NOT NULL,
       nTime		VARCHAR(15) NOT NULL
);

DROP TABLE IF EXISTS Cashier;
CREATE TABLE Cashier (
       CashierFName		VARCHAR(15) NOT NULL,
       CashierLName		VARCHAR(15) NOT NULL,
       OrdersProcessed			INTEGER NOT NULL,
       CashierID		INTEGER NOT NULL
);

DROP TABLE IF EXISTS Ingredients;
CREATE TABLE Ingredients (
       FoodID		INTEGER NOT NULL,
       Ingredient		VARCHAR(15) NOT NULL
);

DROP TABLE IF EXISTS Menus;
CREATE TABLE Menus (
		MenuID INTEGER NOT NULL,
        Food		VARCHAR(25) NOT NULL,
        FoodID			INTEGER NOT NULL,
        PreparationTime		INTEGER NOT NULL,
        Price		DOUBLE NOT NULL
);

DROP TABLE IF EXISTS IngredientStock;
CREATE TABLE IngredientStock (
		Ingredient		VARCHAR(15) NOT NULL,
        Stock		INTEGER NOT NULL,
        DiningHallID		VARCHAR(15) NOT NULL
);

DROP TABLE IF EXISTS Calendar;
CREATE TABLE Calendar (
		nDate		VARCHAR(15) NOT NULL,
        DayOfWeek		VARCHAR(15) NOT NULL
);

DROP TABLE IF EXISTS DiningHallOptions;
CREATE TABLE DiningHallOptions (
		PickUpOption		BOOLEAN NOT NULL,
		MealSwipe		BOOLEAN NOT NULL,
        DiningHallID		VARCHAR(15) NOT NULL,
        DiningDollar		BOOLEAN NOT NULL
);

DROP TABLE IF EXISTS Staff;
CREATE TABLE Staff (
		StaffID		INTEGER NOT NULL,
		StaffFName		VARCHAR(15) NOT NULL,
		StaffLName		VARCHAR(15) NOT NULL,
        nPassword		VARCHAR(15) NOT NULL,
        Position		VARCHAR(15) NOT NULL
);