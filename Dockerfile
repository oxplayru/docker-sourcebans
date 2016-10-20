FROM tutum/apache-php
RUN apt-get update && apt-get install -yq git && rm -rf /var/lib/apt/lists/*
RUN rm -fr /app/
RUN git clone https://github.com/sbpp/sourcebans-pp /tmp/sourcebans
RUN cp -R /tmp/sourcebans/web/* /app/
ADD /config.php /app/config.php
RUN rm -rf /app/install/
RUN rm -rf /app/updater/

