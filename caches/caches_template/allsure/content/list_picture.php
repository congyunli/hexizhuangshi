<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>

    <section class="container-width about">
        <div class="service-box">
            <div class="container">
                <div class="wrapper">
                <!-- 注意不要把a标签的换行加入字 -->
                    <p class="crumb clearfix" id="nav_flag">
                        <a href="/">首页</a>
                        <a href="/index.php?m=content&c=index&a=show&catid=11&id=2">About us</a>
                        <a href="javascript:void(0);" class="current">Sevice</a>
                    </p>
                    <h2 class="page-title">
                        我们提供最优质的服务
                    </h2>
                    <p class="second-tabs clearfix">
                        <a href="/index.php?m=content&c=index&a=lists&catid=15#nav_flag"><img src="<?php echo APP_PATH;?>statics/allsure/images/game-start.png"/></a>
                        <a href="/index.php?m=content&c=index&a=lists&catid=16#nav_flag"><img src="<?php echo APP_PATH;?>statics/allsure/images/movie-animation.png"/></a>
                        <a href="/index.php?m=content&c=index&a=lists&catid=17#nav_flag"><img src="<?php echo APP_PATH;?>statics/allsure/images/poster.png"/></a>
                        <a href="/index.php?m=content&c=index&a=lists&catid=18#nav_flag"><img src="<?php echo APP_PATH;?>statics/allsure/images/cg.png"/></a>
                    </p>
                    <article class="main-cet">
                        <div class="work-list clearfix">

                            <!-- 每个a是一个循环。需要绑定href为预览该请大图地址，title为这个图片的title，不填会报错 -->
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=219ec31cadadbaaf2571c97d1ecb43d7&action=lists&catid=%24catid&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','moreinfo'=>'1','limit'=>'20',));}?>
                                <!-- 每个a是一个循环。需要绑定href为预览该请大图地址，title为这个图片的title，不填会报错 -->
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <?php $pics = string2array($r['pictureurls']); ?>
                                    <?php if ($catid == 15 || $catid == 16){ ?>
                                           <a rel="group" class="work-item" href="<?php echo rtrim($r[content]); ?>" title="<?php echo $r['title'];?>"> 
                                    <?php }else{ ?>
                                        <a rel="group" class="work-item" href="<?php echo $pics['0']['url'];?>" title="<?php echo $r['title'];?>"> 
                                    <?php } ?>

                                    <div class="item-wrapper">
                                                <img alt="<?php echo $r['title'];?>" src="<?php echo $pics['0']['url'];?>" />
                                            </div>
                                    </a>
                                <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                        <p class="more-link">
                            <a href="/index.php?m=content&c=index&a=lists&catid=8">more works</a>
                        </p>
                    </article>
                </div>
            </div>          
        </div>
    </section>


<?php include template("common","footer"); ?>





<!-- div class="main photo-channel">
    <div class="col-left photo-slide">
        <div class="content">
            <div class="FocusPic">
                <div id="photo-slide">
                    <div class="changeDiv">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b86559ff2f619bb5d5c8295d7b8592d0&action=position&posid=8&order=listorder+DESC&sort=desc&num=9\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'8','order'=>'listorder DESC','sort'=>'desc','limit'=>'9',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r['thumb'],435, 290);?>" alt="<?php echo $r['title'];?>" /></a>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </div>
                </div>
            </div>
        </div>
<script type="text/javascript"> 
$(function(){
    slide("#photo-slide","cur",435,324,1);
})
</script>
    </div>
    <div class="photo-hots">
        <div class="icon"></div>
            <h4>热点关注</h4>
            <ul class="content photo-hot picbig">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0545869affe9a20a4e4c2750fb587d75&action=hits&catid=%24catid&num=6&order=monthviews+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'monthviews DESC','limit'=>'6',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                    <div class="img-wrap">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],150,112);?>" /></a>
                    </div>
                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],16, '');?></a>
                </li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
    </div>
    <div class="col-auto" style="height:336px">
    <div class="box">
            <h5 class="title-2">图片排行</h5>
            <ul class="content digg">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=715a73da88550e1d82239752d0d14e97&action=hits&catid=%24catid&num=8&order=views+DESC&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array('catid'=>$catid,'order'=>'views DESC',)).'715a73da88550e1d82239752d0d14e97');if(!$data = tpl_cache($tag_cache_name,3600)){$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>$catid,'order'=>'views DESC','limit'=>'8',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo $r['title'];?></a></li>
                <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
    </div>
    <div class="bk6"></div>
    <script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/3.js"></script>
    </div>
    <div class="bk10"></div>
    <?php $n=1;if(is_array($array_child)) foreach($array_child AS $cid) { ?>
    <?php $chlidids = explode(',', $CATEGORYS[$cid][arrchildid])?>
    <?php unset($chlidids[array_search($cid, $chlidids)]);$n=1;?>
    <div class="photo-cat">
        <div class="content">
            <h5>
            <a href="<?php echo $CATEGORYS[$cid]['url'];?>"><strong><?php echo $CATEGORYS[$cid]['catname'];?></strong></a>
            <span class="blue">
            <a href="<?php echo $CATEGORYS[$cid]['url'];?>" class="more">更多>></a>
            <?php $n=1;if(is_array($chlidids)) foreach($chlidids AS $chlidid) { ?>
            <?php if($n!=1) { ?> | <?php } ?>
                <a href="<?php echo $CATEGORYS[$chlidid]['url'];?>"><?php echo $CATEGORYS[$chlidid]['catname'];?></a>
            <?php $n++;}unset($n); ?>
            </span>
            </h5>
            <ul class="photo-list picbig">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b568fbd159955911aea4f3696ec4d0eb&action=lists&catid=%24cid&num=10&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$cid,'order'=>'id DESC','limit'=>'10',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                    <div class="img-wrap">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><img src="<?php echo thumb($r[thumb],150,112);?>" /></a>
                    </div>
                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>" target="_blank"><?php echo str_cut($r[title],28);?></a>
                    </li>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
        </div>
    </div>
    <div class="bk10"></div>
    <?php $n++;}unset($n); ?>
</div> -->


