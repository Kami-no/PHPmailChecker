PHPmailChecker
==============

Check if mailbox exists on the server

Connects to server as another server trying to send mail but after mailbox request it ends session.
It's better to have a PTR record for your server otherwise mostlikly your check will fail.

Has 2 modes to show result:
1. Boolean mode:
   FAIL - connection to server failed or mailbox do not exist;
   TRUE - mostlikely mailbox exists;
2. Extended mode:
   0 - Required email address exists;
   1 - Email address accepted but it looks like the server is working as a relay host;
   2 - Required email address existence was not recovered;
   3 - Required email address does not exist;
   4 - Connection failure;
   5 - No MX records found.

There is an option to show the server communicaion log.
