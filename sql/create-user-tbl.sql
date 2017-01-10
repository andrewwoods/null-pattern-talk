
CREATE TABLE user (
  id INTEGER PRIMARY KEY AUTO_INCREMENT,
  login VARCHAR(40) UNIQUE,
  email VARCHAR(100) UNIQUE,
  password VARCHAR(100),
  firstname VARCHAR(40),
  lastname VARCHAR(40),
  date_created DATE
) 
ENGINE=InnoDB
CHARACTER SET = 'utf8mb4'
COMMENT = 'Data about user account information' ;

-- Use `SHOW TABLE STATUS` or `SHOW FULL COLUMNS FROM user` to see 
-- additional information about tables, including comments.

