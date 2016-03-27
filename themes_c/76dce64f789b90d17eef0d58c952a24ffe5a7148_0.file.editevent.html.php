<?php /* Smarty version 3.1.27, created on 2016-03-25 14:47:14
         compiled from "/var/www/html/mutasyon/themes/default/event/editevent.html" */ ?>
<?php
/*%%SmartyHeaderCode:45031205056f53352555748_41874002%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76dce64f789b90d17eef0d58c952a24ffe5a7148' => 
    array (
      0 => '/var/www/html/mutasyon/themes/default/event/editevent.html',
      1 => 1456420606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '45031205056f53352555748_41874002',
  'variables' => 
  array (
    'e' => 0,
    '_detail' => 0,
    '_event_level' => 0,
    '_event_three' => 0,
    '_event_two' => 0,
    '_event_one' => 0,
    '_date' => 0,
    '_add' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f53352586989_20038182',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f53352586989_20038182')) {
function content_56f53352586989_20038182 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '45031205056f53352555748_41874002';
?>
<!--Edit Event-->
<div class="collapse topwind" id="editevent-<?php echo $_smarty_tpl->tpl_vars['e']->value['event_id'];?>
">
	<div class="well">
	      <button type="button" class="close editeventm" data-toggle="collapse" href="#editevent-<?php echo $_smarty_tpl->tpl_vars['e']->value['event_id'];?>
"><span aria-hidden="true">×</span></button>
		      <form class="reload" action="events.php" method="POST">
			      <h4>Görev Düzenle</h4>
			      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_detail']->value;?>
</label>
			      <textarea type="textarea" name="editeventdetail" class="form-control"><?php echo $_smarty_tpl->tpl_vars['e']->value['event_detail'];?>
</textarea>
			      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_event_level']->value;?>
</label>
			      <select class="form-control" name="editeventlevel">
				    <option value="3"><?php echo $_smarty_tpl->tpl_vars['_event_three']->value;?>
</option>
				    <option value="2"><?php echo $_smarty_tpl->tpl_vars['_event_two']->value;?>
</option>
				    <option value="1"><?php echo $_smarty_tpl->tpl_vars['_event_one']->value;?>
</option>
			      </select>
			      <label class="margin-top"><?php echo $_smarty_tpl->tpl_vars['_date']->value;?>
</label>
			      <input type="date" name="editeventdate" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['event_date'];?>
" />
			      <input type="hidden" name="editeventid" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['e']->value['event_id'];?>
" />
			      <button type="submit" class="btn btn-info btn-xs margin-top"><?php echo $_smarty_tpl->tpl_vars['_add']->value;?>
</button>
		      </form>
	</div>
</div>
<!--/Edit Event--> 
<?php }
}
?>