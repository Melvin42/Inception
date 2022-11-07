all:
	mkdir -p /home/zog/data/db_data
	mkdir -p /home/zog/data/wp_data

build:
	sudo docker-compose build \
	&& sudo docker-compose ps

up:
	sudo docker-compose up \
	&& sudo docker-compose ps

down:
	sudo docker-compose down \
	&& sudo docker-compose ps

ps:
	sudo docker-compose ps

re:
	make down
	make all

fclean:
	sudo rm -rf /home/zog/data/db_data/*
	sudo rm -rf /home/zog/data/wp_data/*
