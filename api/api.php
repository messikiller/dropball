<?php
//move_time 小球运动的时间
$m_time = $_GET['move_time'];
//drop_height 小球坠落的初始高度
$drop_height = $_GET['drop_height'];
//从开始坠落到碰到地面需要的时间
$per_time = sqrt(2*$drop_height/10);
//判读小球正在下落还是弹回
$t = $m_time % (2*$per_time);
if($t < $per_time){
    //小球正在下落
    $r = 0.5 * 10 * $t * $t;
} else {
    //小球正在弹回
    $t = $t - $per_time;
    $t = $per_time - $t;
    $r = 0.5 * 10 * $t * $t;
}
echo $r;
?>
