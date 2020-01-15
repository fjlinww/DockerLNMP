# DockerLNMP
- Deploying a LNMP in docker
- The mysql functions **have not** been tested.

## Introduction
- **app**
This document which is shared by nginx and php, is used to store web applications.

- **database**
This document is used to store database files. 

- **nginx**
Dockerfile to build image wdf000/nginx, and nginx profile "default.conf" in the document config

- **php**
Dockerfile to build image wdf000/mysql, and pho profile "php.ini" in the document config

- **mysql**
Dockerfile to build image wdf000/mysql

## How to use
- build the containers including nginx, php, and mysql
```
$ docker-compose up -d
```
- restart the containers
```
$ docker-compose restart
```
