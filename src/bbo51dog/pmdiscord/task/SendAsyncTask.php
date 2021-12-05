<?php

namespace bbo51dog\pmdiscord\task;

use bbo51dog\pmdiscord\Sender;
use bbo51dog\pmdiscord\connection\Webhook;
use pocketmine\scheduler\AsyncTask;

class SendAsyncTask extends AsyncTask{

    /** @var Webhook */
    private $webhook;

    public function __construct(Webhook $webhook){
        $this->webhook = $webhook;
    }

    public function onRun(): void {
        Sender::send($this->webhook, false);
    }
}