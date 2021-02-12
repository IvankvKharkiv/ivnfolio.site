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
4. delete file: "config\livewire.php" and rename file "config\livewire_local_env_config.php" to "config\livewire.php"
5. run composer install
6. Delete yoursitefolder/public/storage folder
7. Create symbolic link instead of it php artisan storage:link
8. Put your app path into your .env file: APP_URL=http://localhost/YOUR_FOLDER_NAME/public/
9. Connect app with your DB via .env file 
10. run php artisan migrate
11. run php artisan db:seed
12. in xamp go to http://localhost/yoursitefolder/public/ and it should work perfectly fine!
13. !!!!! important !!!!! Do not use "php artisan serve" because it does not serve video from server in appropriate way.

