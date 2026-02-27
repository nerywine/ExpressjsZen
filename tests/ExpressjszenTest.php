<?php
/**
 * Tests for ExpressjsZen
 */

use PHPUnit\Framework\TestCase;
use Expressjszen\Expressjszen;

class ExpressjszenTest extends TestCase {
    private Expressjszen $instance;

    protected function setUp(): void {
        $this->instance = new Expressjszen(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Expressjszen::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
