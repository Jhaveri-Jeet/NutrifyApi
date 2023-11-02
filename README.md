# Nutrify App - Nutrition Tracker for Athletes

Welcome to the Nutrify App, a powerful nutrition tracking application designed specifically for athletes. This README provides an overview of the application's database structure and how to get started with using the Nutrify App.

## Database Structure

The Nutrify App utilizes a relational database with the following tables:

### Users
- **Id**: User identifier
- **Post**: User role (Athlete, Coach, MainAdmin)
- **Name**: User's name
- **Password**: User's password

### Athlete
- **Id**: Athlete identifier
- **Name**: Athlete's name
- **Gender**: Athlete's gender
- **Age**: Athlete's age
- **Height**: Athlete's height
- **Weight**: Athlete's weight
- **DietId**: Default diet plan (nullable)
- **CoachId**: Coach assigned to the athlete
- **SportsId**: Sport associated with the athlete
- **DietPlanStartDate**: Start date of the athlete's diet plan
- **Status**: Plan status

### Coach
- **Id**: Coach identifier
- **Name**: Coach's name
- **Gender**: Coach's gender
- **Age**: Coach's age
- **SportsId**: Sport specialization

### Sports
- **Id**: Sport identifier
- **Name**: Sport name

### Diet
- **Id**: Diet identifier
- **Name**: Diet name
- **MinimumHeight**: Minimum required height for the diet
- **MinimumWeight**: Minimum required weight for the diet
- **Gender**: Suitable gender for the diet
- **Age**: Suitable age for the diet
- **DietType**: Diet type (Veg/Non-Veg)
- **Description**: Diet description
- **SportId**: Sport associated with the diet

### DietPlan
- **Id**: Diet plan identifier
- **Name**: Diet plan name
- **Description**: Diet plan description
- **RecipeId**: Associated recipe
- **DietId**: Associated diet
- **MealTime**: Meal time

### Recipe
- **Id**: Recipe identifier
- **MealName**: Name of the meal
- **Description**: Meal description

### Nutrition
- **Id**: Nutrition identifier
- **Name**: Nutrition name
- **Description**: Nutrition description
- **DietPlanId**: Associated diet plan

## Getting Started

To get started with the Nutrify App, follow these steps:

1. **Database Setup**: Set up the database and tables based on the provided schema. You can find the SQL scripts in the `database` directory.

2. **API Integration**: Integrate the Nutrify API into your application to start tracking and managing nutrition data for athletes.

3. **User Roles**: Utilize the `Users` table to assign roles (Athlete, Coach, MainAdmin) to users.

4. **Athlete-Centric Nutrition**: Configure athlete profiles, diet plans, and coaching information for precise nutrition tracking.

5. **Recipes and Nutrition Data**: Populate the `Recipe` and `Nutrition` tables with data to assist athletes in their nutritional journey.

6. **Documentation**: For detailed information on API endpoints and database usage, consult the API documentation located in the `docs` directory.

We hope you find the Nutrify App database structure and API helpful for managing nutrition data for athletes and coaches. Best of luck with your nutritional journey!