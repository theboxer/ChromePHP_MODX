<?php
require_once dirname(__FILE__) . '/chromephp.php';
/**
 * The base class for ChromePHP.
 *
 * @package chromephp
 */
class ChromePHP_MODX {
    /** @var \modX $modx */
    public $modx;

    function __construct(modX &$modx,array $config = array()) {
        $this->modx =& $modx;
    }

    public function log(){
        $args = func_get_args();
        foreach($args as &$arg){
            if ($arg instanceof xPDOObject) {
                $arg = $arg->toArray();
            }
        }
        call_user_func_array('ChromePhp::log', $args);
    }

    public function warn(){
        $args = func_get_args();
        foreach($args as &$arg){
            if ($arg instanceof xPDOObject) {
                $arg = $arg->toArray();
            }
        }
        call_user_func_array('ChromePhp::warn', $args);
    }

    public function error(){
        $args = func_get_args();
        foreach($args as &$arg){
            if ($arg instanceof xPDOObject) {
                $arg = $arg->toArray();
            }
        }
        call_user_func_array('ChromePhp::error', $args);
    }

    public function group(){
        $args = func_get_args();
        foreach($args as &$arg){
            if ($arg instanceof xPDOObject) {
                $arg = $arg->toArray();
            }
        }
        call_user_func_array('ChromePhp::group', $args);
    }

    public function groupCollapsed(){
        $args = func_get_args();
        foreach($args as &$arg){
            if ($arg instanceof xPDOObject) {
                $arg = $arg->toArray();
            }
        }
        call_user_func_array('ChromePhp::groupCollapsed', $args);
    }

    public function groupEnd(){
        $args = func_get_args();
        foreach($args as &$arg){
            if ($arg instanceof xPDOObject) {
                $arg = $arg->toArray();
            }
        }
        call_user_func_array('ChromePhp::groupEnd', $args);
    }

    public function info(){
        $args = func_get_args();
        foreach($args as &$arg){
            if ($arg instanceof xPDOObject) {
                $arg = $arg->toArray();
            }
        }
        call_user_func_array('ChromePhp::info', $args);
    }

}