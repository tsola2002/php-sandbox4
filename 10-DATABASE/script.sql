--- THIS WILL CREATE A TABLE

CREATE TABLE UserDetails(
userid int(11) primary key,
name varchar(50),
qualification varchar(50),
experience int(11)
);

--- THIS CREATE VALUES FOR OUR TABLE

INSERT INTO UserDetails VALUES
(1, 'Omatsola', 'Bsc', 10);


--- THIS WILLL READ FROM 
SELECT * FROM UserDetails;


--- THIS WILL UPDATE A TABLE COLUMN

UPDATE
UserDetails
SET experience = 50
WHERE userid = 1;

