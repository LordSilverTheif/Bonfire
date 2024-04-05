#!/bin/bash
DATE=$(date +%d-%b-%y-%H_%M)
mysqldump -ubonfire_user -pPassword123 -d -B --add-drop-database bonfire > ../database/dump_${DATE}.sql