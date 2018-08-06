<?php

namespace CraftklinikNick;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;

use pocketmine\utils\TextFormat;

class CraftklinikNick extends PluginBase implements Listener {
	
public $list = [];
	
	public function onEnable() {
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info(TextFormat::GREEN . "Plugin loaded!");
	}
	
	public function onDisable() {
		$this->getLogger()->info(TextFormat::RED . "Plugin unloaded!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
			
			case "nick":
				if($sender instanceof Player){
					$this->openMyForm($sender);
					if($sender->hasPermission("nick.use")){
					}
				}
			break;
		}
		return true;
	}
	
	public function openMyForm($player){
		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		$form = $api->createSimpleForm(function (Player $player, int $data = null){
			$result = $data;
			if($result === null){
				return true;
			}
			switch($result){
				case 0:
					$player->sendMessage(TextFormat::RED . "Dein Nickname wurde zu §aProgamer223 §cgeändert!");
					$player->setDisplayName("Progamer223");
					$player->setNameTag("Progamer223");
				break;
				
				case 1:
					$player->sendMessage(TextFormat::RED . "Dein Nickname wurde zu §aJoelplayzZz §cgeändert!");
					$player->setDisplayName("JoelplayzZz");
					$player->setNameTag("JoelplayzZz");
				break;
				
				case 2:
					$player->sendMessage(TextFormat::RED . "Dein Nickname wurde zu §aEndersuchti §cgeändert!");
					$player->setDisplayName("Endersuchti");
					$player->setNameTag("Endersuchti");
				break;
				
				case 3:
					$player->sendMessage(TextFormat::RED . "Dein Nickname wurde zu §aGnomehd1 §cgeändert!");
					$player->setDisplayName("Gnomehd1");
					$player->setNameTag("Gnomehd1");
				break;
				
				case 4:
					$player->sendMessage(TextFormat::RED . "Dein Nickname wurde zu §aHoneywel §cgeändert!");
					$player->setDisplayName("Honeywel");
					$player->setNameTag("Honeywel");
				break;
				
				case 5:
					$player->sendMessage(TextFormat::RED . "Dein Nickname wurde zu §aPama178 §cgeändert!");
					$player->setDisplayName("Pama178");
					$player->setNameTag("Pama178");
				break;
				
				case 6:
					$player->sendMessage(TextFormat::RED . "Dein Nickname wurde zu §aDarkKobra §cgeändert!");
					$player->setDisplayName("DarkKobra");
					$player->setNameTag("DarkKobra");
				break;
				
				case 7:
					$player->sendMessage(TextFormat::RED . "Dein Nickname wurde zu §aSkillShoxx §cgeändert!");
					$player->setDisplayName("SkillShoxx");
					$player->setNameTag("SkillShoxx");
				break;
				
				case 8:
					$player->sendMessage(TextFormat::RED . "Dein Nickname wurde zurückgesetzt!");
					$player->setDisplayName($player->getName());
					$player->setNameTag($player->getName());
				break;
			}
			
			
		});
		$form->setTitle(TextFormat::GREEN . "Nick - Menü");
		$form->setContent(TextFormat::RED . "Wähle einen §aNicknamen!");
		$form->addButton(TextFormat::BLUE . "Progamer223");
		$form->addButton(TextFormat::BLUE . "JoelplayzZz");
		$form->addButton(TextFormat::BLUE . "Endersuchti");
		$form->addButton(TextFormat::BLUE . "Gnomehd1");
		$form->addButton(TextFormat::BLUE . "Honeywel");
		$form->addButton(TextFormat::BLUE . "Pama178");
		$form->addButton(TextFormat::BLUE . "DarkKobra");
		$form->addButton(TextFormat::BLUE . "SkillShoxx");
		$form->addButton(TextFormat::RED . "Nickname zurücksetzen!");
		$form->sendToPlayer($player);
		return $form;
		
	}
}
