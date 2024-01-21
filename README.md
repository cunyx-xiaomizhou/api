# PHP API管理系统
## 本项目适合大部分API站点作为框架，提供了对用户免费/对用户收费两种模式。默认为对用户免费。
<div>
<div align="center">

[![](https://img.shields.io/badge/PHP-API-LightPink)](https://gitee.com/cunyx/api)
[![](https://img.shields.io/badge/Author-粥某人-DeepSkyBlue)](https://gitee.com/cunyx)
<a href='https://gitee.com/cunyx/api/stargazers'><img src='https://gitee.com/cunyx/api/badge/star.svg?theme=dark' alt='star'></img></a>
<a href='https://gitee.com/cunyx/api/members'><img src='https://gitee.com/cunyx/api/badge/fork.svg?theme=dark' alt='fork'></img></a>

</div>
</div>

本项目使用`PHP`和`MySQL`开发，提供了后台管理页面、友链管理、备案号悬挂、API管理于一身的框架

### 安装方法

假如`/www/wwwroot/api`是你的网站根目录
#### 1. 命令行安装
```bash
#使用Git安装
cd /www/wwwroot/
git clone https://gitee.com/cunyx/api.git ./api/
```
```bash
#使用GitHub安装
cd /www/wwwroot/
git clone https://github.com/cunyx-xiaomizhou/api.git ./api/
```
#### 2.手工安装
1.   下载安装包`api-master.zip`并上传至`/www/wwwroot/`
2.   解压压缩包
3.   将目录`api-master`重命名为`api`

### 修改配置文件
1.   复制`/system/default_config`文件夹粘贴至同一目录并重命名为`config`
2.   编辑`/config/database.php`文件，填写你的数据库信息
3.   将项目根目录的`MySQL.sql.gz`上传到你的数据库中
4.   访问`http://你的域名/admin`登录后台
5.   完成配置并开始使用
### API开发注意事项
1.   请在你的API接口第一行添加以下代码：
```php
require($_SERVER['DOCUMENT_ROOT'].'/function/index.php');
```
2.   第二行添加
```php
verify_token($_REQUEST['account'],$_REQUEST['token']);
```
3.   在第三行代码处加入`addUseTimes()`函数，传入该api的id(后台添加接口需要填写)，这样就实现了API累计调用次数的计数了

[点击查看更多开发帮助](DOCUMENT.md)
### 开发人员列表
|昵称|职务|负责主要内容|
|--------|-------|--------------------------------|
|[@最好喝的小米粥](https://gitee.com/cunyx)|后端|大框架构思，数据库结构，关键函数编写|