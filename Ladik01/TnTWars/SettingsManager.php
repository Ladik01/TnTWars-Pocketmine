<?php
use/pocketmine/io/File;
use/pocketmine/io/IOException;
use/ppocketmine/ChatColor;
use/pocketmineconfiguration/file/FileConfiguration;
use/pocketmineconfiguration/file/YmalConfiguration;
use/pocketmine/plugin/Plugin;
class SettingsManager  {
  protected static $instance;   // SettingManager
  protected $p;   //Plugin
  protected $data;    //FileConfiguration
  protected $dfile;   //File
  public static function __staticinit() { // static class members
    self::$instance =SettingManager::constructor__();
    }
    public static function constructor__()
    {
      $me= new self();
      return $me;
    }
    public static function getInstance ()
    {
      return self::$instance;
    }
    public function setup ($p) // [Plugin p]
    {
      if (!$p->dfile = new File($p->getDataFolder(), “data.yml“);
