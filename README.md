Yii2 Callback Module
====================
Yii2 Callback Module

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ignatenkovnikita/yii2-callback "*"
```

or add

```
"ignatenkovnikita/yii2-callback": "*"
```

to the require section of your `composer.json` file.

Migrations apply
```
./console/yii --migrationPath=vendor/ignatenkovnikita/yii2-callback/migrations/
```

Usage
-----

Add to backend config
```
'modules' => [
        'callback' => [
            'class' => 'ignatenkovnikita\callback\Callback'
        ],
]
```


Add `CreateAction` to frontend controller for callback url and disable for action csrf
```
public $enableCsrfValidation = false;

    public function actions()
    {
        return [
            'create' => [
                'class' => 'ignatenkovnikita\callback\actions\CreateAction'
            ]
        ];
    }
```