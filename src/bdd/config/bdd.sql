CREATE TABLE users(
   id_users INT AUTO_INCREMENT,
   firstname VARCHAR(50) ,
   lastname VARCHAR(50) ,
   username VARCHAR(50) ,
   password VARCHAR(50) ,
   phone VARCHAR(50) ,
   birthday_date DATE,
   country VARCHAR(50) ,
   postal_code INT,
   gender VARCHAR(50) ,
   job VARCHAR(256) ,
   role VARCHAR(50) ,
   PRIMARY KEY(id_users),
   UNIQUE(username)
);

CREATE TABLE events(
   id_events INT AUTO_INCREMENT,
   start_date DATETIME,
   start_location VARCHAR(255) ,
   end_date DATETIME,
   end_location VARCHAR(255) ,
   skill_requirements VARCHAR(255) ,
   material_requirements VARCHAR(255) ,
   meteorological_conditions VARCHAR(255) ,
   legal_conditions VARCHAR(255) ,
   limit_registration_date DATETIME,
   event_score INT,
   member_score INT,
   PRIMARY KEY(id_events)
);

CREATE TABLE manage(
   id_users INT,
   id_events INT,
   PRIMARY KEY(id_users, id_events),
   FOREIGN KEY(id_users) REFERENCES users(id_users),
   FOREIGN KEY(id_events) REFERENCES events(id_events)
);

CREATE TABLE participate(
   id_users INT,
   id_events INT,
   PRIMARY KEY(id_users, id_events),
   FOREIGN KEY(id_users) REFERENCES users(id_users),
   FOREIGN KEY(id_events) REFERENCES events(id_events)
);
