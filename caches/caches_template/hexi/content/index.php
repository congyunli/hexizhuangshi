<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>

<!--main-->
    <div class="container">
        <div class="banner">
            <div id="banner" class="flexslider">
                <ul class="slides">
                    <!--幻灯片-->
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"slider\" data=\"op=slider&tag_md5=ed0c260e1d25306ab98fa85b2f5fe425&action=lists&postion=56&siteid=%24siteid&order=desc&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$slider_tag = pc_base::load_app_class("slider_tag", "slider");if (method_exists($slider_tag, 'lists')) {$data = $slider_tag->lists(array('postion'=>'56','siteid'=>$siteid,'order'=>'desc','limit'=>'10',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <li>
                            <a href="<?php echo $r['url'];?>">
                                <img src="<?php echo $r['image'];?>" alt="<?php echo $r['name'];?>"/>
                            </a>
                        </li>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>
        </div>
    </div>

    <div class="container mgt30">
        <ul class="list-show clearfix">
            <li>
                <h2>
                    <a href="/index.php?m=content&c=index&a=lists&catid=15"><i class="i-link shimu"></i></a>
                </h2>
                <div class="imgframe mgt12">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d69d87496c8bea124cb2d6df04544e73&action=lists&catid=15&num=1&order=listorder+DESC&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'15','order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'15','order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>      
                        <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?> 
                            <?php $n=1; if(is_array(string2array($r['pictureurls']))) foreach(string2array($r['pictureurls']) AS $k => $v) { ?> 
                                <a href="/index.php?m=content&c=index&a=lists&catid=15">
                                    <img src="<?php echo $v['url'];?>" width="316" height="177"  alt="<?php echo $v['alt'];?>"/>
                                </a>
                                <?php break?>
                            <?php $n++;}unset($n); ?> 
                            <?php break?>
                        <?php $n++;}unset($n); ?> 
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                </div>
            </li>
            <li>
                <h2>
                    <a href="/index.php?m=content&c=index&a=lists&catid=16"><i class="i-link gongzhuang"></i></a>
                </h2>
                <div class="imgframe mgt12">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=9c1c76ecaa69d4d06e65b08a97d58c71&action=lists&catid=16&num=1&order=listorder+DESC&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'16','order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'16','order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>      
                        <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?> 
                            <?php $n=1; if(is_array(string2array($r['pictureurls']))) foreach(string2array($r['pictureurls']) AS $k => $v) { ?> 
                                <a href="/index.php?m=content&c=index&a=lists&catid=16">
                                    <img src="<?php echo $v['url'];?>" width="316" height="177"  alt="<?php echo $v['alt'];?>"/>
                                </a>
                                <?php break?>
                            <?php $n++;}unset($n); ?> 
                            <?php break?>
                        <?php $n++;}unset($n); ?> 
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                </div>
            </li>
            <li>
                <h2>
                    <a href="/index.php?m=content&c=index&a=lists&catid=17"><i class="i-link siren"></i></a>
                </h2>
                <div class="imgframe mgt12">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1735bd0eec3c32519331ed698d34f0c8&action=lists&catid=17&num=1&order=listorder+DESC&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'17','order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'17','order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>      
                        <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?> 
                            <?php $n=1; if(is_array(string2array($r['pictureurls']))) foreach(string2array($r['pictureurls']) AS $k => $v) { ?> 
                                <a href="/index.php?m=content&c=index&a=lists&catid=17">
                                    <img src="<?php echo $v['url'];?>" width="316" height="177"  alt="<?php echo $v['alt'];?>"/>
                                </a>
                                <?php break?>
                            <?php $n++;}unset($n); ?> 
                            <?php break?>
                        <?php $n++;}unset($n); ?> 
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                </div>
            </li>
        </ul>
    </div>

    <div class="container mgt30 tac">
        <dl class="slogan">
            <dt>
                <i class="i-title"></i>
            </dt>
            <dd>
                <h3>大连和玺装饰设计工程有限公司</h3>
                <h2>国内顶级富豪的私人装修设计顾问</h2>
                <p>独特的构思，独特的理念，带给您赏心悦目的居住环境，</p>
                <p>一流的设计团队，一流的施工队伍，独特的制作工艺，</p>
                <p>让您装修放心，住得安心！</p>
            </dd>
            <dd class="mgt70">
                <a href="/index.php?m=content&c=index&a=lists&catid=15" class="more">最新工程案例 →</a>
            </dd>
        </dl>
    </div>
<!--main end-->

<?php include template("common","footer"); ?>

<script type="text/javascript">
    $(function(){
            $('#banner').flexslider({
                animation: "slide",     //动画效果
                directionNav: true,    //显示方向箭头？false
                slideshow: true,      //多张开启自动滚动
                slideshowSpeed: 3000,
                animationSpeed: 400,
                prevText: '',
                nextText: ''
             });
        });
</script>
</body>
</html>