<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>



## About The Project (SQUARE-1 Test)

This is a Coding Exercise solution written by - [Olajide Eniseyin](https://www.linkedin.com/in/eniseyin-olabode/)

- Set Database connection
- Ensure to add this to your env file
  ```javascript 
  BLOG_POST_FETCH_URL=https://sq1-api-test.herokuapp.com/posts
  ```
- Run 
  - ```bash
    composer install
    ```
 Create and setup Database connection
  - ```bash
    php artisan migrate:fresh --seed

  - ```bash
    php artisan key:generate
    
  - ```bash
    npm installl
  
- For feature Test
  - ```bash
    php artisan test
    ```
  
- On deployment, A cron job is needed to handle the auto fetching of the blog posts from the other platform, this can be done in two ways
    
  Creating a cron job [Laravel Scheduler](https://laravel.com/docs/8.x/scheduling#running-the-scheduler) 
  - ```bash
    crontab -e
    ```
  Adding the line below to the cronjob
  ```bash
    * * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&
  ```

  Or run the command below in a local environment
  ```bash
    php artisan schedule:work
  ```

  Cheers!
