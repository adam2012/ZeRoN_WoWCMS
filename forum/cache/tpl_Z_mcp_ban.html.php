<?php if (!defined('IN_PHPBB')) exit; $this->_tpl_include('mcp_header.html'); ?>

<script type="text/javascript">
// <![CDATA[

	var ban_length = new Array();
		ban_length[-1] = '';
	<?php $_ban_length_count = (isset($this->_tpldata['ban_length'])) ? sizeof($this->_tpldata['ban_length']) : 0;if ($_ban_length_count) {for ($_ban_length_i = 0; $_ban_length_i < $_ban_length_count; ++$_ban_length_i){$_ban_length_val = &$this->_tpldata['ban_length'][$_ban_length_i]; ?>
		ban_length['<?php echo $_ban_length_val['BAN_ID']; ?>'] = '<?php echo $_ban_length_val['A_LENGTH']; ?>';
	<?php }} ?>

	var ban_reason = new Array();
		ban_reason[-1] = '';
	<?php $_ban_reason_count = (isset($this->_tpldata['ban_reason'])) ? sizeof($this->_tpldata['ban_reason']) : 0;if ($_ban_reason_count) {for ($_ban_reason_i = 0; $_ban_reason_i < $_ban_reason_count; ++$_ban_reason_i){$_ban_reason_val = &$this->_tpldata['ban_reason'][$_ban_reason_i]; ?>
		ban_reason['<?php echo $_ban_reason_val['BAN_ID']; ?>'] = '<?php echo $_ban_reason_val['A_REASON']; ?>';
	<?php }} ?>

	var ban_give_reason = new Array();
		ban_give_reason[-1] = '';
	<?php $_ban_give_reason_count = (isset($this->_tpldata['ban_give_reason'])) ? sizeof($this->_tpldata['ban_give_reason']) : 0;if ($_ban_give_reason_count) {for ($_ban_give_reason_i = 0; $_ban_give_reason_i < $_ban_give_reason_count; ++$_ban_give_reason_i){$_ban_give_reason_val = &$this->_tpldata['ban_give_reason'][$_ban_give_reason_i]; ?>
		ban_give_reason['<?php echo $_ban_give_reason_val['BAN_ID']; ?>'] = '<?php echo $_ban_give_reason_val['A_REASON']; ?>';
	<?php }} ?>

	function display_details(option)
	{
		document.getElementById('mcp_ban').unbangivereason.value = ban_give_reason[option];
		document.getElementById('mcp_ban').unbanreason.value = ban_reason[option];
		document.getElementById('mcp_ban').unbanlength.value = ban_length[option];
	}

// ]]>
</script>

<form id="mcp_ban" method="post" action="<?php echo (isset($this->_rootref['U_ACTION'])) ? $this->_rootref['U_ACTION'] : ''; ?>">

<table width="100%" class="tablebg" cellspacing="1" cellpadding="4" border="0">
<tr>
	<th colspan="2" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_TITLE'])) ? $this->_rootref['L_TITLE'] : ((isset($user->lang['TITLE'])) ? $user->lang['TITLE'] : '{ TITLE }')); ?></th>
</tr>
<tr>
	<td class="row3" colspan="2"><?php echo ((isset($this->_rootref['L_EXPLAIN'])) ? $this->_rootref['L_EXPLAIN'] : ((isset($user->lang['EXPLAIN'])) ? $user->lang['EXPLAIN'] : '{ EXPLAIN }')); ?></td>
</tr>
<tr>
	<td class="row1" width="45%" valign="top"><b><?php echo ((isset($this->_rootref['L_BAN_CELL'])) ? $this->_rootref['L_BAN_CELL'] : ((isset($user->lang['BAN_CELL'])) ? $user->lang['BAN_CELL'] : '{ BAN_CELL }')); ?>:</b></td>
	<td class="row2">
		<textarea name="ban" id="ban" cols="40" rows="3" class="post"><?php echo (isset($this->_rootref['USERNAMES'])) ? $this->_rootref['USERNAMES'] : ''; ?></textarea>
		<?php if ($this->_rootref['S_USERNAME_BAN']) {  ?><br />[ <a href="<?php echo (isset($this->_rootref['U_FIND_USERNAME'])) ? $this->_rootref['U_FIND_USERNAME'] : ''; ?>" onclick="find_username(this.href); return false;"><?php echo ((isset($this->_rootref['L_FIND_USERNAME'])) ? $this->_rootref['L_FIND_USERNAME'] : ((isset($user->lang['FIND_USERNAME'])) ? $user->lang['FIND_USERNAME'] : '{ FIND_USERNAME }')); ?></a> ]<?php } ?>
	</td>
</tr>
<tr>
	<td class="row1" valign="top"><b><?php echo ((isset($this->_rootref['L_BAN_LENGTH'])) ? $this->_rootref['L_BAN_LENGTH'] : ((isset($user->lang['BAN_LENGTH'])) ? $user->lang['BAN_LENGTH'] : '{ BAN_LENGTH }')); ?>:</b></td>
	<td class="row2"><select name="banlength"><?php echo (isset($this->_rootref['S_BAN_END_OPTIONS'])) ? $this->_rootref['S_BAN_END_OPTIONS'] : ''; ?></select><br /><input type="text" name="banlengthother" class="post" /> <?php echo ((isset($this->_rootref['L_YEAR_MONTH_DAY'])) ? $this->_rootref['L_YEAR_MONTH_DAY'] : ((isset($user->lang['YEAR_MONTH_DAY'])) ? $user->lang['YEAR_MONTH_DAY'] : '{ YEAR_MONTH_DAY }')); ?></td>
</tr>
<tr>
	<td class="row1" valign="top"><b><?php echo ((isset($this->_rootref['L_BAN_EXCLUDE'])) ? $this->_rootref['L_BAN_EXCLUDE'] : ((isset($user->lang['BAN_EXCLUDE'])) ? $user->lang['BAN_EXCLUDE'] : '{ BAN_EXCLUDE }')); ?>:</b><br /><span class="gensmall"><?php echo ((isset($this->_rootref['L_BAN_EXCLUDE_EXPLAIN'])) ? $this->_rootref['L_BAN_EXCLUDE_EXPLAIN'] : ((isset($user->lang['BAN_EXCLUDE_EXPLAIN'])) ? $user->lang['BAN_EXCLUDE_EXPLAIN'] : '{ BAN_EXCLUDE_EXPLAIN }')); ?></span></td>
	<td class="row2"><input type="radio" class="radio" name="banexclude" value="1" /> <?php echo ((isset($this->_rootref['L_YES'])) ? $this->_rootref['L_YES'] : ((isset($user->lang['YES'])) ? $user->lang['YES'] : '{ YES }')); ?> &nbsp; <input type="radio" class="radio" name="banexclude" value="0" checked="checked" /> <?php echo ((isset($this->_rootref['L_NO'])) ? $this->_rootref['L_NO'] : ((isset($user->lang['NO'])) ? $user->lang['NO'] : '{ NO }')); ?></td>
</tr>
<tr>
	<td class="row1" valign="top"><b><?php echo ((isset($this->_rootref['L_BAN_REASON'])) ? $this->_rootref['L_BAN_REASON'] : ((isset($user->lang['BAN_REASON'])) ? $user->lang['BAN_REASON'] : '{ BAN_REASON }')); ?>:</b></td>
	<td class="row2"><input name="banreason" type="text" class="post" maxlength="255" /></td>
</tr>
<tr>
	<td class="row1" valign="top"><b><?php echo ((isset($this->_rootref['L_BAN_GIVE_REASON'])) ? $this->_rootref['L_BAN_GIVE_REASON'] : ((isset($user->lang['BAN_GIVE_REASON'])) ? $user->lang['BAN_GIVE_REASON'] : '{ BAN_GIVE_REASON }')); ?>:</b></td>
	<td class="row2"><input name="bangivereason" type="text" class="post" maxlength="255" /></td>
</tr>
<tr>
	<td class="cat" colspan="2" align="center"><input type="submit" name="bansubmit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btnmain" />&nbsp; <input type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" class="btnlite" />&nbsp;</td>
</tr>
</table>

<br /><br />

<table width="100%" class="tablebg" cellspacing="1" cellpadding="4" border="0">
<tr>
	<th colspan="2" nowrap="nowrap"><?php echo ((isset($this->_rootref['L_UNBAN_TITLE'])) ? $this->_rootref['L_UNBAN_TITLE'] : ((isset($user->lang['UNBAN_TITLE'])) ? $user->lang['UNBAN_TITLE'] : '{ UNBAN_TITLE }')); ?></th>
</tr>
<tr>
	<td class="row3" colspan="2"><?php echo ((isset($this->_rootref['L_UNBAN_EXPLAIN'])) ? $this->_rootref['L_UNBAN_EXPLAIN'] : ((isset($user->lang['UNBAN_EXPLAIN'])) ? $user->lang['UNBAN_EXPLAIN'] : '{ UNBAN_EXPLAIN }')); ?></td>
</tr>
<?php if ($this->_rootref['S_BANNED_OPTIONS']) {  ?>
	<tr>
		<td class="row1" valign="top" width="45%"><b><?php echo ((isset($this->_rootref['L_BAN_CELL'])) ? $this->_rootref['L_BAN_CELL'] : ((isset($user->lang['BAN_CELL'])) ? $user->lang['BAN_CELL'] : '{ BAN_CELL }')); ?>:</b></td>
		<td class="row2"><select name="unban[]" multiple="multiple" size="10" style="width: 50%" onchange="if (this.selectedIndex > -1) display_details(this.options[this.selectedIndex].value); else display_details(-1);"><?php echo (isset($this->_rootref['BANNED_OPTIONS'])) ? $this->_rootref['BANNED_OPTIONS'] : ''; ?></select></td>
	</tr>
	<tr>
		<td class="row1" valign="top"><b><?php echo ((isset($this->_rootref['L_BAN_LENGTH'])) ? $this->_rootref['L_BAN_LENGTH'] : ((isset($user->lang['BAN_LENGTH'])) ? $user->lang['BAN_LENGTH'] : '{ BAN_LENGTH }')); ?>:</b></td>
		<td class="row2"><input style="border: 0; width: 100%" type="text" name="unbanlength" readonly="readonly" /></td>
	</tr>
	<tr>
		<td class="row1" valign="top"><b><?php echo ((isset($this->_rootref['L_BAN_REASON'])) ? $this->_rootref['L_BAN_REASON'] : ((isset($user->lang['BAN_REASON'])) ? $user->lang['BAN_REASON'] : '{ BAN_REASON }')); ?>:</b></td>
		<td class="row2"><textarea style="border: 0; width: 100%" name="unbanreason" readonly="readonly" rows="5" cols="80">&nbsp;</textarea></td>
	</tr>
	<tr>
		<td class="row1" valign="top"><b><?php echo ((isset($this->_rootref['L_BAN_GIVE_REASON'])) ? $this->_rootref['L_BAN_GIVE_REASON'] : ((isset($user->lang['BAN_GIVE_REASON'])) ? $user->lang['BAN_GIVE_REASON'] : '{ BAN_GIVE_REASON }')); ?>:</b></td>
		<td class="row2"><textarea style="border: 0; width: 100%" name="unbangivereason" readonly="readonly" rows="5" cols="80">&nbsp;</textarea></td>
	</tr>
	<tr>
		<td class="cat" colspan="2" align="center"><input type="submit" name="unbansubmit" value="<?php echo ((isset($this->_rootref['L_SUBMIT'])) ? $this->_rootref['L_SUBMIT'] : ((isset($user->lang['SUBMIT'])) ? $user->lang['SUBMIT'] : '{ SUBMIT }')); ?>" class="btnmain" />&nbsp; <input type="reset" value="<?php echo ((isset($this->_rootref['L_RESET'])) ? $this->_rootref['L_RESET'] : ((isset($user->lang['RESET'])) ? $user->lang['RESET'] : '{ RESET }')); ?>" class="btnlite" />&nbsp;</td>
	</tr>
<?php } else { ?>
	<tr>
		<td class="row1" colspan="2"><b><?php echo ((isset($this->_rootref['L_NO_BAN_CELL'])) ? $this->_rootref['L_NO_BAN_CELL'] : ((isset($user->lang['NO_BAN_CELL'])) ? $user->lang['NO_BAN_CELL'] : '{ NO_BAN_CELL }')); ?></b></td>
	</tr>
<?php } ?>
</table>
<?php echo (isset($this->_rootref['S_FORM_TOKEN'])) ? $this->_rootref['S_FORM_TOKEN'] : ''; ?>
</form>

<?php $this->_tpl_include('mcp_footer.html'); ?>