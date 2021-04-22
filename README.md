# IP Hit

This is simple IP hit counter by user using PHP Lumen framework and Mariadb

## Usage
1. Clone this repo
2. run `docker-compose up -d` inside the directory
3. run database migration to create db and table by using `docker container exec -it ip-hit_ip-hit_1 php artisan migrate`
4. test the result by curl into an ip address of the machine that image run

## Output
The output of the service will be :
```
User address = 172.18.0.1 <~ User Ip Address
Hits = 4 <~ Hit count
```

## Scaling
To scale the service, we need to separate the deployment of the service and database, event better if we use managed database such as Cloud SQL or equivalent, so the service can be replicated and scale horizontally.
