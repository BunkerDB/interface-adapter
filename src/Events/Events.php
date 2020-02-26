<?php
declare(strict_types=1);


namespace Cratia\ORM\DBAL\Adapter\Events;

/**
 * Class Events
 * @package Cratia\ORM\DBAL\Adapter\Events
 */
final class Events
{
    /**
     * Private constructor. This class cannot be instantiated.
     */
    private function __construct()
    {
    }

    public const ON_ERROR = 'adapterOnError'; // COMMON FOR QUERY AND NON QUERY

    public const ON_AFTER_QUERY = 'adapterOnAfterQuery';
    public const ON_BEFORE_QUERY = 'adapterOnBeforeQuery';

    public const ON_AFTER_NON_QUERY = 'adapterOnAfterNonQuery';
    public const ON_BEFORE_NON_QUERY = 'adapterOnBeforeNonQuery';
}