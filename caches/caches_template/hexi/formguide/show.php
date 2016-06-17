<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("common","header"); ?>

<div class="content">
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
</div>

<?php include template("common","footer"); ?>
</body>
</html>