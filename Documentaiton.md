Backend : Laravel
Frontend : Blade template
Database : MySQL

Clone repository and follow below steps.

# 1. Configure Your Environment

Copy the .env.example file to create a .env file.
Open the .env file and set up your database configuration:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_user
    DB_PASSWORD=your_database_password

# 2. Install Dependencies

Install all the necessary dependencies by running:

`bash` : composer install

# 3. Set up the Database

**Run Migrations**: Migrate your database to create tables defined in your migration files:

`bash` : php artisan migrate

**Seed the Database (optional)**: If you have seeders defined, you can populate the database with initial data:

`bash` : php artisan db:seed

# 4. Run the Laravel Server

Start the Laravel server using the following command:

`bash` : php artisan serve

**_You can check my results on '/search' route._**

Backend Setup: I designed the search API endpoint using Laravel, ensuring it could efficiently query the database based on keywords or filters. The database was indexed on key columns to speed up query performance.

Frontend Integration: Using blade template, I created a search bar component that captures user input. I implemented debounce functionality to delay the search execution until the user stops typing, reducing the number of API calls.

API Communication: The frontend sends asynchronous requests to the backend search API.
Results Display: The search results are dynamically rendered in a table format using Bootstrap, ensuring they are visually organized and accessible.

Performance Considerations:

Debouncing: Reduced unnecessary API calls by debouncing the search input.
Query Optimization: Indexed database columns to optimize search query performance.
Lazy Loading: Implemented lazy loading for results, fetching more data only when necessary.

## Thank you for your consideration.

## Best Regard

## Leonel
