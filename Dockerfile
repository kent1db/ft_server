# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: qurobert <marvin@42.fr>                    +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/01/04 10:29:43 by qurobert          #+#    #+#              #
#    Updated: 2021/01/04 15:18:12 by qurobert         ###   ########lyon.fr    #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

RUN apt-get -y update && apt install -y ufw && apt-get -y install nginx mariadb-server mariadb-client php php-fpm php-mysql php-common php-cli php-common php-json php-opcache php-readline php-json php-mbstring php-xml php-gd php-curl sudo openssl wget libnss3-tools vim 

WORKDIR	.

COPY ./srcs/ .

EXPOSE 80 443

ENTRYPOINT ["bash", "on.sh"]
