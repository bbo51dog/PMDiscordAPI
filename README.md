# PM-DiscordAPI
このリポジトリは、PMMPからDiscordへwebhookを利用してメッセージを送信するAPIプラグインです。

## 使い方
まず、pluginsディレクトリにプラグインを入れます

メッセージを送信したいクラスに
```php
use bboyyu51\pmdiscord\Sender;
use bboyyu51\pmdiscord\structure\Content;
```
のuse文を追加します。

Webhookクラスのインスタンスを作成します。(例として$webhookを使用します)
```php
$webhook = Sender::create("https://discordapp.com/api/webhooks/000000/xxxxxx");
```
URLはご自身がDiscordで取得したwebhook用のURLに置き換えてください。

Content(テキスト)を追加します
```php
$content = new Content();
$content->setText("Message");
$webhook->add($content);
```

最後に送信です
```php
Sender::send($webhook);
```

AsyncTask(非同期Task)で送信したい場合は以下のようにします
```php
Sender::sendAsync($webhook);
```

## 注意等
* このプラグインは開発を助けるAPIプラグインであり、導入するだけでは何も機能しません
* このプラグインはMITlicenseによって配布されています

## 連絡先
[GitHub](https://github.com/bboyyu51)
[Twitter](https://twitter.com/bbo_potato)