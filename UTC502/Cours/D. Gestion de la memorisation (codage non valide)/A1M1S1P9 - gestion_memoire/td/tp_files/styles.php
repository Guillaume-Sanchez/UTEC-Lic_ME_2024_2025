/**************************************
 * THEME NAME: standard
 *
 * Files included in this sheet:
 *
 *   standard/styles_layout.css
 *   /mod/assignment/styles.php
 *   /mod/choice/styles.php
 *   /mod/data/styles.php
 *   /mod/lesson/styles.php
 *   /mod/scorm/styles.php
 *   /mod/workshop/styles.php
 *   /blocks/blog_tags/styles.php
 *   /blocks/calendar_month/styles.php
 *   /blocks/calendar_upcoming/styles.php
 *   /blocks/course_summary/styles.php
 *   /blocks/login/styles.php
 *   /blocks/news_items/styles.php
 *   /blocks/quiz_results/styles.php
 *   /blocks/rss_client/styles.php
 *   /blocks/search_forums/styles.php
 *   /grade/report/grader/styles.php
 *   /grade/report/user/styles.php
 **************************************/

/***** standard/styles_layout.css start *****/

/*******************************************************************
 styles_layout.css

 This CSS file contains all layout definitions like positioning,
 floats, margins, padding, borders etc.

 Styles are organised into the following sections:
  core
  forms
  header
  footer

  admin
  blocks
  blog
  calendar
  course
  doc
  grades
  login
  message
  notes
  mymoodle
  question
  tabs
  tags
  user

  various modules

*******************************************************************/


/***
 *** Core
 ***/

h1.main,
h2.main,
h3.main,
h4.main,
h5.main,
h6.main {
  text-align: center;
}

#layout-table {
  width:100%;
  border-collapse:separate;
  margin-top: 8px;
}

#layout-table #left-column,
#layout-table #middle-column,
#layout-table #right-column
{
  vertical-align:top;
}

#layout-table #middle-column {
  padding-left:12px;
  padding-right:12px;
}

.clearer {
  clear:both;
  margin:0;
  padding:0;
  height:1px;
  border:none;
  background:transparent;
  display:block;
}

.clearfix {
  min-width: 0;
  /* overflow: hidden; */
}

.clearfix:after {
  /* content: "<!-- -->";  */
  content: ".";
  display: block;
  height: 0;
  clear: both;
  visibility: hidden;
}

#redirect {
  text-align: center;
}

#redirect #message {

}

#redirect #continue {

}

/* .clearfix {display: inline-table;} */

/* Hides from IE-mac \*/
* html .clearfix {height: 1%;}
.clearfix {display: block;}
/* End hide from IE-mac */

.mdl-align {
  text-align: center;
}

.continuebutton {
  text-align: center;
}

form {
  margin-bottom:0;
}

table {
  border-spacing: 0;
  border-collapse: collapse;
}

a img {
  border:none;
}

img.userpicture,
img.grouppicture {
  border: 0;
}

#grouppicture {
  text-align: center;
}

div.groupselector {
  float: left;
  margin-top: 3px;
  margin-bottom: 3px;
}

#addmembersform table {
  margin-left: auto;
  margin-right: auto;
}

.notifyproblem {
  text-align: center;
  padding: 10px;
}

.notifysuccess {
  text-align:center;
  padding: 10px;
}

.notifytiny {
  text-align:left;
  padding: 0;
}

.singlebutton form,
.singlebutton div {
  display:inline;
}

.box {
  clear: both;
}

.generalbox {
  border-width:1px;
  border-style:solid;
  margin-bottom: 15px;
  padding:10px;
}

.generalbox#intro {
  width:70%;
  margin-left:auto;
  margin-right:auto;
  padding-bottom:15px;
}

.boxaligncenter {
  margin-left:auto;
  margin-right:auto;
}

.boxalignright {
  margin-left:auto;
  margin-right:0;
}

.boxalignleft {
  margin-left:0;
  margin-right:auto;
}

.boxwidthnarrow {
  width: 30%
}

.boxwidthnormal {
  width: 50%
}

.boxwidthwide {
  width: 80%
}

.centerpara {
  text-align:center
}

.noticebox {
  border-width:1px;
  border-style:solid;
  padding:10px;
}

#notice.generalbox {
  width: 60%;
  margin-left:auto;
  margin-right:auto;
}

#notice .buttons {
  text-align:center
}

#notice .buttons div,
#notice .buttons form {
  display:inline;
}

#notice .singlebutton {
  text-align:center;
  padding: 5px;
  margin: 0px;
}

.errorbox {
  border-width:1px;
  border-style:solid;
  margin: 1em 15%;
  width: 70%;
  padding:10px;
}

.errorbox .title {
  padding: 5px;
}

.informationbox {
  border-width:1px;
  border-style:solid;
  padding: 10px;
}

.feedbackbox {
  border-width:1px;
  border-style:solid;
}

.feedbackby {
}

.feedback {
}

.rsslink {
  padding:  0 0 0 0.3em;
}

.printicon {
  padding:  0 0 0 0.3em;
}

.generaltable {
  border-width: 1px;
  border-style: solid;
}

.generaltable .cell {
  border-width: 1px;
  border-style: solid;
  border-collapse: collapse;
}

#participationreport .reporttable {
  text-align: center;
  margin-left:auto;
  margin-right:auto;
}

#participationreport {
  text-align: center;
}

#participationreport .modulename {
  font-weight: bold;
}

#participationreportselector {
  text-align: center;
}

#participationreportactions {
  text-align: center;
}

.initialbar {
  text-align: center;
}

#help .indent {
  margin-left:3em;
}

.closewindow,
#help .helpindex {
  text-align: center;
}

.tabledivider {
  border-width:1px;
  border-style:solid;
  border-left:0;
  border-right:0;
  border-top:0;
}

.sitetopic {
  margin-bottom:20px;
}

.sitetopiccontent {
  border-width:1px;
  border-style:solid;
}

.pagingbar {
  text-align:center;
}

table.formtable {
  margin: auto;
}

table.formtable tbody th {
  vertical-align: top;
}

table.formtable tbody td,
table.formtable tbody th
{
  padding: 5px;
}

table.formtable tbody .htmlarea td,
table.formtable tbody .htmlarea th
{
  padding: 0;
}

.flexible th
{
  white-space: nowrap;
}

.paging {
  text-align: center;
  margin: 10px 0 10px 0;
}

.unread {
  padding-right:2px;
}

.cell {
  vertical-align: top;
}

.helplink img {
  vertical-align: middle;
  margin: 0 2px;
  width: 17px;
  height: 17px;
}

img.emoticon {
  vertical-align: middle;
  width: 15px;
  height: 15px;
}

form.popupform,
form.popupform div {
  display: inline;
}

form.popupform label {
  margin-right: 0.5em;
}

.arrow_button {
  margin-top:3em;
}

.arrow_button input {
  padding:0.3em;
  overflow:hidden;
}

.groupmanagementtable td {
  vertical-align: top;
}

.groupmanagementtable p {
  text-align: center;
}

.groupmanagementtable select {
  width: 18em;
}

#group-groupings .buttons {
  margin: 20px;
  text-align:center;
}

#group-groupings .buttons .singlebutton {
  display: inline;
  padding: 5px;
}

#group-usersummary {
  width: 14em;
}

img.icon {
  vertical-align:middle;
  margin-right:4px;
  width:16px;
  height:16px;
  border:0px;
}

img.iconsmall {
  vertical-align:middle;
  margin-right:1px;
  width:11px;
  height:11px;
  border:0px;
}

img.iconhelp {
  vertical-align:middle;
  margin-right:4px;
  width:17px;
  height:17px;
  border:0px;
}

img.iconkbhelp {
  width:49px;
  height:17px;
  border:0px;
}

/*Accessibility: text 'seen' by screen readers but not visual users. Fixed for RTL languages, example Farsi. */
.accesshide {
  position:absolute;
  top:-100000px;
  left:10px;
  font-weight:normal;
  font-size:1em;
}

.invisiblefieldset {
  display:inline;
  border:0px;
  padding:0px;
  margin:0px;
}

span.hide,
div.hide {
  display:none;
}

/***
 *** Forms
 ***/

.mform {
  margin: 0 auto;
  padding: 0;
  width: 80%;
}
.mform fieldset {
  border: 1px solid #DDDDDD;
  padding: 10px 0;
  margin: 0.7em 0;
  width:100%;
}
.mform fieldset.hidden, .mform fieldset.felement {
  border: 0;
}
.mform fieldset.felement {
  width: auto;
}
.mform fieldset legend {
  font-weight: bold;
  margin-left: 0.5em;
}
.mform fieldset .advancedbutton{
   width:100%;
   text-align:right;
}
.mform div.fitem {
  clear: both;
  width: 100%;
  min-height: 1.5em;
}

.mform .fitemtitle {
  display: block;
  float: left;
  width: 30%;
  padding: 0;
  margin: 5px 0 0 10px;
  text-align: right;
}

.mform .fitemtitle div{
  display: inline;
}

div.fitem fieldset.fgroup label, div.fradio label,  div.fcheckbox label,
fieldset.fdate_selector label {
  display:inline;
  float: none;
  width: auto;
}

.mform div.felement,  .mform fieldset.felement{
  display: block;
  float: left;
  margin: 5px 0 0 10px;
  padding: 0;
  text-align:left;
  width: 60%;
}

.mform div.fdescription {
  clear: both;
  min-height: 1.5em;
}

.mform .fdescription.required {
  text-align:right;
}

.mform input, .mform select {
  width: auto;
}
.mform .ftextarea #id_alltext {
    width: 100%;
}
.mform br {
  clear: left;
}
.mform div.fhtmleditor {
  margin: 0 auto 10px auto;
  width : 600px;
  clear:both;
  float:none;
  padding: 25px 0 20px 0;
}
.mform span.error, .mform span.required {
  color: red;
}
.mform div.error,.mform fieldset.error {
  border: 1px solid red;
  padding: 5px;
  color: inherit;
}
.mform .fcheckbox input {
  margin-left: 0px;
}
.mform .fpassword .unmask {
  display:inline;
}
.mform .fpassword .unmask input {
  margin-left:5px;
  margin-right:3px;
}

.mform label .req, .mform label .adv {
  cursor: help;
}

/* form frozen */
div.mform div.fitem div.fstatic{
 border-color : #D3D3D3;
 border-style : dashed;
 border-width : thin;
}

#admin-register .mform .fsubmit {
  padding:20px;
  text-align:center;
}

div.phpinfo .center{
  text-align: center;
}

div.phpinfo .center table {
  margin-left: auto;
  margin-right: auto;
  text-align: left;
}

div.phpinfo .center th {
  text-align: center;
}

.backup-form-instances {
   margin:0px 20px 0px 20px;
}
.restore-form-instances {
   margin:0px 20px 0px 20px;
}


/***
 *** Header
 ***/

#header-home {
}

#header {
}

.headermain, h1.headermain {
  float:left;
  margin:0;
  padding:0;
}

.headermenu {
  float:right;
  text-align:right;
}

.navigation li,
.navigation div,
.navigation button,
.navigation form {
  display: inline;
}

.navbar {
  width:auto;
  padding:3px 0.5em;
  border-width:1px;
  border-style:solid;
}

.navbar .langmenu {
  text-align:right;
}

table.navbar {
  width: 100%;
}

.navbar .navbutton {
  margin-top: 3px;
  float: left;
}

.navbar .navbutton div,
.navbar .navbutton form {
  display:inline;
  margin:0px;
  padding:0px;
}

.navbar .breadcrumb {
  float:left;
  margin:0.2em 0;
}

.breadcrumb ul {
  padding:0;
  margin:0;
  text-indent:0;
  list-style:none;
}
.breadcrumb li {
  display:inline;
}

.navbar .navbutton,
.navbar .menu {
  float:right;
}

#footer .navbar {
  margin-top: 4em;
}

.reportlink {
  text-align:right;
}

.navigation {
  margin-bottom: 4px;
}

.navigation ul {
  margin:0px;
  padding:0px;
  list-style-type:none;
}

.navigation ul li form,
.navigation ul li {
  display:inline;
  margin:0px;
  padding:0px;
  margin-left:2px;
}

.navigation ul li form fieldset,
.navigation ul li form div select {
  vertical-align: middle;
}

.navigation optgroup {
  text-align:center;
  padding-top:4px;
}

.navigation option {
  text-align:left;
}

.navigation optgroup option {
  padding:0px;
}

#navmenupopup option,
#navmenufooterpopup option {
  padding: 2px 0 2px 20px;
  background-repeat: no-repeat;
  background-position: 1px 2px;
  vertical-align: middle;
}

/***
 *** Footer
 ***/

#footer {
  text-align:center;
  margin-top: 40px;
}

.homelink {
  margin: 1em 0;
}

.homelink a {
  padding-left:1em;
  padding-right:1em;
}

.sitelink {
  padding-top:1em;
}

.performanceinfo {
  margin: 2em;
}

.performanceinfo span {
  display: block;
}

#footer .validators {
  margin-top:40px;
  padding-top:5px;
  border-top: 1px dotted gray;
}

#footer .validators ul {
  margin:0px;
  padding:0px;
  list-style-type:none;
}

#footer .validators ul li {
  display:inline;
  margin-right:10px;
  margin-left:10px;
}

/***
 *** Filters
 ***/
span.mediaplugin {
  display:block;
  clear:both;
  margin-top:5px;
  margin-bottom:5px;
}

span.mediaplugin_mp3 {
  display:inline;
  clear:none;
  margin:0px;
  margin-left:0.5em;
}


/***
 *** Admin
 ***/

body#admin-index .c0 {
  vertical-align: top;
}

body#admin-index .c1 {
  vertical-align: middle;
}

body#admin-blocks table.generaltable th,
body#admin-filters table.generaltable th,
body#admin-modules table.generaltable th,
body#admin-auth table.generaltable th
{
  white-space: nowrap;
}

body#admin-modules .generaltablecell
{
  padding-top: 2px;
  padding-bottom: 2px;
}

body#admin-blocks table.generaltable th,
body#admin-blocks table.generaltable td.cell,
body#admin-filters table.generaltable th,
body#admin-filters table.generaltable td.cell,
body#admin-modules table.generaltable th,
body#admin-modules table.generaltable td.cell,
body#admin-auth table.generaltable th,
body#admin-auth table.generaltable td.cell
{
  padding: 4px;
  text-align: center;
  vertical-align: middle;
}

body#admin-blocks table.generaltable th.c0,
body#admin-blocks table.generaltable td.c0,
body#admin-filters table.generaltable th.c0,
body#admin-filters table.generaltable td.c0,
body#admin-modules table.generaltable th.c0,
body#admin-modules table.generaltable td.c0,
body#admin-auth table.generaltable th.c0,
body#admin-auth table.generaltable td.c0
{
  text-align: left;
}

body#admin-modules table.generaltable td.c0
{
  white-space: nowrap;
}

#admin-blocks
#admin-config .confighelp {
  display: block;
  padding-bottom: 20px;
}

#admin-roles-manage table.generalbox {
  margin: auto;
}

#admin-stickyblocks .generalbox {
  text-align:center;
}

#admin-index .copyrightnotice {
  margin: auto;
  text-align: center;
}

#admin-report-simpletest-index .exception pre {
  padding: 8px;
}

#admin-report-simpletest-index .unittestsummary {
  padding: 8px;
  margin-top: 1em;
}

#admin-roles-allowassign .buttons,
#admin-roles-allowoverride .buttons,
#admin-roles-manage .buttons,
#admin-roles-override .buttons {
  margin: 20px;
  text-align:center;
}

#admin-roles-manage .buttons .singlebutton,
#admin-roles-override .buttons .singlebutton {
  display: inline;
  padding: 5px;
}

#admin-roles-manage .selector,
#admin-roles-assign .selector,
#admin-roles-override .selector {
  text-align:center;
  margin-bottom:1em;
}

#admin-roles-manage table.roledesc,
#admin-roles-override table.roledesc {
  margin-left:auto;
  margin-right:auto;
}

#admin-roles-manage table.rolecap,
#admin-roles-override table.rolecap {
  margin-left:auto;
  margin-right:auto;
}

.rolecap .inherit,
.rolecap .allow,
.rolecap .prevent,
.rolecap .prohibit {
  text-align:center;
}

#admin-roles-manage .rolecap .cap-desc .cap-name,
#admin-roles-override .rolecap .cap-desc .cap-name {
  display: block;
}

#admin-roles-override .cell.c1,
#admin-roles-assign .cell.c3,
#admin-roles-assign .cell.c1 {
  padding-top: 0.75em;
}

#admin-roles-override .sefeoverridenotice {
  text-align:center;
}

#admin-lang .generalbox {
  text-align:center;
  margin:auto;
  border-width: 1px;
  border-style: solid;
}

#admin-langimport .generalbox {
  text-align:center;
  margin:auto;
  border-width: 1px;
  border-style: solid;
}

#admin-langimport .generalbox table {
  text-align:center;
  margin:auto;
}

#admin-index .adminerror,
#admin-index .adminwarning {
  text-align:center;
  border-width: 1px;
  border-style: solid;
  margin:20px;
}

#admin-index .adminerror .singlebutton,
#admin-index .adminwarning .singlebutton,
#admin-index #layout-table .singlebutton {
  text-align:center;
  margin:20px;
}

#admin-user-user_bulk #users .fgroup {
  white-space: nowrap;
}

.plugincompattable caption {
  text-align: center;
  width: 100%;
  font-weight: bold;
  font-size: 130%;
}

.plugincheckwrapper td{
  border: 1px #bbbbbb solid;
}

.plugincheckwrapper{
    width: 100%;
}
/* Admin settings */
#adminsettings div.form-item {
  clear: both;
  margin: 1em 0 2em 0;
}

#adminsettings .form-label {
  display: block;
  float: left;
  width: 12.5em;
  text-align: right;
}

#adminsettings .form-shortname {
  display: block;
}

#adminsettings .form-setting {
  display: block;
  margin-left: 13em;
  text-align: left;
}

#adminsettings .form-defaultinfo {
  display: inline;
}

#adminsettings .defaultsnext {
  margin-right: 0.5em;
  display: inline;
}

#adminsettings .form-description {
  display: block;
  margin: 0.5em 0 0em 13em;
  text-align: left;
}

#adminsettings fieldset {
  margin-top: 1em;
  padding: 1em 0.5em;
}

#adminsettings legend {
  display: none;
}

#adminsettings fieldset.error {
  margin: 0.2em 0 0.5em 0;
  padding: 0.5em 0 0 0;
}

#adminsettings fieldset.error legend {
  display: block;
}

#adminsettings .form-multicheckbox li {
  list-style: none;
}

#adminsettings .form-multicheckbox ul {
  padding:0;
  margin:0;
}

#adminsettings .form-item .pathok,
#adminsettings .form-item .patherror {
  margin-left: 0.5em;
}

#adminsettings .form-htmlarea {
  width:  640px;
  display:inline;
}

#adminsettings .form-htmlarea .htmlarea {
  width:  640px;
  display:block;
}

.environmentbox {
  margin-top: 1em;
}

.form-buttons {
  margin: 10px 0 0 13em;
}

.adminsearchform {
  padding-top:10px;
}

.block_admin_tree .admintree {
  text-align:left;
}

.block_admin_tree .admintree .depth1 {
  padding-left: 16px;
}

.block_admin_tree .admintree .depth2 {
  padding-left: 32px;
}

.block_admin_tree .admintree .depth3 {
  padding-left: 48px;
}

.block_admin_tree .admintree .depth4 {
  padding-left: 64px;
}

#admin-lang .translator {
  border-width: 1px;
  border-style: solid;
}

#adminsettings #admin-calendar_weekend table {
  width: 100%;
}

#adminsettings #admin-calendar_weekend table td {
  text-align: center;
}

#adminsettings #admin-calendar_weekend table td label {
  width: 100%;
  text-align: center;
  float: none;
}

#trustedhosts .generaltable {
  margin-left: auto;
  margin-right: auto;
  width: 500px;
}

#trustedhosts .standard {
  width: auto;
}

#mnetconfig table {
  margin-left: auto;
  margin-right: auto;
}

#admin-report-courseoverview-index .graph,
#course-report-stats-index .graph,
#admin-report-stats-index .graph {
  text-align: center;
  margin-bottom: 1em;
}

#admin-uploaduser table#uuresults {
  margin-bottom: 2em;
}

#admin-uploaduser table#uupreview,
#admin-uploaduser table#uuresults td.cell {
  padding-left: 3px;
  padding-right: 3px;
}

/***
 *** Blocks
 ***/

/*Accessibility: Skip block link, for keyboard-only users. */
a.skip-block, a.skip {
  position: absolute;
  top: -1000em;
  font-size: 0.85em;
}
a.skip-block:focus, a.skip-block:active,
a.skip:focus, a.skip:active {
  position: static;
  display: block;
}
.skip-block-to, #maincontent {
  display: block;
  height: 1px;
}

.sideblock {
  margin-bottom:1em;
  width: 100%;
}

.sideblock .header, .sideblock h2.header {
  text-align: left;
  margin:0;
  padding:4px;
  padding-top:0;
  border-width: 1px;
  border-style: solid;
  border-bottom: none;
}
.sideblock h2 {
  margin:0;
  padding:0;
}

.sideblock .header .hide-show-image {
  float:right;
  height:11px;
  width:11px;
  margin-top:0.25em;
}

.sideblock .header .commands {
  margin-top: 0.3em;
  clear: both;
  height: 16px;
}

.sideblock .header .commands a {
  margin: 0px 2px;
}

#left-column .hidden .header,
#right-column .hidden .header
{
  border-bottom-width: 1px;
  border-bottom-style: solid;
}

#left-column .hidden .content,
#right-column .hidden .content
{
  display: none;
}

.sideblock .header .icon.hide,
.sideblock .header .icon.edit {
  margin-right: 6px;
}

.sideblock .content {
  padding: 4px;
  border-width: 1px;
  border-style: solid;
}

.sideblock .content h3,
.sideblock .content h2 {
  text-align: left;
}

.sideblock .content h2 {
  margin:1.5em 0 0;
  padding:0;
}

.sideblock .content .head {
  margin-top: 10px;
}

.sideblock .content hr {
  height:1px;
  margin-top:4px;
  margin-bottom:4px;
  border:none;
  border-top:1px solid;
}

.sideblock div.column {
  margin:0px;
  margin-right:4px;
  padding:0px;
}

.sideblock div.column.c0 {
  float: left;
}

.sideblock div.column.c1 {
  display: inline;
}

.sideblock .content .c0 img.icon {
  margin:0px;
}

.sideblock .content .list, .unlist, .inline-list {
  list-style:none;
  padding:0;
  margin:0;
}

.sideblock .content .list {
  width: 100%;
}

.sideblock .content .list li {
  clear: left;
}

.sideblock .content .inline-list li, .inline-list li {
  display: inline;
}

.sideblock .content ul.list li.listentry {
  clear:both;
}

.sideblock .content div.info {
  text-align:center;
}

.sideblock .footer {
  margin-bottom: 4px;
  text-align:center;
  clear:both;
}

.sideblock img.userpicture {
  width:16px;
  height:16px;
  margin-right:4px;
}

.blockconfigtable {
  margin-top: 0;
  margin-right: auto;
  margin-left: auto;
}

.blockconfigtable td.label {
  text-align: right;
  width: 50%;
}

.blockconfigtable td.value {
  text-align: left;
  width: 50%;
}

.blockconfigtable td.submit {
  text-align: center;
}

.blockconfiginstancecontent .tabs {
  margin-bottom: 0px;
  margin-left: auto;
  margin-right: auto;
}

.block_adminblock {
  width: 180px;
}

.block_messages .content {
  text-align:left;
  font-size:0.75em;
  padding-top:5px;
}

.block_recent_activitysideblock .h3 {
  padding-top:5px;
}

.block_online_users .listentry div.user,
.block_messages .listentry div.user {
  float:left;
}

.block_online_users .listentry div.message,
.block_messages .listentry div.message {
  float:right;
}

.block_course_list .footer {
  margin-top: 5px;
}

#rssfeeds {
  margin-left: auto;
  margin-right: auto;
}

#block_rss {
  text-align: center;
}

.block_search_forums .invisiblefieldset {
  display: block;
}

.block_tag_youtube .youtube-thumb {
  padding: 3px;
  padding-bottom: 0.5em;
  display: block;
  float: left;
}
.block_tag_youtube .yt-video-entry li {
  clear: left;
}

.block_tag_flickr .flickr-photos {
 padding:3px;
}

/***
 *** Blogs
 ***/
.addbloglink {
  text-align: center;
}

.blogpost .audience {
  text-align: right;
}

.blogpost .tags {
  margin-top: 15px;
}


/***
 *** Calendar
 ***/

#calendar {
  width: 100%;
  border-spacing: 5px;
  border-collapse: separate;
}

#calendar h2,
#calendar h3
{
  text-align: center;
}
#calendar .sideblock h2 {
  text-align: left;
}

#calendar .maincalendar,
#calendar .sidecalendar
{
  vertical-align: top;
  border: 1px solid;
  padding: 0px;
}

#calendar .maincalendar {
  height: 100%;
}

#calendar .maincalendar .heightcontainer {
  height: 100%;
  position: relative;
}

#calendar .maincalendar .bottom {
  width: 100%;
  text-align: center;
  padding:5px 0 0;
}

#calendar .sidecalendar {
  width: 25%;
}

#calendar .maincalendar table.calendarmonth {
  border-collapse: separate;
  margin: 0px auto;
  width: 98%;
}

#calendar .maincalendar table.calendarmonth th {
  padding:10px;
  border-bottom:2px solid;
}

#calendar .maincalendar table.calendarmonth td {
  height: 5em;
  padding-left: 4px;
  padding-top: 4px;
  line-height:1.2em;
}

#calendar .maincalendar table.calendarmonth td,
table.minicalendar td,
table.minicalendar th {
  width:14%;
  vertical-align:top;
}
table.minicalendar td {
  text-align: center;
}
#calendar .maincalendar table.calendarmonth td table td {
  height: auto;
}

#calendar div.header
{
  padding: 5px;
}

#calendar .sideblock div.header
{
  border:none;
}

#calendar .maincalendar .buttons {
  float: right;
}

#calendar .maincalendar .filters table,
#calendar .sidecalendar .filters table,
.sideblock.block_calendar_month .filters table
{
  border-collapse:separate;
  border-spacing: 2px;
  padding: 2px;
  width: 100%;
}

#calendar .maincalendar .filters {
  padding: 0px 10px;
}

#calendar .sidecalendar .filters {
  padding: 5px;
}

#calendar .maincalendar .controls {
  clear:both;
  padding:10px;
}

#calendar .maincalendar table.calendarmonth ul.events-new,
#calendar .maincalendar table.calendarmonth ul.events-underway
{
  padding:0px;
  margin:0px;
  list-style-type:none;
}

#calendar .maincalendar table.calendarmonth ul li {
  margin-top: 4px;
}

.minicalendarblock {
  padding: 0px 4px;
}

table.minicalendar {
  width: 100%;
  margin: 10px auto;
  padding:2px;
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
  border-spacing:1px !important;
}

table.minicalendar th {
  padding: 0px 2px;
}

#calendar .maincalendar .eventlist {
  padding: 10px;
}

#calendar .maincalendar .eventlist .topic {
  padding: 5px;
  border-style:solid;
  border-width: 0px;
  border-bottom-color: #EEEEEE;
  border-bottom-width: 1px;
}

#calendar .maincalendar .eventlist .event {
  width:100%;
  margin-bottom:10px;
  border-spacing:0px;
  border-collapse:separate;
  border-width:1px;
  border-style:solid;
}

#calendar .maincalendar .eventlist .event .name {
  float:left;
}

#calendar .maincalendar .eventlist .event .course {
  float:left;
  clear:left;
}

#calendar .maincalendar .eventlist .event .date {
  float:right;
}

#calendar .maincalendar .eventlist .event .description .commands {
  width:100%;
}

#calendar .maincalendar .eventlist .event .description {
  padding:5px;
}

#calendar .maincalendar .eventlist .event .picture {
  padding:8px;
}

#calendar .maincalendar .eventlist .event .side {
  width:32px;
}

#calendar #selecteventtype table {
  margin:auto;
}

#calendar .event_global,
#calendar .event_course,
#calendar .event_group,
#calendar .event_user,
.minicalendar .event_global,
.minicalendar .event_course,
.minicalendar .event_group,
.minicalendar .event_user {
  border:2px solid !important;
}

#calendar .duration_global,
#calendar .duration_course,
#calendar .duration_group,
#calendar .duration_user,
.minicalendar .duration_global,
.minicalendar .duration_course,
.minicalendar .duration_group,
.minicalendar .duration_user
{
  border-top:2px solid !important;
  border-bottom:2px solid !important;
}

#calendar .today,
.minicalendar .today {
  border:2px solid;
}

#calendar .nottoday,
.minicalendar .today {
  border:1px solid;
}

.cal_popup_bg {
  padding:0px;
  margin:0px;
  border:1px solid;
}

.cal_popup_close {
  margin-right:5px;
}

.cal_popup_caption {
  border-width:0px 0px 1px 0px;
  border-style:solid;
  padding-bottom:2px;
}

/*Accessibility: controls now div and span, 20:58:20% or 12:74:12% */
.calendar-controls .previous,
.calendar-controls .next,
.calendar-controls .current {
  display: block;
  float: left;
  width: 12%;
}
.calendar-controls .previous {
  text-align: left;
}
.calendar-controls .current {
  text-align: center;
  width: 76%;
}
.calendar-controls .next {
  text-align: right;
}

#calendar .maincalendar .calendar-controls .previous,
#calendar .maincalendar .calendar-controls .next
{
  width: 30%;
}
#calendar .maincalendar .calendar-controls .current {
  width: 39.95%;
}

#calendar .indent {
  padding-left: 20px;
}

#calendar td.sidecalendar {
border-width:0px;
}

#calendar td.sidecalendar .sideblock {
  border: 1px solid;
  margin-bottom:10px;
}

#calendar td.sidecalendar .minicalendartop {
  padding-top:10px;
}

.sideblock .content h3.eventskey {
  margin-top:0.5em;
  margin-bottom:0;
  margin-left:0.5em;
}

/***
 *** Course
 ***/

.activitydate, .activityhead {
  text-align:center;
}

#course-view .section td {
  vertical-align:top;
}

#course-view .section td.content {
  padding:5px;
  border-style:solid;
  border-width:1px;
  border-left:0px;
  border-right:0px;
}

#course-view .section td.side {
  padding:5px;
  border-style:solid;
  border-width:1px;
}

#course-view .section td.left {
  border-right:0px;
  text-align:center;
  width: 1.5em;
}

#course-view .section td.right {
  border-left:0px;
  text-align:center;
  width: 1.5em;
}

#course-view .current .side {
}

#course-view .section .spacer {
  height:0.5em;
}

#course-view .section .weekdates {
}

#course-view ul.section,
#site-index ul.section {
  margin: 0;
  padding: 0;
  list-style: none;
}

.section_add_menus {
  text-align:right;
}

.section_add_menus .horizontal div {
  display:inline;
}


/*#course-view ul.section li.activity ul li,
#site-index ul.section li.activity ul li {
  list-style: disc;
}*/

/*Accessibility: No-tables course format. */
#course-view ul.weekscss {
  margin: 0;
  padding: 0;
  list-style: none;
}
/* Window-width: 800 pixels.
   IE doesn't support, see inline IE conditional comment. */
.weekscss-format {
  min-width: 763px;
}
.weekscss-format .block_adminblock select,
.weekscss-format .block_calendar_month .minicalendar {
  width: 100%;
  padding: 0;
}
.weekscss-format .block_calendar_month .minicalendar th,
.weekscss-format .block_calendar_month .minicalendar td {
  padding: 0.1em 0 0.1em 1px;
}
.weekscss-format #middle-column {
  margin: 0 12.5em 0 12.5em;
}
.weekscss-format #left-column,
.weekscss-format #right-column {
  width: 11.5em;
}
.weekscss-format #left-column {
  float: left;
}
.weekscss-format #right-column {
  float: right;
}
.weekscss li.section {
  margin-bottom: 0.5em;
  border-style:solid;
  border-width:1px;
}
.weekscss .content,
.weekscss .side {
  padding: 5px;
}
.weekscss .content {
  margin: 0 1.7em 0 1.7em;
}
.weekscss .right {
  width: 1.6em;
  float: right;
  text-align:center;
}

.section .activity img.activityicon {
  vertical-align:middle;
  height:16px;
  width:16px;
}

.section img.movetarget {
  height:16px;
  width:80px;
}

body#course-view .unread {
  margin-left: 3em;
}

body#course-view .sideblock.drag .header {
  cursor: move;
}

body#course-enrol .generalbox {
  margin-top: 20px;
}

body#course-enrol .coursebox {
  margin-top: 20px;
}

body#course-user .graph {
  text-align: center;
}

body#course-user .section,
body#course-user .content {
  margin-left: 30px;
  margin-right: 30px;
}

body#course-user .section {
  border-width:1px;
  border-style:solid;
  padding:10px;
  margin-bottom: 20px;
}

body#course-user .section h2 {
  margin-top: 0;
}


.headingblock, h2.headingblock {
  border-width:1px;
  border-style:solid;
  padding:5px;
  margin:0;
}

#site-index .subscribelink,
#course-view .subscribelink {
  text-align:right;
}

body#site-index .headingblock,
body#course-view .headingblock {
  margin-bottom: 9px;
}

body#course-category .courseboxes,
body#course-index .courseboxes {
  padding:20px;
}

body#course-category .rolelink {
  text-align:right;
  padding:10px;
}

body#course-category .addcategory {
  text-align: center;
  padding: 10px;
}

body#course-category .buttons .singlebutton {
  display: inline;
}

body#course-category .buttons {
  text-align: center;
  margin-bottom: 15px;
}

body#course-index #middle-column .editcourse {
  margin-left:auto;
  margin-right:auto;
  margin-top:20px;
  margin-bottom:20px;
}

body#course-index #middle-column .editcourse th,
body#course-index #middle-column .editcourse td {
  padding-left:10px;
  padding-right:10px;
}

body#course-index #middle-column .editcourse .count {
  text-align:right;
}

body#course-index .singlebutton,
body#course-index .addcategory {
  text-align: center;
}

body#course-info .generalbox.icons {
  text-align: center;
}

body#course-info .generalbox.info {
  margin-left:auto;
  margin-right:auto;
}

.coursebox {
  width: 100%;
  /* float:left; */
  margin-bottom: 15px;
  border-width:1px;
  border-style:solid;
}

.coursebox .summary {
  float: right;
  text-align:left;
  width: 48%;
  padding:5px;
}

.coursebox .info {
  float: left;
  text-align:left;
  width: 48%;
  padding:5px;
}

#my-index .coursebox .info {
  float: none;
}

#my-index .name {
  margin-left: 5px;
}

.categorylist {
  width: 90%;
  margin-left: auto;
  margin-right: auto;
}

.categorylist .category.image {
  width: 20px;
}

.categorylist .category.number {
  text-align: right;
}

.categorylist .category.indentation {
  width: 1px;
}

.categoryboxcontent {
  border-width:1px;
  border-style:solid;
}

.categorypicker {
  text-align:center;
  padding-bottom:10px;
}

#coursesearch,
#coursesearch2 {
  text-align:center;
}

.addcoursebutton {
  text-align:center;
}

.coursebox .cost {
  padding-top: 20px;
}

.coursebox ul.teachers li {
  list-style-type:none;
  padding:0;
  margin:0;
}

#course-category #renameform {
  text-align:center;
}

#course-category #themeform {
  text-align: center;
}

#course-category .singlebutton {
  text-align:center;
}

#course-category #coursesearch {
  text-align:center;
}


#course-report #content {
  padding-top:15px;
  padding-bottom:15px;
}

#course-report p {
  text-align:center;
}

#course-report .logselectform,
#course-report .participationselectform,
#course-report-log-index .logselectform,
#course-report-participation-index .participationselectform {
  margin-left:auto;
  margin-right:auto;
  text-align:center;
  margin-top:10px;
  margin-bottom:10px;
}

#course-report .participationselectform label,
#course-report-participation-index .participationselectform label {
  margin-left:15px;
  margin-right:5px;
}

#course-report-log-index .info {
  margin-left:auto;
  margin-right:auto;
  text-align:center;
  margin:10px;
}

.course-report-outline td.numviews {
  text-align:right;
}

.course-report-outline div.loginfo {
  text-align:center;
  margin: 1em;
}

#content .coursebox .summary .category {
  text-align:right;
}

#course-editsection .singlebutton {
  text-align:center;
}

/***
 *** Group
 ***/
body#group-index #groupeditform {
  text-align: center;
}

#add, #remove{
    text-align:center;
}

/***
 *** Doc
 ***/

body#doc-contents h1 {
  margin: 1em 0px 0px 0px;
}

body#doc-contents ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 90%;
}


/***
 *** Grades
 ***/

/* scales edit */

.grade-edit-scale .buttons {
  margin: 20px;
  text-align:center;
}

.grade-edit-scale .buttons .singlebutton {
  display: inline;
  padding: 5px;
}

/* outcomes edit */

.grade-edit-outcome .buttons {
  margin: 20px;
  text-align:center;
}

.grade-edit-outcome .buttons .singlebutton {
  display: inline;
  padding: 5px;
}

div.allcoursegrades {
    width: 100%;
    text-align: right;
    padding: 4px 0px 5px 0px;
}
/* gradebook edit tree */

.grade-edit-tree .gradetreebox {
  width:70%;
  margin-left:auto;
  margin-right:auto;
  margin-top:10px;
  padding-bottom:15px;
}

.grade-edit-tree .buttons {
  margin: 20px;
  text-align:center;
}

.grade-edit-tree .idnumber {
  margin-left: 15px;
}

.grade-edit-tree .buttons .singlebutton {
  display: inline;
  padding: 5px;
}

.grade-edit-tree .movetarget {
  position: relative;
  width: 80px;
  height: 16px;
}

.grade-edit-tree ul#grade_tree {
  width: auto;
}

.grade-edit-tree ul#grade_tree li {
  list-style: none;
}

.grade-edit-tree ul#grade_tree li.category {
  margin-bottom: 6px;
}

.grade-edit-tree .iconsmall {
  margin-left: 4px;
}

#grade-report-toggles {
  text-align: center;
}

.gradeexportlink {
  padding: 2em;
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}

#grade-aggregation-help dt {
    margin-top: 15px;
}

#grade-aggregation-help dd.example {
    margin-top: 7px;
}

#grade-aggregation-help code {
    display: block;
    margin-top: 7px;
}

/***
 *** Login
 ***/

.loginbox {
  margin-top:15px;
  margin-bottom:15px;
  border:1px solid;
  width:50%;
  margin-left:25%;
  overflow:hidden;
}

.loginbox form {
  margin:0px;
  padding:0px;
}

.loginbox.twocolumns {
  width:90%;
  margin-left:5%;
  /* background: #faa; */
}

.loginbox h2,
.loginbox .subcontent {
  margin:5px;
  padding:10px;
  text-align:center;
}

.loginbox .loginpanel .subcontent {
  text-align:center;
}

.loginbox .loginpanel .desc {
  margin:0px;
  padding:0px;
  margin-bottom:5px;
}

.loginbox .signuppanel .subcontent {
  text-align:left;
}

.loginbox .loginsub {
  margin-left:0%;
  margin-right:0%;
}

.loginbox .guestsub,
.loginbox .forgotsub {
  border-top:1px solid;
  margin-left:12%;
  margin-right:12%;
  margin-bottom:5px;
}

.loginbox .loginform {
  margin-top:1em;
  text-align:left;
}

.loginbox .loginform .form-label {
  float:left;
  text-align:right;
  width:40%;
}

.loginbox .loginform .form-input {
  float:right;
  width:59%;
}

.loginbox .loginform .form-input input {
  width: 6em;
}

.loginbox .signupform {
  margin-top:1em;
  text-align:center;
}

.loginbox.twocolumns .loginpanel {
  float:left;
  width:49.5%;
  border-right: 1px solid;
  margin-bottom:-2000px;
  padding-bottom:2000px;
  /* background: #afa; */
}

.loginbox.twocolumns .signuppanel {
  float:right;
  width:50%;
  margin-bottom:-2000px;
  padding-bottom:2000px;
}


/***
 *** Message
 ***/


#message-user .userpicture,
#message-history .userpicture {
  width: 100px;
  height: 100px;
}

.message-discussion-noframes #userinfo .userpicture {
  float:left;
}

.message-discussion-noframes #userinfo .name h1 {
  margin:0px;
}

.message-discussion-noframes #userinfo .name {
  text-align:center;
  margin-left:60px;
}

.message-discussion-noframes #userinfo .commands {
  text-align:left;
  margin-left:60px;
}

.message-discussion-noframes #userinfo .commands ul {
  margin:0px;
  padding:0px;
  list-style-type:none;
}

.message-discussion-noframes #userinfo .commands ul li {
  display:inline;
  padding-right:16px;
}

.message-discussion-noframes #send {
  padding-top:10px;
  clear:both;
}

.message-discussion-noframes #send h1 {
  margin:0px;
}

.message-discussion-noframes #messages {
  padding-top:10px;
}

.message-discussion-noframes #messages ul.messagelist {
  margin:0px;
  padding:0px;
}

.message-discussion-noframes #send h1 {
  margin:0px;
}

.message .noframesjslink {
  margin-top:20px;
}

.message .link {
  vertical-align:middle;
}

table.message .searchresults td {
  padding:5px;
  border-width:1px;
  border-style:solid;
  border-collapse:collapse;
  border-spacing:0px;
}
.message .summary .link {
  text-align:right;
}
.message .heading {
  text-align:center;
}

.message .note {
  text-align:center;
  padding:10px;
}

#message-user .commands span {
  margin-left:10px;
  margin-right:10px;
}

body#message-messages {
  padding:10px;
}

body#message-send .notifysuccess {
  padding:1px;
}

body#message-send td.fixeditor {
  text-align:center;
}

/***
 *** Notes
 ***/
.notepost {
  margin-bottom: 1em;
  background-color: #EEE;
}
.sitenotepost {
}
.coursenotepost {
}
.draftnotepost {
}

.ownnotepost .info {
}

.notepost .header {
  background: #DDD;
  padding: 5px;
}

.notepost .user {
  font-weight: bolder;
}

.notepost .userpicture {
  float: left;
  margin-right: 5px;
}

.notepost .info {
  font-size: smaller;
}

.notepost .content {
  clear: both;
}

.notepost .footer {
  clear: both;
}

body.notes .generalbox {
  margin-left:auto;
  margin-right:auto;
  width:90%;
}

body.notes .notesgroup {
  margin-left:20px;
}

/***
 *** MyMoodle
 ***/

.my .coursebox .overview .info {
  margin-left:20px;
}

.my .coursebox .overview {
  margin-bottom:10px;
}


/***
 *** Question
 ***/
.questionbank h2 {
  margin-top: 0;
}

.questioncategories h3 {
  margin-top: 0;
}

.que {
  text-align: left;
  margin: 0 auto 1.8em auto;
  border: 1px solid;
  clear: both;
}
.que .info {
  float: left;
  margin: 0.5em 0 0.5em 1.2em;
  width: 8%;
}
.que .content {
  float: left;
  margin: 0.5em 1.2em 0.5em 0;
  width: 85%;
}
.que.description .info {
  display: none;
}
.que.description .content,
.que.description .generalfeedback {
  margin-left: 1.2em;
  margin-bottom: 0.5em;
  float: none;
  width: auto;
}
.que.description .qtext {
  margin-bottom: 0;
}
.que .qtext {
  margin-bottom: 1.5em;
}
.que .ablock {
  margin: 0.7em 0 0.3em 0;
}
.que .prompt {
  float: left;
  width: 15%;
  height: 2em;
  padding-top: 0.3em;
}
.que .control {
  width: 5%;
}
.que .answer {
  float: left;
  width: 83%;
  margin-bottom: 0.5em;
}
.que .submit {
  position: relative;
  clear: both;
  float: left;
}
/* MSIE Hack */
* html .que .submit {
  float: none;
}
.multianswer .submit {
  margin-top: 1em;
}
.que .c0,
.que .c1 {
  padding: 0.3em 0 0.3em 0.3em;
  vertical-align: top;
}
.que .feedback {
  clear: both;
  padding: 0 0 0.3em 0.3em;
  margin-bottom: 0.5em;
  border: 1px solid;
}
.multichoice td.feedback {
  width: auto;
  vertical-align: top;
  padding-top: 0.3em;
  border-style: none;
}
.essay .feedback {
  border-style: none;
}
.multichoice .text {
  width: auto;
}
.calculated .answer,
.numerical .answer,
.shortanswer .answer {
  padding: 0.3em;
  width: auto;
}
.truefalse .answer span {
  float: left;
  clear: left;
  padding: 0.3em;
  width: 100%;
}
.que .grading,
.que .comment,
.que .commentlink,
.que .generalfeedback,
.que .history {
  margin-top: 0.5em;
}
.que .grade {
  margin-top: 0.5em;
}

.importerror {
  margin-top: 10px;
  border-bottom: 1px solid #555;
}

/***
 *** Logs
 ***/

.logtable {
  margin-left:auto;
  margin-right:auto;
}

.logtable td,
.logtable th {
  padding-left: 10px;
  padding-right: 10px;
}

.logtable th {
  text-align:left;
}

#course-user .info {
  margin-left:auto;
  margin-right:auto;
  text-align:center;
  margin:10px;
}

/***
 *** Tabs
 ***/


/*globalnav*/
.tabtree {
  position:relative;
}

.tabrow0 {
  text-align: center;
  width:100%;
  margin:0;
  margin-top: 10px;
  padding:0 0 1.75em 0;
  list-style:none;
  line-height:1.8em;
  font-size: 84%;
}

.tabrow0 li {
  display: inline;
  margin: 0 -4px 0 0;
  padding: 0;
}

.tabrow0 a span {
  padding: 10px 14px 0.35em 0;
  background: transparent url(pix/tab/right.gif) no-repeat right top;
}

.tabrow1 li a span {
  background: none !important;
}

.tabrow0 a {
  text-decoration: none;
  background: transparent url(pix/tab/left.gif) no-repeat left top;
  margin: 0 -1px 0 0;
  padding: 10px 0 0.35em 13px;
}

.tabrow0 a:hover {
  background-image: url(pix/tab/left_hover.gif);
}

.tabrow0 .here a:hover {
  background-image: url(pix/tab/left.gif);
}

.tabrow0 a:hover span {
  background-image: url(pix/tab/right_hover.gif);
}

.tabrow0 .here a:hover span {
  background-image: url(pix/tab/right.gif);
}

.tabrow0 .here a {
  color:#444;
}


.tabrow0 .here a:link,
.tabrow0 .here a:visited,
.tabrow0 .here a.nolink {
  position:relative;
  z-index:102;
}

/*subnav*/
.tabrow0 .empty {
  height: 1px;
  overflow: hidden;
  padding: 0;
}

.tabrow0 div,
.tabrow0 ul {
  position: absolute;
  left: 0;
  top: 1.95em;
  width: 100%;
  margin: 0;
  padding: 0.25em 0;
  list-style: none;
  border-top: 1px solid #aaa;
  line-height: normal;
  background: transparent url(pix/tab/tabrow1.gif) repeat-x center left;
  font-size: 90%;
}

.tabrow0 ul li {
  display:inline;
  margin-top:1px;
  background-image: none;
}

.tabrow0 ul a {
  background-image: none;
  color:#00c;
  margin:0;
  padding:0 1em;
  border:0
}

.tabrow0 ul a span {
  padding: 0;
  background-image: none;
}

.tabrow0 ul .last span,
.tabrow0 ul li a:hover, .tabrow0 ul li a:hover span,
.tabrow0 ul .here a:hover, .tabrow0 ul .here a:hover span {
  background-image: none !important;
}

.tabrow0 ul div {
  display: none;
}

ul.tabrow1 li a,
ul.tabrow1 li a:link,
ul.tabrow1 li a:visited {
  color:#00c;
  font-size: 110%;
}

ul.tabrow1 li.here.selected a {
  color:#444;
}

/***
 *** Tags
 ***/

h2.tag-heading {
 text-align:center;
 margin-left:auto;
 margin-right:auto;
 display:block;
 width:95%;
 padding: 5px 5px 5px 5px;

}

div#tag-description,
div#tag-blogs {
 width:95%;
 padding: 5px 5px 5px 5px;
 margin-left:auto;
 margin-right:auto;
 display:block;
}

body#tag-index .moreblogs {
 text-align:center;
}

div#tag-management-box {
 margin-bottom:10px;
 text-align:center;
 line-height:20px;
 display:block;
 font-size:12px;
}

div#tag-user-table {
 padding:3px;
 width:95%;
 clear: both;
 margin-left:auto;
 margin-right:auto;
 display:block;
}

body.tag .managelink {
  text-align:right;
  padding:10px;
}

/* small css hack for firefox*/
div#tag-user-table:after{
 content:".";
 display:block;
 clear:both;
 visibility:hidden;
 height:0;
 overflow:hidden;
}
/* end hack*/

div.user-box {
 margin-left:8px;
 margin-right:8px;
 margin-top:8px;
 margin-bottom:8px;
 width:115px;
 height:160px;
 text-align:center;
 display:block;
 float:left;
 clear: none;
}

img.user-image {
 border:0px;
 height:100px;
 width:100px;
}

div#small-tag-cloud-box {
 width:300px;
 margin-left:auto;
 margin-right:auto;
 margin-bottom:0px;
 margin-top:0px;
}

div#big-tag-cloud-box {
 width:600px;
 margin-left:auto;
 margin-right:auto;
 margin-bottom:0px;
 margin-top:0px;
 display:block;
 float:none;
}

ul#tag-cloud-list {
 list-style:none;
 padding:5px;
 margin:0px;
 list-style-type:none;
}
ul#tag-cloud-list li {
 margin:0px;
 display:inline;
}

/* search start*/

div#tag-search-box {
 text-align:center;
 margin-left:auto;
 margin-right:auto;
 margin-top:10px;
 margin-bottom:10px;
}

div#tag-search-results-container {
 padding:0px;
 width:100%;
}

ul#tag-search-results {
 padding:0px;
 margin-left:20%;
 margin-right:20%;
 margin-top:15px;
 margin-bottom:0px;
 float:left;
 width:60%;
 display:block;
 list-style:none;
}

ul#tag-search-results li{

 width:30%;
 float:left;
 padding-left:1%;
 text-align:left;
 line-height:20px;
 padding-right:1%;

}

div#tags-management-links {
 text-align:right;
 display:block;
 font-size:12px;

}
/* search end*/

/* tag management start*/
span.flagged-tag {
 color:#FF0000;
}
span.flagged-tag a{
 color:#FF0000;
}

table#tag-management-list {
 text-align:left;
 margin-left:auto;
 margin-right:auto;
}

table#tag-management-list tr td{
 padding-left:4px;
 padding-right :4px;
}

.tag-management-form {
 text-align:center;
}
/* tag management end*/

/* autocomplete start*/
#relatedtags-autocomplete-container
{
 margin-left:auto;
 margin-right:auto;
 min-height:4.6em;
 width:100%;
}

#relatedtags-autocomplete {
 position:relative;
 display:block;
 width:60%;
 margin-left:auto;
 margin-right:auto;
}
#relatedtags-autocomplete .yui-ac-content
{
 position:absolute;
 width:420px;
 left:20%;
 border:1px solid #404040;
 background:#fff;
 overflow:hidden;
 z-index:9050;
}
#relatedtags-autocomplete .ysearchquery
{
 position:absolute;
 right:10px;
 color:#808080;
 z-index:10;
}
#relatedtags-autocomplete .yui-ac-shadow {
 position:absolute;
 margin:.3em;
 width:100%;
 background:#a0a0a0;
 z-index:9049;
}
#relatedtags-autocomplete ul {
 padding:0;width:100%;
 margin:0;
 list-style-type:none;
}

#relatedtags-autocomplete li {
 padding:0 5px;
 cursor:default;
 white-space:
 nowrap;
}
#relatedtags-autocomplete li.yui-ac-highlight
{
 background:#FFFFCC;
}
/* autocomplete end*/

/***
 *** User
 ***/

.userinfobox {
  margin-bottom:5px;
  border-width: 1px;
  border-style: solid;
  border-collapse: separate;
}

.userinfobox .left,
.userinfobox .side {
  padding: 10px;
  width: 100px;
  vertical-align: top;
}

.userinfobox .userpicture {
  width: 100px;
  height: 100px;
}

.userinfobox .content {
  padding: 10px;
  vertical-align: top;
}

.userinfobox .links {
  width: 100px;
  padding: 5px;
  vertical-align: bottom;
}

.userinfobox .list td {
  padding: 3px;
}

.userinfobox .username {
  padding-bottom: 20px;
}

.userinfobox td.label {
  text-align:right;
  white-space: nowrap;
  vertical-align: top;
}

table.userinfobox {
  width: 80%;
  margin-left: 10%;
  margin-right: 10%;
}

table.groupinfobox {
  width: 60%;
  margin-left: 20%;
  margin-right: 20%;
  border-width:1px;
  border-style:solid;
  margin-bottom: 20px;
}

.groupinfobox .left {
  padding: 10px;
  width: 100px;
  vertical-align: top;
}

body#user-index h2 {
  text-align: center;
}

#user-view .buttons,
#user-index .buttons {
  text-align: center;
}

#user-view .buttons form,
#user-view .buttons form div {
  display:inline;
}

body#user-index #longtimenosee,
body#user-index #showall {
  text-align: center;
}

body#user-index #showall {
  margin: 10px 0px;
}

body#user-index table#participants,
body#tag-manage table#tag-management-list {
  margin: auto;
  width: 80%;
}

body#tag-manage table#tag-management-list td,
body#tag-manage table#tag-management-list th,
body#user-index table#participants td,
body#user-index table#participants th {
  vertical-align: middle;
  text-align: left;
  padding: 4px;
}

body#user-index table.controls {
  width: 100%;
}
body#user-index table.controls tr {
  vertical-align: top;
}
body#user-index table.controls td.right,
body#user-index table.controls td.left {
  padding: 4px;
}
body#user-index table.controls .right {
  text-align: right;
}
body#course-participation h2 {
  text-align:center;
}
body#course-participation #showall {
  text-align:center;
  margin: 10px 0px;
}
body#user-index .rolesform {
  text-align:center;
}

#user-policy .noticebox {
  text-align:center;
  margin-left:auto;
  margin-right:auto;
  margin-bottom:10px;
  width:80%;
  height:250px;
}

#user-policy #policyframe {
  width:100%;
  height:100%;
}

.iplookup #map {
  margin:auto;
}

.iplookup #note {
  text-align:center;
}

/***
 *** Modules: Assignment
 ***/

.userpicture,
.picture user,
.picture teacher {
  width:35px;
  height:35px;
  vertical-align:top;
}
.modform {
  text-align:center;
}
#wordcount {
  text-align: right;
}

/***
 *** Modules: Chat
 ***/

.nextchatsession {
  text-align:center;
}

#mod-chat-gui_header_js-jsupdate {
  margin:10px
}
#mod-chat-gui_header_js-jsupdate .chat-event,
#mod-chat-gui_header_js-jsupdate .chat-message {
  width:100%;
  padding:0;
  margin-top:7px
}

#mod-chat-view #chatcurrentusers .chatuserdetails {
  vertical-align: middle;
}

#mod-chat-view #enterlink {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.chat-event .picture,
.chat-message .picture {
  width:40px;
  vertical-align:top;
}
.chat-event .text,
.chat-message .text {
  text-align: left;
}

#mod-chat-gui_basic #participants ul {
  margin:0px;
  padding:0px;
  list-style-type:none;
}

#mod-chat-gui_basic #participants ul li {
  display:inline;
  margin-right:10px;
}

#mod-chat-gui_basic #participants ul li .userinfo {
  display:inline;
}

#mod-chat-gui_basic #messages dl {
  padding:0px;
  margin:1px;
}

#mod-chat-gui_basic #messages dd,
#mod-chat-gui_basic #messages dt {
  margin-left:0px;
  margin-right:5px;
  padding:0px;
  display:inline;
}

/***
 *** Modules: Choice
 ***/
.button {
  text-align:center;
}

.attemptcell {
  width:5px;
  white-space: nowrap;
}

.anonymous,
.names {
  margin-left:auto;
  margin-right:auto;
}

.downloadreport {
  border:0px;
  margin-left:auto;
  margin-right:auto;
}

.choiceresponse {
  width:100%;
}
.choiceresponse .picture {
  width:10px;
  white-space: nowrap;
}

.choiceresponse .fullname {
  width:100%;
  white-space: nowrap;
}


.results.data {
  vertical-align:top;
  white-space: nowrap;
}

/***
 *** Modules: Data
 ***/
.fieldadd,
.sortdefault,
.defaulttemplate {
  text-align:center;
}
.datapreferences {
  text-align:center;
}

table.presets {
  margin-left: auto;
  margin-right: auto;
}

/***
 *** Modules: Forum
 ***/

#mod-forum-view .forummode {
  text-align:center;
}

.forumheaderlist,
.forumpost {
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
}

.forumpost {
  margin-top: 15px;
}

.forumpost .topic {
  padding: 4px;
  border-style:solid;
  border-width: 0px;
  border-bottom-width: 1px;
}

.forumpost .commands {
  padding-top: 0.5em;
  text-align:right;
  clear: both;
}

.forumpost .ratings {
  padding-top: 1em;
  text-align:right;
}

.forumpost .attachments {
  padding: 7px;
  text-align:right;
}

.forumpost .content {
  padding: 4px;
}

.forumpost .footer {
  padding-top: 0.5em;
  text-align:right;
}

.forumpost .link {
  padding-top: 0.5em;
  text-align:right;
}

.forumpost .left {
  width: 35px;
  padding: 4px;
  text-align: center;
  vertical-align: top;
}

.mod-forum .indent {
  margin-left: 30px;
}

body#user-view .forumpost,
.course .forumpost {
  width: 100%;
}

body#mod-forum-search .c0 {
  text-align: right;
}

body#mod-forum-search .introcontent {
  padding: 15px;
}

.forumolddiscuss {
  text-align: right;
}

.forumheaderlist {
  width: 100%;
}

.forumheaderlist td {
  border-width:1px 0px 0px 1px;
  border-style:solid;
}

.forumheaderlist .replies {
  text-align: center;
  white-space: nowrap;
}

.forumheaderlist .picture {
  width: 35px;
}

.forumheaderlist .discussion .starter {
  vertical-align: middle;
}

.forumheaderlist .lastpost {
  white-space: nowrap;
  text-align: right;
}

.forumheaderlist .discussion .author {
  white-space: nowrap;
}
.forumolddiscuss {
  text-align:right;
}
.forumaddnew,
.forumnodiscuss,
.noticeboxcontent {
  text-align:center;
}

#mod-forum-view .forumaddnew {
  margin-bottom: 20px;
}

#mod-forum-view .forumcontrol .groupmenu {
  float: left;
  text-align:left;
  white-space: nowrap;
}

#mod-forum-view .groupmenu {
  float: left;
  text-align:left;
  white-space: nowrap;
}

#mod-forum-view .forumcontrol .subscription {
  float: right;
  text-align:right;
  white-space: nowrap;
}

#mod-forum-view .subscription {
  float: right;
  text-align:right;
  white-space: nowrap;
}

#mod-forum-index .subscription {
  float: right;
  text-align:right;
  white-space: nowrap;
}

#mod-forum-view .unread {
  padding-left: 3px;
  padding-right: 3px;
}
#mod-forum-discuss .forumpost.unread .content {
  border-style: solid;
  border-width: 2px;
}
#mod-forum-discuss .ratingsubmit {
  text-align:center;
  padding:10px;
}
#mod-forum-index .unread img,
#mod-forum-view .unread img
{
  margin-left: 5px;
}

#mod-forum-discuss .discussioncontrols td {
  width: 33%;
  text-align:center;
}

#email .unsubscribelink {
  margin-top:20px;
  border-width: 0px 1px 0px 0px;
  border-style: solid;
  text-align:center;
}

#mod-forum-view .subscription {
  margin: 5px 0;
}

/***
 *** Modules: Glossary
 ***/

.glossarypost .commands {
  width: 200px;
  white-space: nowrap;
}

#mod-glossary-comments .glossarypost,
#mod-glossary-comment .glossarypost {
  margin-top: 15px;
}

.entryboxheader {
  border-width: 1px 1px 0px 1px;
  border-style: solid;
}

.entrybox {
  width: 100%;
  border-width: 0px 1px 1px 1px;
  border-style: solid;
}

.entrybox hr {
  border-left:none;
  border-right:none;
}

.glossarypost {
  width: 95%;
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
  margin-left:auto;
  margin-right:auto;
  margin-bottom: 5px;
  text-align: left;
}

.entrylist {
  border-width:0px;
}

.entrylowersection {
  padding-top: 10px;
}

.entrylowersection table{
  width: 100%;
}

.entrylowersection .aliases {
  text-align:center;
}

.entrylowersection .icons,
.entrylowersection .ratings {
  text-align:right;
  padding-right: 5px;
}

.entrylowersection .ratings {
  padding-bottom: 2px;
}

.glossarycategoryheader {
  width: 95%;
  margin-left:auto;
  margin-right:auto;
}

.glossaryformatheader {
  width: 90%;
}

.glossarypost .entry {
  padding: 3px;
}

.glossarypost .picture {
  width: 35px;
}

.glossarycomment {
  border-width:1px;
  border-style:solid;
  border-collapse:separate;
  margin-bottom: 5px;
  text-align: left;
}

.glossarycomment .entry {
  padding: 3px;
}

.glossarycomment .picture {
  width: 35px;
}

.glossarycomment .icons {
  text-align: right;
}

.glossarydisplay {
  width: 90%;
  margin-left:auto;
  margin-right:auto;
  text-align:center;
}

.glossarydisplay .tabs {
  width: 100%;
}

.glossarydisplay .separator {
  width: 4px;
}

.glossarydisplay .tabs .selected,
.glossarydisplay .tabs .inactive,
.glossarydisplay .tabs .general {
}

.glossaryimportexport {
  margin-left:auto;
  margin-right:auto;
  text-align:center;
}

.glossarypopup {
  width: 95%;
}

.glossaryapproval {
  width: 100%;
}

.mod-glossary .glossarydisplay .tabs {
  margin-bottom: 0px;
}

.mod-glossary .glossarydisplay .tabs .side {
  border-style: none;
  border-width: 0px;
  width: auto;
}

.glossaryexplain,
.glossaryaddentry {
  text-align: center;
}

.mod-glossary .tabrow0 {
  padding-bottom: 5px;
}

#mod-glossary-view .glossarycontrol {
  float: right;
  text-align:right;
  white-space: nowrap;
  margin: 5px 0;
}

/***
 *** Modules: Journal
 ***/
#mod-journal-view .lastedit,
#mod-journal-view .editend {
  margin: 5px;
  text-align: center;
}
#mod-journal-view .feedbackbox {
  width: 75%;
  border-collapse: separate;
}
#mod-journal-view .entrycontent {
  padding: 3px;
}
#mod-journal-view .picture {
  width: 35px;
}
#mod-journal-view .grade {
  text-align: right;
}
#mod-journal-view .info {
  margin-bottom: 5px;
  text-align: right;
}


/***
 *** Modules: Label
 ***/

/***
 *** Modules: Lesson
 ***/
#mod-lesson-lesson #page .addform {
  text-align: center;
}
#mod-lesson-edit #page .label {
  font-weight: bold;
}
#mod-lesson-edit #page .labelcorrect {
  text-decoration: underline;
  font-weight: bold;
}
.lessonmediafilecontrol {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
}

#mod-lesson-view #content .invisiblefieldset {
  display: block;
  text-align: left;
}

/***
 *** Modules: Quiz
 ***/

#mod-quiz-view .quizinfo {
  text-align: center;
}
#mod-quiz-view #page .quizgradefeedback,
#mod-quiz-view #page .quizattempt
{
  text-align: center;
}
#mod-quiz-view #page .quizattemptsummary td p {
  margin-top: 0;
}
#mod-quiz-view .generalbox#feedback {
  width:70%;
  margin-left:auto;
  margin-right:auto;
  padding-bottom:15px;
}
#mod-quiz-view .generalbox#feedback h2 {
  margin: 0 0;
}
body#mod-quiz-view .generalbox#feedback .overriddennotice {
  text-align: center;
  font-size: 0.7em;
}
#mod-quiz-view .generalbox#feedback h3 {
  text-align: left;
}

.generalbox#passwordbox { /* Should probably match .generalbox#intro above */
  width:70%;
  margin-left:auto;
  margin-right:auto;
}
#passwordform {
  margin: 1em 0;
}
#mod-quiz-attempt #page {
  text-align: center;
}
#mod-quiz-attempt .pagingbar {
  margin: 1.5em auto;
}
#mod-quiz-attempt #page {
    text-align: center;
}

#mod-quiz-attempt #timer .generalbox {
  width:150px
}

#mod-quiz-attempt #timer {
  position:absolute;
  /*top:100px; is set by js*/
  left:10px
}

body#question-preview .quemodname,
body#question-preview .controls
{
  text-align: center;
}
body#question-preview .quemodname, body#question-preview .controls {
  text-align: center;
}

#mod-quiz-attempt #page .controls,
#mod-quiz-review #page .controls {
  text-align: center;
  margin: 8px auto;
}
#mod-quiz-review .pagingbar {
  margin: 1.5em auto;
}
#mod-quiz-review .pagingbar {
  margin: 1.5em auto;
}
table.quizreviewsummary {
  margin-bottom: 1.8em;
  width: 100%;
}
table.quizreviewsummary tr {
}
table.quizreviewsummary th.cell {
  padding: 1px 0.5em 1px 1em;
  font-weight: bold;
  text-align: right;
  width: 10em;
}
table.quizreviewsummary td.cell {
  padding: 1px 1em 1px 0.5em;
}

#mod-quiz-mod #reviewoptionshdr .fitem {
  float: left;
  width: 30%;
  margin-left: 10px;
  clear: none;
}
#mod-quiz-mod #reviewoptionshdr .fitemtitle {
  width: 100%;
  font-weight: bold;
  text-align: left;
  height: 2.5em;
 margin-left: 0;
}
#mod-quiz-mod #reviewoptionshdr fieldset.fgroup {
  width: 100%;
  text-align: left;
 margin-left: 0;
}
#mod-quiz-mod #reviewoptionshdr fieldset.fgroup span {
  float: left;
  clear: left;
}

#mod-quiz-edit #page .controls,
#mod-quiz-edit #page .quizattemptcounts
{
  clear : left;
  text-align: center;
}
#mod-quiz-edit .quizquestions h2 {
  margin-top: 0;
}
#mod-quiz-edit #showbreaks {
  margin-top: 0.7em;
}
.quizquestionlistcontrols {
  text-align: center;
}

#mod-quiz-report table#attempts,
#mod-quiz-report table#commands,
#mod-quiz-report table#itemanalysis
{
  width: 80%;
  margin: auto;
}
#mod-quiz-report table#attempts,
#mod-quiz-report h2.main {
  clear: both;
}
#mod-quiz-report table#attempts {
  margin: 20px auto;
}
#mod-quiz-report table#attempts .header,
#mod-quiz-report table#attempts .cell
{
  padding: 4px;
}
#mod-quiz-report table#attempts .header .commands {
  display: inline;
}
#mod-quiz-report table#attempts .picture {
  width: 40px;
}
#mod-quiz-report table#attempts td {
  border-left-width: 1px;
  border-right-width: 1px;
  border-left-style: solid;
  border-right-style: solid;
  vertical-align: middle;
}
#mod-quiz-report table#attempts .header {
  text-align: left;
}
#mod-quiz-report table#attempts .picture {
  text-align: center !important;
}
#mod-quiz-report .controls {
  text-align: center;
}

#mod-quiz-report table#itemanalysis {
  margin: 20px auto;
}
#mod-quiz-report table#itemanalysis .header,
#mod-quiz-report table#itemanalysis .cell
{
  padding: 4px;
}
#mod-quiz-report table#itemanalysis .header .commands {
  display: inline;
}
#mod-quiz-report table#itemanalysis td {
  border-width: 1px;
  border-style: solid;
}
#mod-quiz-report table#itemanalysis .header {
  text-align: left;
}
#mod-quiz-report table#itemanalysis .numcol {
  text-align: center;
  vertical-align : middle !important;
}

#mod-quiz-report table#itemanalysis .uncorrect {
  color: red;
}

#mod-quiz-report table#itemanalysis .correct {
  color: blue;
  font-weight : bold;
}

#mod-quiz-report table#itemanalysis .partialcorrect {
  color: green !important;
}

#mod-quiz-report table#itemanalysis .qname {
  color: green !important;
}

/* manual grading */
#mod-quiz-grading table#grading
{
  width: 80%;
  margin: auto;
}

#mod-quiz-grading table#grading
{
  margin: 20px auto;
}

#mod-quiz-grading table#grading .header,
#mod-quiz-grading table#grading .cell
{
  padding: 4px;
}

#mod-quiz-grading table#grading .header .commands
{
  display: inline;
}

#mod-quiz-grading table#grading .picture
{
  width: 40px;
}

#mod-quiz-grading table#grading td
{
  border-left-width: 1px;
  border-right-width: 1px;
  border-left-style: solid;
  border-right-style: solid;
  vertical-align: bottom;
}

.mod-quiz .gradingdetails {
  font-size: small;
}
.quizattemptcounts {
  text-align: center;
  clear : left;
  margin: 6px 0;
}
/***
 *** Modules: Resource
 ***/

#mod-resource-view .resourcecontent {
  text-align:center;
  margin:20px;
}

#mod-resource-view .resourcepdf {
  width: 100%;
  padding-top: 15px;
  text-align: center
}

.resourcecontent object {
  height:480px;
  width:600px;
}

.resourcepdf object{
  height: 800px;
  width: 800px;
}

.mod-resource .modified {
  text-align:center;
}

.mod-resource .popupnotice {
  text-align:center;
  margin:40px;
}

.ims-nav-bar {
  margin-top:0.2em;
  position: relative;
}

.ims-nav-button a,
.ims-nav-dimmed {
  padding-left:1em;
  padding-right:1em;
  padding-top:0.2em;
  padding-bottom:0.2em;
}

#ims-containerdiv {
  margin-top:0.2em;
}

#ims-menudiv {
  padding-top:1em;
  padding-right:0.2em;
  position:absolute;
  width:250px;
  overflow:auto;
}

#ims-menudiv ol {
  margin:0em;
  list-style-type:none;
  padding-left:1em;
}

#ims-contentframe {
  position:absolute;
  left:260px;
  border:1px solid;
  width:640px;
  height:480px;
}

#ims-contentframe-no-nav {
  position:absolute;
  border:1px solid;
  width:640px;
  height:480px;
}

#mod-resource-view div#footer {
  margin-top: 5px;
}

/***
 *** Modules: Scorm
 ***/

/***
 *** Modules: Survey
 ***/
.resultgraph {
  text-align:center;
  border:1px solid;
}

.reportsummary,
.studentreport,
.reportbuttons {
  text-align:center;
}

.centerpara {
  text-align:center;
}

.fullnamecell {
  width:10%;
  vertical-align:top;
  white-space: nowrap;
}

.questiontext {
  font-size:1em;
}

.smalltext {
  font-size: 0.75em;
}

#surveyform th {
  font-weight: normal;
  text-align: left;
}
#surveyform th.hresponse {
  text-align: center;
  width: 9%;
}

.rblock label {
  display: block;
  text-align: center;
}

.foundthat,
.preferthat {
  white-space: nowrap;
}

.qnummiddlecell {
  vertical-align:middle;
}

.optioncell {
  width: 50%;
  vertical-align: top;
}

.buttoncell {
  width:5%;
}

.questioncell {
  width:50%;
  vertical-align:top;
}

.whitecell {
  background-color:white;
}
/***
 *** Modules: Wiki
 ***/
.sideblockheading,
.howtowiki {
  text-align:right;
}

.wikisearchform,
.wikilinksblock,
wikiadminactions {
  text-align:center;
}

.wikilinkright{
  text-align:right;
  padding-bottom: 0.5em;
}

.wikiexportbox{
  margin-left:auto;
  margin-right:auto;
}
/***
 *** Modules: Workshop
 ***/
.redfont {
  color: red;
}

.workshopuploadform,
.workshopkey {
  text-align:center;
}


/***
 *** Help files (/lang/-/help)
 ***/
#help hr {
  border: none;
  height: 1px;
  background: #ccc;
}
#help .example1 {
  color: #a00;
}
#help .success {
  color: #080;
}
#help .center {
  text-align: center;
}
#help .moreinfo {
  text-align: right;
}
/* Equivalent to 1 and 5 nested blockquotes respectively. */
#help .indent {
  margin-left: 40px;
}
#help .indent-big {
  margin-left: 160px;
  margin-right:160px;
}
#help pre, #help code {
  background: #eee;
  border: 1px dashed #ddd;
  padding: 3px;
}
/***** standard/styles_layout.css end *****/

/***** /mod/assignment/styles.php start *****/

#mod-assignment-submissions .feedback .content,
#mod-assignment-submissions .feedback .topic,
#mod-assignment-submissions .feedback .picture
{
  padding: 10px;
  border-width:1px;
  border-style:solid;
  border-color:#DDDDDD;
}

#mod-assignment-submissions form#options div {
  text-align:right;
  margin-left:auto;
  margin-right:20px;
}

.mod-assignment .feedback .files {
  float: right;
  background-color: #EFEFEF;
  padding:5px;
}

.mod-assignment .feedback .grade,
.mod-assignment .feedback .outcome,
.mod-assignment .feedback .finalgrade {
  float: right;
}

.mod-assignment .feedback .disabledfeedback {
  width: 500px;
  height: 250px;
}

.mod-assignment .feedback .from {
  float: left;
}

.mod-assignment .feedback .time {
  font-size: 0.8em;
}

.mod-assignment .late {
  color: red;
}

.mod-assignment .files img {
  margin-right: 4px;
}

.mod-assignment .files a {
  white-space:nowrap;
}

#mod-assignment-submissions .generaltable .r1 {
  background-color: #FFFFFF;
}

#mod-assignment-submissions .header .commands {
  display: inline;
}

#mod-assignment-submissions .s0 {
  background: #FFD991;
}

#mod-assignment-submissions table.submissions td,
#mod-assignment-submissions table.submissions th
{
  border-width: 1px;
  border-style: solid;
  border-color: #DDDDDD;
  vertical-align: middle;
  padding-left: 5px;
  padding-right: 5px;
}

#mod-assignment-submissions .submissions .grade {
  text-align: right;
  font-weight:bold;
}

#mod-assignment-submissions .picture {
  width: 35px;
}

#mod-assignment-submissions .fullname {
  text-align: left;
}

#mod-assignment-submissions .timemodified,
#mod-assignment-submissions .timemarked
{
  text-align: left;
  font-size: 0.9em;
}

#mod-assignment-submissions .status {
  text-align: center;
}

#mod-assignment-submissions .submissions .outcome,
#mod-assignment-submissions .submissions .finalgrade {
  text-align: right;
}

#mod-assignment-view #online .singlebutton {
  text-align: center;
}

#mod-assignment-view #dates {
  font-size: 0.8em;
  margin-top: 30px;
  margin-bottom: 30px;
}

#mod-assignment-view #dates .c0{
  text-align:right;
  font-weight:bold;
}

#mod-assignment-view .feedback {
  border-width:1px;
  border-style:solid;
  border-color:#DDDDDD;
  margin-top: 15px;
  width: 80%;
  margin-left: 10%;
  margin-right: 10%;
}

#mod-assignment-view .feedback .topic {
  padding: 4px;
  border-style:solid;
  border-width: 0px;
  border-bottom-width: 1px;
  border-color:#DDDDDD;
}

#mod-assignment-view .feedback .fullname {
  font-weight: bold;
}

#mod-assignment-view .feedback .date {
  font-size: 0.8em;
}

#mod-assignment-view .feedback .content {
  padding: 4px;
}

#mod-assignment-view .feedback .grade {
  text-align: right;
  font-weight:bold;
}

#mod-assignment-view .feedback .left {
  width: 35px;
  padding: 4px;
  text-align: center;
  vertical-align: top;
}

#mod-assignment-submissions .qgprefs #optiontable {
  text-align:right;
  margin-left:auto;
}

#mod-assignment-submissions .fgcontrols {
  margin-top: 1em;
  text-align:center;
}

#mod-assignment-submissions .fgcontrols .fastgbutton{
  margin-top: 0.5em;
}

/***** /mod/assignment/styles.php end *****/

/***** /mod/choice/styles.php start *****/

.mod-choice .results {
  border-collapse: separate;
}

.mod-choice .results .data {
  border-width:1px;
  border-style:solid;
  border-color:#999;
}
/***** /mod/choice/styles.php end *****/

/***** /mod/data/styles.php start *****/

#mod-data-view #sortsearch .c0 {
  text-align: right;
}

#mod-data-view .approve img.icon {
  width:34px;
  height:34px;
}

#mod-data-preset .presetmapping {
  text-align: center;
}

#mod-data-preset .presetmapping table {
  text-align: left;
  margin-left: auto;
  margin-right: auto;
}

#mod-data-preset .overwritesettings {
  margin-bottom: 1em;
}

.mod-data-field .c0 {
  text-align: right;
}

.mod-data-field .fieldadd,
.mod-data-field .sortdefault {
  margin-bottom: 1em;
  margin-top: 1em;
}

.mod-data-field .fieldadd select,
.mod-data-field .sortdefault select {
  margin-left: 1em;
}

.mod-data-field .fieldname {
  width:300px;
}

.mod-data-field .fielddescription {
  width:300px;
}

.presetcontrols form {
  display: inline;
}
/***** /mod/data/styles.php end *****/

/***** /mod/lesson/styles.php start *****/

/***
 *** General styles (scope: all of lesson)
 ***/
 
.mod-lesson .contents {
    text-align: left;
}

.mod-lesson #layout-table {
    width: 100%;
}

.mod-lesson .edit_buttons form,
.mod-lesson .edit_buttons input {
    display: inline;
}

.mod-lesson .clock .content {
    text-align: center;
}

.mod-lesson .addlinks {
    font-size: .8em;
}

.mod-lesson .userinfotable .cell,
.mod-lesson .userinfotable .userpicture {
    vertical-align: middle;
}

.mod-lesson .invisiblefieldset.fieldsetfix {
    display: block;
}

.mod-lesson .invisiblefieldset.fieldsetfix tr {
    text-align: left;
}

/***
 *** Style for view.php
 ***/

#mod-lesson-view .password-form {
    text-align: center;
    margin-top: 20px;
}

#mod-lesson-view .password-form .submitbutton {
    display: inline;
}

/***
 *** Style for essay.php
 ***/

#mod-lesson-essay .graded {
    color:#DF041E;
}

#mod-lesson-essay .sent {
    color:#006600;
}

#mod-lesson-essay .ungraded {
    color:#999999;
}

#mod-lesson-essay .gradetable {
    margin-bottom: 20px;
}

#mod-lesson-essay .buttons {
    text-align: center;
}

/***
 *** Style for responses
 ***/

/* .response style is applied for both .correct and .incorrect */
.mod-lesson .response {
    padding-top: 10px;
}

/* for correct responses (can override .response) */
.mod-lesson .correct {
    /*color: green;*/
}

/* for incorrect responses (can override .response) */
.mod-lesson .incorrect {
    /*color: red;*/
}

/* for highlighting matches in responses for short answer regular expression (can override .incorrect) */
.mod-lesson .matches {
    /*color: red;*/
}

/***
 *** Slide show Style
 ***/

/* NOTE: background color, height and width are set in the lesson settings */
.mod-lesson .slideshow {  
    overflow: auto;
    padding-right: 16px; /* for the benefit of macIE5 only */ 
    /* \ commented backslash hack - recover from macIE5 workarounds, it will ignore the following rule */
    padding-right: 0;
    padding: 15px;
}

/***
 *** Left Menu Styles
 ***/
.mod-lesson .menu .content {
    padding: 0px;
}

.mod-lesson .menu .menuwrapper {
    max-height: 400px;
    overflow: auto;
    vertical-align: top;
    margin-bottom: 10px;
}

.mod-lesson .menu ul {
    list-style: none;
    padding: 5px 0px 0px 5px;
    margin: 0px;
}

.mod-lesson .menu li {
    padding-bottom: 5px;
}

.mod-lesson .leftmenu_selected_link {
}

.mod-lesson .leftmenu_not_selected_link {
}

.mod-lesson .skip {
    position: absolute;
    left: -1000em;
    width: 20em;
}


/***
 *** Lesson Buttons
 ***/

.mod-lesson .lessonbutton a {
  padding-left:1em;
  padding-right:1em;
}

.mod-lesson .lessonbutton a:link,
.mod-lesson .lessonbutton a:visited, 
.mod-lesson .lessonbutton a:hover {
    color: #000;
    text-decoration: none;
}

.mod-lesson .lessonbutton a:link,
.mod-lesson .lessonbutton a:visited {
  border-top: 1px solid #cecece;
  border-bottom: 2px solid #4a4a4a;
  border-left: 1px solid #cecece;
  border-right: 2px solid #4a4a4a;
}

.mod-lesson .lessonbutton a:hover {
  border-bottom: 1px solid #cecece;
  border-top: 2px solid #4a4a4a;
  border-right: 1px solid #cecece;
  border-left: 2px solid #4a4a4a;
}

/* Branch table buttons when displayed horizontally */
.mod-lesson .branchbuttoncontainer.horizontal div,
.mod-lesson .branchbuttoncontainer.horizontal form {
    display: inline;
}

/* Branch table buttons when displayed vertically */
.mod-lesson .branchbuttoncontainer.vertical .lessonbutton {
    padding: 5px;
}

/***
 *** Lesson Progress Bar
 ***    Default styles for this are very basic right now.
 ***    User is supposed to configure this to their liking (like using pictures)
 ***/

.mod-lesson .progress_bar {
    padding: 20px;
}

.mod-lesson .progress_bar_table {
    width: 80%;
    padding: 0px;
    margin: 0px;
}

.mod-lesson .progress_bar_completed {
    /*  Example Use of Image
    background-image: url(http://serv1/moodle/mod/lesson/completed.gif);
    background-position: center;
    background-repeat: repeat-x;
    */
    background-color: green;
    padding: 0px;
    margin: 0px;    
}

.mod-lesson .progress_bar_todo {
    /*  Example Use of Image
    background-image: url(http://serv1/moodle/mod/lesson/todo.gif);
    background-repeat: repeat-x;
    background-position: center;
    */
    background-color: red;
    text-align: left;
    padding: 0px;
    margin: 0px;
}

.mod-lesson .progress_bar_token {
    /*  Example Use of Image
    background-image: url(http://serv1/moodle/mod/lesson/token.gif);
    background-repeat: repeat-none;
    */
    background-color: #000000;
    height: 20px;
    width: 5px;
    padding: 0px;
    margin: 0px;
}
/***** /mod/lesson/styles.php end *****/

/***** /mod/scorm/styles.php start *****/

.structlist  {

  list-style-type: none;

  white-space: nowrap;

  font-size: small;

}

.orgtitle {

  font-weight: bold;

  font-size: small;

}

.mod-scorm .top {

  vertical-align: top;

}

.mod-scorm .scorm-left {

  text-align: left;

}

.mod-scorm .scorm-center {

  text-align: center;

}

.mod-scorm .scorm-right {

  text-align: right;

}

.mod-scorm .scoframe {

   position: relative;

   width: 100%;

   height: 100%;

}



#mod-scorm-player #scormpage {

  position: relative;

  width: 100%;

}

#mod-scorm-player #tochead {

  position: relative;

  text-align: center;

  top: 3px;

  height: 30px;  

}

#mod-scorm-player .toc {

  width: 80%; 

  margin-left: 20%; 

}

#mod-scorm-player .no-toc {

  width: 100%;

}

#mod-scorm-player #scormobject {

  height: 400px; 

}

#mod-scorm-player #scormtop {

  position: relative;

  width: 100%;

  height: 30px;

}

#mod-scorm-player #scormbrowse {

  position: absolute;

  left: 5px;

  top: 0px;

}

#mod-scorm-player #scormnav {

  position: absolute;

  right: 5px;

  top: 0px;

  text-align: center;

  top: 3px;

  width: 100%;

}



#mod-scorm-view .structurehead {

  text-align: center;

}



#mod-scorm-view .structurelist  {

  list-style-type: none;

  white-space: nowrap;

}



#mod-scorm-player #scormbox {

  width: 74%;

  position: absolute;

  right: 0px;

  top: 0px;

}



#mod-scorm-player #tocbox {

  position: relative;

  left: 0px;

  width: 24%;

  font-size: 0.8em;

}



#mod-scorm-player #tochead {

  position: relative;

  text-align: center;

  top: 3px;

  height: 30px;  

}



#toctree {

  position:relative;

  width:100%;

  overflow-x: auto;

  overflow-y: auto;

}

.structurelist  {

  list-style-type: none;

}

#mod-scorm-player .structurelist {

  position: relative;

  list-style-type: none;

  width: 96%;

  margin-left:0;
  
  padding-left: 0;
  
  margin-right:0;
  
  padding-right: 0;
  
  padding-top: 0;
  
  padding-bottom: 0;
  
  margin-top:0;
  
  margin-bottom:0;
  
}



#mod-scorm-player .structurelist ul{

  padding-left: 0.5em;

  margin-left: 0.5em;

}

#mod-scorm-view .structurelist  {

  list-style-type: none;

  white-space: nowrap;

}

a#mod-scorm-log-toggle {
    font-size: 0.7em;
    font-weight: bold;
}/***** /mod/scorm/styles.php end *****/

/***** /mod/workshop/styles.php start *****/

.workshop_feedbackbox {
    margin-top: 5px;
    border-width: 1px;
    border-style: solid;
    border-color: #999999;
}

.workshop_feedbackbox .picture {
    vertical-align: top;
}

.workshop_feedbackbox .author {
    vertical-align: top;
    display: block;
}

.workshop_feedbackbox .time {
    vertical-align: top;
    display: block;
}

.workshop_feedbackbox .content {
    vertical-align: top;
}

.workshop_feedbackbox .comment {
    display: block;
}

.workshop_feedbackbox .teachercomment {
    display: block;
    font-weight: bold;
}
/***** /mod/workshop/styles.php end *****/

/***** /blocks/blog_tags/styles.php start *****/

.block_blog_tags .s20 {
  font-size: 1.5em;
  font-weight: bold;
}

.block_blog_tags .s19 {
  font-size: 1.5em;
}

.block_blog_tags .s18 {
  font-size: 1.4em;
  font-weight: bold;
}

.block_blog_tags .s17 {
  font-size: 1.4em;
}

.block_blog_tags .s16 {
  font-size: 1.3em;
  font-weight: bold;
}

.block_blog_tags .s15 {
  font-size: 1.3em;
}

.block_blog_tags .s14 {
  font-size: 1.2em;
  font-weight: bold;
}

.block_blog_tags .s13 {
  font-size: 1.2em;
}

.block_blog_tags .s12,
.block_blog_tags .s11 {
  font-size: 1.1em;
  font-weight: bold;
}

.block_blog_tags .s10,
.block_blog_tags .s9 {
  font-size: 1.1em;
}

.block_blog_tags .s8,
.block_blog_tags .s7 {
  font-size: 1em;
  font-weight: bold;
}

.block_blog_tags .s6,
.block_blog_tags .s5 {
  font-size: 1em;
}

.block_blog_tags .s4,
.block_blog_tags .s3 {
  font-size: 0.9em;
  font-weight: bold;
}

.block_blog_tags .s2,
.block_blog_tags .s1 {
  font-size: 0.9em;
}

/***** /blocks/blog_tags/styles.php end *****/

/***** /blocks/calendar_month/styles.php start *****/

.block_calendar_month .cal_popup_caption,
.block_calendar_month .cal_popup_fg div {
    font-size: 0.85em !important;
}

.block_calendar_month .filters {
    font-size:0.75em;
    padding: 5px;
}

.block_calendar_month .filters table {
    border-collapse:separate;
    border-spacing: 2px;
    padding: 2px;
}

.block_calendar_month .event_global,
.block_calendar_month .event_course,
.block_calendar_month .event_group,
.block_calendar_month .event_user {
    border-width: 2px;
    border-style: solid;
}
/***** /blocks/calendar_month/styles.php end *****/

/***** /blocks/calendar_upcoming/styles.php start *****/

.block_calendar_upcoming .event .date {
    text-align:right;
}
/***** /blocks/calendar_upcoming/styles.php end *****/

/***** /blocks/course_summary/styles.php start *****/

.block_course_summary .content {
    padding:10px;
}

.block_course_summary .editbutton {
    text-align:right;
}
/***** /blocks/course_summary/styles.php end *****/

/***** /blocks/login/styles.php start *****/

.block_login .logintable {
  text-align:center;
}

.block_login .loginform {
  display:inline;
}

.block_login .loginform .fld input {
  width:5em;
}

.block_login .loginform label {
  padding-right: 4px;
}

.block_login .loginform div {
  margin:0.3em 0.8em;
  text-align:right;
  display:block;
}

.block_login .loginform div.c1.btn {
  text-align:center;
}
/***** /blocks/login/styles.php end *****/

/***** /blocks/news_items/styles.php start *****/

.block_news_items .newlink {
  text-align: center;
}
/***** /blocks/news_items/styles.php end *****/

/***** /blocks/quiz_results/styles.php start *****/

.block_quiz_results {
    text-align: center;
}

.block_quiz_results table.grades .number, 
.block_quiz_results table.grades .grade {
    text-align: right;
    width: 10%;
}

.block_quiz_results table.grades {
    text-align: left;
    width: 100%;
}

.block_quiz_results table.grades caption {
    margin: 1em 0px 0px 0px;
    border-bottom: 1px solid;
    font-weight: bold;
}

.block_quiz_results h1 {
    margin: 4px;
    font-weight: bold;
    font-size: 1.1em;
}
/***** /blocks/quiz_results/styles.php end *****/

/***** /blocks/rss_client/styles.php start *****/

.block_rss_client .link {
  border-top:1px solid;
  border-top-color:#DDDDDD;
  padding-bottom:5px;
  font-size:0.82em;
}

.block_rss_client .description {
  color:#555555;
  font-size:0.78em;
  padding-left:10px;
  padding-bottom:8px;
}

.block_rss_client .title {
  font-size:1.0em;
}

.block_rss_client .image {
}

.blockconfigtable #rssfeeds {
    margin-left: auto;
    margin-right: auto;
    background-color: blue;
}

.blockconfigtable #rssfeeds td.actions {
    text-align: center;
    vertical-align: middle;
    padding: 10px;
}

.blockconfigtable #rssfeeds td.feed {
    vertical-align: middle;
    padding: 5px;
}

.blockconfigtable #rssfeeds .title {
    font-weight: bold;
    margin-bottom: 2px;
}

.blockconfigtable #rssfeeds .url, .blockconfigtable #rssfeeds .description {
    font-size: 0.8em;
}

.blockconfigtable #rssfeeds tr.r0 {
  background-color: #ffffff;
}

.blockconfigtable #rssfeeds tr.r1 {
  background-color: #f0f0f0;
}
/***** /blocks/rss_client/styles.php end *****/

/***** /blocks/search_forums/styles.php start *****/

.block_search_forums .searchform {
    text-align: center;
}

.block_search_forums .searchform img {
    vertical-align: middle;
}

/***** /blocks/search_forums/styles.php end *****/

/***** /grade/report/grader/styles.php start *****/

.flexible th {
    white-space:normal;
}

.gradestable th.user img {
    width: 20px;
    height: 20px;
}

.gradestable th.user, .gradestable th.range {
    white-space: nowrap;
}

.grade-report-grader table#user-grades .catlevel1 {
  background-color: #ffffff;
}
.grade-report-grader table#user-grades .catlevel2 {
  background-color: #eeeeee;
}
.grade-report-grader table#user-grades .catlevel3 {
  background-color: #dddddd;
}

.grade-report-grader table#user-grades td.overridden {
  background-color: #EFD9B3;
}

.grade-report-grader table#user-grades tr.avg td.cell {
    background-color: #efefff;
}

.grade-report-grader table#user-grades tr.odd td.cell {
    background-color: #efefef;
}

.grade-report-grader table#user-grades tr.even td.overridden {
  background-color: #F3E4C0; 
}

.grade-report-grader table#user-grades tr.odd td.overridden {
  background-color: #EFD9A4;
}

.grade-report-grader table#user-grades tr.even td.excluded {
  background-color: #EABFFF; 
}

.grade-report-grader table#user-grades tr.odd td.excluded {
  background-color: #E5AFFF;
}

.grade-report-grader table#user-grades tr.odd th.header { 
    background-color: #efefef;
    background-image: none;
}

.grade-report-grader table#user-grades td.vmarked, .grade-report-grader table#user-grades tr.odd td.vmarked {
    background-color: #ffcc33;
}

.grade-report-grader table#user-grades td.hmarked, .grade-report-grader table#user-grades tr.odd td.hmarked {
    background-color: #ffff99;
}

.grade-report-grader table#user-grades td.hmarked.vmarked, .grade-report-grader table#user-grades tr.odd td.hmarked.vmarked{
    background-color: #ffcc99;
} 

.grade-report-grader table#user-grades tr.groupavg td.cell {
    background-color: #efffef;
}

.grade-report-grader table#user-grades tr.groupavg td.cell {
  font-weight: bold;
  color: #006400;
}

.grade-report-grader table#user-grades tr.avg td.cell {
  font-weight: bold;
  color: #00008B;
}

.grade-report-grader table#user-grades td.cat,
.grade-report-grader table#user-grades td.course {
  font-weight: bold;
}

.grade-report-grader table#user-grades {
    font-size: 80%;
}

.grade-report-grader table#user-grades {
  border-width:1px;
  border-style:solid;
  margin-top: 20px;
}

.grade-report-grader #overDiv table {
  margin: 0;  
}

.grade-report-grader #overDiv table td.feedback {
  border: 0px;
}
.grade-report-grader #overDiv .feedback {
  background-color: #AABBFF;
  color: #000000;
  font-family: Verdana;
  font-size: 70%;
  font-weight: normal;  
}

.grade-report-grader #overDiv .caption {
  background-color: #5566CC;
  color: #CCCCFF;
  font-family: Arial;
  font-size: 70%;
  font-weight: bold;
}

.grade-report-grader div.submit {
  margin-top: 20px;
  text-align: center;
}

.grade-report-grader table#user-grades td {
  border-width:1px;
  border-style:solid;
}

.grade-report-grader table#user-grades tr.heading {
  border-width:0px 0px 0px 0px;
  border-style:solid;
}

.grade-report-grader table#user-grades .heading td {
  border-width:0px 0px 0px 0px;
  border-style:solid;
}

.grade-report-grader table#user-grades th.category {
  border-width:1px 1px 0px 1px;
  border-style:solid;
  vertical-align: top;
}

.grade-report-grader table#user-grades th.user {
  border-width:0px 0px 1px 0px;
  border-style:solid;
}

.grade-report-grader table#user-grades th.useridnumber {
  border-width:0px 0px 1px 1px;
  border-style:solid;
}

.grade-report-grader table#user-grades th.categoryitem,
.grade-report-grader table#user-grades th.courseitem,
.grade-report-grader table#user-grades td.topleft {
  border-width:0px 1px 0px 1px;
  border-style:solid;
  vertical-align: top;
}

.grade-report-grader table#participants th {
  vertical-align: top; 
}

.grade-report-grader table#user-grades td.fillerfirst {
  border-width:0px 0px 0px 1px;
  border-style:solid;
}

.grade-report-grader table#user-grades td.fillerlast {
  border-width:0px 1px 0px 0px;
  border-style:solid;
}

.grade-report-grader table#user-grades th.item {
  border-width:1px 1px 1px 1px;
  border-style:solid;
  vertical-align: top;
}

.grade-report-grader div.gradertoggle {
  display: inline;
  margin-left: 20px;
}

.grade-report-grader table#user-grades {
  margin-left:auto;
  margin-right:auto;
}

.grade-report-grader table#user-grades  th.user {
  text-align:left;
}

.grade-report-grader table#user-grades  td.useridnumber {
  text-align:left;
}

.grade-report-grader table#user-grades  td {
  text-align:right;
}

.grade-report-grader table#user-grades th.range {
  border-width:1px 1px 1px 1px;
  border-style:solid;
}

.grade-report-grader table#user-grades .userpic {
  display: inline;
  margin-right: 10px;
}

.grade-report-grader table#user-grades .quickfeedback {
  border: #000000 1px dashed;
}

.grade-report-grader #siteconfiglink {
  text-align: right;
}

.grade-report-grader table#user-grades .hidden,
.grade-report-grader table#user-grades .hidden a {
  color:#aaaaaa;
}

.grade-report-grader table#user-grades .datesubmitted {
  font-size: 0.7em;
}

.grade-report-grader table#user-grades td.cell {
  padding-left: 5px;
  padding-right: 5px;
}
/***** /grade/report/grader/styles.php end *****/

/***** /grade/report/user/styles.php start *****/


.grade-report-user table#user-grade .datesubmitted {
  font-size: 0.7em;
}

.grade-report-user table#user-grade .courseitem,
.grade-report-user table#user-grade .categoryitem {
  font-weight: bold;
}

.grade-report-user table#user-grade td.cell {
  padding-left: 5px;
  padding-right: 5px;
}

#graded_users_selector {
  float: right;
  text-align: right;
}

/* this must be last if we want to override other category and course item colors */
.grade-report-user table#user-grade .hidden,
.grade-report-user table#user-grade .hidden a {
  color:#aaaaaa;
}
/***** /grade/report/user/styles.php end *****/

