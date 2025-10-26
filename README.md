# cron-job-linux-ubuntu

if alway auto run and without enter ``http://localhost:8000/api/v2/update``

# Command Localhost : php auto_update_cron.php
 Run alway : 
```
cd ~/auto-update-cron
nohup php ./auto_update_cron.php > ./update.log 2>&1 &
```
// Stop Run :  
``` 
pkill -f "php ./auto_update_cron.php"
```
