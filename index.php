<?php
error_reporting(0);
/**
 *  index.php 网站入口
 *
 * @copyright	PHPCMS
 * @lastmodify	2010-6-1
 */
 //网站根目录


define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

include PHPCMS_PATH.'/phpcms/base.php';

pc_base::creat_app();

?>