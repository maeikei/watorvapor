wvRoot
======

http://www.watorvapor.com configure

install env from picuntu.  
sudo apt-get install build-essential git libpcre3 libpcre3-dev libssl-dev libxslt-dev libxml2-dev libgd2-xpm-dev php5-gd php5-geoip php5-dev libgeoip-dev  nodejs


compile nginx  
./configure --prefix=/opt/nginx --with-http_ssl_module  --with-http_spdy_module  --with-http_realip_module --with-http_addition_module  --with-http_xslt_module  --with-http_image_filter_module  --with-http_geoip_module  --with-http_sub_module  --with-http_dav_module  --with-http_flv_module  --with-http_mp4_module  --with-http_gunzip_module  --with-http_gzip_static_module  --with-http_auth_request_module  --with-http_random_index_module
  --with-http_secure_link_module  --with-http_degradation_module  --with-http_stub_status_module  
