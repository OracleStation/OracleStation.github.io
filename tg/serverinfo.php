<?php //<--- you see this shit right here, that php tag, it better be the first thing in the file
		//If there is even a space or a newline before that tag, shit will break
    // Connection settings:

    $servers = Array();

    /*
    Example: (copy paste this to somewhere AFTER the comment and fill with your own information)
    If you have multiple servers, list them one after the other. Change the id from 1 to 2, 3, 4, etc. tho.

    "address" and "port": is the ip or url you use to connect: Normally you see
    byond://123.123.123.123:56372. The 123.123.123.123 part is the address, the 56372
    part is the port. Fill with your own information, obviously. If you use an url
    and you connect to something like byond://game.mysite.com:1234, then
    game.mysite.com is the address and 1234 the port
    "servername": is just a string that gets written on the image. Can be
    pretty much anything
	errortext, when defined, replaces the "connection failed" error with the string given

    //My Server
    $servers[1] = Array();
    $servers[1]["address"] = "192.168.0.100";
    $servers[1]["port"] = 56372;
    $servers[1]["servername"] = "SS13: My Server";

    */

    //Copy paste the code above to after this line

    //Basil
    $servers[0] = Array();
    $servers[0]["address"] = "byond.oraclestation.com";
    $servers[0]["port"] = 5000;
    $servers[0]["servername"] = "SS13: Oracle Station";
    //$servers[0]["errortext"] = "KEVIN!!!!!!!!!!!.";

 ///\/ you see this shit right here, that closing php tag, it better be the last thing in the file
		//If there is even a space or a newline after that tag, shit will break
?>
