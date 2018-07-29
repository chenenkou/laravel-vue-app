# laravel-vue-app
laravel5.2-vue2.x-示例app

## 安装
1.克隆代码
```
git clone https://github.com/chenenkou/laravel-vue-app.git
```
复制重命名 `.env.example` 为 `.env` 到当前目录

2.安装代码
```
cd laravel-vue-app
composer install
php artisan key:generate
npm install
npm run production
```
3.代码提示
```
php artisan clear-compiled
php artisan ide-helper:generate
php artisan optimize
```
4.启动测试服务
```
php artisan serve
```