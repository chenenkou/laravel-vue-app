# laravel-vue-app
laravel5.1-vue2.0-示例app

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


## 相关配置
1.热加载跨域问题
```
// webpack.mix.js

mix.webpackConfig({
    devServer: {
        headers: {
            "Access-Control-Allow-Origin": "*",
        }
    }
});

```

2.热加载样式文件加载失败
```
// webpack.mix.js

mix.webpackConfig({
    devServer: {
        contentBase: "./public"
    }
});

```

3.ES6-babel配置
```
// package.json

{
  "devDependencies": {
    "babel-core": "^6.22.1",
    "babel-helper-vue-jsx-merge-props": "^2.0.3",
    "babel-loader": "^7.1.1",
    "babel-plugin-syntax-jsx": "^6.18.0",
    "babel-plugin-transform-runtime": "^6.22.0",
    "babel-plugin-transform-vue-jsx": "^3.5.0",
    "babel-preset-env": "^1.3.2",
    "babel-preset-stage-2": "^6.22.0"
  }
}

// .babelrc

{
  "presets": [
    ["env", {
      "modules": false,
      "targets": {
        "browsers": ["> 1%", "last 2 versions", "not ie <= 8"]
      }
    }],
    "stage-2"
  ],
  "plugins": ["transform-vue-jsx", "transform-runtime"]
}

```