WC    ?= $(shell pwd)
NGINX := /opt/nginx/sbin/nginx

.PHONY : all env start restart test release mount mntram

all:start

start:env
	$(NGINX) -p $(WC) -c $(WC)/conf/nginx.conf
restart:env
	$(NGINX) -s reload -p $(WC) -c $(WC)/conf/nginx.conf
test:
	$(NGINX) -t -p $(WC) -c $(WC)/conf/nginx.conf
env:
	mkdir -p $(WC)/logs

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

