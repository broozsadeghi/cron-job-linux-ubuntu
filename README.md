# cron-job-linux-ubuntu

# Command Localhost : php auto_update_cron.php
 Run alway : 
```
cd ~/auto-update-cron
nohup php ./auto_update_cron.php ./update.log 2>&1 &
```
// Stop Run :  
``` 
pkill -f "php ./auto_update_cron.php"
```
