
<p align="center">
    <em>100% Orange Juice Stats</em>
</p>

# Docker setup for OrangeJuice-Stats
This repo is the docker setup guide of [OrangeJuice-Stats](https://github.com/Hanekihyouka/OrangeJuice-Stats).   


## 0. install Docker Compose


## 1. clone this repo
``git clone git@github.com:Hanekihyouka/OrangeJuice-Stats-Docker.git``

## 2. download latest snapshot
```
wget https://github.com/Hanekihyouka/OrangeJuice-Stats/archive/refs/heads/master.zip
unzip master.zip
mv OrangeJuice-Stats-master/* OrangeJuice-Stats-Docker/www/localhost/
```

## 3. setup your steam-api-key

Get your api key on [Steam](https://steamcommunity.com/dev).   
go to ``OrangeJuice-Stats-Docker/www/localhost/`` edit the **config.php**.

## 4. Running the Containers
```
cd OrangeJuice-Stats-Docker
docker-compose up -d
```

## done.
Visit ``http://your-host/global.php`` for global stats.   
``http://your-host/global.php`` for player stats.   
``http://your-host/render.php?steamid=<steamid>&limit=<rows>&render=<typeid>`` for image.   

You can setup your SSL certificates in ``OrangeJuice-Stats-Docker/services/nginx/ssl/localhost/``
