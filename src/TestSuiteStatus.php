<?php

declare(strict_types=1);

namespace Brunty\PhpunitViciousMockery;

class TestSuiteStatus
{
    public function __construct(public bool $hasFailed = false)
    {
    }
}
