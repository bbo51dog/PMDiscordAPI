<?php

namespace sample;

use pocketmine\plugin\PluginBase;
use bbo51dog\pmdiscord\Sender;
use bbo51dog\pmdiscord\element\Content;
use bbo51dog\pmdiscord\element\Embed;
use bbo51dog\pmdiscord\element\Embeds;

class Main extends PluginBase{
    public function onEnable(){
        $content = new Content();
        $content->setText("Server Opened");
        $embed = (new Embed())
            ->setTitle("title")
            ->setDesc("description")
            ->addField("name", "value")
            ->setAuthorName("author");
        $embeds = new Embeds();
        $embeds->add($embed);
        $webhook = Sender::create("https://discordapp.com/api/webhooks/00000/xxxxx")
            ->add($content)
            ->add($embeds)
            ->setCustomName("other name");
        Sender::send($webhook);
    }
    
    public function onDisable(){
        $content = new Content();
        $content->setText("Server Closed");
        $webhook = Sender::create("https://discordapp.com/api/webhooks/00000/xxxxx")->add($content);
        Sender::send($webhook);
    }
}