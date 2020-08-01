FROM ubuntu
RUN apt-get update \
    && apt-get -y upgrade \
    && apt-get -y install net-tools \
    && mkdir /store
COPY ./store /store
WORKDIR /store
RUN ./xampp.run
WORKDIR /htdocs
