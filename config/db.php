<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=cms',
    'username' => 'postgres',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    'schemaCache' => 'cache',

    'schemaMap' => [

        'pgsql' =>[

            'class' => 'yii\db\pgsql\Schema' ,
           // 'defaultschema' => 'public'

        ],



        ],
];
