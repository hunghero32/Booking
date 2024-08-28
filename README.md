<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Dự Án Booking

Dự án này là một hệ thống đặt chỗ được xây dựng bằng Laravel và Bootstrap. Nó cho phép người dùng thực hiện các giao dịch đặt chỗ, quản lý thông tin đặt chỗ, và theo dõi lịch sử giao dịch.

## Tính Năng

- **Đăng ký và Đăng nhập**: Người dùng có thể tạo tài khoản và đăng nhập để sử dụng hệ thống.
- **Quản lý Đặt chỗ**: Người dùng có thể tạo, xem, sửa, và xóa đặt chỗ.
- **Xem Lịch sử Đặt chỗ**: Theo dõi các đặt chỗ đã thực hiện.
- **Quản lý Người dùng**: Quản lý thông tin người dùng và quyền truy cập.
- **Giao diện Responsive**: Giao diện được thiết kế để hoạt động tốt trên các thiết bị di động và máy tính để bàn.

## Cài Đặt

1. **Clone Repository**

    ```bash
    git clone https://github.com/hunghero32/Booking.git
    cd Booking
    ```

2. **Cài đặt các Phụ thuộc**

    ```bash
    composer install
    npm install
    ```

3. **Tạo File `.env`**

    ```bash
    cp .env.example .env
    ```

4. **Cấu hình Cơ sở dữ liệu**

    Chỉnh sửa file `.env` để cấu hình thông tin kết nối cơ sở dữ liệu của bạn.

5. **Tạo Khóa Ứng dụng**

    ```bash
    php artisan key:generate
    ```

6. **Chạy Migrations**

    ```bash
    php artisan migrate
    ```

7. **Chạy Ứng dụng**

    ```bash
    php artisan serve
    ```

    Truy cập ứng dụng tại `http://localhost:8000`

## Cấu Trúc Dự Án

- `app/Models`: Chứa các mô hình Eloquent.
- `app/Http/Controllers`: Chứa các controller xử lý logic.
- `resources/views`: Chứa các view được sử dụng trong ứng dụng.
- `database/migrations`: Chứa các file migration để tạo bảng cơ sở dữ liệu.

## Đóng Góp

Nếu bạn muốn đóng góp vào dự án này, vui lòng làm theo các bước sau:

1. Fork repository này.
2. Tạo một nhánh mới (`git checkout -b feature-branch`).
3. Thực hiện các thay đổi và commit (`git commit -am 'Add new feature'`).
4. Đẩy nhánh lên (`git push origin feature-branch`).
5. Tạo một Pull Request.

## Liên Hệ

Nếu bạn có bất kỳ câu hỏi nào, hãy liên hệ với chúng tôi qua email: [hung87800@gmail.com](mailto:hung87800@gmail.com).

## Giấy phép

Dự án này được cấp phép theo [Giấy phép MIT](LICENSE).

