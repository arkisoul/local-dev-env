# Local PHP development environment based of docker containers

Simple PHP local development environment for unix/linux based OS.
- App container : an alpine based web app container with php7, mysql, pgsql, mongodb, sqlite, pdo, etc php drivers served through php-fpm.
- Server container : an alpine based nginx server with dynamic server name routing.
    - named project url with .box and .lara (for laravel apps)
    - dns routing through host dnsmasq and .box/.lara resolvers
- Gearman container : for background job processing
- RDBMS : alpine based mariadb sql database
- Nosql : bionic based mongodb container
- PgSql : alpine based PostreSql container


## How to setup

### Prerequisites
- Install [docker](https://docs.docker.com/install/)
- Install [docker-compose](https://docs.docker.com/compose/install/)
- Install [dnsmasq](http://www.thekelleys.org.uk/dnsmasq/doc.html). A lightweight DNS, DHCP manager.
- Install [git](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git)

### Setup
- Configure dnsmasq to resolve `.box` and `.lara` (for laravel apps) to `localhost/127.0.0.1`
    - Add these lines in your `dnsmasq.conf` file (general location /etc/dnsmasq.conf)
    ```
    address=/.box/127.0.0.1
    address=/.lara/127.0.0.1
    ```
    - Create two files box and lara in /etc/resolver (create resolver dir if not exist) with content 
    ` nameserver 127.0.0.1 `
    - start and enable dnsmasq service to start on system start
    ```
    sudo systemctl enable dnsmasq.service
    sudo systemctl start dnsmasq.service
    ```
- Clone [repo](https://github.com/arkisoul/local-dev-env.git)
    ```
    git clone repo folder
    cd folder
    ```

- Run `docker-compose up` to start local php dev env
- Type `test.box` in your fav browser to verify the setup