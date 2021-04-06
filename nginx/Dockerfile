FROM nginx

MAINTAINER wdf000

RUN apt-get update && apt-get install -y \
    nano \
    && rm -r /var/lib/apt/lists/*

EXPOSE 8080

WORKDIR /myWebApp

