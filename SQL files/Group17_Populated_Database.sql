USE SCHOOLDATABASE;

INSERT INTO SCHOOL (SchoolName,Address) VALUES ('Rio College','2/1 Mahamodara, Galle');

INSERT INTO CLASS (ClassID,ClassName) VALUES
('C0001','Grade1'),
('C0002','Grade2'),
('C0003','Grade3'),
('C0004','Grade4'),
('C0005','Grade5');

INSERT INTO PARENT (ID,FirstName,MidlleName,LastName,Relationship,Address) VALUES 
('904526157V','Kamala','Nipun','Hettige','Father','23/1 Peradeniya, Kandy'),
('904547517V','Jayantha','Malage','Gallage','Father','232A/1 Peradeniya, Kandy'),
('904789557V','Wasantha','Saman','Hithanadura','Father','46/1 Peradeniya, Kandy'),
('904512577V','Lakshan','Jayalath','Rupasinghe','Father','123/1 Mahamodara, Galle'),
('904782357V','Thisara','Ishara','Samaranayaka','Father','63/1 Karapitiya, Galle'),
('904103257V','Vishwa','Ashen','Liyanage','Father','45/1 Katugastota, Kandy'),
('904784937V','Sandun','Kasun','Walawedurage','Father','88/1 Waduraba, Galle');

INSERT INTO STUDENT (FirstName,MiddleName,LastName,StudentID,BirthDay,Address,Sex,SchoolName,ParentID,ClassID) VALUES 
('Thisara','Manohara','Hithanadura','E00001','2020-01-01','281/1 Siyabalagahwatta, Mahamodara, Galle','Male','Rio College','904526157V','C0002'),
('Sandun','Sudara','Hithanadura','E00002','2020-01-02','281/1 Siyabalagahwatta, Mahamodara, Galle','Male','Rio College','904526157V','C0001'),
('Kasun','Ravilal','Wickramasinghe','E00003','2020-01-21','21/1 Mapalagama, Waduraba, Galle','Male','Rio College','904784937V','C0003'),
('Ishara','Madushan','Liyanage','E00004','2020-02-01','38/4 Bataduwa, Akmeermama, Galle','Male','Rio College','904526157V','C0004'),
('Pasan','Malaka','Kapuge','E00005','2020-01-07','81/1 Galle Fort, Galle','Male','Rio College','904103257V','C0005'),
('Thushan','Thiwanka','Wickramasinghe','E00006','2020-01-21','21/1 Hapugala, Galle','Male','Rio College','904789557V','C0003'),

('Chandupa','Wicky','Samaranayaka','E00007','2020-04-01','281/1 Siyabalagahwatta, Mahamodara, Galle','Male','Rio College','904526157V','C0002'),
('Hasahan','Abey','Silva','E00008','2020-04-02','281/1 Siyabalagahwatta, Mahamodara, Galle','Male','Rio College','904526157V','C0001'),
('Supun','Pulsara','Messi','E00009','2020-04-21','21/1 Mapalagama, Waduraba, Galle','Male','Rio College','904784937V','C0003'),
('Nipun','Sandaruwan','Ronaldo','E00010','2020-05-01','38/4 Bataduwa, Akmeermama, Galle','Male','Rio College','904526157V','C0004'),
('Ishan','Lakshitha','Salah','E00011','2020-04-07','81/1 Galle Fort, Galle','Male','Rio College','904103257V','C0005'),
('Asanka','Gamage','Kante','E00012','2020-03-21','21/1 Hapugala, Galle','Male','Rio College','904789557V','C0003'),

('Thisara','Manohara','Hithanadura','E00013','2020-07-01','281/4 Kanampitiya, Galle','Male','Rio College','904526157V','C0002'),
('Sandun','Sudara','Hithanadura','E00014','2020-03-02','25/1 Dikela, Galle','Male','Rio College','904526157V','C0001'),
('Kasun','Ravilal','Wickramasinghe','E00015','2020-11-21','21/1 Kithulampitiya, Galle','Male','Rio College','904784937V','C0003'),
('Ishara','Madushan','Liyanage','E00016','2020-05-01','3/4 Boossa, Galle','Male','Rio College','904526157V','C0004'),
('Pasan','Malaka','Kapuge','E00017','2020-07-07','818/1 Galle Fort, Galle','Male','Rio College','904103257V','C0005'),
('Thushan','Thiwanka','Wickramasinghe','E00018','2020-09-21','21/1 Hiniduma, Galle','Male','Rio College','904789557V','C0003'),

('Sasindu','Madushanka','Gallage','E00019','2020-11-01','11/1 Siyabalagahwatta, Mahamodara, Galle','Male','Rio College','904526157V','C0002'),
('Sandeepa','Nimna','Liyanage','E00020','2020-01-22','281/1 Kaluwella, Galle','Male','Rio College','904526157V','C0001');

INSERT INTO Student_Email (StID,StEmail) VALUES 
('E00001','e00001@gmail.com'),
('E00002','e00002@gmail.com'),
('E00003','e00003@gmail.com'),
('E00004','e00004@gmail.com'),
('E00005','e00005@gmail.com'),
('E00006','e00006@gmail.com'),
('E00007','e00007@gmail.com'),
('E00008','e00008@gmail.com'),
('E00009','e00009@gmail.com'),
('E00010','e00010@gmail.com'),
('E00011','e00011@gmail.com'),
('E00012','e00012@gmail.com'),
('E00013','e00013@gmail.com'),
('E00014','e00014@gmail.com'),
('E00015','e00015@gmail.com'),
('E00016','e00016@gmail.com'),
('E00017','e00017@gmail.com'),
('E00018','e00018@gmail.com'),
('E00019','e00019@gmail.com'),
('E00020','e00020@gmail.com');


INSERT INTO Student_Telephone (StID,StTelephone) VALUES 
('E00001','0785516822'),
('E00002','0785346822'),
('E00003','0785126822'),
('E00004','0785236822'),
('E00005','0785456822'),
('E00006','0785666822'),
('E00007','0225516822'),
('E00008','0445516822'),
('E00009','0785556822'),
('E00010','0785516332'),
('E00011','0785516842'),
('E00012','0785516252'),
('E00013','0785514322'),
('E00014','0785511232'),
('E00015','0785516842'),
('E00016','0785516232'),
('E00017','0785516762'),
('E00018','0785516342'),
('E00019','0785516824'),
('E00020','0785516826');

INSERT INTO Parent_Telephone (PId,Telephone) VALUES 

('904526157V','0913685214'),
('904547517V','0913335214'),
('904789557V','0913655214'),
('904512577V','0913683314'),
('904782357V','0913123214'),
('904103257V','0983685214'),
('904784937V','0933468521');


INSERT INTO EMPLOYEE(EmployeeId,FirstName,MidlleName,LastName,Address,BirthDay,Sex,ScName) VALUES

('674526187V',"Dinusha","Pradeep","Kumara","Sinhapura asala,Dangasmandiya",'1967-04-19','Male','Rio College'),
('754529254V',"Chandra","Nandani","Bopitiya","85/C,Miriswatta",'1975-03-02','Female','Rio College'),
('854576123V',"Gayan","Chandana","Pathirana","No 24,Royal avenue,Raddolugama",'1985-11-02','Male','Rio College'),
('964392159V',"Isanka","Sanali","Rathnayake","Miriswatta,Balangoda",'1996-07-13','Female','Rio College'),
('780236151V',"Romesh","Dilshan","Eheliyagoda","no 23,Belihuloya",'1978-03-12','Male','Rio College'),
('884515628V',"Ranul","Vidana","Arachchi","75/C,Kiriella,Rathnapura",'1988-12-03','Male','Rio College'),
('724557237V',"Shanika","Nishadi","Fonseka","no 45,Oluganthota,Balangoda",'1972-05-24','Female','Rio College'),
('904256757V',"Ayesha","Sandamini","Kularathne","23/A,Old Road,Kahawatta",'1990-02-23','Female','Rio College'),
('824874190V',"Pearly","Ayesha","Hettiarachchi","no 8,Seetagala Road,Rathnapura",'1982-08-20','Female','Rio College'),
('658523245V',"Tharindu","Prabath","Aththanayake","Pettigala,Dangasmandiya",'1965-01-12','Male','Rio College');

INSERT INTO Employee_Email(EId,EEmail) VALUES

('674526187V','dinushapradeep@gmail.com'),
('754529254V','cnbopitiya@yahoo.com'),
('854576123V','gayanpathirana@gmail.com'),
('964392159V','isankasr@yahoo.com'),
('780236151V','romesh78@gmail.com'),
('884515628V','ranulvid@gmail.com'),
('724557237V','nishadifonseka@yahoo.com'),
('904256757V',"ayeshasandamini@gmail.com"),
('824874190V','pearlyaish@gmail.com'),
('658523245V','tharinduprabath@gmail.com');


INSERT INTO Employee_TelePhone( EId,ETelePhone) VALUES

('674526187V','0453685214'),
('754529254V','0703250531'),
('854576123V','0773350238'),
('964392159V','0763345233'),
('780236151V','0713582395'),
('884515628V','0777350372'),
('724557237V','0453123237'),
('904256757V',"0773450230"),
('824874190V','0775450231'),
('658523245V','0734655434');


INSERT INTO ADMIN(EId,ScName) VALUES

('658523245V','Rio College');

INSERT INTO TEACHER(EId,TId) VALUES

('674526187V','T000000001'),
('754529254V','T000000002'),
('854576123V','T000000003'),
('964392159V','T000000004'),
('780236151V','T000000005');

INSERT INTO TEACHES_FOR(TeacherId, ClassID) VALUES

('674526187V','C0001'),
('754529254V','C0002'),
('854576123V','C0003'),
('964392159V','C0004'),
('780236151V','C0005');


INSERT INTO NON_ACADEMIC(EId,JobPost) VALUES

('884515628V',"Management Assistant"),
('724557237V',"Management Assistant"),
('904256757V',"Security"),
('824874190V',"Registar");


INSERT INTO SUBJECT(SubID,Name, SchoolName) VALUES

('sc221','Physics','Rio College'),
('sc222','Chemestry','Rio College'),
('sc225','Bio','Rio College'),
('ph221','Pure Maths','Rio College'),
('ph222','Applied Maths','Rio College');


INSERT INTO TIME_TABLE(TableID,ClassID,Discription ) VALUES

('tt0001','C0001','sc221=8-10,sc222=11-12,sc225=1-3,ph221=3-4,ph222=4-5'),
('tt0002','C0002','sc221=11-12,sc222=8-10,sc225=3-4,ph221=4-5,ph222=1-3'),
('tt0003','C0003','sc221=4-5,sc222=1-3,sc225=8-10,ph221=11-12,ph222=3-4'),
('tt0004','C0004','sc221=3-4,sc222=4-5,sc225=11-12,ph221=1-3,ph222=8-10'),
('tt0005','C0005','sc221=1-3,sc222=3-4,sc225=4-5,ph221=8-10,ph222=11-12');


INSERT INTO STUDIES( StID ,SubID) VALUES

('E00001','sc221'),
('E00001','sc222'),
('E00001','sc225'),

('E00002','sc221'),
('E00002','sc222'),
('E00002','sc225'),


('E00003','sc221'),
('E00003','sc222'),
('E00003','sc225'),


('E00004','sc221'),
('E00004','sc222'),
('E00004','sc225'),


('E00005','sc221'),
('E00005','sc222'),
('E00005','sc225'),


('E00006','sc221'),
('E00006','sc222'),
('E00006','sc225'),


('E00007','sc221'),
('E00007','sc222'),
('E00007','sc225'),


('E00008','sc221'),
('E00008','sc222'),
('E00008','sc225'),


('E00009','sc221'),
('E00009','sc222'),
('E00009','sc225'),


('E00010','sc221'),
('E00010','sc222'),
('E00010','sc225'),

('E00011','sc221'),
('E00011','ph221'),
('E00011','ph222'),

('E00012','sc221'),
('E00012','ph221'),
('E00012','ph222'),

('E00013','sc221'),
('E00013','ph221'),
('E00013','ph222'),

('E00014','sc221'),
('E00014','ph221'),
('E00014','ph222'),

('E00015','sc221'),
('E00015','ph221'),
('E00015','ph222'),

('E00016','sc221'),
('E00016','ph221'),
('E00016','ph222'),

('E00017','sc221'),
('E00017','ph221'),
('E00017','ph222'),

('E00018','sc221'),
('E00018','ph221'),
('E00018','ph222'),

('E00019','sc221'),
('E00019','ph221'),
('E00019','ph222'),

('E00020','sc221'),
('E00020','ph221'),
('E00020','ph222');


INSERT INTO EXAM (ExamID,date,SubID) VALUES 
('T00001','2021-01-12','sc221'),
('T00002','2021-01-18','ph221'),
('T00003','2021-01-26','ph222');

INSERT INTO TAKE_EXAM(StID,ExamID) VALUES 
('E00001','T00001'),
('E00001','T00002'),
('E00001','T00003'),

('E00002','T00001'),
('E00002','T00002'),
('E00002','T00003'),


('E00003','T00001'),
('E00003','T00002'),
('E00003','T00003'),


('E00004','T00001'),
('E00004','T00002'),
('E00004','T00003'),


('E00005','T00001'),
('E00005','T00002'),
('E00005','T00003'),


('E00006','T00001'),
('E00006','T00002'),
('E00006','T00003'),


('E00007','T00001'),
('E00007','T00002'),
('E00007','T00003'),


('E00008','T00001'),
('E00008','T00002'),
('E00008','T00003'),


('E00009','T00001'),
('E00009','T00002'),
('E00009','T00003'),


('E00010','T00001'),
('E00010','T00002'),
('E00010','T00003'),

('E00011','T00001'),
('E00011','T00002'),
('E00011','T00003'),

('E00012','T00001'),
('E00012','T00002'),
('E00012','T00003'),

('E00013','T00001'),
('E00013','T00002'),
('E00013','T00003'),

('E00014','T00001'),
('E00014','T00002'),
('E00014','T00003'),

('E00015','T00001'),
('E00015','T00002'),
('E00015','T00003'),

('E00016','T00001'),
('E00016','T00002'),
('E00016','T00003'),

('E00017','T00001'),
('E00017','T00002'),
('E00017','T00003'),

('E00018','T00001'),
('E00018','T00002'),
('E00018','T00003'),

('E00019','T00001'),
('E00019','T00002'),
('E00019','T00003'),

('E00020','T00001'),
('E00020','T00002'),
('E00020','T00003');