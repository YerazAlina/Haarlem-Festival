/* CREATE ALL TABLES */

/* we can use the same location table for all events */
CREATE TABLE `venues`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50) NOT NULL,
    `address` VARCHAR(50) NOT NULL,
    `postalCode` VARCHAR(10) NOT NULL,
    `city` VARCHAR(20) NOT NULL,

    PRIMARY KEY(`id`),
)

/* we can also put all artists in one table (dance and jazz)*/
CREATE TABLE `artists`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50),
    `genre` VARCHAR(50),

    PRIMARY KEY(`id`),
)

CREATE TABLE `artist_event`
(
    `artist_id` INT NOT NULL,
    `event_id` INT NOT NULL,

    FOREIGN KEY(`artist_id`) REFERENCES `artists`(id),
    FOREIGN KEY(`event_id`) REFERENCES `daneEvents`(id)

)

CREATE TABLE `sessions`
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(50),

    PRIMARY KEY(`id`),
)

/* 
    to make sure all events (From all festivals) have unique IDs we could have a 
    a parent table EVENTS that is being referenced in the danceEvents table (is_A relationship)
    because now we could end up with two events in one invoice with the same id 
*/
CREATE TABLE `danceEvents`
(
    `id`    INT NOT NULL AUTO_INCREMENT,
    `start_dateTime` DATETIME NOT NULL,
    `end_dateTime` DATETIME NOT NULL,
    `venue` INT NOT NULL,
    `session` INT NOT NULL,
    `capacity` INT,
    `price`  FLOAT NOT NULL,

    PRIMARY KEY(`id`),
    FOREIGN KEY(`venue`) REFERENCES `venues`(id),
    FOREIGN KEY(`session`) REFERENCES `sessions`(id),
)


/* FILL ALL TABLES */

/* ARTISTS */
INSERT INTO `artists`(`name`, `genre`) 
VALUES  (`Hardwell`, `dance house`),
        (`Armin van Buuren`, `trance techno`),
        (`Martin Garrix`, `dance electronic`),
        (`Tiësto`, `trance techno minimal`),
        (`Afrojack`, `house`)

/* VENUES */
INSERT INTO `venues`(`name`, `address`, `postalCode`, `city`)
VALUES  (`Club Stalker`, `Kromme Elleboogsteeg 20`, `2011TS` `Haarlem`),
        (`Openluchttheater`, `Hoge Duin en Daalseweg 2`, `2061AG` `Bloemendaal`),
        (`Jopenkerk`, `Gedempte Voldersgracht 2,`, `2011WD` `Haarlem`),
        (`Lichtfabriek`, `Minckelersweg 2`, `2031EM` `Haarlem`),
        (`Club Ruis`, `Smedestraat 31`, `2011RE` `Haarlem`),
        (`XO the Club`, `Grote Markt 8`, `2011RD` `Haarlem`)

/* SESSIONS */
INSERT INTO `sessions` (`name`)
VALUES  (`Back2Back`),
        (`Club`),
        (`TiëstoWorld`)


/* DANCE EVENTS */
INSERT INTO 'danceEvents' (`start_datetime`, `end_datetime`, `venue`, `session`, `capacity`, `price`)
VALUES  (`20210729 02:00:00 PM`, `20210729 11:00:00 PM`, 4, 1, 1500, 75.00),
        (`20210729 10:00:00 PM`, `20210729 11:30:00 PM`, 1, 2, 200, 60.00),
        (`20210729 10:00:00 PM`, `20210729 11:30:00 PM`, 3, 2, 300, 60.00),
        (`20210729 10:00:00 PM`, `20210729 11:30:00 PM`, 6, 2, 200, 60.00),
        (`20210729 10:00:00 PM`, `20210729 11:30:00 PM`, 5, 2, 200, 60.00),

        
        (`20210730 08:00:00 PM`, `20210730 02:00:00 AM`, 2, 1, 2000, 110.00),
        (`20210730 10:00:00 PM`, `20210730 11:30:00 PM`, 4, 2, 300, 75.00),
        (`20210730 08:00:00 PM`, `20210730 02:00:00 AM`, 3, 2, 1500, 60.00),
        (`20210730 11:00:00 PM`, `20210730 00:30:00 AM`, 1, 2, 200, 60.00),

        
        (`20210731 02:00:00 PM`, `20210731 11:00:00 PM`, 2, 1, 2000, 110.00),
        (`20210731 06:00:00 PM`, `20210731 09:30:00 PM`, 1, 2, 300, 60.00),
        (`20210731 07:00:00 PM`, `20210731 08:30:00 PM`, 3, 2, 1500, 60.00),
        (`20210731 09:00:00 PM`, `20210731 10:30:00 PM`, 6, 2, 200, 90.00),

INSERT INTO `artist_event` ( `event_id`,`artist_id`)
VALUES  (1,5),
        (1,6),
        (2,4),
        (3,1),
        (4,2),
        (5,3),
        (6,1),
        (6,3),
        (6,2),
        (7,4),
        (8,6),
        (9,5),
        (10,6),
        (10,4),
        (10,5),
        (11,3),
        (12,2),
        (13,5)
