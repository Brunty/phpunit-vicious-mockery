<?php

declare(strict_types=1);

namespace Brunty\PhpunitViciousMockery;

use PHPUnit\Event\Test\Failed;
use PHPUnit\Event\Test\FailedSubscriber;
use PHPUnit\Event\TestRunner\Finished;
use PHPUnit\Event\TestRunner\FinishedSubscriber;
use PHPUnit\Runner\Extension\Extension as PHPUnitExtension;
use PHPUnit\Runner\Extension\Facade;
use PHPUnit\Runner\Extension\ParameterCollection;
use PHPUnit\TextUI\Configuration\Configuration;

/** @psalm-suppress UnusedClass */
class Extension implements PHPUnitExtension
{
    public function bootstrap(Configuration $configuration, Facade $facade, ParameterCollection $parameters): void
    {
        $testSuiteFailures = new TestSuiteStatus();

        $failedSubscriber = new class ($testSuiteFailures) implements FailedSubscriber {
            public function __construct(public TestSuiteStatus $testSuiteFailures)
            {
            }

            public function notify(Failed $event): void
            {
                $this->testSuiteFailures->hasFailed = true;
            }
        };

        $facade->registerSubscriber($failedSubscriber);
        $facade->registerSubscriber(new class ($testSuiteFailures) implements FinishedSubscriber {
            public function __construct(public TestSuiteStatus $testSuiteFailures)
            {
            }

            public function notify(Finished $event): void
            {
                if ($this->testSuiteFailures->hasFailed) {
                    echo PHP_EOL . PHP_EOL . 'Vicious Mockery!' . PHP_EOL;
                    echo Insults::randomInsult() . PHP_EOL;
                }
            }
        });
    }
}
