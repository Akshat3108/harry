# HeidiSQL Dump 
#
# --------------------------------------------------------
# Host:                 127.0.0.1
# Database:             harrypotter
# Server version:       10.1.10-MariaDB
# Server OS:            Win32
# Target-Compatibility: MySQL 4.0
# Extended INSERTs:     Y
# max_allowed_packet:   1048576
# HeidiSQL version:     3.0 Revision: 572
# --------------------------------------------------------

/*!40100 SET CHARACTER SET latin1*/;


#
# Database structure for database 'harrypotter'
#

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `harrypotter` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `harrypotter`;


#
# Table structure for table 'admin'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `admin` (
  `teamname` varchar(50) NOT NULL,
  `total` int(50) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`teamname`),
  UNIQUE KEY `teamname` (`teamname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



#
# Dumping data for table 'admin'
#

/*!40000 ALTER TABLE `admin` DISABLE KEYS*/;
LOCK TABLES `admin` WRITE;
UNLOCK TABLES;
/*!40000 ALTER TABLE `admin` ENABLE KEYS*/;


#
# Table structure for table 'questions'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `questions` (
  `qid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(1) NOT NULL,
  `question` varchar(5000) NOT NULL,
  `a` varchar(500) NOT NULL,
  `b` varchar(500) NOT NULL,
  `c` varchar(500) NOT NULL,
  `d` varchar(500) NOT NULL,
  `correct` varchar(1) NOT NULL,
  `source` varchar(500) NOT NULL,
  PRIMARY KEY (`qid`),
  UNIQUE KEY `qid` (`qid`),
  KEY `qid_2` (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=89 DEFAULT CHARSET=latin1;



#
# Dumping data for table 'questions'
#

/*!40000 ALTER TABLE `questions` DISABLE KEYS*/;
LOCK TABLES `questions` WRITE;
REPLACE INTO `questions` (`qid`, `type`, `question`, `a`, `b`, `c`, `d`, `correct`, `source`) VALUES ('19','p','This is just a fraction... right? No? then What does this sign signify?','The secret door number to the chamber of secrets (drunk alright...)','the platform to the train to hogwarts','dumbledores office floor number','lane number, where harry lives with his uncle vernon and aunt petunia','b','img/images/img01.png'),
	('20','p','A child''s drawing... isn''t it? What does this mean then??','It represents deathly hallows','It is a spot which is made after the incantation of some particular spell.','It is a tatoo on the left hand of Draco Malfoy (Draco was not mad)','None of the above','a','img/images/img02.png'),
	('21','p','oh, i am sure you can guess the logo of this house... its blue blue...','Gryffindor','Ravenclaw','Hufflepuff','Slytherin','b','img/images/img03.png'),
	('22','p','its m... and i cant place what else is this... help me, will you?','Muggle World','Magic World','Ministry of Magic','Magic is Might','c','img/images/img04.png'),
	('23','p','this tattoo sure looks cool... What does this Skull Serpent signify?','The Logo of Slytherin','The Basilisks Mark','The Black Mark','The Dark Mark','d','img/images/img05.png'),
	('24','p','This is the goblet to drink water, right? No? Then identify this!','The quidditch house cup','The Goblet of Fire','The cup of Helga Hufflepuff','The Triwizard Tournament Cup','c','img/images/img06.png'),
	('25','p','Yes... this is related to hogwarts... and it is called...?','The Hogwarts Logo','The Hogwarts Crest','The Hogwarts Symbol','The Hogwarts Mark','b','img/images/img07.png'),
	('26','p','Viktor Krum fought a dragon.. so did harry, cedric and fleur... what was the name of the dragon that krum fought?','The Hungarian Horntail','Common Welsh Green','A Swedish Short-Snout','The Chinese Fireball','d','img/images/img08.png'),
	('28','t','ermmm... i kind of liked Fleurs sister... can you tell me her name please? always wanted to go out with her...','Gabbie','genevieve','gabrielle','giselle (Fast 6)','c',''),
	('29','s','I want to unlock the department of mysteries! unlockeus... oh damn... i have forgotten the spell to unlock it... help me, will you?','Accio','Alohomora','Avifors','Annachio','b',''),
	('30','s','i am sitting in dark... i want light... help me please...','nox','deletrio','lumos','aberto','c',''),
	('31','s','i like snape... he blasted Lokhart in the chamber of secrets with the help of disarming spell, which is...?','ferula','disarmio','crucio','expelliarmus','d',''),
	('32','s','moody aka bartemius crouch jr. tortured a spider in the class... the torturing curse.. the unforgivable curse... which is...?','Avada Kedavra','Tormentio (this is not even a spell !!)','Imperio','Crucio','d',''),
	('33','s','There was a spell - reducto. well i dont remember its use... help me...i beg u','it is used to stop the dementors from kissing you','it is used to blast solid things','it is used to conjure a shield charm','it is used to slow things down','b',''),
	('34','s','i used accio ... when i was fighting the dragon horntail... what was it?','a summoning charm','the arousing spell','a citing spell','the revealing charm','a',''),
	('39','v','what is the name of the headmaster of Durmstrang school?','Brag Avery','Igor Karkaroff','Lucius Malfoy ','Severeus Snape (are you stoned...?)','b','img/videos/video01.mp4'),
	('40','v','Who put harrys name in the goblet of fire?','Bartemius Crouch Senior','Bartemius Crouch Junior','Alastor Mad-Eye moody','Igor Karkaroff','b','img/videos/video01.mp4'),
	('41','v','Where is harry sent to after his name comes out of the goblet of fire unexpectedly?','The Prize Room','The room of requirement','The lost Wands room','The Trophy Room','d','img/videos/video01.mp4'),
	('42','v','What kind of charm can befool the goblet of fire?','The Befooling Charm','The confusing Charm','The Confundus Charm','The Dunfundus Charm','c','img/videos/video01.mp4'),
	('43','v','what is harry eating in the video? pumpkin juice?','Its Gillywater','Its Gillyweed','Its probably a gilly flower','its gaanja...','b','img/videos/video02.mp4'),
	('44','v','Neville gave harry the - thing - here. who gave this to harry in books? Neville? Surely not?','Dobby the house elf gave that thing','It was hagrid, of course... everything out of the world was given by hagrid...','It was mad-eye moody','it was ludo bagman','a','img/videos/video02.mp4'),
	('45','v','The merpeople took something from him... what was it? ','it was Ron','it was Hermione','It was Cho Chang','it was nothing. the merpeople were playing with harry','a','img/videos/video02.mp4'),
	('46','v','Who are the two person laughing in the end scene?','Seamus Finnigan and Dean Thomas','Vincent Crabbe and Grggory Goyle','Terry Boot and Zacharias Smith','Draco Malfoy and Marcus Flint','a','img/videos/video02.mp4'),
	('47','v','what are Voldemorts supporters called?','The Death Takers','The Darth Vaders','The Death Eaters','The Death Masters','c','img/videos/video03.mp4'),
	('48','v','how harry survived thirteen years ago?','voldemort didnt know how to use a killing curse','he was busy killing harrys mother so harry ran away','harrys mother hid him and helped him escape','harrys mother died as the shield to save harry','d','img/videos/video03.mp4'),
	('49','v','what happened in the last scene?','Priori Incantatem','Prior Incantato','Friar Mesmero','Priori Incantation','a','img/videos/video03.mp4'),
	('50','v','How did harry escape the dark lord?','He apparated.','he ran and took a bus from the Little Hangleton','He used floo powder','he used the cup - a portkey','d','img/videos/video03.mp4'),
	('51','p','she kind of liked harry... and she was the first one of her kind to do so... and she found him bathing in the prefects bathroom... she is...?','The grey lady of Rawenclaw','The moaning Myrtle of Bathroom','Lavender Brown of Griffindor','Fat lady ','b','img/images/img09.png'),
	('52','p','the girl on the extreme left sure looks pissed... well, i did do wrong... but what was her name?','Parvati Patil','Padma Patil','Lavender Brown','Kingsley Shacklebolt (you are high... i feel for you)','a','img/images/img10.png'),
	('53','p','who is not there in this picture??','seamus finnigan','dean thomas','Ron weasley','ginerva weasley','d','img/images/img11.png'),
	('54','p','who is missing from this picture?','ginny weasley','parvati patil','padma patil','lavender brown','d','img/images/img12.png'),
	('55','s',' I am often very stern, <br>I wear my hair up in a bun,<br> I am really very fair, <br>I find Quidditch very fun.','Sibyll Trelawney',' Minerva McGonagall','Molly Weasley','Olympe Maxime','b',''),
	('56','s','I am n-not sure if you r-remember me,<br> I t-taught here long ago,<br> B-but I d-died one night,in a f-final fight<br>  When my m-master m-met his foe.  W-Who a-am I?','Remus Lupin','Quirinus Quirrell','Filius Flitwick','Horace Slughorn','b',''),
	('57','s','Please come closer, you must understand, <br>I simply cannot see. <br>I have lived long, far from your school <br>With my humongous family.<br><br>  Who am I?','Horntail','Norbert','Aragog','Fluffy','c',''),
	('58','s','I waddle like a penguin<br> And I am fatter than a cow, <br>Gimme, gimme, gimme candy<br> And give it to me now!  <br><br>Who am I?','Rubeus Hagrid','Vincent Crabbe','greggory goyle','Dudley dursley','d',''),
	('59','s','I wear glasses and pigtails<br> And a toilet is now my bed,<br> And I do not think it is funny<br> To chuck books through my head! <br><br> Who am I?','Millicent Bulstrode','rowena ravenclaw','Moaning Myrtle','fat lady','c',''),
	('60','s','I do not believe in wands <br>Or in the Quidditch World Cup, <br>And this is the last time I will say this, <br>Shut that ruddy bird up! <br><br> Who am I?','Vernon Dursley','Dudley Dursley','Petunia Dursley','Marjorie Dursley','a',''),
	('61','b','Just Do It','Adidas','Nike','Resonance','Dell','b',''),
	('65','b','Mercedes Benz','Nothing Like Anything','The Best or Nothing','Everything or Nothing','Vorsprung Durch Technik','b',''),
	('66','b','The Best a Man Can Get','Gillette','Raymond','Set-Wet','NIVEA','a',''),
	('67','b','Tyres With Muscles','CEAT','Bridgestone','MRF','Michelin','c',''),
	('68','b','The Ultimate Driving Machine','Bugatti','BMW','Datsun','Lamborghini','b',''),
	('69','b','All The News That Is Fit to Print','The Hindu','The Times of India','Daily Mirror','The New York Times','d',''),
	('71','b','Identify :','ONGC','NSW','NTPC','BHEL','a','img/images/img13.png'),
	('72','b','Identify :','FIFA','Premiere League','La-Liga','Wings','c','img/images/img14.png'),
	('73','b','Identify :','ROYAL CROWN','RADO','CHEF KING','ROLEX','d','img/images/img15.png'),
	('74','b','Identify :','Black Pearl','Birdhouse','Bing','Blur','b','img/images/img16.png'),
	('75','b','Identify :','Microsoft Edge','Internet Explorer','Efolio','e-capture','a','img/images/img17.png'),
	('76','b','Identify :','Ferrari','Mustang','TVS','Ralph Lauren Polo','b','img/images/img18.gif'),
	('77','t','Cho chang went out with whom in the yule ball....? ....Me...??? Nahh... then which of the following champion? ','Cedric diggory','harry potter','viktor Krum','Fleur Delacour (dude, how can a girl go with another girl... unless...)','a',''),
	('78','t','Well, i have forgotten the name of publishing house that first published my books... (i.e harry potter, moron)... can you tell me the name of that house?','arihant publications (are you freaking serious?)','Bloomsbury','The Little Brown','Bloomsblurry','b',''),
	('79','t','Who was the godfather of harry???','James potter','Sirius Black','james Bond','Justin beiber (are you drunk ? )','b',''),
	('80','t','Who won the Quidditch World Cup?','Ireland','Belgium','Bulgaria','Wales','a',''),
	('81','t','Who was Ludovic bagman ??','he was ludo bagman, of course','he was a ludo player','he commented on the 422nd quidditch world cup','A & C','d',''),
	('82','t','what was the secret name harry, ron and hermione used for sirius black?','padfoot','wormtail','snuffles','Prongs','c',''),
	('84','t','what was the name of the death eater/eaters that harry witnessed in the pensive??','Severus Snape (seriously ? )','Igor Karkaroff','Bartemius Crouch Junior','All of the above ','d',''),
	('85','t','__(a)__ of the father, unknowingly given... __(b)__ of the servant, willingly given, __(c)__ of the enemy, forcibly taken..... ','nothing, nothing, nothing (yes, i am kidding)','bone, flesh, blood','flesh, blood, bone','shirt, hand, life','b',''),
	('86','t','THERE WAS a truth potion in possession of Prof. snape... it was ...?','Velloripuram','Veritaserum','veritacurem','Velooriserum','b',''),
	('87','t','who was the minister for magic at the time of the return of voldemort..??','Barty Crouch, Sr.','Tom Marvolo Riddle','Cornelius Fudge','Donald Trump ( you must be drunk...)','c',''),
	('88','t','What was Ronald weasleys favorite quidditch team...?? ','The Wimbourne Wasps','The chudley cannons','The holyhead harpies','Puddlemore United','b','');
UNLOCK TABLES;
/*!40000 ALTER TABLE `questions` ENABLE KEYS*/;


#
# Table structure for table 'user'
#

CREATE TABLE /*!32312 IF NOT EXISTS*/ `user` (
  `teamname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `member1` varchar(50) DEFAULT NULL,
  `member2` varchar(50) DEFAULT NULL,
  `leader` varchar(50) NOT NULL,
  `mailid1` varchar(50) DEFAULT NULL,
  `mailid2` varchar(50) DEFAULT NULL,
  `mailid3` varchar(50) NOT NULL,
  `contact1` varchar(10) DEFAULT NULL,
  `contact2` varchar(10) DEFAULT NULL,
  `contact3` varchar(10) NOT NULL,
  `groupname` int(1) unsigned NOT NULL,
  `tagline` int(2) unsigned NOT NULL DEFAULT '0',
  `videos` int(2) unsigned NOT NULL DEFAULT '0',
  `pictures` int(2) unsigned NOT NULL DEFAULT '0',
  `bonus` int(2) unsigned NOT NULL DEFAULT '0',
  `spells` int(2) unsigned NOT NULL DEFAULT '0',
  `time` bigint(20) unsigned NOT NULL DEFAULT '7200'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



#
# Dumping data for table 'user'
#

/*!40000 ALTER TABLE `user` DISABLE KEYS*/;
LOCK TABLES `user` WRITE;
REPLACE INTO `user` (`teamname`, `password`, `member1`, `member2`, `leader`, `mailid1`, `mailid2`, `mailid3`, `contact1`, `contact2`, `contact3`, `groupname`, `tagline`, `videos`, `pictures`, `bonus`, `spells`, `time`) VALUES ('admin','37319f6b8621df2b0eb626efe69f05e7','','','ritik','','','ertre@dkfhe.com','','','2222222284',0,0,0,0,0,0,'7200'),
	('The Dark lords','bc76ceb5f72c450337e82e80285499fd','Nitin khare','Mayank joshi','Pranav gupta','nitinkhare97@gmail.com','mayank2420@gmail.com','pranavgupta42@gmail.com','9990953329','9911247361','9560427622',1,0,0,0,0,0,'7200'),
	('S.p.e.w.','41a8771b6d5483e535b250664b91ab6b','Sukhnandan Malhotra','shivankshi tyagi','saket pandey','sukh.malhotra@gmail.com','shivankshityagi@gmail.com','saketpandey082497@gmail.com','9958625109','9971815974','9958726785',2,0,0,0,0,0,'7200'),
	('the seekers','e7624cebbe49f4e3408b0cb5ec4f8ee3','sanchit sharma','suyash srivastava','anand verma','sharmasanchit1310@gmail.com','suyashsrv7@gmail.com','anandverma0071@gmail.com','8077410519','8512802830','7065569833',3,0,0,0,0,0,'7200'),
	('Demolisher','5a551300755bc131423bcfc4fc07084b','Ritwik Sinha','Vishnu singh','Vishu Agarwal','ritwiks.speed16@gmail.com','vishnusingh1995@gmail.com','vishuagarwal100@gmail.com','9696672772','9675656478','8743052331',1,0,0,0,0,0,'7200'),
	('the 7th hocrux','d35bdaa2b4d14c190fd23b5c53c3c5c4','ankit gupta','','Ashutosh kumar Singh','ankitgupta1243@gmail.com','','ashutoshsingh.0702@gmail.com','8755479153','','9990613649',1,0,0,0,0,0,'7200'),
	('Taichos','3d411b8cd2e9131795916fceb9301f08','shivansh tiwari','abhinav gangwar','abhijeet chauhan','shivavns111@gmail.com','abhigangwar26@gmail.com','chauhanabhijeetom@gmail.com','9958857061','8533843758','7534962938',2,0,0,0,0,0,'7200'),
	('The marauders','3d8a762c36b639c2871dc6a9e323c769','Rashika shukla','','Sanjeevani shukla','rashika05@gmail.com','','sanjeevani198@gmail.com','9936053355','','9911253981',1,0,0,0,0,0,'7200'),
	('Wizard','02ec7a42432e7cc12f1422e31ed6bc66','Suresh','Righved','Shivam kumar mishra','sureshupadhyay900@gmail.com','kumar.righved7@gmail.com','coderknower@gmail.com','9555845426','7011131098','9721145244',2,0,0,0,0,0,'7200'),
	('The oblivion wizards','777cdc9ec67445a2986390953137f2df','Shivangi kansal','Shobhit Mohan','Teg Singh khanna','shivangi.kansal06@gmail.com','','tegkhanna@gmail.com','9717053201','7054847164','9599444189',1,0,0,0,0,0,'7200'),
	('Muggloo haters','3a1f0d568146420c3338d4d3d3604969','Anshika Bhatnagar','Shreya jain','Akash bhasker','anshikabhatnagar95@gmail.com','sj.shreya14@gmail.com','ak007aakash@gmail.com','8505939459','8006430940','9650015301',2,0,0,0,0,0,'7200'),
	('smart_worker','3e3b6d099b84cd9f07465eee634529db','hemant sharma','','priyank aggarwal','hunthemant009@gmail.com','','priyankaggarwal25@yahoo.com','9911256934','','8130269129',2,0,0,0,0,0,'7200'),
	('Magical Muggles  1610041','2290fa6baf2eb47851f355e32450ce01','Shivendra Gupta','Sarvagya jalota','Rahul goyal','shivendragupta104@gmail.com','sarvagya.jalota@gmail.com','rahulroorkee64@gmail.com','9651527589','8742957769','9412419527',1,0,0,0,0,0,'7200'),
	('Livo','f6b5a33d4aaae55a7f49eebe823bdfea','Anuj gupta','Anuj gupta','Ankit','guptaanuj811@gmail.com','anuj10121997@gmail.com','yadavankit22y@gmail.com','7065905181','8979798357','8265850724',2,0,0,0,0,0,'7200'),
	('Phoenix','c4bc2f0d171cc45c728953c503999992','tanya agarwal','anviksha pandey','alok singh','tanyaagarwalofficial@gmail.com','pandeyanviksha@gmail.com','adb.singh143@gmail.com','8743051206','9818168256','9454811944',3,0,0,0,0,0,'7200'),
	('The anonymous-1613102','68b567c7d15db0cdb2a8118af660f04d','Aabhas agarwal','Hardik Agarwal','Devansh Gupta','aabhas1997@gmail.com','','devanshggupta@gmail.com','9891258536','9999300755','9891268791',3,0,0,0,0,0,'7200'),
	('Godric Helena','b54d9038ee80a700e727a2637993ad6b','Shubham Shrivastava','','shubh agarwal','Shubham.shrivast@gmail.com','','smkagarwal2015@gmail.com','9560733725','','9910245630',2,0,0,0,0,0,'7200'),
	('Starks','9ef7fc04217c9d8598d411eee2c55ce7','Ashvan Tripathi','','Harsh Gupta','tripathiashvan@gmail.com','','harsh98gupta@gmail.com','8742935330','','9013077778',3,0,0,0,0,0,'7200'),
	('the three muggles','9e0cf768d8b9fee7bc73a3d3964233f5','Utkarsh gupta','lavish jain','Prakhar upreti','utkarshgupta199@gmail.com','lavishj77@gmail.com','prakharupreti13@gmail.com','8743065003','8377002399','8743065492',3,0,0,0,0,0,'7200'),
	('Tech pirates','4da75e675e089add865462ea598bd19b','Shubham chaurasia','Ashutosh srivastava','Akash srivastava','shubhamchaurasia809@gmail.com','ashutoshsrivastava246@gmail.com','akashsri19@gmail.com','8182047912','8005375077','9891276596',1,0,0,0,0,0,'7200'),
	('Enigma','95762aa87649fd2301a36b3c9fe4cd2f','Saomitra tripathi','Abhay Sachan','Mohit Pandey','saomitra.tripathi2015@gmail.com','abhaysachansweetforyou@gmail.com','sunita.mohit.pandey@gmail.com','7565048433','7007663986','8585945542',1,0,0,0,0,0,'7200'),
	('inferno1410117','508ccc9385a0e82b0003fdd4abc6ba9f','aayush khare','jatin pandey','akshit gupta','','','akshit.gupta2727@gmail.com','','','9557660608',3,0,0,0,0,0,'7200'),
	('potterheads','c2d718fdc21e064b5cf5c9c75f54ce86','tanya gupta','shreya singh','kashish singh','tanugpt.16@gmail.com','shreyasingh7491@gmail.com','kashish.singh977@gmail.com','9559825601','9911213670','9818174246',2,0,0,0,0,0,'7200'),
	('nobody1610015','24d51c6fbd78114104cb838d6767021e','abhinav mishra','ishika garg','ankit kansal','manu.mishra2907@gmail.com','igarg145@gmail.com','ankit.kansal1608@gmail.com','9718135204','9457903179','9891286420',3,0,0,0,0,0,'7200'),
	('dreadnaught','ff7656775bcce418385024d1e01af484','Harshika tomar','Risalat Jafri','Srishti Singh','harshikatomar98@gmail.com','risalatjafri@gmail.com','13srishtisingh@gmail.com','8130594149','8979979266','9455636236',1,0,0,0,0,0,'7200'),
	('Patronus','a890a146135926bd88c6078d89f7c11c','Isha gupta','','Akshat sharma','ishaagupta2014@gmail.com','','akshatsharma0099@gmail.com','7065572499','','9821834367',2,0,0,0,0,0,'7200'),
	('The geeks','1e7563b85db63f10dc62620ba406ef51','prathna agrawal','radhika gupta','kartik jain','prathnaagarwal20@gmail.com','g.radha1997@gmail.com','jain.kartik80@yahoo.com','7065696920','9871051621','9990796938',3,0,0,0,0,0,'7200'),
	('The Scrappers','52cf751f9aba3c27f9218450d8511c6d','Satyam','Aishwarya','SACHIN','satyamjnv2014@gmail.com','aishwarya.rohatgi1008@gmail.com','sachinyadav@gmail.com','9599329280','9891277044','7065169706',1,0,0,0,0,0,'7200'),
	('Technofrenzy 1631003','fd44820023da42dd133b3903db7267d2','Utkarsh singhal','Srijan srivastava','Shubham singh','singhalutkarsh4@gmail.com','shubhamsingh213213@gmail.com','shubhampatel213@gmail.com','7599020190','9891261148','7289081393',2,0,0,0,0,0,'7200'),
	('The GOLDEN TRIO','01b34ebd9f6a3f0adc3ba009f92b945e','POOJA','DEEKSHA TRIPATHI','KAVYA JAISWAL','ps21468@gmail.com','deekshatripathi23@gmail.com','kavyajaiswal1@gmail.com','9540163621','9891198584','9911866499',1,0,0,0,0,0,'7200'),
	('padfoot','026e305f0b6e7c84d6ab927f3fc6211a','Tanvi Singh','Jyoti Chauhan','Ritika Mittal','tanvi9709@gmail.com','j4jyotichauhan@gmail.com','ritikamittal1701@gmail.com','9466940404','7838568681','9871402961',2,0,0,0,0,0,'7200'),
	('Beauxbatons','9dd71a2261f5d60fdd9de1a4dafc2f6d','Nikita aggarwal','Megha shah','Prachi pandey','nikitaaggarwal355@gmail.com','nikitaaggarwal355@gmail.com','1998prachi14@gmail.com','9716287994','7503189403','9990661823',3,0,0,0,0,0,'7200'),
	('wizards1613107','60a14094b24b02e1a7d62c2e63b90677','Rajat agrawal','Rishabh dwivedi','Raghav Bansal','agarwalrajat945@gmail.com','rishabhd890@gmail.com','bansalraghav35@gmail.com','9717667859','9958579464','7835054223',2,0,0,0,0,0,'7200'),
	('Wizzy Wizards','6ec7aba15ed6f98c803fc55dfe47927d','RAHUL GUPTA','Prabhat Kumar tiwari','AMBUJ DUBEY','rg7885.rg@gmail.com','pktscot1999@gmail.com','rockingambuj2197@gmail.com','9205240864','7839129280','7065574706',3,0,0,0,0,0,'7200'),
	('pekka1613090','140ec806fc796229568c76ab6ad2e6eb','JAINENDRA','adarsh jaiswal','ankur singh','JAISAGAR13@GMAIL.COM','ADARSHJ583@GMAIL.COM','ANKURSINGH31097@GMAIL.COM','9891258621','8233823551','9453033993',2,0,0,0,0,0,'7200'),
	('SlytherWIN 1610060','1f945e09475ef5ce7a2bf33732dba079','vivek gupta','','shashi chandrA','viv1005ek@gmai.com','','shashichandra381@gmail.com','8765666372','','9891275997',3,0,0,0,0,0,'7200'),
	('The Golden snitch','91fb0e002b3b21d3b25952d775b2407b','Anjali gupta','','Saloni Agarwal','anjali0707gupta@gmail.com','','saloniagarwal101@gmail.com','8009312995','','8130585627',1,0,0,0,0,0,'7200'),
	('Brainpsychos1631166','f88d57525ef98827a8232568e2b615f0','Harsh Gupta','nishant arora','Pratik Agarwal','harshgUptahg007@gmail.com','nishantarora1997@gmail.com','pratik6868@gmail.com','9205672362','8130239636','9661328499',2,0,0,0,0,0,'7200'),
	('Gryffindor','aa308efbb1703a1fb9817ed5df20e5ef','tanu agarwal','priyanka jain','rachit agarwal','','pj26jain@gmail.com','rachit.agarwal001@gmail.com','8126075509','8750340163','8171253444',1,0,0,0,0,0,'7200'),
	('Prudence1631064','6f5c824b52f80fdff8b36cc1c4fabd5d','Lakshya Bhardwaj','Prashant chauhan','Rajat sharma','lakshyabhardwaj@gmail.com','myinbox.pc@gmail.com','rajjudada1@gmail.com','9891235927','9450970187','9718868605',3,0,0,0,0,0,'7200'),
	('Hermione''s Rangers','a1883bd1b24e29ef07e5c2ddc70b8577','aman verma','','Updesh Srivastava','amanverma025@gmail.com','','updesh.94@gmail.com','8447339465','','7531914518',2,0,0,0,0,0,'7200'),
	('SWAGRAMMERS','43473c5485f60e3c36da5fd0a74f3b34','Rachit sharma','Vatsala aditi','Ravi goswami','sharma.rachit2107@gmail.com','aditivatsala4321@gmail.com','ravigoswami776889@gmail.com','7905357309','9821618822','8958408661',3,0,0,0,0,0,'7200'),
	('the dementors','8cdbcffaf21b7937e733641343f0e614','vivek kumar singh','shivang shukla','aman prakash','vivek46727@gmail.com','shuklashivang6@gmail.com','am97an@gmail.com','9810808398','9891284329','8742959259',2,0,0,0,0,0,'7200'),
	('Ilvermornians','62732baa02fe3b2ebbbdae0148ce18d4','shubham singh','Shrishti srivastava','Sarthak Singh','shubhamsingh2325@yahoo.com','shrishti144@gmail.com','sarthaksingh3195@gmail.com','7500537336','8860457587','9643534763',1,0,0,0,0,0,'7200'),
	('The horcrux','b32a09f83900aa8eb42417b433495756','Lakshay malhotra','','Deevit Sahni','lakshay.malhotra95@gmail.com','','dsdeevitsahni@gmail.com','7533056219','','9711847729',1,0,0,0,0,0,'7200'),
	('Twist','34756ebeae6f47d49df5ea869275d9bb','Nikki rastogi','Rohan asthana','Geetanjali jadaun','rastoginikki@gmail.com','rohan.asthana.359@gmail.com','jadaungeetanjali@gmail.com','9990818313','7042085549','9891250626',3,0,0,0,0,0,'7200'),
	('Bright sparks','54b6f7b7e1700dc9a8c56e91a692b75a','Prachi agarwal','Parit kumar tomar','Laveena agarwal','prachiagarwal02011997@gmail.com','paritkumartomar1996@gmail.com','laveenaagarwal15@gmail.com','9990616855','9560474312','9634416301',3,0,0,0,0,0,'7200'),
	('Aliens','b9cf583051093733e7136c326682ebcc','Monika singh','Kushagra shukla','Jayanti shukla','monikasingh941@gmail.com','jayantishukla786@gmail.com','jayantishukla786@gmail.com','8743065127','7065501575','9990658474',1,0,0,0,0,0,'7200'),
	('the magical boys','3d411b8cd2e9131795916fceb9301f08','himansu gupta','chandan gupta','vaibhav kaushik','','','vkvaibhavkaushik18@gmail.com','9911245763','9599933142','9457832291',1,0,0,0,0,0,'7200'),
	('slytherine','7382f48f44aa7e10334488f1f56d58a8','satyam Goyal','saurabh patel','animesh sharma','satyamgoyal37@gmail.com','patelsaurabh153@gmail.com','animeshsharma149209@gmail.com','8791988768','9718904118','7065545465',2,0,0,0,0,0,'7200'),
	('Alpha1410067','f1e17bd2f6ad623411c0d8126e83e4b5','Nikhil Ratnakar','Mayank Aggarwal','Lov Verma','','','lovverma001@gmail.com','','','8896001001',3,0,0,0,0,0,'7200'),
	('dark_pheonix','665e639f872d8824e17fb97f32c38ba6','vivek kumar','vishal shakya','alok singh bhardwaj','vky347@gmail.com','vs9276365@gmail.com','aloks0583@gmail.com','9694193578','9911597335','8440905020',3,0,0,0,0,0,'7200'),
	('user','37319f6b8621df2b0eb626efe69f05e7','','','Ritik','','','dsds@gmail.com','','','9999999999',0,0,0,0,0,0,'0'),
	('industrious person','01b34ebd9f6a3f0adc3ba009f92b945e','akshit jain','piyush dwivedi','deepanshu jain','akshitj1998@gmail.com','piyush.201997.dwivedi@gmail.com','deepanshuj1999@gmail.com','8445928121','9758350222','8445928121',3,0,0,0,0,0,'7200'),
	('eternity','3e5505225c321502036134377250ad9e','apoorva pandey','akshay sachan','divyanshu shukla','apoorvaeternity@gmail.com','aakshaysachan@gmail.com','divyanshushukla1997@gmail.com','8447226614','9953384439','9457903868',2,0,0,0,0,0,'7200'),
	('teamkushal','4bf3d35a9d0079b43dec936557869409','Pratiksha gaurav','harshit upadhyay','kushal gupta','july.kushal@gmail.com','sharmahrsh4@gmail.com','kushal2007gupta@gmail.com','9415798481','9412168825','9599523032',2,0,0,0,0,0,'7200'),
	('potterheadwitches','3e5505225c321502036134377250ad9e','prachi chaudhary','Shimona gupta','ria khare','prachichaudhary065@gmail.com','g11.shimona@gmail.com','nnature301@gmail.com','9837147792','8874203899','9810976203',1,0,0,0,0,0,'7200'),
	('crucio','17a67caad793b3b62424d7c142544ee6','niharika kumari','atisha singh','pragya gupta','niharikagupta199@gmail.com','atishasingh11@gmail.com','pragya101997@gmail.com','9911978781','7895992988','9837948010',3,0,0,0,0,0,'7200'),
	('MUGGLE MAHYEM','1399b009eaef0160ad0cc3ee2dcc6eb0','aNMOL VASHISTHA','KUSHANK JAISWAL','SHIVAM JAIN','ANMOLVASHISTHTAAV@GMAIL.COM','KUSHANK.Dav@gmail.com','SHIVAM@CSIAKGEC.IN','7065246961','8130608130','9997188960',1,0,0,0,0,0,'7200'),
	('RADEON','dc1941ae712e92c2e312a996deb6ba32','','','anshul sharma','','','anshulsharma1011@gmail.com','','','8476857957',3,0,6,9,0,4,'6674'),
	('Voldemort','10baa88bcab9967aff0dee8c904338a7','','','AKSHAT','','','akshat@gmail.com','','','8574559215',3,0,0,0,0,0,'7200'),
	('lazy_coders','a7786321cebdf3faba968d1638da0d0e','','','andha_coder','','','archit.agrawal.003@gmail.com','','','9999999999',1,1,4,0,0,3,'6416'),
	('GAME','c8cf292ef454733b54768569e6f82209','','','DEVANSHI KHARE','','','KHAREDEVANSHI.3107@GMAIL.COM','','','9958856528',1,0,0,0,0,2,'6830'),
	('xyz','b3b0525704ed1bf3e377500fec8ba283','','','Soumya manchanda','','','soumya.manchanda19@gmail.com','','','8439819556',2,0,0,0,0,0,'6565'),
	('victory','cfd76e91ad9f2a64ed2e17627446654b','','','shiwang','','','shiwang999@gmail.com','','','9911245881',3,0,0,0,0,0,'4967'),
	('xenmax','487fbdc4e72f314a17b471b7314d36f4','','nikhil','HIMANSHU','','nikhil@gmail.com','himanshu89584@gmail.com','','789456123','9457633460',2,0,4,1,0,3,'6550'),
	('VOLDEMORTs','10baa88bcab9967aff0dee8c904338a7','','','kjchdkjKJ','','','jasgd@jgd','','','8764873646',2,12,12,12,12,12,'7105'),
	('abc','8da025d44b08a8ffc6c960f68f32e1bf','','','abc','','','abc@gma','','','8888888888',1,0,4,3,0,4,'2546'),
	('dk','c2a2abf74f7f3df6b7039cd9b9075ae5','','','diksha','','','dk@gmail.in','','','9876543210',2,0,5,0,0,0,'5287');
UNLOCK TABLES;
/*!40000 ALTER TABLE `user` ENABLE KEYS*/;
