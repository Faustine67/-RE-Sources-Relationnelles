-- Table vidéo
CREATE TABLE video(
   youtube_id INT PRIMARY KEY,
   title VARCHAR(255),
   thumbnails_url TEXT,
   publicationDate VARCHAR(50)
);

-- Table utilisateur
CREATE TABLE user(
   id_user INT AUTO_INCREMENT PRIMARY KEY,
   firstname VARCHAR(100),
   lastname VARCHAR(100),
   password VARCHAR(255),
   email VARCHAR(255)
);

-- Table post
CREATE TABLE post(
   id_post INT AUTO_INCREMENT PRIMARY KEY,
   text TEXT,
   id_user INT NOT NULL,
   FOREIGN KEY(id_user) REFERENCES user(id_user)
);

-- Table commentaire
CREATE TABLE comment(
   id_comment INT AUTO_INCREMENT PRIMARY KEY,
   text TEXT,
   sendingDate DATETIME,
   id_user INT NOT NULL,
   id_post INT NOT NULL,
   FOREIGN KEY(id_user) REFERENCES user(id_user),
   FOREIGN KEY(id_post) REFERENCES post(id_post)
);

-- Table associative entre video et post
CREATE TABLE video_id_post_id(
   youtube_id INT,
   id_post INT,
   PRIMARY KEY(youtube_id, id_post),
   FOREIGN KEY(youtube_id) REFERENCES video(youtube_id),
   FOREIGN KEY(id_post) REFERENCES post(id_post)
);