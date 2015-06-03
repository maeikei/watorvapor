.PHONY : setup start ram release

all:


start:setup ram release
	echo "auto start"
release:
	cp -rf watorvapor/* /mnt/tmpfs/watorvapor/
	cp -rf watorvapor/.env* /mnt/tmpfs/watorvapor/
	sudo chmod -R 777 /mnt/tmpfs/watorvapor/vendor
	sudo chmod -R 777 /mnt/tmpfs/watorvapor/storage	
setup:
	sudo make -C nginx
	sudo make -C apache2

ram:
	-sudo umount /mnt/tmpfs/watorvapor
	sudo mkdir -p /mnt/tmpfs/watorvapor
	sudo mount tmpfs -t tmpfs -o size=64m /mnt/tmpfs/watorvapor
