-- Table vidéo
CREATE TABLE video(
   youtube_id VARCHAR(20) PRIMARY KEY,
   title VARCHAR(255) NOT NULL,
   thumbnails_url TEXT NOT NULL,
   publicationDate DATE NOT NULL
);

-- Table utilisateur
CREATE TABLE user(
   id_user INT AUTO_INCREMENT PRIMARY KEY,
   firstname VARCHAR(100) NOT NULL,
   lastname VARCHAR(100) NOT NULL,
   password VARCHAR(255) NOT NULL,
   email VARCHAR(255) NOT NULL
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
   text TEXT NOT NULL,
   sendingDate DATETIME NOT NULL,
   id_user INT NOT NULL,
   id_post INT NOT NULL,
   FOREIGN KEY(id_user) REFERENCES user(id_user),
   FOREIGN KEY(id_post) REFERENCES post(id_post)
);

-- Table associative entre video et post
CREATE TABLE video_id_post_id(
   id_videopost INT AUTO_INCREMENT PRIMARY KEY,
   youtube_id VARCHAR(20) NOT NULL,
   id_post INT NOT NULL,
   FOREIGN KEY(youtube_id) REFERENCES video(youtube_id),
   FOREIGN KEY(id_post) REFERENCES post(id_post)
);