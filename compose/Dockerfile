FROM ubuntu
RUN apt-get update \
    && apt-get -y upgrade \
    && apt-get -y install net-tools \
    && mkdir /app
COPY ./app /app
WORKDIR /app
RUN ./xampp.run

