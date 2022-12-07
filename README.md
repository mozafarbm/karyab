# یک وب سایت فارسی ساده مبتنی بر لاراول

این یک وب سایت ساده برای کاریابی است
نسخه ی شروع این پروژه از https://github.com/bradtraversy/laragigs
برداشته شده است. 
![Alt text](/public/images/screen.png "LaraGigs")

## نحوه ی استفاده
ابتدا دستور زیر را اجرا کنید:

```
composer install
```
### Database Setup
اگر می خواهید از پایگاه داده ی دیگری به جزء MySql استفاده کنید باید فایل 
  config/Database.php را تغییر دهید. 
برای استفاده از MySqL باید بعد از نصب آن فایل .env.example را تغییر دهید. ایتدا اسم این فایل را به .env تغییر دهید. سپس اسم پایگاه داده، رمز عبور  و اسم کاربری را وارد کنید. 


### Migrations
برای ایچاد migration ها از دستور زیر استفاده کنید:

```
php artisan migrate
```

### مقدار دهی اولیه به پایگاه داده
بعد از اجرای دستور زیر یک کاربر و 5 فرصت شغلی به جداول پایگاه داده اضافه می شوند.
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
