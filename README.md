Steps to fix this

Find the running MySQL process:

ps aux | grep mysqld


This will list the running MySQL server(s). Look for the PID (the number in the second column).

Stop it properly:

sudo /usr/local/mysql/support-files/mysql.server stop


If that doesn’t work, kill the process manually:

sudo kill -9 <PID>


Start MySQL normally:

sudo /usr/local/mysql/support-files/mysql.server start


If you still can’t log in as root, then you can start with --skip-grant-tables after stopping all MySQL processes, because now no mysqld process will exist.
