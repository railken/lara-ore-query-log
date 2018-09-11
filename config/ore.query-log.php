<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table Name
    |--------------------------------------------------------------------------
    |
    | This is the table name used while interacting with the database
    |
    */
    'table' => 'ore_query_log',

    /*
    |--------------------------------------------------------------------------
    | Class Entity
    |--------------------------------------------------------------------------
    |
    | The class of the model used by the manager.
    | Change this if you have to add more relations or custom logic.
    | The attribute $fillable is already updated by the config 'attributes'.
    |
    */
    'entity' => Railken\LaraOre\QueryLog\QueryLog::class,

    /*
    |--------------------------------------------------------------------------
    | Class Manager
    |--------------------------------------------------------------------------
    |
    | The class of the manager used to perform all actions by the Controller.
    | Change this if you have to add more complex actions (.e.g. ::create).
    | The attribute $attributes is already updated by the config 'attributes'.
    |
    */
    'manager' => Railken\LaraOre\QueryLog\QueryLogManager::class,

    /*
    |--------------------------------------------------------------------------
    | Class Repository
    |--------------------------------------------------------------------------
    |
    | The class of the repository used to perform all queries.
    | Change this if you have to add more complex queries (e.g. ::findOneBy).
    |
    */
    'repository' => Railken\LaraOre\QueryLog\QueryLogRepository::class,

    /*
    |--------------------------------------------------------------------------
    | Class Serializer
    |--------------------------------------------------------------------------
    |
    | The class of the serializer used to serialize the model.
    | Change this if you have to add more data while serializing.
    | All the attributes of the manager are already included in the serializer.
    |
    */
    'serializer' => Railken\LaraOre\QueryLog\QueryLogSerializer::class,

    /*
    |--------------------------------------------------------------------------
    | Class Validator
    |--------------------------------------------------------------------------
    |
    | The class of the validator used to validate the parameters.
    | Change this if you have to add more complex validation.
    | A validation handled by the single attributes is always preferred to this.
    |
    */
    'validator' => Railken\LaraOre\QueryLog\QueryLogValidator::class,

    /*
    |--------------------------------------------------------------------------
    | Class Authorizer
    |--------------------------------------------------------------------------
    |
    | The class of the authorizer used to authorize the user.
    | Change this if you have to add more complex authorization.
    |
    */
    'authorizer' => Railken\LaraOre\QueryLog\QueryLogAuthorizer::class,

    /*
    |--------------------------------------------------------------------------
    | Extra Attributes
    |--------------------------------------------------------------------------
    |
    | Here you may add all the extra attributes needed.
    | Theese attributes will be added in the Model, Manager and Controller.
    | A new migration is still required to update the database.
    |
    */
    'attributes' => [
    ],

    /*
    |--------------------------------------------------------------------------
    | Http configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure the routes
    |
    */
    'http' => [
        'admin' => [
            'enabled'    => true,
            'controller' => Railken\LaraOre\Http\Controllers\Admin\QueryLogsController::class,
            'router'     => [
                'prefix' => '/query-logs',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Minium excecution time
    |--------------------------------------------------------------------------
    |
    | Time (milliseconds) to reach necessary to flag the query as critical
    |
    */
    'min_time' => 10,

    /*
    |--------------------------------------------------------------------------
    | Minium query for each group
    |--------------------------------------------------------------------------
    |
    | Count of queries necessary to flag the whole group as crticial
    |
    */
    'min_queries' => 30,
];
