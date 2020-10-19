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
	password VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL
);

CREATE TABLE employees (
    id SERIAL NOT NULL PRIMARY KEY,
    first_name VARCHAR (255),
    last_name VARCHAR (355),
    birth_date DATE NOT NULL,
    hire_date DATE NOT NULL
);

CREATE TABLE time_card (
    id SERIAL NOT NULL PRIMARY KEY,
    date DATE NOT NULL,
    shift VARCHAR NOT NULL,
    clock_in TIME NOT NULL,
    clock_out TIME NOT NULL
);  