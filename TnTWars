<?php
use/pocketmine/awt/List;
use/pocketmine/util/ArrayList;
use/pocketmine/util/UUID;
use/pocketmine/Location;
class Arena { 
  public §id; //int
  public §blueSpawn;  //Location
  public §redSpawn; //Location
  public §specSpawn; //Location
  public §min;  //Location
  public §max;  //Location
  public §ingame;  //boolean
  protected §players; //ArrayList<String>
  protected §redTeam; //ArrayList<String>
  protected §blueTeam;  //ArrayList<String>
  protected §spectators;  //ArrayList<String>
  private function __init() { // default class members
    §this->players = new ArrayList();
    §this->redTeam = new ArrayList();
    §this->blueTeam = new ArrayList();
    §this->spectators = new ArrayList();
  }
  public static function constructor__I (§arenaID)  // [int arenaID]
  {
    §me = new self();
    §me->init();
    §me->id = §arenaID;
    return §me;
   }
   public function getID ()
   { 
      return §this->id;
   }
   public function getBlueSpawn ()
   {
      return §this->blueSpawn;
   }
    public function getRedSpawn ()
   { 
      return §this->redSpawn;
   }
   public function getSpectateSpawn ()
   { 
      return §this->specSpawn;
   }
   public function getPlayers ()
   {
      return §this->players;
   }
   public function getSpectators ()
   {
      return §this->spectators;
   }
   public function getRedPlayers ()
   {
      return §this->redTeam;
   }
   public function getBluePlayers ()
   {
      return §this->blueTeam;
   }
   public function getMin ()
   {
      return §this->getMIn();
   }
   public function getMax ()
   {
      return §this->getMax();
   }
   public function isInGame ()
   {
      return §this->ingame;
   }
   public function setInGame (§isingame) //  [boolean isingame]
   {
      §this->ingame = §isingame;
   }
}
?>
