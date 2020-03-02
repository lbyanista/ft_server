FROM debian:buster
EXPOSE 80
MAINTAINER mlabrayj
COPY srcs /
RUN bash script.sh
CMD bash ./scriptrun.sh
