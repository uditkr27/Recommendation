CREATE TABLE Student(Roll_No NUMBER PRIMARY KEY,Name VARCHAR(25));
CREATE TABLE Lib(Roll_No NUMBER PRIMARY KEY,Books VARCHAR2(50),CONSTRAINT stu_fk FOREIGN KEY(Roll_No) REFERENCES Student(Roll_No));
INSERT INTO Lib VALUES(1,'Phy');
INSERT INTO Student VALUES(1,'ROHIT');
INSERT INTO Lib VALUES(1,'Phy');
INSERT INTO Lib VALUES(1,'Che');
ALTER TABLE Lib DROP PRIMARY KEY;
INSERT INTO Lib VALUES(1,'Che');
SELECT * FROM Lib;
INSERT INTO Student VALUES(3,'RAHUL');
INSERT INTO Lib VALUES(3,'Maths');
DELETE FROM Student WHERE Roll_No=3; 
ALTER TABLE Lib DROP CONSTRAINT stu_fk;
ALTER TABLE Lib ADD CONSTRAINT stu_fk FOREIGN KEY(Roll_No) REFERENCES Student(Roll_No) ON DELETE CASCADE;
DELETE FROM Student WHERE Roll_No=3;
SELECT * FROM Lib;
ALTER TABLE Lib DROP CONSTRAINT stu_fk;
ALTER TABLE Lib ADD CONSTRAINT stu_fk FOREIGN KEY(Roll_No) REFERENCES Student(Roll_No) ON DELETE SET NULL;
DELETE FROM Student WHERE Roll_No=1;
