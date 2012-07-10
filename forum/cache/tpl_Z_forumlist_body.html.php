<?php if (!defined('IN_PHPBB')) exit; ?><table class="tablebg" cellspacing="1" width="100%">
<?php $_forumrow_count = (isset($this->_tpldata['forumrow'])) ? sizeof($this->_tpldata['forumrow']) : 0;if ($_forumrow_count) {for ($_forumrow_i = 0; $_forumrow_i < $_forumrow_count; ++$_forumrow_i){$_forumrow_val = &$this->_tpldata['forumrow'][$_forumrow_i]; if ($_forumrow_val['S_IS_CAT']) {  ?>
		<tr>
			<td class="catdiv" colspan="5"><h2><?php echo $_forumrow_val['FORUM_NAME']; ?></h2></td>
		</tr>
	<?php } else if ($_forumrow_val['S_IS_LINK']) {  ?>
		<tr>
			<td class="row1" width="50" align="center"><?php echo $_forumrow_val['FORUM_FOLDER_IMG']; ?></td>
			<td class="row1">
				<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>
					<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>; margin-<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>: 5px;"><?php echo $_forumrow_val['FORUM_IMAGE']; ?></div>
				<?php } ?>
				<a class="forumlink" href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a>
				<p class="forumdesc"><?php echo $_forumrow_val['FORUM_DESC']; ?></p>
			</td>
			<?php if ($_forumrow_val['CLICKS']) {  ?>
				<td class="row2" colspan="3" align="center"><span class="genmed"><?php echo ((isset($this->_rootref['L_REDIRECTS'])) ? $this->_rootref['L_REDIRECTS'] : ((isset($user->lang['REDIRECTS'])) ? $user->lang['REDIRECTS'] : '{ REDIRECTS }')); ?>: <?php echo $_forumrow_val['CLICKS']; ?></span></td>
			<?php } else { ?>
				<td class="row2" colspan="3" align="center">&nbsp;</td>
			<?php } ?>
		</tr>
	<?php } else { if ($_forumrow_val['S_NO_CAT']) {  ?>
			<tr>
				<td class="catdiv" colspan="2"><h4><?php echo ((isset($this->_rootref['L_FORUM'])) ? $this->_rootref['L_FORUM'] : ((isset($user->lang['FORUM'])) ? $user->lang['FORUM'] : '{ FORUM }')); ?></h4></td>
			</tr>
		<?php } ?>
		<tr>
			<td class="row1" width="50" align="center"><?php echo $_forumrow_val['FORUM_FOLDER_IMG']; ?></td>
			<td class="row1">
				<?php if ($_forumrow_val['FORUM_IMAGE']) {  ?>
					<div style="float: <?php echo (isset($this->_rootref['S_CONTENT_FLOW_BEGIN'])) ? $this->_rootref['S_CONTENT_FLOW_BEGIN'] : ''; ?>; margin-<?php echo (isset($this->_rootref['S_CONTENT_FLOW_END'])) ? $this->_rootref['S_CONTENT_FLOW_END'] : ''; ?>: 5px;"><?php echo $_forumrow_val['FORUM_IMAGE']; ?></div>
				<?php } ?>
				<a class="forumlink" href="<?php echo $_forumrow_val['U_VIEWFORUM']; ?>"><?php echo $_forumrow_val['FORUM_NAME']; ?></a>
				<p class="forumdesc"><?php echo $_forumrow_val['FORUM_DESC']; ?></p>
				<?php if ($_forumrow_val['MODERATORS']) {  ?>
					<p class="forumdesc"><strong><?php echo $_forumrow_val['L_MODERATOR_STR']; ?>:</strong> <?php echo $_forumrow_val['MODERATORS']; ?></p>
				<?php } if ($_forumrow_val['SUBFORUMS'] && $_forumrow_val['S_LIST_SUBFORUMS']) {  ?>
					<p class="forumdesc"><strong><?php echo $_forumrow_val['L_SUBFORUM_STR']; ?></strong> <?php echo $_forumrow_val['SUBFORUMS']; ?></p>
				<?php } ?>
			</td>
			<td class="row2 listsecond" align="center"><p class="topicdetails"><?php echo $_forumrow_val['TOPICS']; ?></p></td>
			<td class="row2 listsecond" align="center"><p class="topicdetails"><?php echo $_forumrow_val['POSTS']; ?></p></td>
			<td class="row2 listlast" align="center" nowrap="nowrap">
				<?php if ($_forumrow_val['LAST_POST_TIME']) {  ?>
					<p class="topicdetails"><?php if ($_forumrow_val['U_UNAPPROVED_TOPICS']) {  ?><a href="<?php echo $_forumrow_val['U_UNAPPROVED_TOPICS']; ?>"><?php echo (isset($this->_rootref['UNAPPROVED_IMG'])) ? $this->_rootref['UNAPPROVED_IMG'] : ''; ?></a>&nbsp;<?php } echo $_forumrow_val['LAST_POST_TIME']; ?></p>
					<p class="topicdetails">Last post by: <?php echo $_forumrow_val['LAST_POSTER_FULL']; ?>
					</p>
				<?php } else { ?>
					<p class="topicdetails"><?php echo ((isset($this->_rootref['L_NO_POSTS'])) ? $this->_rootref['L_NO_POSTS'] : ((isset($user->lang['NO_POSTS'])) ? $user->lang['NO_POSTS'] : '{ NO_POSTS }')); ?></p>
				<?php } ?>
			</td>
		</tr>
	<?php } }} else { ?>
	<tr>
		<td class="row1" colspan="5" align="center"><p class="gensmall"><?php echo ((isset($this->_rootref['L_NO_FORUMS'])) ? $this->_rootref['L_NO_FORUMS'] : ((isset($user->lang['NO_FORUMS'])) ? $user->lang['NO_FORUMS'] : '{ NO_FORUMS }')); ?></p></td>
	</tr>
<?php } ?>
</table>