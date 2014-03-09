WC    := $(shell pwd)
NGINX := /opt/nginx/sbin/nginx

.PHONY : all env start restart test

all:start

start:env
	$(NGINX) -p $(WC) -c $(WC)/conf/nginx.conf
restart:env
	$(NGINX) -s reload -p $(WC) -c $(WC)/conf/nginx.conf
test:
	$(NGINX) -t -p $(WC) -c $(WC)/conf/nginx.conf
env:
	mkdir -p $(WC)/logs
	
