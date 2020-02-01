
#THis will store the users name and password
CREATE TABLE public.user_intern
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	display_username VARCHAR(100) NOT NULL
);

#This is the interests that the user has, and 
#will help the user find an appropriate internship.
CREATE TABLE public.majors_intern  
(
	id SERIAL NOT NULL PRIMARY KEY,
	major VARCHAR(256) NOT NULL UNIQUE,


);

#THis is a table where the user will be able
#to see an image and the information on the
#internship.
CREATE TABLE public.internships
(
	id SERIAL NOT NULL PRIMARY KEY,
	internship TEXT
);
