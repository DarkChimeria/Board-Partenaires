CREATE DATABASE IF NOT EXISTS shareboard;
USE shareboard;

CREATE TABLE IF NOT EXISTS users ( 
    id INT NOT NULL AUTO_INCREMENT , 
    name VARCHAR(255) NOT NULL , 
    email VARCHAR(255) NOT NULL , 
    password VARCHAR(255) NOT NULL , 
    register_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS shares ( 
    id INT NOT NULL AUTO_INCREMENT , 
    user_id INT NOT NULL , 
    title VARCHAR(255) NOT NULL , 
    body TEXT NOT NULL , 
    link VARCHAR(255) NOT NULL , 
    create_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`id`)
) ENGINE = InnoDB;

INSERT INTO `shares` (`id`, `user_id`, `title`, `body`, `link`, `create_date`) VALUES 
(NULL, '1', 'Share One', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sit amet lacus vel nisl sollicitudin sodales at vitae leo. Integer eget ligula a mauris pulvinar consectetur quis in nisl.', 'http://linkone.com', CURRENT_TIMESTAMP), 
(NULL, '1', 'Share Two', 'Collicitudin sodales at vitae leo. Integer eget ligula a mauris pulvinar consectetur quis in nisl.', 'http://google.com', CURRENT_TIMESTAMP);