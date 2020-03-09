

#### yunjiaofuH5发布代码脚本 
```
#!/bin/bash
cd /mnt/www/yunjiaofuH5
git pull origin master

if [ $1 == "staging" ]; then
        rsync -av --exclude ".git" --exclude "node_modules" /mnt/www/yunjiaofuH5/ 39.98.65.141:/mnt/www/yunjiaofuStaging
else
        rsync -av --exclude ".git" --exclude "node_modules" /mnt/www/yunjiaofuH5/ 39.98.65.141:/mnt/www/yunjiaofuH5
fi

echo "SYNC Complete!"
```
