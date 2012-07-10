<?php exit; ?>
1341944569
SELECT s.style_id, c.theme_id, c.theme_data, c.theme_path, c.theme_name, c.theme_mtime, i.*, t.template_path FROM phpbb_styles s, phpbb_styles_template t, phpbb_styles_theme c, phpbb_styles_imageset i WHERE s.style_id = 2 AND t.template_id = s.template_id AND c.theme_id = s.theme_id AND i.imageset_id = s.imageset_id
12703
a:1:{i:0;a:11:{s:8:"style_id";s:1:"2";s:8:"theme_id";s:1:"2";s:10:"theme_data";s:12363:"/*
Theme Name: CoDFaction
Theme URI: http://www.codfaction.com
Description: CoDFaction Design
Author: Daniel St. Jules
Author URI: http://www.gamexe.net, http://www.codfaction.com, http://www.webenuity.ca
*/

* {
	margin: 0;
	padding: 0;
	border: none;
}

.fl { float: left; }

.fr { float: right; }

.clear { clear: both; }

html,body {
	margin: 0;
	padding: 0;
	height: 100%;
	background: #1b1b1b;
	font-family: Tahoma, Verdana, Arial, Sans-Serif;
	font-size: 11px;
	color: #8f8f8f;
	min-width: 956px;
}

#container {
	position: relative;
	width: 100%;
	background: url({T_THEME_PATH}/images/bg.jpg) top center no-repeat;
	height: auto !important;
	height: 100%;
	min-height: 100%;
	min-width: 956px;
}

#topbarwrapper {
	height: 70px;
	width: 100%;
	background: url({T_THEME_PATH}/images/topbarbg.jpg) top center no-repeat;
	background-position: 50% 46px;
	min-width: 956px;
}
<center>
#topbar {
	height: 46px;
	width: 100%;
	<center>background: url({T_THEME_PATH}/images/topbar.jpg) top left no-repeat;
}
</center>
.topbarcenter {
	width: 916px;
	margin: 0 auto;
	padding: 20px 20px 0 20px;
}

.topbarcenter .fl a, .topbarcenter .fl a:active, .topbarcenter .fl a:visited, .topbarcenter .fl a:hover {
	color: #afabad;
}

.toplogin {
	float: right;
	position: relative;
	top: -2px;
}

.toppassword {
	color: #afabad;
	font-size: 11px;
	font-weight: normal;
	border: 0;
	background: url({T_THEME_PATH}/images/password.jpg) top center no-repeat;
	width: 133px;
	vertical-align: top;
	height: 18px;
	padding: 4px 0 0 5px;
}

.topusername {
	color: #afabad;
	font-size: 11px;
	font-weight: normal;
	border: 0;
	background: url({T_THEME_PATH}/images/username.jpg) top center no-repeat;
	width: 133px;
	vertical-align: top;
	height: 18px;
	padding: 4px 0 0 5px;
}

.topsubmit {
	color: #494849;
	font-size: 1px;
	font-weight: normal;
	padding: 0;
	border: 0;
	background: url({T_IMAGESET_LANG_PATH}/topsubmit.jpg) top center no-repeat;
	width: 58px;
	height: 22px;
	vertical-align: top;
	text-align: left;
	vertical-align: top;
}

#breadc {
	width: 916px;
	margin: 0 auto;
	padding: 5px 20px 0 20px;
	color: #464646;
	font-size: 11px;
}

#breadc a, #breadc a:active, #breadc a:visited, #breadc a:hover {
	color: #464646;
}

#wrapper {
	margin: 0 auto;
	padding-top: 140px;
	background: url("{T_IMAGESET_PATH}/banner.jpg") top center no-repeat;
	width: 956px;
	border: 1px solid #414141;
	border-width: 0 1px 0 1px;
	height: auto !important;
	height: 100%;
	min-height: 100%;
}

#navigation {
	background: url("{T_THEME_PATH}/images/nav.jpg") top center no-repeat;
	width: 956px;
	height: 64px;
	padding: 10px 0 0 0;
	clear: both; 
	float: left; 
	overflow: hidden;
}

#nav {
	padding: 0; 
	margin: 0 auto; 
	list-style-type: none;
	float: left;
	position: relative; 
	left: 50%;
}

#nav li {
	float:left; 
	position:relative; 
	right:50%;
}

#nav a {
	width: 102px;
	display: block;
	height: 103px;
	margin: 0 0px;
}

#nav a:hover {
	background-position: 0 -62px;
}

.nav_home {
	background: url("{T_IMAGESET_LANG_PATH}/nav_home.png") 0 0 no-repeat;
}


.nav_media {
	background: url("{T_IMAGESET_LANG_PATH}/nav_media.png") 0 0 no-repeat;
}

.nav_community {
	background: url("{T_IMAGESET_LANG_PATH}/nav_community.png") 0 0 no-repeat;
}

.nav_status {
	background: url("{T_IMAGESET_LANG_PATH}/nav_status.png") 0 0 no-repeat;
}

.nav_forum {
	background: url("{T_IMAGESET_LANG_PATH}/nav_forum.png") 0 0 no-repeat;
}

.nav_services {
	background: url("{T_IMAGESET_LANG_PATH}/nav_services.png") 0 0 no-repeat;
}

.nav_ucp {
	background: url("{T_IMAGESET_LANG_PATH}/nav_ucp.png") 0 0 no-repeat;
}

.nav_members {
	background: url("{T_IMAGESET_LANG_PATH}/nav_members.png") 0 0 no-repeat;
}

.nav_search {
	background: url("{T_IMAGESET_LANG_PATH}/nav_search.png") 0 0 no-repeat;
}

.nav_register {
	background: url("{T_IMAGESET_LANG_PATH}/nav_register.png") 0 0 no-repeat;
}

.nav_home span, .nav_ucp span, .nav_members span, .nav_search span, .nav_register span{
	display: none; text-indent: -5000px;
}

#contentwrapper {
	width: 916px;
	padding: 6px 20px 20px 20px;
	clear: both;
	background: url("{T_THEME_PATH}/images/containerbg.jpg") top center repeat-y;
	background-position: 0 -14px;
	min-height: 587px;
}

#wrapfooter {
	text-align: center;
	clear: both;
}

#menubar {
	margin: 0 25px;
}

#datebar {
	margin: 10px 25px 0 25px;
}

#findbar {
	width: 100%;
	margin: 0;
	padding: 0;
	border: 0;
}

.forumrules {
	padding: 4px;
	font-weight: normal;
	font-size: 1.1em;
	background: url('{T_THEME_PATH}/images/row.png') repeat;
}

.forumrules h3 {
	color: #d65454;
}

/*  Text
 --------------------- */
h1 {
	color: black;
	font-weight: bold;
	font-size: 1.8em;
	text-decoration: none;
}

h2 {
	font-weight: bold;
	font-size: 11px;
	text-decoration: none;
	line-height: 120%;
	padding-top: 2px;
}

h3 {
	font-size: 1.3em;
	font-weight: bold;
	line-height: 120%;
}

h4 {
	margin: 0;
	font-size: 1.1em;
	font-weight: bold;
}

p {
	font-size: 1.1em;
}

p.moderators {
	margin: 0;
	float: left;
	font-weight: bold;
}

.rtl p.moderators {
	float: right;
}

p.linkmcp {
	margin: 0;
	float: right;
	white-space: nowrap;
}

.rtl p.linkmcp {
	float: left;
}

p.breadcrumbs {
	margin: 0;
	float: left;
	font-weight: bold;
	white-space: normal;
}

.rtl p.breadcrumbs {
	float: right;
}

p.datetime {
	margin: 0;
	float: right;
	white-space: nowrap;
	font-size: 1em;
}

.rtl p.datetime {
	float: left;
}

p.searchbar {
	padding: 2px 0;
	white-space: nowrap;
} 

p.searchbarreg {
	margin: 0;
	float: right;
	white-space: nowrap;
}

.rtl p.searchbarreg {
	float: left;
}

p.forumdesc {
	padding-bottom: 4px;
}

p.topicauthor {
	margin: 1px 0;
}

p.topicdetails {
	margin: 1px 0;
}

.postreported, .postreported a:visited, .postreported a:hover, .postreported a:link, .postreported a:active {
	font-weight:bold;
}

.postapprove, .postapprove a:visited, .postapprove a:hover, .postapprove a:link, .postapprove a:active {
	font-weight:bold;
}

.postapprove img, .postreported img {
	vertical-align: bottom;
	padding-top: 5px;
}

.postauthor {
	color: #8f8f8f;
}

.postdetails {
	color: #8f8f8f;
}

.postbody {
	line-height: 1.4em;
	font-size: 12px;
}

.postbody li, ol, ul {
	margin: 0 0 0 1.5em;
}

.rtl .postbody li, .rtl ol, .rtl ul {
	margin: 0 1.5em 0 0;
}

.posthilit {
	background-color: #78927f;
	color: #000000;
}

.nav {
	margin: 0;
	color: #8f8f8f;
	font-weight: bold;
}

.pagination {
	padding: 4px;
	color: #8f8f8f;
	font-size: 1em;
	font-weight: bold;
}

.cattitle {

}

.gen {
	font-size: 11px;
	margin: 1px 1px;
}

.genmed {
	font-size: 11px;
	margin: 1px 1px;
}

.gensmall {
	font-size: 11px;
	margin: 1px 1px;
}

.copyright {
	color: #444;
	font-weight: normal;
	font-size: 11px;
}

.titles {
	font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
	font-weight: bold;
	font-size: 1.3em;
	text-decoration: none;
}

.error {
	color: red;
}


/* Tables
 ------------ */
th {
	background: url('{T_THEME_PATH}/images/cell1.jpg') no-repeat;
	text-align: left;
	height: 36px;
	padding: 2px 0 0 10px;
}

td {
	padding: 2px;
}
td.profile {
	padding: 4px;
}

.tablebg {
}

.listsecond {
	width: 71px;
	font-size: 10px;
}

.listlast {
	width: 200px;
	font-size: 10px;
}

.catdiv {
	margin: 0;
	border: 0;
	background: url('{T_THEME_PATH}/images/cell1.jpg') no-repeat;
	height: 36px;
	padding: 2px 0 0 10px;
}
.rtl .catdiv {
	background: url('{T_THEME_PATH}/images/cell1.jpg') no-repeat;
}

.cat {
	height: 34px;
	margin: 0;
	padding: 0;
	border: 0;
	background: url('{T_THEME_PATH}/images/cell2.jpg') no-repeat;
	text-indent: 4px;
}

.row1 {
	background: url('{T_THEME_PATH}/images/row.png') repeat;
	padding: 4px;
}

.row2 {
	background: url('{T_THEME_PATH}/images/row.png') repeat;
	padding: 4px;
}

.row3 {
	background: url('{T_THEME_PATH}/images/row.png') repeat;
	padding: 4px;
}

.spacer {
	background: url('{T_THEME_PATH}/images/spacer.jpg') repeat;
}

hr {
	height: 1px;
	border-width: 0;
	background-color: #252525;
	color: #252525;
}

.legend {
	text-align:center;
	margin: 0 auto;
}

/* Links
 ------------ */
 
/* Links adjustment to correctly display an order of rtl/ltr mixed content */
.rtl a {
	direction: rtl;
	unicode-bidi: embed;
}
 
a:link {
	color: #54695a;
	text-decoration: none;
}

a:active,
a:visited {
	color: #54695a;
	text-decoration: none;
}

a:hover {
	color: #78927f;
	text-decoration: none;
}

a.forumlink {

	font-weight: bold;
	font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
	font-size: 1.2em;
}

a.topictitle {
	margin: 1px 0;
	font-family: "Lucida Grande", Helvetica, Arial, sans-serif;
	font-weight: bold;
	font-size: 1.2em;
}

a.topictitle:visited {
	color: #6a6a6a;
	text-decoration: none;
}

th a,
th a:visited {
	color: #FFA34F !important;
	text-decoration: none;
}

th a:hover {
	text-decoration: underline;
}


/* Form Elements
 ------------ */
form {
	margin: 0;
	padding: 0;
	border: 0;
}

input {
	color: #afabad;
	font-weight: normal;
	background: #272626 url({T_THEME_PATH}/images/input.jpg) top left no-repeat;
	height: 18px;
	padding: 4px 0 0 5px;
	font-size: 11px;
	vertical-align: middle;
}

textarea {
	color: #afabad;
	font-family: Tahoma, Verdana, Arial, Sans-Serif;
	font-size: 12px; 
	line-height: 1.4em;
	font-weight: normal;
	padding: 2px;
	background: #272626 url({T_THEME_PATH}/images/textarea.jpg) top left no-repeat;
}

select {
	color: #afabad;
	font-weight: normal;
	border: 1px solid #272828;
	vertical-align: middle;
	background: #1e1e1e;
	height: 21px;
}

option {
	padding: 0 1em 0 0;
}

option.disabled-option {
	color: graytext;
}

.rtl option {
	padding: 0 0 0 1em;
}

input.radio {
	border: none;
	background-color: transparent;
	vertical-align: middle;
}

.btnbbcode {
	font-weight: normal;
	height: 21px;
	padding: 1px 5px 3px 5px;
	font-size: 11px;
	background: #272626 url({T_THEME_PATH}/images/submit.jpg) top left no-repeat;
	vertical-align: middle;
}

.btnmain {
	font-weight: bold;
	cursor: pointer;
	height: 21px;
	padding: 1px 5px 3px 5px;
	font-size: 11px;
	background: #272626 url({T_THEME_PATH}/images/submit.jpg) top left no-repeat;
	vertical-align: middle;
}

.btnlite {
	font-weight: normal;
	cursor: pointer;
	height: 21px;
	padding: 1px 5px 3px 5px;
	font-size: 11px;
	background: #272626 url({T_THEME_PATH}/images/submit.jpg) top left no-repeat;
	vertical-align: middle;
}

.btnfile {
	font-weight: normal;
	height: 21px;
	padding: 1px 5px 3px 5px;
	font-size: 11px;
	background: #272626 url({T_THEME_PATH}/images/submit.jpg) top left no-repeat;
	border: 0px;
	vertical-align: middle;
}

.helpline {
	background: transparent;
}


/* BBCode
 ------------ */
.quotetitle, .attachtitle {
	margin: 10px 5px 0 5px;
	padding: 4px;
	border-width: 1px 1px 0 1px;
	border-style: solid;
	border-color: #110f10;
	color: #d0d0d0;
	background-color: #262425;
	font-size: 0.85em;
	font-weight: bold;
}

.quotetitle .quotetitle {
	font-size: 1em;
}

.quotecontent, .attachcontent {
	margin: 0 5px 10px 5px;
	padding: 5px;
	border-color: #110f10;
	border-width: 1px;
	border-style: solid;
	font-weight: normal;
	font-size: 1em;
	line-height: 1.4em;
	background-color: #343233;
	color: #8f8f8f;
}

.attachcontent {
	font-size: 0.85em;
}

.codetitle {
	margin: 10px 5px 0 5px;
	padding: 4px;
	border-width: 1px 1px 0 1px;
	border-style: solid;
	border-color: #110f10;
	color: #d0d0d0;
	background-color: #262425;
	font-size: 0.85em;
	font-weight: bold;
}

.codecontent {
	margin: 0 5px 10px 5px;
	padding: 5px;
	border-color: #110f10;
	border-width: 1px;
	border-style: solid;
	font-weight: normal;
	font-size: 1em;
	line-height: 1.4em;
	background-color: #343233;
	color: #8f8f8f;
	font-family: Monaco, 'Courier New', monospace;
}

.syntaxbg {
	color: #FFFFFF;
}

.syntaxcomment {
	color: #FF8000;
}

.syntaxdefault {
	color: #0000BB;
}

.syntaxhtml {
	color: #000000;
}

.syntaxkeyword {
	color: #007700;
}

.syntaxstring {
	color: #DD0000;
}


/* Private messages
 ------------------ */
.pm_marked_colour {
	background-color: #000000;
}

.pm_replied_colour {
	background-color: #A9B8C2;
}

.pm_friend_colour {
	background-color: #007700;
}

.pm_foe_colour {
	background-color: #DD0000;
}


/* Misc
 ------------ */
img {
	border: none;
}

.sep {
	color: black;
	background-color: #FFA34F;
}

table.colortable td {
	padding: 0;
}

pre {
	font-size: 1.1em;
	font-family: Monaco, 'Courier New', monospace;
}

.nowrap {
	white-space: nowrap;
}

.username-coloured {
	font-weight: bold;
}";s:10:"theme_path";s:1:"Z";s:10:"theme_name";s:1:"Z";s:11:"theme_mtime";s:10:"1341865077";s:11:"imageset_id";s:1:"2";s:13:"imageset_name";s:1:"Z";s:18:"imageset_copyright";s:11:"&copy; 2012";s:13:"imageset_path";s:1:"Z";s:13:"template_path";s:1:"Z";}}