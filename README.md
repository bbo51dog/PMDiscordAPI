[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/bbo51dog/PMLineAPI/blob/master/LICENSE)

## Overview
This plugin is API to send messages to Discord by Webhook.

## How to use

First, please import the following classes
```php
use bbo51dog\pmdiscord\connection\Webhook;
use bbo51dog\pmdiscord\element\Content;
```

e.g.
add Content(text message)
```php
$webhook = Webhook::create("https://discordapp.com/api/webhooks/000000/xxxxxx");
$content = new Content();
$content->setText("Your message here");
$webhook->add($content);
$webhook->send();
```

In addition, you can use the classes under ``\bbo51dog\pmdiscord\element``.

## Contact
[GitHub](https://github.com/bbo51dog)
[Twitter](https://twitter.com/bbo51dog)
