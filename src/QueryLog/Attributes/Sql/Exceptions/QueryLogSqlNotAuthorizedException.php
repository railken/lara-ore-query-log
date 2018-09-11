<?php

namespace Railken\LaraOre\QueryLog\Attributes\Sql\Exceptions;

use Railken\LaraOre\QueryLog\Exceptions\QueryLogAttributeException;

class QueryLogSqlNotAuthorizedException extends QueryLogAttributeException
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
    protected $code = 'QUERYLOG_SQL_NOT_AUTHTORIZED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = "You're not authorized to interact with %s, missing %s permission";
}