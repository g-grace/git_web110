<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 3.2 Final//EN">

<HTML>
<body bgcolor="#42426f" text="#ffffff" link="#ffff00" vlink="#93db70" alink="#cc
3232">       
<HEAD>
	<TITLE>Welcome</TITLE>
</HEAD>

<BODY>
<CENTER>
<H1><?php
$userinfo = posix_getpwnam(get_current_user());
print $userinfo{'gecos'};
?></H1>
<H1>Welcome to your Web Space!</H1>
<hr size=3 width=80% nodhade>
<P><H2>Please click <a href="http://seattlecentral.edu/computing/stuwebaccts.php">HERE</a>
for instructions on how to customize your web page.
</H2>
<hr size=3 width=80% nodhade>
</CENTER>
</BODY>
</HTML>
