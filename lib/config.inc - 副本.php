<?php
define('DOMAINTYPE','off');
define('CH','exam_');
define('CDO','');
define('CP','/');
define('CRT',180);
define('CS','xn9dylsl012002');
define('HE','utf-8');
define('PN',10);
define('TIME',time());
if(dirname($_SERVER['SCRIPT_NAME']))
define('WP','http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER['SCRIPT_NAME']));
else
define('WP','http://'.$_SERVER['SERVER_NAME'].'/');

define('DB','kaoshi');//MYSQL数据库名
define('DH','5923bf9d7bf07.gz.cdb.myqcloud.com:15916');//MYSQL主机名，不用改
define('DU','cdb_outerroot');//MYSQL数据库用户名
define('DP','102098hchab!@#$%');//MYSQL数据库用户密码
define('DTH','x2_');//系统表前缀，不用改

?>