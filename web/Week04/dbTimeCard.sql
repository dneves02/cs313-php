# Database TimeCard App

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

CREATE TABLE time_card (
    id SERIAL NOT NULL PRIMARY KEY,
    shift_date DATE NOT NULL,
    shift_type VARCHAR,
    clock_in TIME NOT NULL,
    clock_out TIME NOT NULL
);  