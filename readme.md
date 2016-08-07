# WillChat

WillChat 是一套简单的微信管理系统。

默认为多用户多公众号模式，注册后同一用户可添加、管理多个公众号。

目前项目仍在开发和完善中……

## 特别提示

项目中使用了免费开源的主题 AdminLTE,而项目早期使用的 Metronic 已经弃用，因为 Metronic 是一款商业模板，将它使用在开源项目中并不合适。这部分相关的代码将作为一个分支 metronic 存在，但该分支将不会继续更新。有兴趣的人可以自行购买 Metronic 授权后继续完善。同时该分支可能会在不久之后删除。

## 环境要求

- 正确配置了 Apache 或 Nginx 服务器。

- 安装 PHP5.5.9或以上版本（推荐5.6.x或7.x版本），启用 cUrl、mcrypt扩展。

- PHP 安装 fileinfo 扩展 （素材管理相关部分会用到）

- 安装 composer

- MySQL 或 MariaDB，并设置默认存储引擎为 InnoDB

- GD 或 Imagick 扩展

- gulp 及 bower （非必须。主要用于在开发和发布过程中安装前端资源包，压缩/合并css和js文件等）

## 安装

1. 克隆代码到自己想要的安装目录

2. 配置 Apache 或 Nginx 虚拟主机

3. 安装依赖包

    ```shell
    composer install -vvv
    ```

4. 复制根目录下 .env.example 文件为 .env

5. 生成 APP_KEY

    ```shell
    php artisan key:generate
    ```

6. 创建数据库（请将数据库字符集设置为 utf8mb4 以便存储可能出现的 emoji 表情），然后在 .env 文件中配置数据库、邮件等相关参数

7. 生成数据表

    ```shell
    php artisan migrate
    ```

## 演示地址

**[http://www.willchat.wang](http://www.willchat.wang)**

**该网站目前仅用于功能演示，请勿用于实际公众号运营活动。**

## 使用

访问 http://项目域名/user 进入登录、注册页面，自行注册用户后登录即可。

各功能模块详细使用说明将后期完善……

## 贡献代码

欢迎有识、有志之士参与本项目，发挥您的聪明才智，贡献优雅的代码。

**编写代码请务必遵守  PSR 规范。**

同时也欢迎在 GitHub 上提出 Issue， 我将尽量及时作出处理或答复。

## 致谢

特别感谢超哥 [安正超 @overtrue](https://github.com/overtrue) 的 [EasyWeChat](https://github.com/overtrue/wechat) 微信SDK 为本项目开发带来的便利，以及其 Viease 开源项目给我的参考与启示。

同时感谢在开发过程中给予帮助的众多热心人士！

## License

本项目遵循 MIT 开源协议。