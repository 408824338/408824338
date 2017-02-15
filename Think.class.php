<?php

namespace Think;
/**
 * ThinkPHP 引导类
 */
class Think {
	    static public function start() {

			  spl_autoload_register('Think\Think::autoload');      
			echo "yes<br />";
			  Storage::connect();
		}

   /**
     * 类库自动加载
     * @param string $class 对象类名
     * @return void
     */
    public static function autoload($class) {
	    $path       =  LIB_PATH;
		 $filename       =   $path . str_replace('\\', '/', $class) . EXT;
		 if(is_file($filename)) {
              if (false === strpos(str_replace('/', '\\', realpath($filename)), $class . EXT)){
                  return ;
              }
              include $filename;
          }
	
	}
}