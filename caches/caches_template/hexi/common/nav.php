<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>
<ul class="subNav clearfix">
  <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
          <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            <li>
                <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                <?php if(subcat($r['catid'],0,0,1) != '') { ?>

                    <ul class="ssubNav">
                        <?php $n=1;if(is_array(subcat($r['catid']))) foreach(subcat($r['catid']) AS $r2) { ?>
                            <li><a href="<?php echo $r2['url'];?>"><?php echo $r2['catname'];?></a></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                <?php } ?>
            </li>
          <?php $n++;}unset($n); ?>
  <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>
<!--<ul class="subNav clearfix">-->
    <!--<li>-->
        <!--<a class="active" href="">和玺介绍</a>-->
    <!--</li>-->
    <!--<li>-->
        <!--<a href="">工程案例</a>-->
        <!--<ul class="ssubNav">-->
            <!--<li><a href="">实木定制</a></li>-->
            <!--<li><a href="">工装装修</a></li>-->
            <!--<li><a href="">私人豪宅</a></li>-->
        <!--</ul>-->
    <!--</li>-->
    <!--<li>-->
        <!--<a href="">产品展示</a>-->
    <!--</li>-->
    <!--<li>-->
        <!--<a href="">人才招聘</a>-->
    <!--</li>-->
    <!--<li>-->
        <!--<a href="">客户名录</a>-->
    <!--</li>-->
    <!--<li>-->
        <!--<a href="">联系方式</a>-->
    <!--</li>-->
    <!--<li>-->
        <!--<a href="">新项目报价</a>-->
    <!--</li>-->
<!--</ul>-->
<!--</p>-->
