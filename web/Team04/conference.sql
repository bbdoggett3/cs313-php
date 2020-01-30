CREATE TABLE public.user
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL
);
INSERT INTO public.user (username, password, display_name)
VALUES ('vcben', 'password', 'ben');
# Notice that we used "serial" for the datatype of the user table, which
# makes it an integer that will automatically increment the value of each
# item that is inserted.
# Also, notice that we made all of these columns NOT NULL, because they are
# not optional.
# Finally, notice that we made username unique, even though it is not the
# primary key, because we don't want two users with the same username.
CREATE TABLE public.speaker
(
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(100) NOT NULL
);
INSERT INTO public.user (name)
VALUES ('Vincent');
CREATE TABLE public.talk
(
	id SERIAL NOT NULL PRIMARY KEY,
	speaker_id INT NOT NULL REFERENCES public.speaker(id),
	talk TEXT NOT NULL
);
INSERT INTO public.note (note_text)
VALUES ('Quote Here');
CREATE TABLE public.conference
(
	id SERIAL NOT NULL PRIMARY KEY,
	year SMALLINT NOT NULL,
	is_spring BOOLEAN NOT NULL,
	session VARCHAR(100) NOT NULL
);
ALTER TABLE public.conference
ADD session VARCHAR(100) NOT NULL;
# We could potentially store a date for the conference, or even two integers
# for year and month. But in this case, because we know there are only two
# conferences (Spring and Fall), we can restrict the data type to a boolean.
# Now, it is impossible to put bad data in, such as month "2", which would
# not correspond to a valid conference.
CREATE TABLE public.note
(
	id SERIAL NOT NULL PRIMARY KEY,
	user_id INT NOT NULL REFERENCES public.user(id),
	speaker_id INT NOT NULL REFERENCES public.speaker(id),
	talk_id INT NOT NULL REFERENCES public.talk(id),
	conference_id INT NOT NULL REFERENCES public.conference(id),
	note_text TEXT NOT NULL
);
