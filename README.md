
<p align="center">
    <em>100% Orange Juice Stats</em>
</p>

# Docker setup for OrangeJuice-Stats
This repo is the docker setup guide of [OrangeJuice-Stats](https://github.com/Hanekihyouka/OrangeJuice-Stats).   


## 0. install Docker Compose
```
curl -fsSL get.docker.com -o get-docker.sh

sudo systemctl enable docker --now
```

## 1. clone this repo
```
git clone git@github.com:Hanekihyouka/OrangeJuice-Stats-Docker.git

cd OrangeJuice-Stats-Docker
```

## 2. setup your steam-api-key
Get your api key on [Steam](https://steamcommunity.com/dev).   
```echo "<?php \$_config['apikey'] = 'YOUR_API_KEY_HERE'; ?>" > www/localhost/config.php```

## 3. download latest snapshot to www/localhost
```
wget https://github.com/Hanekihyouka/OrangeJuice-Stats/archive/refs/heads/master.zip \
    && ln -s www/localhost OrangeJuice-Stats-master \
    && unzip -n master.zip \
    && rm OrangeJuice-Stats-master \
    && rm master.zip
```

## 4. Running the Containers
```
docker compose up -d
```

## done.
Visit ``http://your-host/global.php`` for global stats.   
``http://your-host/global.php`` for player stats.   
``http://your-host/render.php?steamid=<steamid>&limit=<rows>&render=<typeid>`` for image.   

You can setup your SSL certificates in ``OrangeJuice-Stats-Docker/services/nginx/ssl/localhost/``
