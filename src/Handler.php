<?php

namespace ekstazi\websocket\server;

use Amp\Promise;

interface Handler
{
    /**
     * Called after handshake negotiated but before websocket upgrade.
     * @param ConnectionInfo $connectionInfo
     * @return Promise
     */
    public function onHandshake(ConnectionInfo $connectionInfo): Promise;

    /**
     * This method called after upgrade is finished.
     * @param Connection $connection
     * @return Promise
     */
    public function handle(Connection $connection): Promise;

    /**
     * List of sub protocols supported. The client Must use one of them.
     * @return array
     */
    public function getSubProtocols(): array;
}
