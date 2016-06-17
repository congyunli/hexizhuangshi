<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>



	<section class="container-width contact">
		<div class="contact-box">
			<div class="container">
				<div>
					<h2>联系我们</h2>
					<div class="clearfix">
						<div class="cols-left">
							<div class="inner-wrap">
								<script src="http://api.map.baidu.com/api?v=1.3"></script>
								<div class="map map-canvas no-margin" id="mapCanvas" style="width:474px;height:343px; border:1px solid #ccc">
								<?php $db = pc_base::load_model('module_model');  $info = $db->get_one(array('module'=>'admin')); $setting = string2array($info[setting]); ?>

									<script type="text/javascript">
									   	var map = new BMap.Map("mapCanvas");            // 创建Map实例
										var point = new BMap.Point("<?php echo $setting['admin_jd'];?>", "<?php echo $setting['admin_wd'];?>");    // 创建点坐标
										map.centerAndZoom(point,16);                // 初始化地图,设置中心点坐标和地图级别。
										map.enableScrollWheelZoom();                  //启用滚轮放大缩小
										//添加缩放控件
										map.addControl(new BMap.NavigationControl());  
										map.addControl(new BMap.ScaleControl());  
										map.addControl(new BMap.OverviewMapControl()); 
										
										var marker = new BMap.Marker(point); // 创建标注 
										map.addOverlay(marker); // 将标注添加到地图中
										var infoWindow = new BMap.InfoWindow("<?php echo $setting['admin_companyName'];?><br/><span class=''>地址：<?php echo $setting['admin_address'];?></span>"); // 创建信息窗口对象
										marker.openInfoWindow(infoWindow);
									</script>
								</div>

							</div>
						</div>
						<div class="cols-right">
							<div class="inner-wrap">
								<?php echo $content;?>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<footer>
			
		</footer>
	</section>


</body>
</html>
