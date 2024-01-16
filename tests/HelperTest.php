<?php
use PHPUnit\Framework\TestCase;
use Carbon\Carbon;

class HelperTest extends TestCase
{
    public function testWillExpireAt()
    {
        $carbonMock = $this->getMockBuilder(Carbon::class)
            ->setMethods(['parse', 'diffInHours', 'addMinutes', 'addHours', 'subHours', 'format'])
            ->getMock();

        $carbonMock->expects($this->any())
            ->method('parse')
            ->willReturn($carbonMock);

        $carbonMock->expects($this->any())
            ->method('diffInHours')
            ->willReturn(85);

        $carbonMock->expects($this->any())
            ->method('addMinutes')
            ->willReturn($carbonMock);

        $carbonMock->expects($this->any())
            ->method('addHours')
            ->willReturn($carbonMock);

        $carbonMock->expects($this->any())
            ->method('subHours')
            ->willReturn($carbonMock);

        $carbonMock->expects($this->any())
            ->method('format')
            ->willReturn('2024-01-16 12:00:00');

        Carbon::setTestNow($carbonMock);

        // Call the function you want to test
        $result = HelperTest::willExpireAt('2024-01-17 10:00:00', '2024-01-15 10:00:00');

        // Assertions
        $this->assertEquals('2024-01-16 12:00:00', $result);
    }
}
