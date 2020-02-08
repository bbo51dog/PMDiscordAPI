<?php

namespace sample;

use pocketmine\plugin\PluginBase;
use bbo51dog\pmdiscord\Sender;
use bbo51dog\pmdiscord\element\Content;
use bbo51dog\pmdiscord\element\Embed;
use bbo51dog\pmdiscord\element\Embeds;

class Main extends PluginBase{
    public function onEnable(){
        $webhook = Sender::create("https://discordapp.com/api/webhooks/00000/xxxxx");
        $content = new Content();
        $content->setText("Server Opened");
        $webhook->add($content);
        $embed = new Embed();
        $embed->setTitle("title");
        $embed->setDesc("description");
        $embed->addField("name", "value");
        $embed->setAuthorName("author");
        $embeds = new Embeds();
        $embeds->add($embed);
        $webhook->add($embeds);
        $webhook->setCustomName("other name");
        Sender::send($webhook);
    }
    
    public function onDisable(){
        $webhook = Sender::create("https://discordapp.com/api/webhooks/00000/xxxxx");
        $content = new Content();
        $content->setText("Server Closed");
        $webhook->add($content);
        Sender::send($webhook);
    }
}