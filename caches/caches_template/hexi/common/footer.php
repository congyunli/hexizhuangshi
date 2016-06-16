<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?>    <div class="footer">
        <div class="bg">
            <div class="container">
                <div class="clearfix">
                    <div class="main-info">
                        <div class="left">
                            <?php $db = pc_base::load_model('module_model');  $info = $db->get_one(array('module'=>'admin')); $setting = string2array($info[setting]); ?>
                            <ul>
                                <li style="width: 246px; height: 27px;"><img src="<?php echo APP_PATH;?>statics/hexi/images/company.png" alt=""></li>
                                <li class="mgt">地址：<?php echo $setting['admin_address'];?></li>
                                <li>电话：<?php echo $setting['admin_phone'];?></li>
                                <li>企业邮箱：<?php echo $setting['admin_contactEmail'];?></li>
                            </ul>
                        </div>
                        <div class="right">
                            <img src="<?php echo APP_PATH;?>statics/hexi/images/code.png" alt="" />
                        </div>
                    </div>
                </div>
                <div class="mgt20" style="font-size: 10px;">
                    大连和玺装饰设计工程有限公司 地址：大连市沙河口区五一路解放广场幸福家居临街16号 电话：0411-84586967 传真：0411-84586967-608 辽ICP备12014387 &nbsp;&nbsp;&nbsp; 技术支持：致简品牌
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="<?php echo APP_PATH;?>statics/hexi/plugins/jquery/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo APP_PATH;?>statics/hexi/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript">
        $(function(){
            $('#banner').flexslider({
                animation: "slide",     //动画效果
                directionNav: false,    //显示方向箭头？false
                slideshow: true,      //多张开启自动滚动
                slideshowSpeed: 3000,
                animationSpeed: 400
            });
        });
    </script>
    </body>
    </html>