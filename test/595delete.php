<?php
//删除COOKIE数据
setcookie('username','admin',time()-1);
setcookie('password','123456',time()-1);
//删除COOKIE:设置COOKIE的值为false或者空字符串
setcookie('username',false);
setcookie('password',"");
