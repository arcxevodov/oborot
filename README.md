# Garden

Тестовое задание

*Для проверки понадобится сделать несколько действий:*

- Создать базу данных (MySQL):
```mysql
CREATE DATABASE garden;
USE garden;
CREATE TABLE trees(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL ,
    totalFruits INT NOT NULL,
    totalWeight INT NOT NULL
);
```

- Запустить скрипт:
```shell
php main.php <sql HOSTNAME> <sql USERNAME> <sql PASSWORD> <sql DATABASE>
```
