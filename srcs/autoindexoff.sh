rm -f /etc/nginx/sites-enabled/default
rm -f /etc/nginx/sites-available/default
cp ./ssl/autoindexoff /etc/nginx/sites-enabled/
cp ./ssl/autoindexoff /etc/nginx/sites-available/

service nginx restart
