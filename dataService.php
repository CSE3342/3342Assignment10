<?php
/**
 * Created by PhpStorm.
 * User: PrestonT
 * Date: 10/18/16
 * Time: 11:46 AM
 */
class Database {
    protected $id;
    protected $key;
    protected $val;

    public function __construct () {
        $valid_keys = array('id','key','val');
        $invalid_keys = array();
        foreach($_GET as $get_param){
            if(!in_array($get_param,$valid_keys)){
                $invalid_keys[] = $get_param;
            }
        }
        if(!empty($invalid_keys)){
            throw new Exception('Invalid keys: ' . implode(', ',$invalid_keys) . '');
        }
        $this->id = !empty($_GET['id']) ? $_GET['id'] : null;
        $this->key = !empty($_GET['key']) ? $_GET['key'] : null;
        $this->val = !empty($_GET['val']) ? $_GET['val'] : null;
    }
}

try{
    $database = new Database();
}catch(Exception $e){
    echo 'Error: ' . $e->getMessage();
}
