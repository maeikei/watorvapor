
.PHONY : setup start

start:
	
setup:
	sudo make -C nginx
	sudo make -C apache2

