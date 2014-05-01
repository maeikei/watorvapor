WC    ?= $(shell pwd)
NGINX := /opt/nginx/sbin/nginx
NGINX := nginx

.PHONY : all env start restart test release mount mntram apache2

all:start

start:env
	$(NGINX) -p $(WC) -c $(WC)/conf/nginx.conf
restart:env
	$(NGINX) -s reload -p $(WC) -c $(WC)/conf/nginx.conf
test:
	$(NGINX) -t -p $(WC) -c $(WC)/conf/nginx.conf
env:
	mkdir -p $(WC)/logs

apache2:
	sudo cp -rf ./apache2/ports.conf /etc/apache2/ports.conf
	sudo cp -f ./apache2/php5/apache2/php.ini /etc/php5/apache2/
	sudo service apache2 restart

release:
	sudo cp -rf ./* /opt/www_tmpfs/wvRoot/
	sudo make WC=/opt/www_tmpfs/wvRoot/ all
patch-release:
	sudo cp -rf ./* /opt/www_tmpfs/wvRoot/
	sudo make WC=/opt/www_tmpfs/wvRoot/ restart
mntram:
	sudo mkdir -p /opt/www_tmpfs/wvRoot
	sudo mount tmpfs /opt/www_tmpfs/wvRoot -t tmpfs -o size=256m
	sudo touch /opt/www_tmpfs/wvRoot/tmp_mount_lock

