<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>
<div class="container">
    <div class="banner colums case clearfix">
        <div class="left">
            <div class="inner-ctner">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"slider\" data=\"op=slider&tag_md5=3e134dceda3f9719948d2f68fe082ecb&action=lists&postion=57&siteid=%24siteid&order=desc&num=9\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$slider_tag = pc_base::load_app_class("slider_tag", "slider");if (method_exists($slider_tag, 'lists')) {$data = $slider_tag->lists(array('postion'=>'57','siteid'=>$siteid,'order'=>'desc','limit'=>'9',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <h2><?php echo $r['name'];?></h2>
                        <?php break?>
                    <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="right">
            <div id="banner" class="flexslider">
                <ul class="slides">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"slider\" data=\"op=slider&tag_md5=3e134dceda3f9719948d2f68fe082ecb&action=lists&postion=57&siteid=%24siteid&order=desc&num=9\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$slider_tag = pc_base::load_app_class("slider_tag", "slider");if (method_exists($slider_tag, 'lists')) {$data = $slider_tag->lists(array('postion'=>'57','siteid'=>$siteid,'order'=>'desc','limit'=>'9',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <li>
                                <a href="<?php echo $r['url'];?>">
                                    <img src="<?php echo $r['image'];?>" width="642" height="490"  alt="<?php echo $r['name'];?>"/>
                                </a>
                            </li>
                        <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
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
        <div class="case-txt pdb45">
            <?php echo $content;?>
        </div>
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
                    if(exist<1){
                        $('div', {
                            className: 'flex-control-nav flex-control-paging'
                        }).appendTo(obj);
                        $('.flex-control-nav', obj).html('<li><a href="#" class="flex-active"></a></li>');
                    }
                    var $pager = $('.flex-control-nav', obj);
                    for(var i=0; i<exist; i++){
                        var src=$('li:eq('+i+') img', obj).attr('src');
                        $('li>a:eq('+i+')', $pager).css({
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