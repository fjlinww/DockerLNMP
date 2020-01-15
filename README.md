# DockerLNMP
## Introduction
- Deploying a LNMP in docker
- The mysql functions **have not** been tested.

## Documents
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
- install docker environment in your Linux system. I'm using Ubuntu 16.04. 
```
$ # 卸载旧的版本（如有）
$ sudo apt-get remove docker docker-engine docker-ce docker.io
$ # 安装前更新软件源
$ sudo apt-get update
$ # 安装以下包使apt可以通过HTTPS使用存储库（repository）
$ sudo apt-get install -y apt-transport-https ca-certificates curl software-properties-common
$ # 添加Docker官方的GPG密钥
$ curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -
$ # 设置stable存储库
$ sudo add-apt-repository "deb [arch=amd64] https://download.docker.com/linux/ubuntu $(lsb_release -cs) stable"

$ # 再次更新软件源
$ sudo apt-get update
$ # 安装最新版的docker ce（Community Edition）
$ sudo apt-get install -y docker-ce

$ # 查看docker状态
$ systemctl status docker
$ # 启动docker（如果没启动）
$ sudo systemctl start docker
```
- build the containers including nginx, php, and mysql
```
$ docker-compose up -d
```
- restart the containers
```
$ docker-compose restart
```
