# websocket-server-adapter
Websocket server is set of interfaces that provide webaocket server for amphp
# Installation
This package can be installed as a Composer dependency.

`composer require ekstazi/websocket-server-adapter`
# Requirements
PHP 7.2+
# Interfaces
 Interfaces provided
 ## `interface ServerFactory`
 ### Methods
 #### `create(Amp\Socket\Server $socket, LoggerInterface $logger = null): Server`
 Return server class instance
 ## `interface Server`
 ### Methods
 #### `public function addRoute(string $path, Handler $handler): void;`
Add handler to specified route.
 #### `public function run(): void;`
Run main event loop and subscribes to SIGINT/SIGTERM signal.
 #### `public function stop(): Promise`
 Stop the server and finish event loop
## `interface Handler`
### Methods
#### `public function onHandshake(ConnectionInfo $connectionInfo): Promise;`
Called after handshake negotiated but before websocket upgrade. You can validate your connections here
#### `public function handle(Connection $connection): Promise;`
This method called after upgrade is finished.
#### `public function getSubProtocols(): array;`
List of subprotocols supported. If client doesn't support one of it then connection not started
## `interface ConnectionInfo`
### Methods
#### `public function getId(): string;`
Get id of connection
#### `public function getArgs(): array;`
Get args passed to connection
#### `public function getRemoteAddress(): string;`
Get remote address of client
## `interface Connection extends ConnectionInterface, ConnectionInfo`
For more details see [`ekstazi/websocket-common`](https://github.com/ekstazi/websocket-common)
