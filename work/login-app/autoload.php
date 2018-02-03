<?php

class autoLoader
{    
    protected $dirs;

    /**
     * クラスを呼び出すメソッド
     * @param  string $className
     * @return bool
     */
    public function register($className)
    {
        foreach (self::registerDir() as $dir) {
            $fileName = "{$dir}/{$className}.php";
            if (is_file($fileName)) {
                require $fileName;
                return true;
            }
        }
    }

   /**
    * クラス
    * @return array 
    */
   public function registerDir()
   {
        if (empty(self::$dirs)) {
            self::$dirs = array(
                BASE_DIR . '/classes/common',
                BASE_DIR . '/classes/controller',
                BASE_DIR . '/classes/dao',
                BASE_DIR . '/classes/model'
            );
        }
        return self::$dirs;
    }
}
spl_autoload_register(array('autoLoader', 'class'));
