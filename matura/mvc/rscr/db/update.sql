CREATE TABLE boundle (
    id int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(100),
    info text
);

CREATE TABLE course(
	id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    name varchar(25)
);

CREATE TABLE contains(
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
INSERT INTO boundle (id, name, info) VALUES
(1, 'Boundle 1', 'This is boundle 1'),
(2, 'Boundle 2', 'This is boundle 2'),
(3, 'Boundle 3', 'This is boundle 3');
INSERT INTO course (id, name) VALUES
(1, 'Course 1'),
(2, 'Course 2'),
(3, 'Course 3');
INSERT INTO contains (bid, cid) VALUES
(1, 1),
(1, 2),
(2, 3);
INSERT INTO registered (id, bid, did, expiring_date, rate, cost) VALUES
(1, 1, 1, '2022-12-31', 5, 100.00),
(2, 2, 1, '2023-01-31', 4, 80.00),
(3, 3, 1, '2023-02-28', 3, 60.00);