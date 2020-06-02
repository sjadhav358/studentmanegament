/* create databaes  */
create database ITCORNER;

/* 1) create student table*/

create table student(user_id int(30), 
name varchar(100),
email varchar(150),password varchar(100),
address varchar(100),contact_no varchar(100),
branch varchar(100), date varchar(100),profile varchar(100));

ALTER TABLE `student` CHANGE `user_id` `user_id` INT(30) NULL DEFAULT NULL AUTO_INCREMENT, add PRIMARY KEY (`user_id`);

/* insert record */

INSERT INTO `student` (`user_id`, `name`, `email`, `password`, `address`, `contact_no`, `branch`, `date`, `profile`) VALUES ('1', 'sumit', 'sumit@gmail.com', 'sumit@123', 'shambhunagar', '7798968772', 'mca', '7-2-1996', 'sachin.jpg');


/* 2 create faculty */
create table faculty(name varchar(100),email varchar(100),faculty_id int(10),password varchar(100),
address varchar(100),mobile int(50),subject varchar(100),branch varchar(30),birth varchar(100),
profile varchar(100));

ALTER TABLE `faculty` CHANGE `faculty_id` `faculty_id` INT(10) NULL DEFAULT NULL AUTO_INCREMENT, add PRIMARY KEY (`faculty_id`);

INSERT INTO `faculty` (`name`, `email`, `faculty_id`, `password`, `address`, `mobile`, `subject`, `branch`, `birth`, `profile`) VALUES ('sumit jadhav', 'sumit@gmail.com', '1', 'sumit@mail.com', 'Abad', '779896877', 'math', 'mca', '07/02/1996', NULL);

/*3 create table  question */

create table question(sr_no int(30),question varchar(300),keyword varchar(300),answers varchar(100));

INSERT INTO `question` (`question`, `keyword`, `answers`) VALUES ('what is address of goverment engineering college ?', 'address , goverment , engineering', 'osmanpura station road aurangabad');

/* 4 create table utimetable*/
create table utimetable(class varchar(100),division varchar(100),timetable varchar(100));
INSERT INTO `utimetable` (`class`, `division`, `timetable`) VALUES ('mca', 'A', 'timetable.pdf');

/*5 create table vedio*/
create table vedio (class varchar(30),division varchar(300),vediolecture varchar(300),title varchar(300),
description varchar(100));