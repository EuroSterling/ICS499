
Steps to deploy

[1] Extract the contents into your htdocs folder. It creates a directory called "HMS".

[2] Start XAMPP. Start phpmyadmin. Create a database called "ceremonies"
- In the ceremonies you will need to create id, name, floor, room, occupied, alert, and status.
- User: Id, First Name, Last Name, e-mail. Id will be used to id the user if it is employee or admin. 

[3] Import htdocs/hms/datafiles/ceremonies_db.sql

It creates two tables - 

[4] Start your web application "hms" (it is for schedule app).
http://localhost/capp

[5] You can login as ADMIN using these credentials

****Credentials****
Username: admin@hms.com
Password: 12345
