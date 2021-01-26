# DockerLNMP
## Introduction
- Deploying a LNMP in docker-compose

## Folders
- **myWebApp**
This document which is shared by nginx and php, is used to store web applications.

- **database**
This document is used to store database files. Please remove all the contents in this folder when you start the docker-compose.

- **nginx**
Dockerfile to build image wdf000/nginx, and nginx profile "default.conf" in the document config

- **php**
Dockerfile to build image wdf000/mysql, and pho profile "php.ini" in the document config

- **mysql**
Dockerfile to build image wdf000/mysql

## How to use
- Delete the all files in the folder of **database**

- Create and start containers
```
$ docker-compose up -d
```
- Restart services
```
$ docker-compose restart
```
- Stop and remove containers, networks, images, and volumes
```
$ docker-compose down
```
