# Wordpress task

### Steps to deploy Wordpress
1. Run the OpenSSL utility to generate your self-signed certificate:
    ```
    openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout localhost.key -out localhost.crt
    ```
    NOTE: You can provide any information in this process except Common Name. Ensure to give an "localhost"
    ![example](https://github.com/raj3k/wordpress/blob/main/1.png)

    Once the process is completed successfully, you should have the localhost.crt and localhost.key in the certs directory.
  
2. Run docker compose command:
    ```
    docker-compose up
    ```

3. Initiate MySQL database to work with Wordpress:
    - Enter interactive shell within MySQL Docker container using below command:
      ```
      docker exec -it wordpress-mysql-1 /bin/bash
      ```
    - Run copied script to container:
      ```
      /run_mysql_init_script.sh
      ```
    - Exit container:
      ```
      exit
      ```
4. Enter ```https://localhost``` into web browser. You should see "famous five-minute WordPress installation page".


## Reference
[Official Ubuntu guide to deploy Wordpress](https://ubuntu.com/tutorials/install-and-configure-wordpress#1-overview)
