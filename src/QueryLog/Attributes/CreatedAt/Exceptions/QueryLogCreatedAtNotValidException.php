<?php

namespace Railken\LaraOre\QueryLog\Attributes\CreatedAt\Exceptions;

use Railken\LaraOre\QueryLog\Exceptions\QueryLogAttributeException;

class QueryLogCreatedAtNotValidException extends QueryLogAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'created_at';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'QUERYLOG_CREATED_AT_NOT_VALID';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is not valid';
}
