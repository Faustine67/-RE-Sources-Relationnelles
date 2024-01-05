CREATE TABLE video(
   youtube_id INT,
   url TEXT,
   title VARCHAR(256),
   publicationDate VARCHAR(50),
   PRIMARY KEY(youtube_id)
);

CREATE TABLE user(
   id_user INT,
   firstname VARCHAR(100),
   lastname VARCHAR(100),
   password VARCHAR(255),
   email VARCHAR(255),
   PRIMARY KEY(id_user)
);

CREATE TABLE post(
   id_post INT,
   text TEXT,
   id_user INT NOT NULL,
   PRIMARY KEY(id_post),
   FOREIGN KEY(id_user) REFERENCES user(id_user)
);

CREATE TABLE comment(
   id_comment INT,
   text TEXT,
   sendingDate DATETIME,
   id_user INT NOT NULL,
   id_post INT NOT NULL,
   PRIMARY KEY(id_comment),
   FOREIGN KEY(id_user) REFERENCES user(id_user),
   FOREIGN KEY(id_post) REFERENCES post(id_post)
);

CREATE TABLE video_id_post_id(
   youtube_id INT,
   id_post INT,
   PRIMARY KEY(youtube_id, id_post),
   FOREIGN KEY(youtube_id) REFERENCES video(youtube_id),
   FOREIGN KEY(id_post) REFERENCES post(id_post)
);

