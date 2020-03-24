[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://github.com/bbo51dog/PMLineAPI/blob/master/LICENSE)
[![](https://poggit.pmmp.io/shield.state/PMDiscordAPI)](https://poggit.pmmp.io/p/PMDiscordAPI)
<a href="https://poggit.pmmp.io/p/PMDiscordAPI"><img src="https://poggit.pmmp.io/shield.state/PMDiscordAPI"></a>
[![](https://poggit.pmmp.io/shield.api/PMDiscordAPI)](https://poggit.pmmp.io/p/PMDiscordAPI)
<a href="https://poggit.pmmp.io/p/PMDiscordAPI"><img src="https://poggit.pmmp.io/shield.api/PMDiscordAPI"></a>
## Overview
This plugin is API to send messages to Discord by Webhook.

## How to use

First, please import the following classes
```php
use bbo51dog\pmdiscord\Sender;
use bbo51dog\pmdiscord\element\Content;
```

e.g.
add Content(text message)
```php
$webhook = Sender::create("https://discordapp.com/api/webhooks/000000/xxxxxx");
$content = new Content();
$content->setText("Your message here");
$webhook->add($content);
Sender::send($webhook);
```

In addition, you can use the classes under ``\bbo51dog\pmdiscord\element``.

## Contact
[GitHub](https://github.com/bbo51dog)
[Twitter](https://twitter.com/bbo51dog)
