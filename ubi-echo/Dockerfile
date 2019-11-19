FROM registry.access.redhat.com/ubi8/ubi:8.0
RUN mkdir /var/opt/my_app
RUN chgrp -R 0 /var/opt/my_app && \
    chmod -R g=u /var/opt/my_app
USER 1001
CMD bash -c "while true; do echo test >> /var/opt/my_app/my_file; sleep 60; done"

