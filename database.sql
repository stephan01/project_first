CREATE TABLE users (
id INTEGER (12) NOT NULL PRIMARY KEY AUTO_INCREMENT,
username VARCHAR (128) NOT NULL,
password VARCHAR (128) NOT NULL
);

CREATE TABLE comments (
cid INTEGER (13) NOT NULL PRIMARY KEY AUTO_INCREMENT,
user_id VARCHAR (128) NOT NULL,
date DATETIME NOT NULL,
message TEXT NOT NULL
);
