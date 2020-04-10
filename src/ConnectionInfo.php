<?php

namespace ekstazi\websocket\server;

interface ConnectionInfo
{
    /**
     * Get id of connection.
     * @return string
     */
    public function getId(): string;

    /**
     * Get args passed to connection.
     * @return array
     */
    public function getArgs(): array;

    /**
     * Get remote address of client.
     * @return string
     */
    public function getRemoteAddress(): string;
}
