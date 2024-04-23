CREATE TABLE boundle (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(100),
    info text
);

CREATE TABLE course(
	id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name varchar(25)
);

CREATE TABLE conatins(
	bid int(11),
    cid int(11),
    FOREIGN KEY (cid) REFERENCES course(id),
    FOREIGN KEY (bid) REFERENCES boundle(id)
);
CREATE TABLE registered(
	id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    bid int(11) NOT NULL,
    did int(11) NOT NULL,
    expiring_date date,
    rate int(5),
    cost float,
    FOREIGN KEY (bid) REFERENCES boundle(id),
    FOREIGN KEY (did) REFERENCES dog(id)
)