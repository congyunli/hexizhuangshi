<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>
	<section class="container-width about">
		<div class="join-box">
			<div class="container">
				<div class="wrapper ">

				<!-- 注意不要把a标签的换行加入字 -->
					<p class="crumb clearfix"  style="margin-bottom: 76px;">
						<a href="/">首页</a>
						<a href="/index.php?m=content&c=index&a=show&catid=11&id=2">About us</a>
						<a href="javascript:void(0);" class="current">Join us</a>
					</p>

					<h2 class="page-title" style="font-size: 24px;color: #242930;text-align: left;padding-left: 35px;margin-bottom: 65px;font-weight:bold">
						加入傲雪
					</h2>
					<div class="ctner-line">	
						<span></span>
						<p><img src="<?php echo APP_PATH;?>statics/allsure/images/logoo.png" alt=""></p>
					</div>
					<p class="contact-mail">www.cgassist.com</p>

					<article class="main-cet" style="margin-top: 170px;">
						<?php echo $content;?>
					</article>

				</div>

			</div>			

		</div>

		<footer>

			

		</footer>

	</section>





</body>

</html>

