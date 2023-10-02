CREATE TABLE senior_project.Users (
is_admin bool,
is_teacher bool,
is_student bool,
user_id int,
user_firstname varchar(255),
user_lastname varchar(255),
user_email varchar(255),
user_username varchar(255),
user_password varchar(255),
user_sec1 varchar(255),
user_sec2 varchar(255),
PRIMARY KEY (user_id)
);



CREATE TABLE senior_project.Classes (
class_id int,
classteacher_id int,
class_name varchar(225),
PRIMARY KEY (class_id),
FOREIGN KEY (classteacher_id) REFERENCES Users(user_id)
);
