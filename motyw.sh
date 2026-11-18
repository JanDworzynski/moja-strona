#!/bin/bash
# instalacja motywu darkwolf do phpMyAdmin
cd /var/www/html
curl -L -o darkwolf.zip https://files.phpmyadmin.net/themes/darkwolf/5.2/darkwolf-5.2.zip
unzip -o darkwolf.zip -d motyw
rm darkwolf.zip
ls motyw/darkwolf
