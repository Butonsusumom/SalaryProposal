FROM nginx:latest
MAINTAINER ktsybulko <tsubulko.ksemia@gmail.com>
COPY ./conf /etc/nginx/conf.d/
COPY ./certs /etc/nginx/certs/
CMD nginx -g "daemon off;"
