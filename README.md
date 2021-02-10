This is a portfolio project.

It is under development. 
The latest functionality may change rapidly depending on my free time. Please check the deployment address for latest overview.

Deployment address: http://ivnfolio.site/

Creator: Ivan Savchenko

Full Name:       IVAN SAVCHENKO 

Contact info: 	

Phone:          +38 (093) 116-53-79 (Viber/Telegram) 

email:          ivankvkharkiv@gmail.com

LinkedIn:       www.linkedin.com/in/ivan-savchenko-5214201a5 



To run project locally:
1. clone repository
2. clone folders from public: https://github.com/IvankvKharkiv/publicfilesforivnfoliosite to yoursitefolder/storage/app/public
3. delete file: "public\index.php" and rename file "public\index_local_env_config.php" to "public\index.php"
4. run composer install
5. Delete yoursitefolder/public/storage folder
6. Create symbolic link instead of it php artisan storage:link
7. Connect app with your DB via .env file 
8. run php artisan migrate
9. run php artisan db:seed
10. in xamp go to http://localhost/yoursitefolder/public/ and it should work perfectly fine!
11. !!!!! important !!!!! Do not use "php artisan serve" because it does not serve video from server in appropriate way.

