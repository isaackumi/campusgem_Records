


CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100),
  `last_name` varchar(100)
  `email` varchar(50),
  `contact` varchar(10) ,
  `institution` varchar(10),
  `facebook` varchar(10),
  `year` int(50),
  `profile` varchar(255),
  PRIMARY KEY (user_id)
);



CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT ,
  `username` varchar(100),
  `email` varchar(50),
  `password` varchar(10),
  `profile` VARCHAR(255),
 PRIMARY KEY (admin_id)
);




INSERT into `admin` (`first_name`,`email`,`password`)
VALUES('isaackumi','isaac.kumi@ashesi.edu.gh','123405');
