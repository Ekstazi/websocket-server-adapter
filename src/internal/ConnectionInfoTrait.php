<?php

namespace ekstazi\websocket\server\internal;

use ekstazi\websocket\server\ConnectionInfo;

/**
 * @internal
 * Trait ConnectionInfoTrait used for ConnectionInfo decorating
 * @package ekstazi\websocket\server\internal
 */
trait ConnectionInfoTrait
{
    /**
     * @var ConnectionInfo
     */
    private $connectionInfo;

    public function getArgs(): array
    {
        return $this->connectionInfo->getArgs();
    }

    public function getRemoteAddress(): string
    {
        return $this->connectionInfo->getRemoteAddress();
    }

    public function getId(): string
    {
        return $this->connectionInfo->getId();
    }
}
