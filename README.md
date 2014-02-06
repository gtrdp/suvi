SUVI
====

Smart bUilding for energy saVing in Indonesia.

(c) 2014

Development Log
---------------
Thu Jan 30 16:11:35 WIB 2014
* install sublime text 2
* install guake
* adding ssh keys for github
* install CI, make sure that the rewrite module is installed!

Tue Feb  4 15:41:23 WIB 2014
* Making turn on off pl accessible without using sudo, references:
	* http://ubuntuforums.org/showthread.php?t=1132821
	* https://www.digitalocean.com/community/articles/how-to-edit-the-sudoers-file-on-ubuntu-and-centos
* Add this line of code to sudo visudo, to make PHP(www-data) and suvi can execute sudo perl without typing password:

	www-data ALL=(ALL)NOPASSWD:/usr/bin/perl
	suvi ALL=(ALL)NOPASSWD:/usr/bin/perl
	
* Changing dashboard layout