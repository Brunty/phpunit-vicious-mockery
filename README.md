# Vicious Mockery extension for PHPUnit

This project is in no way endorsed or associated with PHPUnit. It is just an extension to lightly insult you when your tests fail.

## Installation

Install via composer:

`composer require brunty/phpunit-vicious-mockery --dev`

Then configure it as a PHPUnit extension in your PHPUnit configuration file:

```xml
<extensions>
    <bootstrap class="Brunty\PhpunitViciousMockery\Extension"/>
</extensions>
```

Now when your tests fail it will produce a random insult for you and your failures:

```
...............................................................  63 / 128 ( 49%)
............................................................... 126 / 128 ( 98%)
F.                                                              128 / 128 (100%)

Vicious Mockery!
class YourCode implements Incompetence
```
