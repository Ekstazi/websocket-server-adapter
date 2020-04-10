<?php

namespace ekstazi\websocket\server;

use Amp\Socket\Server as SocketServer;
use Psr\Log\LoggerInterface;

/**
 * Interface ConnectionFactory.
 * @package ekstazi\websocket\stream
 */
interface ServerFactory
{
    /**
     * Create server that listen to address and use logger to log operations.
     * @param SocketServer $server
     * @param LoggerInterface $logger
     * @return Server
     */
    public function create(SocketServer $server, LoggerInterface $logger = null): Server;
}
