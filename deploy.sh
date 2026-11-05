#!/bin/bash
# deploy.sh
scp -P 2222 -r ./app/* vm-webserver@localhost:/var/www/html/
ssh -p 2222 vm-webserver@localhost "sudo systemctl reload nginx"