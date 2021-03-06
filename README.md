SUVI
====
Smart bUilding for energy saVing in Indonesia. &copy; 2014

To-Do
-----
* Scheduling (bug fixes).


Development Log
---------------
Thu Feb 27 11:07:33 WIB 2014
* Added remove scheduling feature by inserting 0 values.

---

Mon Feb 24 11:23:34 WIB 2014
* View device is now connected to database.
* Graph is now connected to database.
* Edit device OK.
* How to set crontab using script:

		http://stackoverflow.com/questions/878600/how-to-create-cronjob-using-bash

* Delay in perl:

		Time::HiRes::sleep(1); #sleep 1 second

* Add scheduling feature (beta).

---

Sun Feb 23 08:37:20 WIB 2014
* Adding update database script.
* Turn on off device now supports db updating (but dashboard still doesn't support it, need to fetch).
* New sql dump: with history table.
* How to set crontab:

		http://www.ubuntututorials.com/use-crontab-ubuntu/

---

Tue Feb 18 16:28:45 WIB 2014
* Add Edit Page (50% working).
* Regex extraction.

---

Mon Feb 17 21:31:10 WIB 2014
* Constructing System logic (CRUD)
* Login OK
* Dashboard is now connected to database
* Add Device OK
* Adding scheduling layout on View Device detail
* Creating database

---

Tue Feb 11 12:14:19 WIB 2014
* Adding Edit Button.
* History OK: Done by upgrading the Plugwise.pm version using commands (Thanks to Mas Azka):

		sudo cpan Device::Plugwise

* Adding regex to fetch the desired history information for further process.

---

Sun Feb  9 16:02:54 WIB 2014
* Revising navigation (header and sidebar).
* Adding graph using morris.js.
* Revising dashboard: is now showing device list.
* Adding about page.

---

Thu Feb  6 17:09:26 WIB 2014
* Clone on laptop.
* Merging log.md with README.

---

Tue Feb  4 15:41:23 WIB 2014
* Making turn_on_off.pl accessible without using sudo, references:
	* http://ubuntuforums.org/showthread.php?t=1132821
	* https://www.digitalocean.com/community/articles/how-to-edit-the-sudoers-file-on-ubuntu-and-centos
* Add this line of code to sudo visudo, to make PHP(www-data) and suvi can execute sudo perl without typing password:

		www-data ALL=(ALL)NOPASSWD:/usr/bin/perl
		suvi ALL=(ALL)NOPASSWD:/usr/bin/perl
	
* Changing dashboard layout

---

Thu Jan 30 16:11:35 WIB 2014
* install sublime text 2
* install guake
* adding ssh keys for github
* install CI, make sure that the rewrite module is installed!
* GitHub Repository

		https://github.com/gtrdp/suvi

License
-------
The MIT License (MIT)

Copyright (c) 2014 Guntur Dharma Putra

Permission is hereby granted, free of charge, to any person obtaining a copy of
this software and associated documentation files (the "Software"), to deal in
the Software without restriction, including without limitation the rights to
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
the Software, and to permit persons to whom the Software is furnished to do so,
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
