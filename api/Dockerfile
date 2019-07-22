FROM swaggerapi/swagger-ui:v3.23.1
ENV PORT 80
EXPOSE 80
RUN chmod +x /usr/share/nginx/run.sh

COPY ./nginx.conf ./cors.conf /etc/nginx/

CMD ["sh", "/usr/share/nginx/run.sh"]
