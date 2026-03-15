  
CREATE TABLE Nomination (
    NominationID INT NOT NULL,
    Nominee VARCHAR(50),
    Category VARCHAR(50),
    FilmName VARCHAR(50),
    PRIMARY KEY (NominationID)
);

CREATE TABLE Events (
    EventID INT NOT NULL,
    EventName VARCHAR(50),
    EventSlot TIME,
    EventManager VARCHAR(50),
    PRIMARY KEY (EventID)
);

CREATE TABLE Award (
    Award_ID VARCHAR(50),
    Award_name VARCHAR(50),
    NominationID INT,
    PRIMARY KEY (Award_ID),
    FOREIGN KEY (NominationID) REFERENCES Nomination(NominationID)
);

CREATE TABLE Presenter (
    Presenter_ID INT NOT NULL,
    Presenter_name VARCHAR(50),
    Pnumber BIGINT,
    Award_ID VARCHAR(50),
    PRIMARY KEY (Presenter_ID),    
    FOREIGN KEY(Award_ID) REFERENCES Award(Award_ID)
);



CREATE TABLE Guest (
    Guest_ID VARCHAR(50),
    Guest_name VARCHAR(50),
    GPnumber BIGINT,
    PRIMARY KEY (Guest_ID)
);

insert into Guest values(8000,'Amithabh Bacchan',8438766450);
insert into Guest values(8001,'Jaya Bacchan',8438776450);
insert into Guest values(8002,'Anil kapoor',8738766450);
insert into Guest values(8003,'Javedh Akhthar',8438766470);
insert into Guest values(8004,'Anupam kher',8498766450);
insert into Guest values(8005,'Khiron kher',8438796450);
insert into Guest values(8006,'Rekha',9438766450);
insert into Guest values(8007,'Hema Malini',9435566450);

insert into Nomination values(2000,'Shahrukh Khan','Actor','Pathan');
insert into Nomination values(2001,'Siddharth Malhothra','Actor','Shershah');
insert into Nomination values(2002,'Ranbir kapoor','Actor','Brahmasthra');
insert into Nomination values(2003,'Deepika padukone','Actress','Pathan');
insert into Nomination values(2004,'Kiara adwani','Actress','Shershah');
insert into Nomination values(2005,'Alia bhat','Actress','brahmasthra');
insert into Nomination values(2006,'Siddharth Anandh','Director','Pathan');
insert into Nomination values(2007,'Vishnuvardhan','Director','Shershah');
insert into Nomination values(2008,'Ayan mukherji','Director','Brahmasthra');
insert into Nomination values(2009,'Shilpa Rao','Singer','Pathan');
insert into Nomination values(2010,'Jubin Nautiyal','Singer','Shershah');
insert into Nomination values(2011,'Arjith Singh','Singer','Brahmasthra');
insert into Nomination values(2012,'Vishal-Shekhar','Music Director','Pathan');
insert into Nomination values(2013,'John Stewart Eduri','Music director','Shershah');
insert into Nomination values(2014,'Vlbhavi merchant','Choreography','Pathan');
insert into Nomination values(2015,'Ganesh acharya','Choreography','Brahmasthra');
insert into Nomination values(2016,'Satchith Paulose','Cinematography','Pathan');
insert into Nomination values(2017,'Kamaljeet negi','Cinematography','Shershah');
insert into Nomination values(2018,'Manikandhan Pankaj','Cinematography','Brahmasthra');

insert into Award values('A100','Best Actor',2000);
insert into Award values('A200','Best Actress',2004);
insert into Award values('A300','Best Director',2007);
insert into Award values('A400','Best Singer',2009);
insert into Award values('A500','Best Music Director',2012);
insert into Award values('A600','Best Choreographer',2014);
insert into Award values('A700','Best Cinematographer',2018);

insert into Presenter values(9000,'Salman Khan',8723498036,'A100');
insert into Presenter values(9001,'Malaika Arora',8723398036,'A200');
insert into Presenter values(9002,'Tabu',8723498009,'A300');
insert into Presenter values(9003,'A R Rahman',8755598036,'A400');
insert into Presenter values(9004,'Akshay Kumar',9923498036,'A500');
insert into Presenter values(9005,'Raveena Tandon',9623498036,'A600');
insert into Presenter values(9006,'Aishwarya Rai Bacchan',9023498036,'A700');

insert into events values(101,'Opening Ceremony','10:00:00','Manoj');
insert into events values(102,'Welcome dance','10:30:00','Vinod');
insert into events values(103,'Award presentation','10:40:00','Priyanka');
insert into events values(104,'Singing Performance','11:00:00','Likitha');
insert into events values(105,'Award presentation','11:15:00','Ananya');
insert into events values(106,'Drama','11:40:00','Tejas');
insert into events values(107,'Award presentation','12:00:00','Bharath');
insert into events values(108,'Musical band','12:30:00','Pranav');
insert into events values(109,'Award presentation','12:50:00','Suraksha');
insert into events values(110,'Standup comedy','13:20:00','Shalini');
insert into events values(111,'Award presentation','13:40:00','Kumar');
insert into events values(112,'Dance performance','14:10:00','Arpitha');
insert into events values(113,'Award presentation','14:30:00','Monisha');
insert into events values(114,'Mimicry','14:50:00','Jyothi');
insert into events values(115,'Award presentation','15:00:00','Neha');
insert into events values(116,'Fashion walk','15:20:00','Vishnu');
insert into events values(117,'Award presentation','15:40:00','Bindhu');
insert into events values(118,'Instant painting','16:00:00','Chandru');
insert into events values(119,'Award presentation','16:20:00','Dinesh');
insert into events values(120,'Theme song','16:50:00','Ganesh');
insert into events values(121,'Closing cermony','17:00:00','Lakshana');