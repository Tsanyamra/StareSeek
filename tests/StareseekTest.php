<?php
/**
 * Tests for StareSeek
 */

use PHPUnit\Framework\TestCase;
use Stareseek\Stareseek;

class StareseekTest extends TestCase {
    private Stareseek $instance;

    protected function setUp(): void {
        $this->instance = new Stareseek(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Stareseek::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
