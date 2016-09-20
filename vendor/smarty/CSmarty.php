<?php
/**
 * Created by PhpStorm.
 * User: hulj
 * Date: 2016/9/18
 * Time: 15:05
 */
namespace vendor\smarty;
use Yii;
define("BASEPATH",\Yii::$app->basePath);
require_once (BASEPATH."/vendor/smarty/Smarty.class.php");

class CSmarty extends \Smarty {

    function __construct() {
        parent::__construct();

        $this->template_dir = BASEPATH.'/views/tpl';
        $this->compile_dir = BASEPATH.'/views/tpl_c';
        $this->caching = true;
        $this->cache_dir = BASEPATH.'/views/cache';
        $this->left_delimiter  =  '<{';
        $this->right_delimiter =  '}>';
        $this->cache_lifetime = 3600;
    }
    function init() {}
}
?>