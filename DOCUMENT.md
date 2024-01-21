# API开发文档
### 在本框架中，我们提供了以下函数帮助各位开发者开发API，让您的效率事半功倍！
 - - - 
1.   请确保您按照了[README.md](README.md)中的方法引用了指定文件，否则程序将报错。
2.   如果您引用成功了，就可以使用本文档中提供的函数了
 - - - 
#### `sent()`
 - 本函数可以将`JSON字符串`或一个`JSON对象`转换为格式化的`JSON字符串`，两个使用例子如下：

##### 例1：
```php
$Data['title'] = 'PHP API';
$Data['content'] = '本项目适合大部分API站点作为框架，提供了对用户免费/对用户收费两种模式。默认为对用户免费。';
$Object['code'] = 200;
$Object['msg'] = '调用API成功';
$Object['dada'] = $Data;
$Object['time'] = time();
echo sent($Object);
```
输出：
```json
{
    "code": 200,
    "msg": "调用API成功",
    "data": {
        "title": "PHP API",
        "content": "本项目适合大部分API站点作为框架，提供了对用户免费/对用户收费两种模式。默认为对用户免费。"
    },
    "time": 1716182040
}
```
##### 例2：
```php
echo sent('{"code":403,"msg":"无权限调用本API","data":null,"time":'.time().'}');
```
输出：
```json
{
    "code": 403,
    "msg": "无权限调用本API",
    "data": null,
    "time": 1716182040
}
```
#### `refuse()`
 - 本函数可以自定义错误码和提示信息并结束运行脚本
##### 使用格式：
```php
refuse(状态码,提示字符串);
```
 - 其中`状态码`可以为`Number`(数字类型)或`String`(字符串类型)
##### 使用示例：
```php
refuse(500,'服务器内部错误');    //正常执行
echo('你骗谁呢！');    //被终止，无法输出
```
输出：
```json
{
    "code": 500,
    "msg": "服务器内部错误",
    "data": null,
    "time": 1716182040
}
```
#### `allow()`
 - 本函数将把一个自定义提示信息和一个`PHP对象`生成`JSON字符串`并输出，同时返回`true`
##### 使用格式：
```php
allow(提示信息,数据对象);
```
其中提示信息可以使用`tip()`函数(未实现)代替，数据对象必须为`PHP对象`
##### 使用示例：
```php
$Data['title'] = 'PHP API';
$Data['content'] = '本项目适合大部分API站点作为框架，提供了对用户免费/对用户收费两种模式。默认为对用户免费。';

allow('API调用成功',$Data);
```
输出：
```json
{
    "code": 200,
    "msg": "API调用成功",
    "data": {
        "title": "PHP API",
        "content": "本项目适合大部分API站点作为框架，提供了对用户免费/对用户收费两种模式。默认为对用户免费。"
    },
    "time": 1716182040
}
```