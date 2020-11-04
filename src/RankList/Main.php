<?php

namespace RankList;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\utils\Config;
use jojoe77777\FormAPI\SimpleForm;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
        if(!$this->getDescription()->getAuthors() === "DhamarGMNG"){ 
    Server::getInstance()->getPluginManager()->disablePlugin($this);
    $this->getLogger()->warning("Lu Ubah Author Yaa!, No!");
        }
    }
    
    public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args): bool{
        switch($cmd->getName()){
            case "ranklist":
                if($sender instanceof Player){
                    $this->RankList($sender);
                    return true;
                }else{
                    $sender->sendMessage("Use this cmd in Game!");
                }
            break;
        }
        return true;
    }
    
    public function RankList($sender){ 
        $form = new SimpleForm(function (Player $sender, int $data = null) {
            $result = $data;
            if($result === null){
                return true;
            }             
            switch($result){
                case 0:
                    $this->Rank1($sender);
                break;
                case 1:
                    $this->Rank2($sender);
                break;
                case 2:
                    $this->Rank3($sender);
                break;
                case 3:
                    $this->Rank4($sender);
                break;
                case 4:
                    $this->Rank5($sender);
                break;
                case 5:
                    $sender->sendMessage("§cCancelled");
                break;

                }
            });
            $form->setTitle($this->getConfig()->get("RANKLIST"));
            $form->setContent($this->getConfig()->get("Content"));
            $form->addButton($this->getConfig()->get("RANK1-BUTTON"));
            $form->addButton($this->getConfig()->get("RANK2-BUTTON"));
            $form->addButton($this->getConfig()->get("RANK3-BUTTON"));
            $form->addButton($this->getConfig()->get("RANK4-BUTTON"));
            $form->addButton($this->getConfig()->get("RANK5-BUTTON"));
            $form->addButton($this->getConfig()->get("BACK"));
            $form->sendToPlayer($sender);
            return $form;
    }
    
    public function Rank1($sender){ 
        $form = new SimpleForm(function (Player $sender, int $data = null) {
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                    $this->RankList($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("RANK1-TITLE"));
        $form->setContent($this->getConfig()->get("FITUR-RANK1"));
        $form->addButton($this->getConfig()->get("RANK1-BACK"));
        $form->sendToPlayer($sender);
        return $form;
    }
    
    public function Rank2($sender){ 
        $form = new SimpleForm(function (Player $sender, int $data = null) {
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                    $this->RankList($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("RANK2-TITLE"));
        $form->setContent($this->getConfig()->get("FITUR-RANK2"));
        $form->addButton($this->getConfig()->get("RANK2-BACK"));
        $form->sendToPlayer($sender);
        return $form;
    }
    
    public function Rank3($sender){ 
        $form = new SimpleForm(function (Player $sender, int $data = null) {
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                    $this->RankList($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("RANK3-TITLE"));
        $form->setContent($this->getConfig()->get("FITUR-RANK3"));
        $form->addButton($this->getConfig()->get("RANK3-BACK"));
        $form->sendToPlayer($sender);
        return $form;
    }
    
    public function Rank4($sender){ 
        $form = new SimpleForm(function (Player $sender, int $data = null) {
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                    $this->RankList($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("RANK4-TITLE"));
        $form->setContent($this->getConfig()->get("FITUR-RANK4"));
        $form->addButton($this->getConfig()->get("RANK4-BACK"));
        $form->sendToPlayer($sender);
        return $form;
    }
    
    public function Rank5($sender){ 
        $form = new SimpleForm(function (Player $sender, int $data = null) {
            $result = $data;
            if($result === null){
                return true;
            }
            switch($result){
                case 0:
                    $this->RankList($sender);
                break;
            }
        });
        $form->setTitle($this->getConfig()->get("RANK5-TITLE"));
        $form->setContent($this->getConfig()->get("FITUR-RANK5"));
        $form->addButton($this->getConfig()->get("RANK5-BACK"));
        $form->sendToPlayer($sender);
        return $form;
    }
}