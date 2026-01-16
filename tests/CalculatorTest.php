<?php

use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function test_add_sums_correctly(): void
    {
        $this->assertSame(5, 2 + 3);
        $this->assertSame(0, -2 + 2);
    }

    public function test_is_positive(): void
    {
        $this->assertTrue(10 > 0);
        $this->assertFalse(0 > 0);
        $this->assertFalse(-5 > 0);
    }
}

