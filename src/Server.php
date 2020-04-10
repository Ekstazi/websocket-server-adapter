<?php

namespace ekstazi\websocket\server;

use Amp\Promise;

interface Server
{
    /**
     * Add handler to specified route.
     * @param string $path
     * @param Handler $handler
     * @return void
     */
    public function addRoute(string $path, Handler $handler): void;

    /**
     * Run main event loop and subscribes to SIGINT/SIGTERM signal.
     */
    public function run(): void;

    /**
     * Stop the server.
     * @return Promise
     */
    public function stop(): Promise;
}
