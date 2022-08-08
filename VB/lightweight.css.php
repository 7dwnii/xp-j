<?php
header("Content-type: text/css");
    
/*
  last Updated with Lightweight Style 1.0.2, 21-03-2011
  
  The main colors that most would want to change are listed below.  More complex
  changes can be made by editing the CSS further down.  

  The first 5 sets are the main colours to change.
  
*/


/////DEFAULT STYLE///////////////////////////////////////////////////////////

/*Backgrond and Font Color of whole page - only outer edge shows. */
$BodyBG="#efefe9";
$BodyFC="#000000";

/* BG and Font Color for links which hand from the top of the screen (Logout and PC Mode) */
/* Also used in postbit as background for username/date of post */
$TopLnkBG="#C5D6E2";
$TopLnkFC="#000000";

/* Navbar background and Font Color*/
$NavBarBG="#2E4355";
$NavBarFC="#FFFFFF";

/* Background and Font Color for Titles - this is used for Category headings and Thread titles */
/* It is also the Footer background color */
$TitleBG="#7192a8";
$TitleFC="#FFFFFF";

/* Background and font color or post content, ForumHome */
$MsgBG="#FFFFFF";
$MsgFC="#000000";
//*****************************************************
// You can further refine by editing the colours below.
// ****************************************************

/* Background of the body of your site - you probably want to leave this as white */
$BodyWrap="#FFFFFF";


/* Background color for Quotes and also for the login box */
$QuoteBG="#FFFFCC";
$QuoteFC="#514721";

/* Background and Font Color for Notices */
$NoticeBG="#FFFFCC";
$NoticeFC="#514721";

/* Background Color for Announcements */
$AnnBG="#FFCC66";
$AnnFC="#000000";

/*Background and Font COlor of Sticky Threads */
$StickyBG="#FFFF99";
$StickyFC="#000000";

/* Logo Image Location - the logo fileshould be less than 40px high */
$Logo="images/misc/mobilelogo.png";

/* New PM Notification Font Colour */
$NewPMCol="#FF0000";

/* Border Color of most borders */
$Border="#999999";

////END DEFAULT STYLE///////////////////////////////////////////////////////

/////LIGHT GREEN STYLE///////////////////////////////////////////////////////////

/*Backgrond and Font Color of whole page - only outer edge shows. */
//$BodyBG="#efefe9";
//$BodyFC="#000000";

/* BG and Font Color for links which hand from the top of the screen (Logout and PC Mode) */
/* Also used in postbit as background for username/date of post */
//$TopLnkBG="#B1D0AE";
//$TopLnkFC="#000000";

/* Navbar background and Font Color*/
//$NavBarBG="#60795E";
//$NavBarFC="#FFFFFF";

/* Background and Font Color for Titles - this is used for Category headings and Thread titles */
/* It is also the Footer background color */
//$TitleBG="#75A171";
//$TitleFC="#FFFFFF";

/* Background and font color or post content, ForumHome */
//$MsgBG="#FFFFFF";
//$MsgFC="#000000";




//////// EXAMPLE OF A DARK GREEN STYLE, JUST UNCOMMENT TO TEST///////////////////////////////////////////////////
/*    Backgrond and Font Color of whole page - only outer edge shows. 
//$BodyBG="#008000";
//$BodyFC="#000000";

/*    BG and Font Color for links which hand from the top of the screen (Logout and PC Mode) */
/*    Also used in postbit as background for username/date of post */
//$TopLnkBG="#008000";
//$TopLnkFC="#FFFFFF";

/*    Navbar background and Font Color */
//$NavBarBG="#000000";
//$NavBarFC="#FFFFFF";

/*    Background and Font Color for Titles - this is used for Category headings and Thread titles */
/*    It is also the Footer background color */
//$TitleBG="#008000";
//$TitleFC="#FFFFFF";

/*    Backgriound and font color or post content nad ForumHome / ForumDisplay */
//$MsgBG="#CCFFCC";
//$MsgFC="#000000";
//////// END STYLE GREEN ///////////////////////////////////////////////

?>
body
{
	color: <?php echo $BodyFC; ?>;
	background:<?php echo $BodyBG; ?>;
	margin: 0px;
	font-size: .9em;
	padding: 0px;
	font-family: Arial, Verdana,Geneva,Helvetica,sans-serif;
	-moz-border-radius:4px;-webkit-border-radius:4px; 
}
body a
{
	color: <?php echo $BodyFC; ?>;
}
.bodywrapping
{
	width:95%; 
	background-color:<?php echo $BodyWrap; ?>;
	margin-left:auto;
	margin-right:auto;
	margin-bottom:auto;
	margin-top:0px;
	padding:4px;
	padding-top:0px;
	border: 1px solid #D6D6CF; 
	border-top:0px;
	-moz-border-radius:0px 0px 4px 4px;
	-webkit-border-radius:0px 0px 4px 4px;
}
#newpm
{
	text-decoration:blink;
	color: <?php echo $NewPMCol; ?>;
	font-weight:bold;
}
.logo
{
	height:40px;
	width:95%;
	background:url(<?php echo $Logo; ?>) no-repeat left;
	margin:auto;
}
.toplinks
{
	background: <?php echo $TopLnkBG; ?>;
	color: <?php echo $TopLnkFC; ?>;
	padding: 4px;
	border: 1px solid <?php echo $Border; ?>;
	margin-top:10px;
	border:0px;
	text-decoration:none;
	-moz-border-radius-bottomleft:4px;-webkit-border-bottom-left-radius:4px;
	-moz-border-radius-bottomright:4px;-webkit-border-bottom-right-radius:4px;
}
.toplinks a
{
	color: <?php echo $TopLnkFC; ?>;
}
.navbar
{
	background-color: <?php echo $NavBarBG; ?>;
	color: <?php echo $NavBarFC; ?>;
	padding: 4px;
	text-decoration:none;
	text-align:center;
	width:100%-4px;
	border:0px;
	-moz-border-radius-topleft:4px;-webkit-border-top-left-radius:4px;
	-moz-border-radius-topright:4px;-webkit-border-top-right-radius:4px;
	-moz-border-radius-bottomleft:4px;-webkit-border-bottom-left-radius:4px;
	-moz-border-radius-bottomright:4px;-webkit-border-bottom-right-radius:4px; 
}
.navbar a
{
	color: <?php echo $NavBarFC; ?>;
	text-decoration:none;
	padding: 2px;
}
.navbarbelow , .quote
{
	background:<?php echo $QuoteBG; ?>;
	color:<?php echo $QuoteFC; ?>;
	border:1px solid #dddddd;
	margin-top:4px;
	padding:4px;
	-moz-border-radius-topleft:4px;-webkit-border-top-left-radius:4px;
	-moz-border-radius-topright:4px;-webkit-border-top-right-radius:4px;
	-moz-border-radius-bottomleft:4px;-webkit-border-bottom-left-radius:4px;
	-moz-border-radius-bottomright:4px;-webkit-border-bottom-right-radius:4px;

}
.notice
 {
	padding:4px;
	border:1px solid;
	margin-top: 4px;	
	background:<?php echo $NoticeBG; ?>;
	color:<?php echo $NoticeFC; ?>;
	border-color:#FFD324;
	text-align:center;
	-moz-border-radius-topleft:4px;-webkit-border-top-left-radius:4px;
	-moz-border-radius-topright:4px;-webkit-border-top-right-radius:4px;
	-moz-border-radius-bottomleft:4px;-webkit-border-bottom-left-radius:4px;
	-moz-border-radius-bottomright:4px;-webkit-border-bottom-right-radius:4px;
} 
.notice a
 {
	color:<?php echo $NoticeFC; ?>;
}
.announce
{
	background-color: <?php echo $AnnBG; ?>;
}	color: <?php echo $AnnFC; ?>;
}

.header
{
	text-align:left;
	font-weight: bold;
	font-size:1.1em;
	padding: 6px;
	margin-top:10px;
}
.titlebg
{
	background-color:<?php echo $TitleBG; ?>;
	color: <?php echo $TitleFC; ?>;
	text-decoration: none;
	font-weight: bold;
	font-size:1em;
	padding: 4px;
	margin-left:auto;
	margin-right:auto;
	margin-top:4px;
	border:1px solid <?php echo $TitleBG; //$Border; ?>;
	-moz-border-radius-topleft:4px;-webkit-border-top-left-radius:4px;
	-moz-border-radius-topright:4px;-webkit-border-top-right-radius:4px;
}
.titlebg a
{
	color: <?php echo $TitleFC; ?>;
	text-decoration:none;
}
.windowbg
{
	background-color:<?php echo $MsgBG; ?>;
	color:<?php echo $MsgFC; ?>;
	font-size:.9em;
	padding: 4px;
	width:100% -8px;
	margin-lefT:auto;
	margin-right:auto;
	border-left:1px solid <?php echo $TopLnkBG; //$Border; ?>;
	border-right:1px solid <?php echo $TopLnkBG; //$Border; ?>;
	border-bottom:1px solid <?php echo $TopLnkBG; //$Border; ?>;
}
.windowbg a
{
	color:<?php echo $MsgFC; ?>;
}
.oldwindowbg
{
	padding: 3px;
	border-left:1px solid <?php echo $TitleBG; //$Border; ?>;
	border-right:1px solid <?php echo $TitleBG; //$Border; ?>;
	border-bottom:1px solid <?php echo $TitleBG; //$Border; ?>;
}
.oldwindowbg a
{
	color:<?php echo $BodyFC; ?>
}

.newwindowbg
{
	font-weight: bold;
	padding: 3px;
	border-left:1px solid <?php echo $TitleBG; //$Border; ?>;
	border-right:1px solid <?php echo $TitleBG; //$Border; ?>;
	border-bottom:1px solid <?php echo $TitleBG; //$Border; ?>;
}
.Oldwindowbg2, .windowbg2
{
	background: <?php echo $TopLnkBG; ?>;
	color: <?php echo $TopLnkFC; ?>;
	padding: 4px;
	border: 1px solid <?php echo $TopLnkBG; //$Border; ?>;
	margin-top:10px;
	text-decoration:none;
}
.Oldwindowbg2 a, .windowbg2 a 
{
	color: <?php echo $TopLnkFC; ?>;
}
.Unreadwindowbg2
{
	background: <?php echo $TopLnkBG; ?>;
	color: <?php echo $TopLnkFC; ?>;
	padding: 4px;
	border: 1px solid <?php echo $TopLnkBG; //$Border; ?>;
	margin-top:10px;
	text-decoration:none;
	font-weight:bold;
}
.Unreadwindowbg2 a
{
	color: <?php echo $TopLnkFC; ?>;
}
.thread_dot, .thread_hot, .thread_dot_hot, .thread_, .thread_lock,.thread, .thread_moved, .thread_new
{
	background-color: <?php echo $TopLnkBG; ?>;
	color: <?php echo $TopLnkFC; ?>;
	padding: 4px;
	width:100%-4px;
	margin-left:auto;
	margin-right:auto;	
	font-weight: normal;
	border-left:1px solid <?php echo $TopLnkBG; //$Border; ?>;
	border-right:1px solid <?php echo $TopLnkBG; //$Border; ?>;
	border-bottom:1px solid <?php echo $TopLnkBG; //$Border; ?>;
}
.thread_dot a, .thread_hot a, .thread_dot_hot a, .thread_ a, .thread_lock a,.thread a, .thread_moved a, .thread_new a, .thread_dot_hot_new a
{
	color: <?php echo $TopLnkFC; ?>;
}
.sticky, .sticky_hot, .sticky_dot,.sticky_dot_hot, .sticky_hot_new, .sticky_, .sticky_new, .sticky_dot_hot_new
{
	background-color: <?php echo $StickyBG; ?>;
	color: <?php echo $StickyFC; ?>;
	padding: 4px;
	width:100%-4px;
	margin-left:auto;
	margin-right:auto;
	border-left:1px solid <?php echo $Border; ?>;
	border-right:1px solid <?php echo $Border; ?>;
	border-bottom:1px solid <?php echo $Border; ?>;
}
.sticky a, .sticky_hot a, .sticky_dot a,.sticky_dot_hot a, .sticky_hot_new a, .sticky_ a, .sticky_new a, .sticky_dot_hot_new a
{
	color: <?php echo $StickyFC; ?>;
}
.thread_lock  a,.lock  a,.thread_lock ,.lock 
{
	text-decoration: line-through;
}
.quote
{
	padding: 2px;
	margin-top:2px;
	margin-bottom:2px;
	font-size: .9em; 
}
.forumold,.forumnew,.forumlink, .forumold_lock, .forumnew_lock
{
	padding:4px;
	margin:auto;
	border-left:1px solid <?php echo $TitleBG; //$Border; ?>;
	border-right:1px solid <?php echo $TitleBG; //$Border; ?>;
	border-bottom:1px solid <?php echo $TitleBG; //$Border; ?>;
}
.forumold a,.forumnew a,.forumlink a
{
	color:<?php echo $MsgFC; ?>
}

.new, ._new, .forumnew
{
	font-weight:bold;
}
.date
{
	background-color: #E6E7DC;
	padding: 2px;
	border-left: 1px solid #000000;
	border-right: 1px solid #000000;
}

.footlink , .footlink a
{
	text-align:center;
	padding:5px 3px 2px 3px;
	color: <?php echo $MsgFC; ?>;
}
.footer,.footer a
{
	background: <?php echo $TitleBG; ?>;
	color: <?php echo $TitleFC; ?>;
	border-top: 0px ;
	padding:4px;
	text-align:center;
	font-size:.9em;
	-moz-border-radius-bottomleft:4px;
	-webkit-border-bottom-left-radius:4px;
	-moz-border-radius-bottomright:4px;
	-webkit-border-bottom-right-radius:4px;
}
#btn 
{
	position:relative;
	padding: 2px 2px;
	font-size: 1em; 
	font-family: Tahoma, Calibri, Verdana, Geneva, sans-serif;
	line-height: 1.230;
	border: 1px solid <?php echo $Border; ?>;
	text-decoration:none;
	color: #000000;
	background:#e9e9e9 url(images/gradients/generic_button.png) repeat-x top left;	
	-moz-border-radius:4px;-webkit-border-radius:4px;
}