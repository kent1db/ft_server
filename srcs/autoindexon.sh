rm -f /etc/nginx/sites-enabled/*
rm -f /etc/nginx/sites-available/*
cp ./ssl/ft_server_conf /etc/nginx/sites-enabled/
cp ./ssl/ft_server_conf /etc/nginx/sites-available/

service nginx restart
