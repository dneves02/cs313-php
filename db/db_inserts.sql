$ heroku addons:create heroku-postgresql:hobby-dev
$ heroku config -s
DATABASE_URL= 'postgres://uaxuoahacaehsj:0fe3a8009bb1895ec30c9f73b234a9d6de1e361c9f477bd591fcfe699b078e58@ec2
-54-158-222-248.compute-1.amazonaws.com:5432/d8srftkdeo3t65'


# First Create the database
CREATE DATABASE timecard;

# Connect to the database, so that our tables, etc., will be there
\c timecard;

# When you run these commands at Heroku, you won't need (or be able to) create
# your own separate database first. It will already be created and you will
# be connected to it.

# A few helpful commands you might want during the process:
# \dt - Lists the tables
# \d+ public.user - Shows the details of the user table
# DROP TABLE public.user - Removes the user table completely so we can re-create it
# \q - Quit the application and go back to the regular command prompt

CREATE TABLE public.user (
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	user_password VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
    first_name VARCHAR (255),
    last_name VARCHAR (355),
    birth_date DATE,
    hire_date DATE  
);

INSERT INTO public.user (username , user_password, email, first_name , last_name, birth_date, hire_date)
VALUES('dneves', 'pass1234', 'dneves02@gmail.com', 'Davi', 'Neves', '1983-07-02', '2020-06-29');

INSERT INTO public.user (username , user_password, email)
VALUES('joe', 'mypass', 'dntest@zeeksgeeks.com');


CREATE TABLE employees (
    id SERIAL NOT NULL PRIMARY KEY,
    first_name VARCHAR (255),
    last_name VARCHAR (355),
    birth_date DATE NOT NULL,
    hire_date DATE NOT NULL
);

CREATE TABLE time_card (
    id SERIAL NOT NULL PRIMARY KEY,
    shift_date DATE NOT NULL,
    shift_type VARCHAR NOT NULL,
    clock_in TIME NOT NULL,
    clock_out TIME NOT NULL
);  

#Select * From time_card;
INSERT INTO time_card (shift_date, shift_type, clock_in, clock_out)
VALUES('2020-09-29','Morning', '08:00:00', '12:00:00'),
      ('2020-09-29','Afternoon', '13:00:00', '17:00:00'),
      ('2020-09-30','Night', '18:00:00', '22:00:00'),
      ('2020-10-03','Afternoon', '18:00:00', '22:00:00'),
      ('2020-10-04','Morning', '18:00:00', '22:00:00'),
      ('2020-10-04','Afternoon', '18:00:00', '22:00:00'),
      ('2020-10-05','Night', '18:00:00', '22:00:00');