<?php declare(strict_types=1);

namespace Brunty\PhpunitViciousMockery;

class Insults
{
    private const INSULT_LIST = [
        'class YourCode implements Incompetence',
        'Is your code a bad sitcom? Nobody\'s laughing and it\'s full of errors.',
        'Well that was a train wreck in slow motion.',
    ];

    public static function randomInsult(): string
    {
        return self::INSULT_LIST[array_rand(self::INSULT_LIST)];
    }
}
