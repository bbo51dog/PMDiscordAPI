<?php

/**
 * _     _                             ____  _ 
 *| |__ | |__   ___  _   _ _   _ _   _| ___|/ |
 *| '_ \| '_ \ / _ \| | | | | | | | | |___ \| |
 *| |_) | |_) | (_) | |_| | |_| | |_| |___) | |
 *|_.__/|_.__/ \___/ \__, |\__, |\__,_|____/|_|
 *                   |___/ |___/
 * PM-DiscordAPI Sample Plugin
 * 
 * @license https://opensource.org/licenses/mit-license.html MIT License
 * @see https://github.com/bboyyu51/PM-DiscordAPI
 * @author bboyyu51 <bbo51@icloud.com>
 * @copyright 2019 bboyyu51
 */

namespace sample;

use pocketmine\plugin\PluginBase;
use bboyyu51\pmdiscord\Sender;
use bboyyu51\pmdiscord\structure\Content;
use bboyyu51\pmdiscord\structure\Embed;
use bboyyu51\pmdiscord\structure\Embeds;

class Main extends PluginBase{
    public function onEnable(){
        $webhook = Sender::create("https://discordapp.com/api/webhooks/00000/xxxxx");
        $content = new Content();
        $content->setText("Server Opened");
        $webhook->add($content);
        $embed = new Embed();
        $embed->setTitle("title");
        $embed->setDesc("description");
        $embed->addField("name","value");
        $embed->setAuthorName("auhor");
        $embeds = new Embeds();
        $embeds->add($embed);
        $webhook->add($embeds);
        $webhook->setCustomName("other name");
        Sender::sendAsync($webhook);
    }
    
    public function onDisable(){
        $webhook = Sender::create("https://discordapp.com/api/webhooks/00000/xxxxx");
        $content = new Content();
        $content->setText("Server Closed");
        $webhook->add($content);
        Sender::send($webhook);
    }
}