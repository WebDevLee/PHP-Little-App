<?php 
//读取网页源码
$homepage=file_get_contents('http://www.bing.com');


//利用正则表达式提取图片地址
//http://s.cn.bing.net/az/hprichbg/rb/Taghit_ZH-CN10846599174_1920x1080.jpg

$ptn="/http:\/\/s\.cn\.bing\.net\/az\/hprichbg\/rb\/\w*-\w*\.jpg/";

preg_match($ptn,$homepage,$arr);
// echo "<pre>";
// print_r ($arr);
// echo "</pre>";

//保存图片至指定文件夹
$pic=file_get_contents($arr[0]);
$f=fopen('C:\Users\lenovo\Pictures\bing.jpg','w');
if(fwrite($f,$pic)){
	echo "<h1>图片下载成功</h1>";
}



//设置该图片为桌面背景
//????????


 ?>
