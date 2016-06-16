<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>
<!--main-->
    <section class="container-width about">
        <div class="work-box  join-box">
            <div class="container" style="padding-top: 50px;">
   
                <!-- 注意不要把a标签的换行加入字 -->
                    <p class="crumb clearfix"  style="margin-bottom: 90px;">
                        <a href="/">首页</a>
                        <a href="javascript:void(0);" class="current">Works</a>
                    </p>

                    <div class="ctner-line">
                        <p><img src="<?php echo APP_PATH;?>statics/allsure/images/logoo.png" style="margin-left: -285px;" alt=""><span style="font-size: 40px;color: #636363;font-family:'黑体';position:absolute;right: 300px;top:33px;">傲雪</span></p>  
                        <span></span>
                    </div>

                    <p class="contact-mail" style="margin-top:140px;margin-right: 0;">www.cgassist.com</p>

                    <script type="text/javascript" src="<?php echo APP_PATH;?>statics/allsure/js/masonry.pkgd.min.js"></script>
                    <script type="text/javascript" src="<?php echo APP_PATH;?>statics/allsure/js/imagesloaded.pkgd.min.js"></script>
                    <script type="text/javascript">
                        $(function(){
                            var $container = $('#container');
                            $container.imagesLoaded(function(){
                                $container.masonry({
                                    itemSelector: '.grid-item',
                                    columnWidth: 25 //每两列之间的间隙为5像素
                                });
                            });

                    });
                    </script>


                    <article id="work_list_wrap" class="main-cet" style="margin-top: 65px;">
 <!--                        <div class="work-tabs">
                            <?php if(@$_GET['work_type'] == 'pic'){ ?>
                                <a href="/index.php?m=content&c=index&a=lists&catid=8&work_type=mov#work_list_wrap">MOV</a>
                                <a class="active"  href="/index.php?m=content&c=index&a=lists&catid=8&work_type=pic#work_list_wrap">PIC</a>
                            <?php }else{ ?>
                                <a class="active" href="/index.php?m=content&c=index&a=lists&catid=8&work_type=mov#work_list_wrap">MOV</a>
                                <a href="/index.php?m=content&c=index&a=lists&catid=8&work_type=pic#work_list_wrap">PIC</a>
                            <?php } ?>
                        </div> -->

                        <ul class="grid-list clearfix" id="container">
                            <?php 
                                // if(@$_GET['work_type'] == 'pic'){
                                //     $cid = " catid IN (17,18)";
                                // }else{
                                //     $cid = " catid IN (15,16)";
                                // }
                            ?>
                            <!-- <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=81e4ee7c2895a74c2d7cabef463c75ec&action=lists&catid=8&num=1000&where=%24cid&order=id+DESC&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1000;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'8','where'=>$cid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'8','where'=>$cid,'order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?> -->
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=72c293260df61f5800209a9e780aa7ca&action=lists&catid=8&num=1000&order=id+DESC&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 1000;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>'8','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>'8','order'=>'id DESC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                                    <?php $pics = string2array($r['pictureurls']); ?>

                                    <li class="grid-item">
                                        <div class="grid-cover">
                                            <?php if ($r[catid] == 15 || $r[catid] == 16){ ?>
                                               <a rel="group"  href="<?php echo rtrim($r[content]); ?>" title="<?php echo $r['title'];?>"> 
                                            <?php }else{ ?>
                                                <a rel="group" href="<?php echo $pics['0']['url'];?>" title="<?php echo $r['title'];?>">
                                            <?php } ?>
                                                <img src="<?php echo $pics['0']['url'];?>" alt="<?php echo $r['title'];?>">
                                            </a>

                                        </div>
                                        <p class="grid-brief">
                                            <?php echo $r['title'];?>
                                        </p>
                                    </li>

                                <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            
                        </ul>

                        <div class="friend clearfix">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=a6350d25a855cfab4ad95ca7ce5f9c78&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'20',));}?>
                                <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
                                <a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank">
                                    <img src="<?php echo $v['logo'];?>" />
                                </a>
                                <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                        </div>
                    </article>

            </div>          

        </div>

    </section>


<footer></footer>

</body>

</html>

<!--    <div class="main photo-channel">

<div class="crumbs"><a href="<?php echo siteurl($siteid);?>">首页</a><span> > <?php echo catpos($catid);?></div>

<div class="bk10"></div>

    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=11e982198282a77f17ebf8d7a1dede5e&action=lists&catid=%24catid&num=10&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 10;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>

        <ul class="photo-list picbig">

            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

            <li>

            <div class="img-wrap">

            <a href="<?php echo $r['url'];?>"><img src="<?php echo thumb($r[thumb],150,112);?>" width="150" height="112" alt="<?php echo $r['title'];?>"/></a>

            </div>

            <span style="color:<?php echo $r['style'];?>"><?php echo str_cut($r[title],28);?></span>

            </li>

            <?php $n++;}unset($n); ?>

        </ul>

        <div id="pages" class="text-c"><?php echo $pages;?></div>

    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>

    </div>

</div> -->

