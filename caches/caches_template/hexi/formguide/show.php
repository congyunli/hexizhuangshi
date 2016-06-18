<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>
<div class="container">
        <div class="banner colums cus-list">
        </div>
    </div>

<div class="container colums mgt30 clearfix">
        <div class="left">
            <?php include template("common","nav_left"); ?>
        </div>
        <div class="right">
            <div class="case-txt clearfix pdb90 submitSec">
                <h2 class="title">很感谢能抽出时间来填写项目计划。一旦提交，我们将在1-2工作日回复。</h2>
                <form method="post" action="/index.php?m=formguide&c=index&a=show&formid=<?php echo $formid;?>&siteid=<?php echo $this->siteid;?>" name="newProject" id="newProject">
                    <dl>
                        <dt class="sec-title">
                            1. 基本信息
                        </dt>
                        <dd class="clearfix">
                            <div class="left">
                                <div class="form-group">
                                    <label for="name">姓名 *</label>
                                    <input type="text" name="info[name]" id="name" />
                                </div>
                                <div class="form-group">
                                    <label for="website">网络地址</label>
                                    <input type="text" name="info[site]" id="website" ignore="ignore" />
                                </div>
                            </div>
                            <div class="right clearfix">
                                <div class="form-group">
                                    <label for="Email">Email *</label>
                                    <input type="text" name="info[email]" id="Email" />
                                </div>
                                <div class="form-group">
                                    <label for="phone">联系电话 *</label>
                                    <input type="text" name="info[tel]" id="phone" />
                                </div>
                            </div>
                        </dd>
                        <dd class="form-group long">
                            <label for="description">描述你的组织/公司 *</label>
                            <p class="msg">您的公司名称，竞争对手，目标消费者</p>
                            <textarea name="info[desc]" id="description"></textarea>
                        </dd>
                        <dd class="form-group">
                            <label for="project">告诉我关于你的项目</label>
                            <p class="msg">您的想法，目标，项目概况</p>
                            <textarea name="info[project_desc]" id="project" ignore="ignore"></textarea>
                        </dd>
                        <dd class="clearfix">
                            <div class="left">
                                <div class="form-group">
                                    <label for="budget">项目预算</label>
                                    <input type="text" name="info[yusuan]" id="budget" ignore="ignore"/>
                                </div>
                            </div>
                            <div class="right clearfix">
                                <div class="form-group">
                                    <label for="deadline">项目期限</label>
                                    <input type="text" name="info[project_qixian]" id="deadline" ignore="ignore"/>

                                </div>
                            </div>
                        </dd>
                        <dd>
                            <div class="label">首选的联系方式</div>
                            <div class="form-group">
                                <input type="radio" name="info[contact_type]" id="contact-email" checked="checked" value="1"/>
                                <label for="contact-email" class="mg-not" style="display: inline-block;">Email</label>
                            </div>
                            <div class="form-group">
                                <input type="radio" name="info[contact_type]" id="contact-phone" value="0"/>
                                <label for="contact-phone" style="display: inline-block;">电话</label>
                            </div>
                        </dd>
                        <dd class="mgt35">
                            <input class="submit" type="submit" name="dosubmit" id="dosubmit" value="出发" />
                        </dd>
                    </dl>
                </form>

            </div>
        </div>
    </div>

<!-- <div class="content">
	<form method="post" action="?m=formguide&c=index&a=show&formid=<?php echo $formid;?>&siteid=<?php echo $this->siteid;?>" name="newProject" id="newProject">
		<table class="table_form" width="100%" cellspacing="0">
		<tbody>
		 <?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $field => $info) { ?>
			<?php if($info['formtype']=='omnipotent') { ?>
				<?php $n=1; if(is_array($forminfos_data)) foreach($forminfos_data AS $_fm => $_fm_value) { ?>
					<?php if($_fm_value['iscomnipotent']) { ?>
						<?php $info['form'] = str_replace('{'.$_fm.'}',$_fm_value['form'],$info['form']);?>
					<?php } ?>
				<?php $n++;}unset($n); ?>
			<?php } ?>
			<tr>
			  <th width="80"><?php if($info['star']) { ?> <font color="red">*</font><?php } ?> <?php echo $info['name'];?>
			  </th>
			  <td><?php echo $info['form'];?>  <?php echo $info['tips'];?></td>
			</tr>
		<?php $n++;}unset($n); ?>
			</tbody>
		</table>
		<input type="submit" name="dosubmit" id="dosubmit" value=" 提交 ">&nbsp;<input type="reset" value=" 取消 ">
	</form>
</div> -->





<?php include template("common","footer"); ?>

<script type="text/javascript" src="<?php echo APP_PATH;?>statics/hexi/plugins/validform/Validform_v5.3.2_min.js"></script>
    <script type="text/javascript">
        // $(function(){
        //     var sumitSheet = $('#newProject').Validform({
        //             tiptype : 3,
        //             showAllError: false,
        //             btnSubmit: "#dosubmit",
        //             // ajaxPost: (false, true),
        //             datatype: {
        //                 'uname': /^[a-zA-Z\u4e00-\u9fa5\·\s]{1,20}$/,
        //                 "code": /^[0-9]{4}$/,
        //                 "time": /^(\d{4})\/(0\d{1}|1[0-2])\/(0\d{1}|[12]\d{1}|3[01])$/,
        //                 "call": /^[0-9\s\-]{1,20}$/
        //             },
        //             // url: "{:U('Designer/apply')}",
        //             // ajaxpost: {
        //             //     type: 'post',
        //             //     success: function(data){
        //             //         console.log(data);
        //             //         if(data.api_code == 1){
        //             //             alert({
        //             //                 msg: data.info,
        //             //                 callback: function(){
        //             //                     window.location.reload();
        //             //                 }
        //             //             });
        //             //         }else{
        //             //             alert({
        //             //                 msg: data.info,
        //             //             });
        //             //         }
        //             //     }
        //             // }
        //         });

        //         sumitSheet.addRule([{
        //                 ele: "#name",
        //                 datatype: "uname",
        //                 nullmsg: "请输入您的姓名",
        //                 errormsg: "只可包含中文、英文、空格、间隔符"
        //             },{
        //                 ele: "#Email",
        //                 datatype: "e",
        //                 nullmsg: "请输入电子邮箱",
        //                 errormsg: "电子邮箱格式错误"
        //             },{
        //                 ele: "#phone",
        //                 datatype: "call",
        //                 nullmsg: "请输入联系电话",
        //                 errormsg: "联系电话格式错误"
        //             },{
        //                 ele: "#description",
        //                 datatype: "*",
        //                 nullmsg: "请输入描述信息",
        //                 errormsg: "描述信息只能输入超长"
        //             },{
        //                 ele: "#project",
        //                 datatype: "*",
        //                 errormsg: "项目信息只能输入超长"
        //             },{
        //                 ele: "#deadline",
        //                 datatype: "*",
        //                 errormsg: "项目期限格式错误"
        //             }]);
        // });
    </script>
</body>
</html>