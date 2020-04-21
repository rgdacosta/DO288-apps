# Use the httpd-parent image as base
FROM quay.io/redhattraining/httpd-parent

# This is used outside of OCP
# It's useful to include it if your customers are looking at using your container image, OUTSIDE OF OCP
EXPOSE 8080

# This is used by OCP
# This is how the service resource inside of a project finds the port used by your container application
LABEL io.openshift.expose-services="8080:http" \
      io.k8s.description="My httpd container application" \
      io.openshift.tags="httpd, web server, apache, apache2"

RUN sed -i -e 's/^Listen 80/Listen 8080/g' /etc/httpd/conf/httpd.conf

RUN chgrp -R 0 /var/log/httpd /var/run/httpd && \
    chmod -R g=u /var/log/httpd /var/run/httpd

USER 1001

