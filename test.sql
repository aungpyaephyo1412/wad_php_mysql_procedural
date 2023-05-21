CREATE TABLE bankers (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL ,
    money INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);
INSERT INTO  bankers (name, money) Values ('mg mg',1500);