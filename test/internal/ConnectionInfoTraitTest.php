<?php

namespace ekstazi\websocket\server\test\internal;

use ekstazi\websocket\server\ConnectionInfo;
use ekstazi\websocket\server\internal\ConnectionInfoTrait;
use PHPUnit\Framework\TestCase;

class ConnectionInfoTraitTest extends TestCase
{

    private function mockTrait(ConnectionInfo $connectionInfo)
    {
        return new class($connectionInfo) implements ConnectionInfo {
            use ConnectionInfoTrait;

            public function __construct(ConnectionInfo $connectionInfo)
            {
                $this->connectionInfo = $connectionInfo;
            }
        };
    }

    public function testGetRemoteAddress()
    {
        $info = $this->createMock(ConnectionInfo::class);
        $info->expects(self::once())
            ->method('getRemoteAddress')
            ->willReturn('127.0.0.1');

        $trait = $this->mockTrait($info);
        self::assertEquals('127.0.0.1', $trait->getRemoteAddress());
    }

    public function testGetArgs()
    {
        $args = ['t' => 'ee'];

        $info = $this->createMock(ConnectionInfo::class);
        $info->expects(self::once())
            ->method('getArgs')
            ->willReturn($args);

        $trait = $this->mockTrait($info);
        self::assertEquals($args, $trait->getArgs());
    }

    public function testGetId()
    {
        $info = $this->createMock(ConnectionInfo::class);
        $info->expects(self::once())
            ->method('getId')
            ->willReturn('123');

        $trait = $this->mockTrait($info);
        self::assertEquals('123', $trait->getId());
    }
}
