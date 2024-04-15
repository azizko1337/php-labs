<?php
require_once 'core/Config.class.php';
$conf = new core\Config();
require_once 'config.php'; //ustaw konfigurację

require_once 'core/ClassLoader.class.php'; //załaduj i stwórz loader klas
$cloader = new core\ClassLoader();
function &getLoader() {
    global $cloader;
    return $cloader;
}

function &getConf(){ global $conf; return $conf; }

$msgs = new core\Messages();
function &getMessages(){ global $msgs; return $msgs; }

$smarty = null;
function &getSmarty(){
    global $smarty;
    if (!isset($smarty)){
        include_once getConf()->root_path.'/lib/smarty/Smarty.class.php';
        $smarty = new Smarty();
        $smarty->assign('conf',getConf());
        $smarty->assign('msgs',getMessages());
        $smarty->setTemplateDir(array(
            'one' => getConf()->root_path.'/app/views',
            'two' => getConf()->root_path.'/app/views/templates'
        ));
    }
    return $smarty;
}

require_once "core/functions.php";

$action = getFromRequest("action");
