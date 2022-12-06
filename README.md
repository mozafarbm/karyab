# یک وب سایت فارسی ساده مبتنی بر لاراول

در این سایت ساده می توان فرصتهای شغلی را ارسال کرد. 
![Alt text](/public/images/screen.png "LaraGigs")

## نحوه ی استفاده
بعد ازدانلود، ابتدا دستور زیر را صادر کنید تا فایلهایی که توسط گیت نادیده گرفته می شوند به پروژه اضافه شوند.
```
composer install
```
### تنظیمات پایگاه داده
این سایت از MySql استفاده می کند . برای استفاده از دیگر پایگاه داده ها فایل config/Database.php را باز کنید و مقدار پیش فرض آن را تغییر دهید.
برای استفاده از MySql باید ابتدا انرا روی دستگاه خود نصب کنید و تنظمیات مبوطه شامل اسم کاربری، اسم پایگاه داده و رمز عبور را وارد کنید. 

### Migrations
برای ایچاد migration ها از دیتور زیر استفاده کنید:

```
php artisan migrate
```

### Seeding The Database
To add the dummy listings with a single user, run the following
```
php artisan db:seed
```

### File Uploading
When uploading listing files, they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible.
```
php artisan storage:link
```

### Running Then App
Upload the files to your document root, Valet folder or run 
```
php artisan serve
```

## License

The LaraGigs app is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
