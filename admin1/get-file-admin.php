/*~~~~~~Global Setting ~~~~~~~~*/
html,body {
	margin: 0px;
	padding: 0px;
}

body,td {
	font: 10px Verdana, Arial, Helvetica, sans-serif;
	color: #070707;
}

a,a:link,a:visited {
	color: #001C4D;
	text-decoration: none;
}

a:hover,a:active,a:visited:hover {
	color: #FF6131;
	text-decoration: none;
}

a img {
	border: none;
}

ul li {
	line-height: 1.5em;
	display: inline
}

form {
	margin: 0;
}

#leftCol fieldset {
	position: relative;
	padding: 6px;
	margin: 8px;
	border: 1px solid #a1a1a1;
	background-image: url(../images/panel_bg.gif);
	background-repeat: repeat-y;
	background-position: left top;
	background-color: #d9dbdc;
}

#leftCol legend { /*
	position: absolute;
	top: -.5em;
	left: .2em;*/
	top: -5px;
	left: 2px;
	font-size: 11px;
	font-weight: bold;
	color: #000000;
}

ul {
	list-style: none;
}

.clear {
	clear: both;
}

input {
	padding: 0;
	background-color: transparent;
}

/*~~~~~~Layout Setting ~~~~~~~~*/
#leftCol,#rightCol,#body {
	
}

#wrapper {
	margin: 0px 0px;
	min-width: 760px;
	width: 100%;
	padding: 0px;
}

#body {
	position: absolute;
	top: 60px;
	width: 100%;
	border-color: #0000CC;
}

#leftCol {
	background: #e8e8e8;
	width: 265px;
	/*width:255px;*/
	float: left;
	text-align: left;
}

#rightCol {
	width: 100%;
	border: none;
	margin-left: -265px;
	float: right;
}

#rightCol img.ajaxLoadingImg {
	margin-left: 50%;
	margin-top: 100px;
}

#content {
	margin-left: 265px;
	overflow: auto;
	overflow-x: hidden;
	max-height: 380px;
}

.pagination_content {
	margin-left: 265px;
	overflow: auto;
	overflow-x: hidden;
}

.leftToRightArrow {
	background-image: url(../images/arrow_right.png);
	padding: 2px 0 2px 16px;
	background-repeat: no-repeat;
	background-position: 0 50%;
	text-decoration: none;
	height: 100%;
}

/*      forms                */
.inputMtime {
	width: 55px;
	height: 14px;
	font-size: 9px;
}

.radio {
	background-color: none;
}

.calendar_trigger {
	background: none;
	border: none;
	height: 17px;
	vertical-align: bottom;
}

table.tableSearch {
	padding: 0;
	margin: 0;
}

.boxSearch {
	padding: 0;
	margin: 0;
}

.boxSearchItems {
	margin: 0;
	padding: 0;
}

.boxSearchItems td {
	text-align: left;
	margin-left: 5px;
}

.boxSearchItems dt {
	text-align: left;
	font-size: 14px;
	margin: 0;
	padding: 0;
	margin-left: 5px;
}

.boxSearchItems dd {
	display: block;
	margin: 0;
	padding: 0;
	margin-left: 20px;
}

.boxSearchItems dd b {
	margin: 0;
	display: block;
}

#linkSearch {
	float: right;
	padding-right: 8px;
}

.tableSearch {
	margin: 0;
}

p.searchButtons {
	padding-top: 5px;
}

#linkClose {
	float: left;
}

#fileName {
	overflow: hidden;
}

#header {
	text-align: left;
	margin: 0;
	padding: 0;
	padding-top: 0px;
	padding-left: 18px;
	padding-right: 18px;
	height: 59px;
	background-image: url(../images/header.jpg);
	background-repeat: no-repeat;
	background-position: right top;
	background-color: #ececed;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #b3b3b4;
}

#currentFolderInfo dl {
	list-style: none;
	margin: 0;
	padding: 0;
	font-size: 14px;
	font-weight: bold;
	color: #666666;
}

#currentFolderInfo dt {
	font-size: 12px;
	font-weight: bold;
	display: inline;
	margin: 0;
	padding: 0;
	color: #666666;
}

#currentFolderInfo dd {
	display: inline;
}

#currentFolderInfo dd a {
	text-decoration: underline;
}

#viewList {
	position: absolute;
	left: 18px;
	top: 36px;
}

#actionHeader {
	list-style-type: none;
	margin: 0;
	padding: 0;
	text-align: right;
}

#actionHeader li {
	line-height: 24px;
}

/*~~~~~~Links Setting ~~~~~~~~*/
#actionHeader li a,#tickAll,.flagYes,.flagNo {
	padding: 2px 1px 2px 16px;
	background-repeat: no-repeat;
	background-position: 0 50%;
	text-decoration: none;
	height: 100%;
}

#actionInfo {
	background-image: url(../images/info.png);
}

.check_all {
	background-image: url(../images/tickAll.png);
}

.uncheck_all {
	background-image: url(../images/uncheckAll.png);
}

.flagYes {
	background-image: url(../images/flagYes.png);
}

.flagNo {
	background-image: url(../images/flagno.png);
}

#actionCopy {
	background-image: url(../images/copy.png);
}

#actionPaste {
	background-image: url(../images/paste.png);
}

#actionCut {
	background-image: url(../images/cut.png);
}

#actionDelete {
	background-image: url(../images/delete.png);
}

#actionZip {
	background-image: url(../images/zip.png);
}

#actionRefresh {
	background-image: url(../images/refresh.png);
}

#actionUnzip {
	background-image: url(../images/unzip.png);
}

#actionUnzip {
	background-image: url(../images/unzip.png);
}

#actionUpload {
	background-image: url(../images/action/upload.png);
}

#actionNewFolder {
	background-image: url(../images/action/folder_add.png);
}

#actionNewFile {
	background-image: url(../images/action/page_add.png);
}

#tickAll {
	margin-left: 5px;
}

a.action {
	text-decoration: none;
}

;
/*~~~~~~File / Folder Icon ~~~~~~~~*/
.noFlag {
	background-image: none;
}

.cutFlag,.copyFlag { /*padding:2px 0 2px 7px;*/
	width: 7px;
	height: 7px;
	background-repeat: no-repeat;
	background-position: 0 0px;
	overflow: hidden;
	text-decoration: none;
	height: 100%;
}

.cutFlag {
	background-image: url(../images/cut_flag.gif);
}

.copyFlag {
	background-image: url(../images/copy_flag.gif);
}

span.folderEmpty,span.folder,span.folderParent,span.fileUnknown,span.fileText,span.fileWord,span.fileFlash,span.fileVideo,span.filePicture,span.filePPT,span.fileExcel,span.filePhp,span.fileMusic,span.fileExe,span.fileAcrobat,span.fileRTF,span.fileXml,span.fileCode,span.fileZip,span.addMore,span.deleteFile,span.cancel,span.uploadProcessing
	{
	padding: 2px 0 2px 16px;
	background-repeat: no-repeat;
	background-position: 0 50%;
}

span.uploadProcessing {
	background-image: url(../images/uploadProcessing.gif);
}

span.deleteFile,span.cancel {
	background-image: url(../images/flagno.png);
}

span.addMore {
	background-image: url(../images/add.png);
}

span.folderEmpty {
	background-image: url(../images/small_icon/folderEmpty.png);
}

span.folder {
	background-image: url(../images/small_icon/folder.png);
}

span.folderParent {
	background-image: url(../images/small_icon/folderParent.png);
}

span.fileUnknown {
	background-image: url(../images/small_icon/fileUnknown.png);
}

span.fileText {
	background-image: url(../images/small_icon/fileText.png);
}

span.fileWord {
	background-image: url(../images/small_icon/fileWord.png);
}

span.fileFlash {
	background-image: url(../images/small_icon/fileFlash.png);
}

span.fileVideo {
	background-image: url(../images/small_icon/fileVideo.png);
}

span.filePicture {
	background-image: url(../images/small_icon/filePicture.png);
}

span.filePPT {
	background-image: url(../images/small_icon/filePowerpoint.png);
}

span.fileExcel {
	background-image: url(../images/small_icon/fileExcel.png);
}

span.filePhp {
	background-image: url(../images/small_icon/filePhp.png);
}

span.fileMusic {
	background-image: url(../images/small_icon/fileMusic.png);
}

span.fileExe {
	background-image: url(../images/small_icon/fileExe.png);
}

span.fileAcrobat {
	background-image: url(../images/small_icon/fileAcrobat.png);
}

span.fileRTF {
	background-image: url(../images/small_icon/fileRTF.png);
}

span.fileXml {
	background-image: url(../images/small_icon/fileXml.png);
}

span.fileCode {
	background-image: url(../images/small_icon/fileCode.png);
}

span.fileZip {
	background-image: url(../images/small_icon/fileZip.png);
}

/* big icon */
dt.folderEmpty,dt.folder,dt.folderParent,dt.fileUnknown,dt.fileText,dt.fileWord,dt.fileFlash,dt.fileVideo,dt.filePPT,dt.fileExcel,dt.filePhp,dt.fileMusic,dt.fileExe,dt.fileAcrobat,dt.fileRTF,dt.fileXml,dt.fileCode,dt.fileZip
	{
	margin: 0px;
	padding: 0px;
	border: solid #ccc 1px;
	display: block;
	background-color: #ffffff;
	background-repeat: no-repeat;
	background-position: center;
	cursor: pointer;
}

dt.folderEmpty {
	background-image: url(../images/big_icon/folderEmpty.png);
}

dt.folder {
	background-image: url(../images/big_icon/folder.png);
}

dt.folderParent {
	background-image: url(../images/big_icon/folderParent.png);
}

dt.fileUnknown {
	background-image: url(../images/big_icon/fileUnknown.png);
}

dt.fileText {
	background-image: url(../images/big_icon/fileText.png);
}

dt.fileWord {
	background-image: url(../images/big_icon/fileWord.png);
}

dt.fileFlash {
	background-image: url(../images/big_icon/fileFlash.png);
}

dt.fileVideo {
	background-image: url(../images/big_icon/fileVideo.png);
}

dt.filePPT {
	background-image: url(../images/big_icon/filePowerpoint.png);
}

dt.fileExcel {
	background-image: url(../images/big_icon/fileExcel.png);
}

dt.filePhp {
	background-image: url(../images/big_icon/filePhp.png);
}

dt.fileMusic {
	background-image: url(../images/big_icon/fileMusic.png);
}

dt.fileExe {
	background-image: url(../images/big_icon/fileExe.png);
}

dt.fileAcrobat {
	background-image: url(../images/big_icon/fileAcrobat.png);
}

dt.fileRTF {
	background-image: url(../images/big_icon/fileRTF.png);
}

dt.fileXml {
	background-image: url(../images/big_icon/fileXml.png);
}

dt.fileCode {
	background-image: url(../images/big_icon/fileCode.png);
}

dt.fileZip {
	background-image: url(../images/big_icon/fileZip.png);
}

table.tableSummary {
	border-collapse: collapse;
	width: 100%;
}

table.tableSummary tbody td {
	border: none;
	padding: 2px 6px;
	text-align: left;
}

table.tableSummary tbody th {
	border: none;
	color: #000;
	white-space: nowrap;
	padding: 1px 6px;
	text-align: left;
}

/*  text listing*/
#textListing {
	list-style: none;
}

#textListing li {
	width: 150px;
	border: solid #999999 1px;
	display: block;
	float: left;
	margin: 4px 4px;
	padding: 2px 2px;
}

/** thumbnail listing */
.thumbnailListing {
	border: solid #ccc 1px;
	display: block;
	float: left;
	margin: 3px 3px;
	padding: 1px;
	background-color: #f4f4f4;
}

.thumbnailListing dt {
	width: 120px;
	height: 110px;
	text-align: center;
	margin: 2px 2px;
	padding: 0;
	border: solid #ccc 1px;
}

.thumbnailListing dt img {
	vertical-align: middle;
}

.thumbnailListing_info {
	width: 125px;
	display: block;
	height: 25px;
	text-align: center;
	margin: 0px;
}

dd.thumbnailListing_info span,dd.thumbnailListing_info input,dd.thumbnailListing_info a
	{
	vertical-align: middle;
}

/* ~~~ === PAGINATION ===================================================== ~~~ */
.pagination_summany {
	font-weight: bold;
}

p.pagination {
	clear: both;
	margin: 0;
	padding: 5px;
	width: 100%;
	background-color: #e6e6e6;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #FFFFFF;
}

#pagination_parent_link {
	background: url(../images/go_parent.png) no-repeat 100% 50%;
	padding: 2px 6px 2px 10px;
}

a.pagination_first,a.pagination_previous,a.pagination_next,a.pagination_last,a.pagination_group
	{
	background: url(../images/pagination/pagination_left.gif) no-repeat 0
		50%;
	text-decoration: none;
	padding: 2px 0 2px 6px;
	font-size: 11px;
}

a.pagination_first span,a.pagination_previous span,a.pagination_next span,a.pagination_last span,a.pagination_group span
	{
	background: url(../images/pagination/pagination_right.gif) no-repeat
		100% 50%;
	padding: 2px 6px 2px 0;
}

a.pagination_first:hover,a.pagination_previous:hover,a.pagination_next:hover,a.pagination_last:hover,a.pagination_group:hover
	{
	color: #FF9900;
}

a.pagination_active {
	font-weight: bold;
	color: #CC0000;
}

/*~~~~~~Form Setting ~~~~~~~~*/
.input,.inputFile {
	border: 1px solid #86888B;
	font: 12px Verdana, Arial, Helvetica, sans-serif;
	background-color: #fff;
}

.button {
	font: bold 10px Verdana, Arial, Helvetica, sans-serif;
	background: url(../images/button.gif);
	width: 90px;
	height: 20px;
	border: none;
}

/**  Detail View */
#tableList {
	font-size: 100%;
	width: 100%;
}

#tableList thead th {
	text-align: left;
	color: #7a92c2;
	padding: 8px 8px 6px 8px;
	background-color: #DDDBD2;
}

#tableList thead th.docName {
	background: #DDDBD2;
	padding: 2px 0px 2px 20px;
	border-right-width: 2px;
	border-right-style: groove;
}

#tableList tbody td {
	background: #f2f1ee;
	padding: 0;
}

#tableList tbody td.docName {
	background-color: #fff;
	height: 22px;
	border-right-width: 2px;
	border-right-style: groove;
	padding: 2px 0px 2px 20px;
}

#tableList tbody td.docInfo {
	background-color: #f2f1ee;
	height: 22px;
	border-right-width: 2px;
	border-right-style: groove;
	padding: 2px 0px 2px 20px;
}

.fileColumns {
	border-right-width: 2px;
	border-right-style: groove;
}

/*thinkbox*/
.jqmContainer {
	
}

.jqmHeader {
	height: 15px;
}

.jqmHeader a {
	float: right;
	margin-right: 10px;
	margin-top: -5px;
}

.jqmBody table thead th {
	font-size: 16px;
	font-weight: bold;
	text-align: center;
	padding: 5px 5px;
}

.jqmBody table tbody th {
	text-align: right;
	padding: 2px 10px;
}

.jqmBody {
	border: 1px solid #a1a1a1;
	background-image: url(../images/panel_bg.gif);
	background-repeat: repeat-y;
	background-position: left top;
	background-color: #d9dbdc;
}

/*~~~~~~Global Low Priority Setting ~~~~~~~~*/
.left,td.left,th.left,td.leftDisabled {
	text-align: left;
}

.right,td.right,th.right {
	text-align: right;
}

.center,td.center,th.center {
	text-align: center;
}