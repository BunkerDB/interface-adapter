<?php
declare(strict_types=1);


namespace Cratia\ORM\DBAL\Adapter\Interfaces;

use Doctrine\Common\EventManager;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Psr\Log\LoggerInterface;


/**
 * Interface IAdapter
 * @package Cratia\ORM\DBAL\Adapter\Interfaces
 */
interface IAdapter
{
    /**
     * Adapter constructor.
     * @param array $params
     * @param LoggerInterface|null $logger
     * @param EventManager|null $eventManager
     * @throws DBALException
     */
    public function __construct(array $params, ?LoggerInterface $logger = null, ?EventManager $eventManager = null);

    /**
     * @return Connection
     */
    public function getConnection(): Connection;

    /**
     * @param LoggerInterface $logger
     * @return IAdapter
     */
    public function setLogger(LoggerInterface $logger): IAdapter;

    /**
     * @return LoggerInterface|null
     */
    public function getLogger(): ?LoggerInterface;

    /**
     * @param EventManager $eventManager
     * @return IAdapter
     */
    public function setEventManager(EventManager $eventManager): IAdapter;

    /**
     * @return EventManager|null
     */
    public function getEventManager(): ?EventManager;

    /**
     * @param string $sentence
     * @param array $params
     * @param array $types
     * @return mixed[]
     * @throws DBALException
     */
    public function query(string $sentence, array $params = [], array $types = []): array;

    /**
     * @param string $sentence
     * @param array $params
     * @param array $types
     * @return int
     * @throws DBALException
     */
    public function nonQuery(string $sentence, array $params = [], array $types = []): int;

    /**
     * @return string
     */
    public function lastInsertId(): string;
}