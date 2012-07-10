<?php if (!defined('IN_PHPBB')) exit; ?><br />
<?php if (! $this->_rootref['S_IS_BOT']) {  echo (isset($this->_rootref['RUN_CRON_TASK'])) ? $this->_rootref['RUN_CRON_TASK'] : ''; } ?>


<!--
	We request you retain the full copyright notice below including the link to www.phpbb.com.
	This not only gives respect to the large amount of time given freely by the developers
	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain
	the full copyright we ask you at least leave in place the "Powered by phpBB" line, with
	"phpBB" linked to www.phpbb.com. If you refuse to include even this then support on our
	forums may be affected.

	The phpBB Group : 2006
//-->

<div id="wrapfooter">
	<?php if ($this->_rootref['U_ACP']) {  ?><span class="gensmall">[ <a href="<?php echo (isset($this->_rootref['U_ACP'])) ? $this->_rootref['U_ACP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_ACP'])) ? $this->_rootref['L_ACP'] : ((isset($user->lang['ACP'])) ? $user->lang['ACP'] : '{ ACP }')); ?></a> ]</span><br /><?php } if ($this->_rootref['U_MCP']) {  ?><span class="gensmall">[ <a href="<?php echo (isset($this->_rootref['U_MCP'])) ? $this->_rootref['U_MCP'] : ''; ?>"><?php echo ((isset($this->_rootref['L_MCP'])) ? $this->_rootref['L_MCP'] : ((isset($user->lang['MCP'])) ? $user->lang['MCP'] : '{ MCP }')); ?></a> ]</span><br /><?php } ?><br />
	<span class="copyright">Powered by <a href="http://zeron-wow.dyndns.org/">ZeRoN WoW</a> &copy; 2012 <a href="http://zeron-wow.dyndns.org/"><center><img src="http://zeron-wow.dyndns.org/download/wof-logo.png" alt="" align="absBottom"></a></center>
	<?php if ($this->_rootref['TRANSLATION_INFO']) {  ?><br /><?php echo (isset($this->_rootref['TRANSLATION_INFO'])) ? $this->_rootref['TRANSLATION_INFO'] : ''; } if ($this->_rootref['DEBUG_OUTPUT']) {  ?><br /><bdo dir="ltr">[ <?php echo (isset($this->_rootref['DEBUG_OUTPUT'])) ? $this->_rootref['DEBUG_OUTPUT'] : ''; ?> ]</bdo><?php } ?></span>
</div>

	</div>
</div>

</div>

</body>
</html>