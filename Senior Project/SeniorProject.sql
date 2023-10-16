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
user_secans1 varchar(255),
user_sec2 varchar(255),
user_secans2 varchar(255),
PRIMARY KEY (user_id)
);

CREATE TABLE senior_project.Admins(
    admin_id int,
    admin_fname varchar(255),
    admin_lname varchar(255),
    admin_email varchar(255),
    admin_uid int,
    PRIMARY KEY (admin_id),
    FOREIGN KEY (admin_fname) REFERENCES Users(user_firstname),
    FOREIGN KEY (admin_lname) REFERENCES Users(user_lastname),
    FOREIGN KEY (admin_email) REFERENCES Users(user_email),
    FOREIGN KEY (admin_uid) REFERENCES Users(user_id)
);

CREATE TABLE senior_project.Teachers(
    teacher_id int,
    teacher_fname varchar(255),
    teacher_lname varchar(255),
    teacher_email varchar(255),
    teacher_uid int,
    PRIMARY KEY (teacher_id),
    FOREIGN KEY (teacher_fname) REFERENCES Users(user_firstname),
    FOREIGN KEY (teacher_lname) REFERENCES Users(user_lastname),
    FOREIGN KEY (teacher_email) REFERENCES Users(user_email),
    FOREIGN KEY (teacher_uid) REFERENCES Users(user_id)
);

CREATE TABLE senior_project.Students(
    student_id int,
    student_fname varchar(255),
    student_lname varchar(255),
    student_email varchar(255),
    student_uid int,
    PRIMARY KEY (student_id),
    FOREIGN KEY (student_fname) REFERENCES Users(user_firstname),
    FOREIGN KEY (student_lname) REFERENCES Users(user_lastname),
    FOREIGN KEY (student_email) REFERENCES Users(user_email),
    FOREIGN KEY (student_uid) REFERENCES Users(user_id)
);

CREATE TABLE senior_project.Classes (
class_id int,
classteacher_id int,
class_name varchar(225),
PRIMARY KEY (class_id),
FOREIGN KEY (classteacher_id) REFERENCES Teachers(teacher_id)
);
