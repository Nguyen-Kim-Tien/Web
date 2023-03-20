## PHP MVC SYSTEM

Using php to create a coffee sale coffee website <br /> <br />
With mvc structure we divide project into many folder: <br />

./bootstrap: contain bootstrap framework. <br />
./font: contain font. <br />
./img: contain img. <br />
./views: contain files to display front-end. <br />
./models: contain php files to deploy back-end. <br />
./controllers: contain php to deploy back-end. <br />
./migrations: update database. <br />
./middlewares: contain middleware. <br />
./core: contain the core classes. <br />

It's a simple php-mvc template version 1.0. We will maintain and develop in future.

## SET UP

### Tải MySQL, MySQL Workbench:

Các bạn tải MySQL và MySQL workbench. Xem hướng dẫn tại https://www.youtube.com/watch?v=BYwb50Xbf8s
Lưu ý: Tạo tài khoản nhớ các thông tin của tài khoản để kết nối các bước tiếp theo

### Khởi động Xampp, start Apache và start MySQL

Mở admin ở MySQL (Trong Xampp), tạo database tên là mycoffee, sau đó import file mycoffee.sql trong thư mục code lên phpmyadmin

### Tạo dotenv

Vào folder project, tạo một file .env (ngang cấp với thư mục public,core,exption,views,...) rồi bỏ vào config sau:

```bash
DB_DSN=mysql:host=localhost;dbname=mycoffee
DB_USER=root
DB_PASSWORD=

Ví dụ:
DB_DSN=mysql:host=localhost;dbname=mycoffee
DB_USER=root
DB_PASSWORD=Nguyenkimtien1
```

trong đó, password của bạn là gì thì điền vào

### Chay migration:

Mở terminal lên rồi lệnh sau:

```bash
php migrations.php
```

Terminal trả về như sau là bạn đã chạy migrate được rồi:

```bash
[2021-10-28 19:10:49] - Applying migration m0001_initial.php
[2021-10-28 19:10:49] - Applyied migration m0001_initial.php
```

Nếu không được như vậy thì hãy drop hết table trong database rồi chạy migrate lại.<br />

Hoặc:<br />
Mở mysql và import file buyme.sql trong thư mục POS-SYSTEM<br />
Hoặc:<br />
Nếu bạn sử dụng POSTGRESQL như một giải pháp thay thế MYSQL thì hãy tạo 1 database rồi sau đó import
file postgreSQL.sql. Vì cú pháp của mysql và postgresql có khác biệt nhau nên ta sẽ sửa lại một ít
trong file /core/database.php.<br />
Nếu bạn dùng postgresql:<br />

```bash
SET client_encoding TO 'UTF8'
```

<br />   
 Nếu bạn dùng mysql:<br />

```bash
SET NAMES utf8
```

## Run project

Để chạy project, chạy lệnh sau(nếu như có php.ini và trong file này có extension=pdo_mysql):

```bash
cd public
php -S localhost:8000
```

Nếu không có thì thực hiện lệnh sau:

```
php -d extension=pdo_mysql -S localhost:8000
```

Mở trình duyệt, chạy localhost:8000

=======
