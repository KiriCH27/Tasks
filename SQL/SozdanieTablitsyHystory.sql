Use [Training]
CREATE TABLE History (
history_id int,
trainee_id int,
course_id int,
start int,
"end" int,
status tinyint,
name varchar (255) NOT NULL,
description varchar (255) NOT NULL,
PRIMARY KEY (history_id)
)