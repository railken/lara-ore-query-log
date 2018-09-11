<?php

namespace Railken\LaraOre\QueryLog\Attributes\Sql\Exceptions;

use Railken\LaraOre\QueryLog\Exceptions\QueryLogAttributeException;

class QueryLogSqlNotDefinedException extends QueryLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'sql';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'QUERYLOG_SQL_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}