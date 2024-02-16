<?php

declare(strict_types=1);

namespace Brunty\PhpunitViciousMockery;

class Insults
{
    private const INSULT_LIST = [
        'class YourCode implements Incompetence',
        'Is your code a bad sitcom? Nobody\'s laughing and it\'s full of errors.',
        'Well that was a train wreck in slow motion.',
        'Error: ID10T.',
        'Error: PEBKAC.',
        'Test failures for dummies - Author: You.',
        'The code \'Crash Course\' you took wasn\'t meant to be taken so literally.',
        'Back to the drawing board I guess, time to figure out where you went wrong in life.',
        'Some days you write amazing code. Today is not one of those days',
    ];

    public static function randomInsult(): string
    {
        return self::INSULT_LIST[array_rand(self::INSULT_LIST)];
    }
}
