<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>

<div class="container">
    <div class="banner colums case clearfix">
        <div class="left">
            <div class="inner-ctner">
            <?php if($_GET['id'] != ''){ $id = intval($_GET['id']); ?>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=788878c410e122c4f9428328370c8060&sql=SELECT+%2A+FROM+hx_picture+as+a+left+join+hx_picture_data+as+b+on+a.id%3Db.id+WHERE+a.catid%3D%27%24catid%27+and+a.id%3D%27%24id%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM hx_picture as a left join hx_picture_data as b on a.id=b.id WHERE a.catid='$catid' and a.id='$id' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                    <h2><?php echo $data['0']['title'];?></h2>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

            <?php }else{ ?>

                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c181e560142cca8cea77a3cb88573c15&action=lists&catid=%24catid&num=1&order=listorder+DESC&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>      
                    <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?> 
                        <h2><?php echo $r['title'];?></h2>
                    <?php $n++;}unset($n); ?> 
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

            <?php } ?>
            </div>
        </div>
        <div class="right">
            <div id="banner" class="flexslider">
                <ul class="slides">
                    <?php if($_GET['id'] != ''){ $id = intval($_GET['id']); ?>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=788878c410e122c4f9428328370c8060&sql=SELECT+%2A+FROM+hx_picture+as+a+left+join+hx_picture_data+as+b+on+a.id%3Db.id+WHERE+a.catid%3D%27%24catid%27+and+a.id%3D%27%24id%27&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM hx_picture as a left join hx_picture_data as b on a.id=b.id WHERE a.catid='$catid' and a.id='$id' LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                            <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?> 
                                <?php $n=1; if(is_array(string2array($r['pictureurls']))) foreach(string2array($r['pictureurls']) AS $k => $v) { ?> 
                                    <li>
                                        <img src="<?php echo thumb($v[url],175,120);?>"  alt="<?php echo $v['alt'];?>"/>
                                    </li>
                                <?php $n++;}unset($n); ?> 
                            <?php $n++;}unset($n); ?>

                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 

                    <?php }else{ ?>
                        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c181e560142cca8cea77a3cb88573c15&action=lists&catid=%24catid&num=1&order=listorder+DESC&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>      
                            <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?> 
                                <?php $n=1; if(is_array(string2array($r['pictureurls']))) foreach(string2array($r['pictureurls']) AS $k => $v) { ?> 
                                    <li>
                                        <img src="<?php echo thumb($v[url],175,120);?>"  alt="<?php echo $v['alt'];?>"/>
                                    </li>
                                <?php $n++;}unset($n); ?> 
                            <?php $n++;}unset($n); ?> 
                        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container colums mgt30 clearfix">
    <div class="left">
        <?php include template("common","nav_left"); ?>
    </div>
    <div class="right">
        <ul class="case-list clearfix pdb45">

            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3fb361f06a71c90d6374220ab99b7cae&action=lists&catid=%24catid&num=100&order=listorder+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder DESC','moreinfo'=>'1','limit'=>'100',));}?>
                <?php $n=1; if(is_array($data)) foreach($data AS $n => $r) { ?>

                    <?php $pictureurls = string2array($r['pictureurls']);?>
                        <li class="ctner">
                            <i class="i-link shimu"><?php echo $r['title'];?></i>
                            <a href="/index.php?m=content&c=index&a=lists&catid=<?php echo $catid;?>&id=<?php echo $r['id'];?>">
                                <div class="img-frame">
                                    <img src="<?php echo thumb($pictureurls[0]['url'],175,120);?>" alt="<?php echo $pictureurls['0']['alt'];?>" />
                                </div>
                            </a>
                        </li>
                <?php $n++;}unset($n); ?> 
                
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?> 
            
        </ul>
    </div>
</div>

<?php include template("common","footer"); ?>

<script type="text/javascript">
    $(function(){
        $('#banner').flexslider({
            animation: "fade",     //动画效果
            directionNav: false,    //显示方向箭头？false
            slideshow: true,      //多张开启自动滚动
            slideshowSpeed: 3000,
            animationSpeed: 400,
            manualControlEvent: 'hover',
            start: function(obj){
                var $sliders = obj.find('li'),
                        exist = $sliders.length/2;
                var $pager = $('.flex-control-nav', obj);
                for(var i=0; i<exist; i++){
                    console.log($('li:eq('+i+') img', obj).attr('src'));
                    var src=$('li:eq('+i+') img', obj).attr('src');
                    $('li>a', $pager).css({
                        'background-image': 'url('+src+')',
                        'background-repeat': 'no-repeat',
                        'background-size': '100% auto'
                    });
                    $('li>a', $pager).on('mouseenter', function(){
                        $(this).click();
                    });
                }
            }
        });
    });
</script>
</body>
</html>