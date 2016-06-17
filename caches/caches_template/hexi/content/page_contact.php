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
        <div class="case-txt clearfix pdb90 contact">
            <?php echo $content;?>
        </div>
    </div>
</div>

<?php include template("common","footer"); ?>
</body>
</html>