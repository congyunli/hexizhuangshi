<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>

<!--main-->
    <section class="container-width">
        <div class="screen show1">
            <div class="container">
                <h2>
                    <img class="titleIMG" style="width:960px;" src="<?php echo APP_PATH;?>statics/allsure/images/title1.png" alt=""/>
                    <p>we are digital artisans</p>
                </h2>
                <p>
                    <img class="titleIMG" src="<?php echo APP_PATH;?>statics/allsure/images/title1-child.png" alt=""/>
                    an expert team,passionate about  CG
                </p>
                <a href="#about_flag">more</a>
            </div>
        </div>
    </section>

    <section class="container-width">
        <div class="screen show2">
            <div class="container" id="about_flag">
                <h2 class="title-main">
                    <img class="titleIMG" src="<?php echo APP_PATH;?>statics/allsure/images/about.png" style="width:171px;" alt=""/>ABOUT
                </h2>
                <p class="title-little">
                    <img class="titleIMG" src="<?php echo APP_PATH;?>statics/allsure/images/about-child.png" style="width:191px;" alt=""/>
                    we are digital artisans
                </p>
                <p class="intro">青岛傲雪世界数码科技有限公司是专业为游戏以及影视公司提供优秀的CG产品以及各种解决方案，<br/>
              满足游戏和影视公司高质量制作需求的新兴企业。</p>
                <p class="work">公司旨在打造国内优秀的原创CG服务型公司。将以制作优秀的原创型外包服务产品为我们的宗旨。</p>
                <!-- <img src="<?php echo APP_PATH;?>statics/allsure/images/section2.png" alt=""> -->
                <div class="conter-ctner">
                    <img src="<?php echo APP_PATH;?>statics/allsure/images/section2.png" alt="">
                    <a href="/index.php?m=content&c=index&a=lists&catid=16"><img class="link-icon movie" src="<?php echo APP_PATH;?>statics/allsure/images/movie-icon.png" alt=""></a>
                    <a href="/index.php?m=content&c=index&a=lists&catid=15"><img class="link-icon video" src="<?php echo APP_PATH;?>statics/allsure/images/video-icon.png" alt=""></a>
                    <a href="/index.php?m=content&c=index&a=lists&catid=17"><img class="link-icon poster" src="<?php echo APP_PATH;?>statics/allsure/images/poster-icon.png" alt=""></a>
                    <a href="/index.php?m=content&c=index&a=lists&catid=18"><img class="link-icon folder" src="<?php echo APP_PATH;?>statics/allsure/images/folder-icon.png" alt=""></a>
                </div>
                <a href="/index.php?m=content&c=index&a=lists&catid=15" class="more">more>></a>
            </div>
        </div>
    </section>

    <section class="container-width">
        <div class="screen show3">
            <div class="container">
                <h2 class="title-main">
                    <img class="titleIMG" src="<?php echo APP_PATH;?>statics/allsure/images/works.png" style="margin:0;" alt=""/>
                    WORKS
                </h2>
                <p class="title-little">
                    <img class="titleIMG" src="<?php echo APP_PATH;?>statics/allsure/images/work-child.png" style="margin:0;" alt=""/>
                    an expert team,passionate about CG
                </p>
                <!-- 轮播图 -->
                <div class="J_Poster poster-main" data-setting='{
                                                                "width":1000,
                                                                "height":426,
                                                                "posterWidth":426,
                                                                "posterHeight":426,
                                                                "scale":0.8,
                                                                "autoPlay":true,
                                                                "delay":4000,
                                                                "speed":300
                                                                }'>
                    <div class="poster-btn poster-prev-btn"></div>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=59d012085c1ea331fa0b7679a964e998&action=lists&catid=8&order=id+DESC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'8','order'=>'id DESC','moreinfo'=>'1','limit'=>'20',));}?>
                        <ul class="poster-list">
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>

                                <?php
                                // echo "<pre>";
                                // var_dump($r[catid]);continue;
                                    $pics = string2array($r['pictureurls']);
                                    if($r[catid] == "17" || $r[catid] == "18"){
                                        $work_type = "pic";
                                    }else{
                                        $work_type = "mov";
                                    }
                                ?>
                                <li class="poster-item">
                                    <a href="/index.php?m=content&c=index&a=lists&catid=8&work_type=<?php echo $work_type;?>"><img src="<?php echo thumb($pics[0][url],427,427);?>" alt="<?php echo $r['title'];?>" width="100%" height="100%"></a>
                                </li>
                            <?php $n++;}unset($n); ?>

                        </ul>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <div class="poster-btn poster-next-btn"></div>
                </div>
                <!-- 轮播图 end -->
                <a href="/index.php?m=content&c=index&a=lists&catid=8" class="more">more>></a>
            </div>
        </div>
    </section>
<!--main end-->

<?php include template("common","footer"); ?>