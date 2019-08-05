# DiscordWebhook
このリポジトリは、PMMPからDiscordへwebhookを利用してメッセージを送信するライブラリ(のようなもの)です。
こんなもの使わなくても簡単に作れますが、面倒な方は是非お使いください。
好きに使って構いませんが、bboyyu51もしくはびーぼの名前を載せておいてもらえると喜びます！

## 使い方
細かい部分ははSamplePluginを参考にしてください

-------

まず、srcディレクトリ直下にbboyyu51ディレクトリを入れます。

メッセージを送信したいクラスに
```php
use bboyyu51\discord\Sender;
```
のuse文を追加します。

Senderクラスのインスタンスを作成します。(例として$senderを使用します)
```php
$sender = new Sender("https://discordapp.com/api/webhooks/xxxxx/xxxxx");
```
URLはご自身がDiscordで取得したwebhook用のURLに置き換えてください。

最後にメッセージの送信です
```php
$sender->Send("message");
```
messageを送りたいメッセージに置き換えます

AsyncTask(非同期Task)で送信したい場合は以下のようにします
```php
$sender->AsyncSend("message");
```

## 注意等
* これはプラグインを作るためのライブラリであり、プラグインではありません。
* これを使用して何らかの損害やトラブル等が発生しても、bboyyu51は一切の責任を負いません。

## 連絡
[GitHub](https://github.com/bboyyu51)
[Twitter](https://twitter.com/bbo_potato)