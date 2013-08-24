#RestFull-Yii v0.1

Yii v1.1.14 (Released on 11th Aug 2013) source with Yii RESTful URL Manager extension. 
Make sure you are enabled the mod_rewrite module in your web server because I made the changes in the code for removing index.php from the url.
######Upcomming version contain restFull api with nosql database (MongoDB).
##usage:
####Connect Database
```php
'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		)
```
####Add controller in config(main.php)
```php
return array(
    'urlManager'=>array(
        'class' => 'ext.yii-restful.Likai.YiiRestful.RestfulManager',
        'urlFormat' => 'path',
        'resources' => arary(
            'topics',
        ),
    ),
);
```
####RestfulManager will generate 5 url rules and bind to the controller, like the following
```php
`GET` http://yourdomain/sites          => SitesController::actionIndex
`GET` http://yourdomain/sites/{id}     => SitesController::actionShow
`POST` http://yourdomain/sites         => SitesController::actionCreate
`PUT` http://yourdomain/sites/{id}     => SitesController::actionUpdate
`DELETE` http://yourdomain/sites/{id}  => SitesController::actionDelete
```
####Specified parameters
```php
'resources' => arary(
    'topics',
    array('posts', 'only' => array('index', 'create')), // just bind Posts::index, Posts::create action
    array('users', 'except' => array('delete', 'update'), // except Posts::delete, Posts::update action
),
```
######Courtesy
http://www.yiiframework.com/extension/yii-restful/
