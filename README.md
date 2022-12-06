# یک وب سایت فارسی ساده مبتنی بر لاراول

An app for listing Laravel gigs/jobs. This project is from my YouTube "[Laravel From Scratch 2022](https://www.youtube.com/watch?v=MYyJ4PuL4pY)" course.

![Alt text](/public/images/screen.png "LaraGigs")

## Usage

### Database Setup
This app uses MySQL. To use something different, open up config/Database.php and change the default driver.

To use MySQL, make sure you install it, setup a database and then add your db credentials(database, username and password) to the .env.example file and rename it to .env

### Migrations
برای ایچاد migration ها از دیتور زیر استفاده کنید:

```
php artisan migrate
```

### مقدار دهی اولیه به پایگاه داده
بعد از اجرای دستور زیر یگ کاربر و 5 فرصت شغلی به جداول پایگاه داده اضافه می شوند.
```
php artisan db:seed
```

### بارگذاری فایل
فایلهای بارگزاری شده به لینک "storage/app/public" می روند. به هیمن خاطر یک symlink  ایجاد کنید تا این فایلها برای عموم قابل دیدن باشند. 
```
php artisan storage:link
```

### اجرای برنامه
دستور زیر را اجرا کنید:
```
php artisan serve
```

## License

The LaraGigs app is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
