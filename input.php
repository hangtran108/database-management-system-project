<?php

function execute_query($con, $sql) {
    if (!($result = mysqli_query($con, $sql))) {
	    echo "Failed to execute query.</br>";
    }
    return $result;
}

function echo_table($column, $result) {
    echo "<table border = '1'><tr>";
    for ($x = 0; $x < sizeof($column); $x++) {
        echo "<th>" . $column[$x] . "</th>";
    }
    echo "</tr>";
    while ($row = mysqli_fetch_row($result)) {
	    echo "<tr>";
	    for ($x = 0; $x < sizeof($row); $x++) {
            echo "<td>" . $row[$x] . "</td>";
        }
	    echo "</tr>";
    }
    echo "</table>";
}

// connect to server
$con = mysqli_connect('localhost', 'tanle', 'tanle');
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// create database team1
execute_query($con, "create database team1");

// use database team1
$db_selected = mysqli_select_db($con, "team1");
if (!$db_selected) {
	echo "Failed to select database.</br>";
}

// create table customer
$sql = "create table customer (customer_id int(11) not null primary key, name varchar(50), dob date, type varchar(50), point int(11), year int(11), customer_address varchar(50), city varchar(50), customer_phone int(11), customer_email varchar(50))";
execute_query($con, $sql);

// insert into customer
$sql = "insert into customer (customer_id,name,dob,type,point,year,customer_address,city,customer_phone,customer_email) values
(1,'Keefe Boyd','1919-06-06','Bronze',156,1,'6 Jockey Hollow Ave.','San Antonio',1205655149,'keefeboyd7069@edu.com'),
(2,'Bethany Donovan','1911-12-12','Bronze',436,2,'429 Hawthorne Street','Phoenix',1357467268,'bethanydonovan@yahoo.net'),
(3,'Norman Clay','2001-03-03','Bronze',499,3,'8733 School Lane','Phoenix',518627912,'normanclay8535@edu.net'),
(4,'Desiree Gallagher','2002-08-08','Silver',566,4,'84 Kirkland Street','San Antonio',521675069,'desireegallagher6648@edu.com'),
(5,'Clayton Holden','1993-11-22','Bronze',324,2,'59 Overlook Lane','Chicago',1598899120,'claytonholden@edu.net'),
(6,'Bianca Medina','1971-11-11','Bronze',435,2,'415 Laurel Drive','Chicago',351302044,'biancamedina3598@yahoo.com'),
(7,'Nigel Garza','1937-08-10','Bronze',346,0,'975 Grant Street','Chicago',1893793524,'nigelgarza@yahoo.com'),
(8,'Risa Reid','1982-04-05','Silver',756,4,'449 Cherry St.','Houston',1209723881,'risareid@yahoo.net'),
(9,'Liberty Gibson','2007-06-09','Gold',1024,8,'787 Clay St.','Houston',276835598,'libertygibson@yahoo.net'),
(10,'Nadine Wilson','1967-09-09','Bronze',123,1,'334 Thomas Drive','Houston',389888086,'nadinewilson@yahoo.com'),
(11,'Noel Garcia','1959-12-25','Gold',1234,8,'9655 Rose Drive','Chicago',405853630,'noelgarcia6504@edu.net'),
(12,'Quynn Barry','1955-10-21','Bronze',122,1,'496 Peg Shop Court','Phoenix',1273542414,'quynnbarry8411@yahoo.net'),
(13,'Nissim Herman','1989-03-13','Bronze',323,2,'5 University Street','Houston',336143326,'nissimherman2882@gmail.com'),
(14,'Hadley Snider','1920-10-20','Bronze',423,1,'754 Bradford St.','Phoenix',812859897,'hadleysnider1008@gmail.com'),
(15,'Leandra Parker','2004-11-06','Bronze',234,3,'1 Clay Ave.','Chicago',433739620,'leandraparker4767@edu.com'),
(16,'Cailin Finch','1986-09-09','Bronze',323,0,'600 Van Dyke St.','Houston',201450316,'cailinfinch4159@gmail.com'),
(17,'Jelani Fisher','1999-08-07','Gold',1425,7,'7971 State Lane','Atlanta',764536115,'jelanifisher1921@yahoo.com'),
(18,'Zachery Velasquez','1987-07-05','Silver',796,5,'7204 Gates Lane','Chicago',1704471329,'zacheryvelasquez@gmail.com'),
(19,'Colt Velazquez','1960-08-11','Bronze',412,3,'83 Cypress Street','San Antonio',1823542496,'coltvelazquez@yahoo.net'),
(20,'Todd Lamb','2002-02-02','Bronze',234,0,'391 Joy Ridge Street','Atlanta',1405773487,'toddlamb6288@gmail.com'),
(21,'Carter Morales','1938-09-05','Bronze',141,3,'73 Randall Mill Lane','San Jose',1112277021,'cartermorales@gmail.com'),
(22,'Derek Bridges','2003-01-02','Silver',888,4,'216 S. Linden Drive','Atlanta',243405169,'derekbridges4193@edu.net'),
(23,'Robert Franks','1996-11-07','Silver',567,6,'797 South Argyle Street','San Jose',709367451,'robertfranks@edu.com'),
(24,'Demetria Benjamin','1999-02-06','Bronze',12,2,'584 Squaw Creek Ave.','Los Angeles',731377099,'demetriabenjamin@yahoo.net'),
(25,'Rajah Livingston','1972-04-05','Bronze',24,2,'59 Blue Spring Dr.','Los Angeles',1252292615,'rajahlivingston722@edu.net'),
(26,'Yen Myers','1966-01-05','VIP',3002,9,'694 Philmont Street','San Antonio',1644146823,'yenmyers5740@edu.net'),
(27,'Nadine Gomez','1981-09-09','Bronze',23,3,'8195 Park St.','Los Angeles',1561772072,'nadinegomez@gmail.com'),
(28,'Tatiana Brady','1944-09-01','Gold',1479,8,'768 Carpenter Ave.','Dallas',1544484445,'tatianabrady6291@yahoo.net'),
(29,'Joelle Burgess','1968-09-08','Bronze',423,2,'650 Summer Court','Dallas',1286228255,'joelleburgess6947@yahoo.com'),
(30,'Olympia Rollins','1970-05-03','Bronze',23,1,'562 Arcadia St.','Los Angeles',382773358,'olympiarollins@yahoo.net'),
(31,'Medge Everett','2007-06-03','Bronze',24,1,'9620 Meadowbrook Dr.','Atlanta',639316437,'medgeeverett2721@gmail.com'),
(32,'Ronan Lowe','2004-03-09','Silver',999,4,'8883 NE. Meadow Court','Los Angeles',443988213,'ronanlowe2832@yahoo.com'),
(33,'Maile Dickerson','2001-11-12','Bronze',22,2,'21 North Golden Star Dr.','San Jose',1328636417,'mailedickerson@yahoo.net'),
(34,'Garth Sanchez','1999-02-26','Gold',787,7,'962 Thomas St.','San Jose',720424304,'garthsanchez@yahoo.net'),
(35,'Mia Elliott','1998-05-06','Bronze',11,2,'244 Dogwood Road','Los Angeles',592854741,'miaelliott4546@gmail.com'),
(36,'Alexis Chaney','1985-05-05','Silver',968,6,'613 Westport St.','Los Angeles',1148538453,'alexischaney@edu.com'),
(37,'Emery Romero','1948-03-11','Silver',766,4,'9 Albany St.','Los Angeles',1257136951,'emeryromero8093@gmail.com'),
(38,'Xantha Mcclain','1977-03-18','Gold',1953,7,'7500 East Trout Rd.','Atlanta',1433767682,'xanthamcclain@gmail.com'),
(39,'Kitra Suarez','1961-01-01','VIP',5666,10,'135 Sherwood Drive','San Antonio',1584629724,'kitrasuarez3211@edu.com'),
(40,'Eleanor Tate','1954-05-07','Silver',848,5,'939 Bow Ridge Dr.','San Jose',1956219840,'eleanortate7056@gmail.com'),
(41,'Kyra Mathews','2006-01-31','VIP',5976,9,'672 Fieldstone St.','San Jose',1782643417,'kyramathews8207@yahoo.com'),
(42,'Inez Castillo','2002-10-21','Silver',990,4,'8926 S. Kirkland Drive','Atlanta',226135882,'inezcastillo@edu.net'),
(43,'Emmanuel Figueroa','1933-02-15','Silver',676,5,'21 Prince Street','Henderson',1161662314,'emmanuelfigueroa@yahoo.net'),
(44,'Fallon England','2002-12-31','Bronze',5,3,'8335 Wall St.','Los Angeles',86837171,'fallonengland@yahoo.com'),
(45,'Dominic Huber','1984-11-30','Bronze',44,3,'78 La Sierra Lane','Dallas',1380124511,'dominichuber7715@yahoo.net'),
(46,'Maite Mcpherson','1971-02-28','Bronze',2,1,'5 E. Alderwood Drive','Los Angeles',1526243448,'maitemcpherson@gmail.com'),
(47,'Aimee Harvey','1980-08-08','Bronze',242,2,'9233 Temple Lane','Atlanta',1836563126,'aimeeharvey4308@gmail.com'),
(48,'Armand Cummings','2005-04-04','Gold',2222,8,'530 Ohio Rd.','Henderson',1697788956,'armandcummings9931@edu.com'),
(49,'Price Harrington','1984-11-11','Silver',777,4,'617 Pilgrim Avenue','Atlanta',619642370,'priceharrington@yahoo.net'),
(50,'Blaze Valentine','1929-10-10','VIP',3333,10,'28 South Oakwood Ave.','San Antonio',487834466,'blazevalentine6751@gmail.com')";
execute_query($con, $sql);

// select all tuples from customer
$result = execute_query($con, "select * from customer");
echo "CUSTOMER INFORMATION";
$column = array ("Customer ID", "Name", "Date of Birth", "Type", "Point", "Year", "Address", "City", "Phone", "Email");
echo_table($column, $result);

// create table supplier 
$sql = "create table supplier (supplier_id int(11) not null primary key, name varchar(50), type varchar(50), supplier_address varchar(50), city varchar(50), postcode int(11), supplier_phone int(11), supplier_email varchar(50), standard varchar(50), year year)";
execute_query($con, $sql);

// insert into supplier
$sql = "insert into supplier (supplier_id, name, type, supplier_address, city, postcode, supplier_phone, supplier_email, standard, year) values 
(95201, 'W.W. Grainger', 'Vendors', '26453 Canyon', 'Santa Clarita', 30141, 7702221, 'supply@grainer.com', 'ISO-9001', 2010), 
(44904, 'Motion Industries', 'Wholesalers', '181 Boatyard', 'Berkeley', 30344, 4046292, 'motionindu@gmail.com', 'ISO-9002', 1999),
(94290, 'Airgas', 'Airgas', '90 Broadway Lane', 'Bloomington', 30263, 7705028, 'airgas10@gmail.com', 'ISO-9001', 2014),
(86977, 'HD Supply', 'Vendors', '98 St.Claires', 'Madison', 96789, 8086236, 'supplyhd@gmail.com', 'ISO-9001', 2019),
(60971, 'Fastenal', 'Wholesalers', '1770 Campell LN', 'Ashland', 96766, 8082457, 'fastenal@gmail.com', 'ISO-44001', 2014),
(15320, 'Winsupply', 'Vendors', '2770 Louisville Ave', 'Monroe', 96744, 8082364, '​​winsupply@gmail.com', 'ISO-9004', 2013),
(35980, 'MRC Global', 'Wholesalers', '209 Frederick', 'Westminster', 96707, 8086742, 'global@mrc.com', 'ISO-9002', 1990),
(96710, 'MSC Industrial Supply', 'Importers', '126 Vocke Road', 'Hagerstown', 96782, 8084872, 'mscsupply@gmail.com', 'ISO-9002', 2000),
(60584, 'NOW Inc.', 'Wholesalers', '811 Mitchell', 'Midland', 96797, 8086715, 'nowinc@gmail.com', 'ISO-10377', 2018),
(81102, 'WESCO International', 'Wholesalers', '413 Elm Park', 'Juneau', 96732, 8088771, 'wescointl@gmail.com', 'ISO-9001', 2001),
(67273, 'Wolseley Industrial', 'Importers', '207 South Road', 'Brewton', 96814, 8085919, 'industrial@wolseley.com', 'ISO-9001', 2003),
(81219, 'DXP Enterprises', 'Wholesalers', '350 Park Avenue', 'Auburn', 96814, 8089470, 'dxpenter@gmail.com', 'ISO-22006', 2002),
(53495, 'Kaman Distribution', 'Distributors', '1300 Ulster', 'Little Rock', 96740, 8083290, 'kaman@gmail.com', 'ISO-9001', 1998),
(67795, 'Edgen Murray', 'Vendors', '1 Robinson', 'Conway', 96720, 8089359, 'edgenmurray@gmail.com', 'ISO-9002', 2005),
(21803, 'Global Industrial', 'Wholesalers', '905 Tulane', 'Fontana', 96817, 8088432, 'global@gmail.com', 'ISO-10377', 1993),
(16768, 'Sysco', 'Distributors', '232 Maryland', 'Temecula', 96815, 8087323, 'sale@sysco.com', 'ISO-9002', 2009),
(14063, 'Gordon Food service', 'Vendors', '3030 East Main', 'Brea', 50266, 5154577, 'food@gordon.com', 'ISO-9002', 2010),
(56787, 'McLane Service', 'Manufacturers', '107 Columbia Point', 'Temple City', 50266, 5152671, 'mclane@gmail.com', 'ISO-18091', 2003),
(11387, 'Farmer Brothers', 'Wholesalers', '105 Buffalo Way', 'Panorama', 50021, 5152892, 'farmer@gmail.com', 'ISO-10377', 1998),
(35448, 'Dutt & Wagner', 'Importers', '30 Highway West', 'Fresno', 50310, 5153311, 'duttandwag@gmail.com', 'IEC-27001', 2001),
(45578, 'Frozen Dessert Supplies', 'Manufacturers', '34 S.Hulen', 'San Jose', 51104, 7122332, 'frozen@gmail.com', 'ISO-9001', 2003),
(25358, 'KeHE Distributors', 'Distributors', '158 Chester Pike', 'Brentwood', 52807, 5634413, 'kehe@gmail.com', 'ISO-9001', 2009),
(43906, 'Eby-Brown', 'Importers', '1100 Baltimore', 'Roseville', 52241, 3193387, 'ebybrown@gmail.com', 'ISO-18091', 2020),
(49488, 'Core-Mark Holding', 'Distributors', '200 Mall BLVD', 'Oceanside', 52402, 3197433, 'coremark@gmail.com', 'IEC-27001', 2013),
(23038, 'H.T. Hackney', 'Importers', '203 North Main', 'Lancaster', 52404, 3193904, 'hackney@gmail.com', 'ISO-18091', 2014),
(99939, 'Harrison Supe', 'Distributors', '9561 Vista Way', 'Middletown', 83843, 2088823, 'harrisonsupe@gmail.com', 'ISO-9001', 1991),
(18141, 'Elmwood Inn', 'Importers', '211 Miracle Mile', 'Enfield', 83835, 2087624, 'elmwood@gmail.com', 'ISO-9001', 2020),
(57540, 'TeaSource', 'Wholesalers', '360 Pulteney', 'Southbury', 83202, 2082339, 'teasource@gmail.com', 'ISO-9001', 2013),
(62815, 'Divinitea', 'Importers', '710 Flamingo', 'Pensacola', 83404, 2082270, 'divini@gmail.com', 'ISO-10377', 2000),
(76676, 'Royal Wholesale', 'Wholesalers', '209 Rockfeller', 'Oldsmar', 83402, 2085230, 'royal@gmail.com', 'ISO-9002', 2001),
(36344, 'Landies Candies', 'Wholesalers', '217 Broadway', 'Bakersfield', 83440, 2086560, 'landies@gmail.com', 'ISO-18091', 2004),
(51578, 'NoltPak', 'Importers', '99 Boulevard', 'Jacksonville', 83318, 2086773, 'noltpark@gmail.com', 'ISO-44001', 2005),
(10377, 'Door County', 'Vendors', '10 Green Acres', 'Orlando', 83706, 2084260, 'door@county.com', 'ISO-9001', 2009),
(23452, 'Cena', 'Wholesalers', '164 Jamica Revenue', 'Palm Bay', 83704, 2083769, 'cena10@gmail.com', 'ISO-22006', 2014),
(99081, 'Golden Barrel', 'Importers', '584 Bridge', 'Lithonia', 83687, 2084632, 'golden@gmail.com', 'IEC-27001', 2011),
(18509, 'Avalon Deco Supplies', 'Manufacturers', '612 Stone Creek', 'Griffin', 83301, 2087342, 'avalondeco@gmail.com', 'ISO-9004', 2005),
(14452, 'RoundEye Supply', 'Importers', '794 Howe Ave', 'Honolulu', 60118, 8478364, 'roundeye@gmail.com', 'ISO-9004', 2005),
(49314, 'The Martin-Brower', 'Vendors', '021 Memorial', 'Geneva', 60134, 6302620, 'martin@gmail.com', 'IEC-27001', 2009),
(24003, 'Maines Paper', 'Importers', '2030 North Main', 'Gurnee', 60174, 6307974, 'mainespaper@gmail.com', 'IEC-27001', 2001),
(66749, 'Buffalo Rock', 'Manufacturers', '119 Ulster', 'Schaumburg', 60108, 6303519, 'buffalo@gmail.com', 'ISO-18091', 1998),
(54737, 'Panera', 'Vendors', '787 Montgomery', 'Chicago', 60177, 8478417, 'panera@gmail.com', 'ISO-9001', 2001),
(10704, 'Lipari Foods', 'Manufacturers', '44 Walnut', 'Waterloo', 60050, 8153630, 'lipari@gmail.com', 'ISO-44001', 2000),
(35408, 'Jakes Finer', 'Wholesalers', '81 Central Parkway', 'Columbus', 61112, 8153321, 'jakefiner@gmail.com', 'ISO-9001', 2020),
(90086, 'Vendors Supply', 'Vendors', '108 Buckeye', 'Shawnee', 61108, 8153998, 'vendors@gmail.com', 'ISO-22006', 2019),
(58721, 'Coastal Pacific', 'Manufacturers', '1404 Lewis', 'Winchester', 60010, 8474383, 'coastal@pacific.com', 'ISO-44001', 2013),
(69626, 'Redbubble', 'Distributors', '8599 SW Main', 'Morgan City', 60102, 8474580, 'redbubble@gmail.com', 'ISO-9001', 1990),
(95017, 'Megagoods', 'Distributors', '1900 McLoughin', 'Franklin', 60014, 8154591, 'distribute@mega.com', 'ISO-22006', 2019),
(78403, 'DH Gate', 'Importers', '1730 Delta Waters', 'Holyoke', 60201, 8474232, 'dhgate@gmail.com', 'ISO-9001', 2019),
(69202, 'Uniqbe Limited', 'Distributors', '2545 Brindle', 'Peabody', 60035, 8475023, 'uniqbe@gmail.com', 'ISO-9001', 2018),
(35784, 'VIG Furniture', 'Manufacturers', '931 Bethlehem Pike', 'Baltimore', 60712, 8473770, 'vigfurni@gmail.com', 'ISO-9001', 2015)";
execute_query($con, $sql);

// select all tuples from supplier
$result = execute_query($con, "select * from supplier");
echo "SUPPLIER INFORMATION";
$column = array ("Supplier ID", "Name", "Type", "Address", "City", "Postcode", "Phone", "Email", "Standard", "Year");
echo_table($column, $result);

// create table product 
$sql = "create table product (product_id int(11) not null, supplier_id int(11), name varchar(50), category varchar(50), brand_id varchar(50), brand_name varchar(50), date date, expiry date, price float, stock int(11), net_weight float, certification varchar(50))";
execute_query($con, $sql);

// insert into product
$sql = "insert into product (product_id,supplier_id,name,category,brand_id ,brand_name,date,expiry,price,stock,net_weight,certification) values
(953370,95201,'coffee','Beverages','GW72O','Alpro','2021-08-04','2022-12-31',198.67,910,1856,null),
(502908,44904,'tea','Beverages','GW72O','Alpro','2021-08-27','2022-07-13',92.8,37,1423,null),
(558036,94290,'sandwich loaf','Bread/Bakery','UP31W','Burton','2021-11-21','2023-04-17',73.56,362,1215,null),
(343648,86977,'tortilla','Bread/Bakery','UP31W','Burton','2021-09-20','2022-07-13',184.98,586,119,null),
(107989,60971,'brocolli','Canned/Jarred Goods','YK03K','Del Monte Foods','2021-06-04','2022-05-19',21.18,414,88,null),
(745790,15320,'battery','Other','QN90A','Exide','2021-02-22','2022-06-20',104.51,729,1361,null),
(923797,35980,'shampoo','Personal Care','OJ31P','Dove','2021-03-27','2023-09-11',46.3,550,874,'FDA Licensed'),
(698077,96710,'soap','Personal Care','OJ31P','Dove','2021-09-15','2022-01-02',80.13,69,15,'FDA Licensed'),
(171321,60584,'beef','Meat','VG34J','Imperial Margarine','2021-09-05','2022-02-12',102.91,488,236,null),
(166031,94290,'juice','Beverages','GW72O','Alpro','2021-02-01','2023-07-07',35.03,184,879,null),
(697615,86977,'pork','Meat','VG34J','Imperial Margarine','2021-10-23','2022-01-28',120.31,313,1446,null),
(343869,60971,'egg','Dairy','HE19V','Eagle Brand','2021-06-28','2023-04-11',18.41,638,1530,null),
(151278,15320,'greeting card','Other','SN66F','Muji','2021-10-21','2023-05-28',96.57,475,850,null),
(917101,35980,'waffles','Frozen Foods','GA15J','Eskimo','2021-12-07','2023-06-11',104.99,850,872,null),
(821105,86977,'ice cream','Frozen Foods','GA15J','Eskimo','2021-10-07','2023-12-05',61.38,121,956,null),
(770320,60971,'soda','Beverages','GW72O','Alpro','2021-09-04','2022-04-01',49.09,997,1883,null),
(303161,15320,'frozen vegetables','Frozen Foods','GA15J','Eskimo','2021-03-27','2023-04-23',113.67,383,1021,null),
(924266,35980,'water bottle','Beverages','GW72O','Alpro','2021-03-01','2022-02-08',84.77,606,444,null),
(910891,96710,'hand soap','Personal Care','OJ31P','Dove','2021-01-15','2023-08-15',127.62,574,1345,null),
(277871,35980,'dinner roll','Bread/Bakery','UP31W','Burton','2021-02-21','2022-02-19',101.59,462,1824,null),
(748346,69626,'individual meals','Frozen Foods','GA15J','Eskimo','2021-01-27','2023-09-14',36.23,897,1059,null),
(621916,95017,'fish sauce','Canned/Jarred Goods','YK03K','Del Monte Foods','2021-06-21','2022-04-19',26.36,734,836,null),
(392890,78403,'bagel','Bread/Bakery','UP31W','Burton','2021-09-08','2022-09-07',91.76,93,926,null),
(348305,69202,'paper towel','Paper Goods','LL33Q','Angel Soft','2021-01-10','2023-07-02',133.26,988,1671,null),
(924565,35784,'cucumber','Canned/Jarred Goods','YK03K','Del Monte Foods','2021-03-19','2022-12-31',15.45,954,1295,null),
(975176,86977,'carrot','Canned/Jarred Goods','YK03K','Del Monte Foods','2021-10-20','2023-08-12',113.29,262,47,null),
(746147,60971,'cheddar cheese','Dairy','HE19V','Eagle Brand','2021-09-02','2023-08-08',181.96,190,1393,null),
(740188,15320,'mozzarella cheese','Dairy','HE19V','Eagle Brand','2021-09-19','2023-10-08',42.05,968,306,null),
(446136,35980,'toilet paper','Paper Goods','LL33Q','Angel Soft','2021-08-24','2022-05-08',145.24,119,624,null),
(656391,69626,'sandwich bag','Paper Goods','TI34B','Criticare','2021-10-02','2022-02-01',110.8,943,742,null),
(346411,95017,'spaghetti sauce','Canned/Jarred Goods','MU74Z','Green Giant','2021-07-30','2023-03-28',100.41,442,1754,null),
(555746,78403,'laundry detergent','Cleaners','IA15T','Brasso','2021-08-30','2023-03-22',29.96,748,1356,'FDA Licensed'),
(221000,69202,'ketchup','Canned/Jarred Goods','MU74Z','Green Giant','2021-10-23','2022-12-27',37.82,336,822,null),
(405628,35784,'dishwashing liquid/detergent','Cleaners','IA15T','Brasso','2021-06-01','2022-08-26',8.31,822,455,null),
(175833,96710,'shaving cream','Personal Care','OJ31P','Dove','2021-02-20','2023-06-29',5.1,771,819,'FDA Licensed'),
(464856,60584,'poultry','Meat','VG34J','Imperial Margarine','2021-07-06','2022-03-11',156.62,682,1468,null),
(655116,81102,'almond milk','Dairy','HE19V','Eagle Brand','2021-12-21','2022-08-21',117.75,355,210,'FDA Licensed'),
(864238,67273,'organic milk','Dairy','HE19V','Eagle Brand','2021-01-01','2023-11-05',13.29,709,1214,'FDA Licensed'),
(993895,81219,'cereals','Dry/Baking Goods','RF43H','Flowers Foods','2021-07-12','2023-12-19',82.66,489,314,null),
(801797,81219,'flour','Dry/Baking Goods','RF43H','Flowers Foods','2021-09-01','2022-12-12',168.95,236,250,null),
(293054,81219,'pasta','Dry/Baking Goods','RF43H','Flowers Foods','2021-09-07','2023-10-29',84.97,744,478,null),
(153427,81219,'mixes','Dry/Baking Goods','RF43H','Flowers Foods','2021-10-22','2023-09-19',99.26,904,415,null),
(736785,81219,'corn starch','Dry/Baking Goods','RF43H','Flowers Foods','2021-02-23','2023-02-09',39.78,737,1061,null),
(214712,58721,'orange','Produce','EW07M','Petersheim','2021-01-16','2022-12-07',168.77,369,215,null),
(508415,81219,'sugar','Dry/Baking Goods','RF43H','Flowers Foods','2021-11-10','2023-09-29',5.1,584,852,null),
(419262,81219,'honey','Dry/Baking Goods','RF43H','Flowers Foods','2021-10-17','2022-03-27',118.22,559,1944,null),
(863315,78403,'durian','Produce','EW07M','Petersheim','2021-05-29','2022-02-09',73.79,510,1432,null),
(700120,69202,'yogurt','Dairy','RK87N','Horizon Organic','2021-07-07','2022-01-20',132.87,960,271,null),
(381121,35784,'star fruit','Produce','EW07M','Petersheim','2021-02-04','2023-05-31',30.79,930,1832,null),
(472596,69202,'butter','Dairy','RK87N','Horizon Organic','2021-03-16','2022-03-03',67.03,493,448,null)";
execute_query($con, $sql);

// select all tuples from product
$result = execute_query($con, "select * from product");
echo "PRODUCT INFORMATION";
$column = array ("Product ID", "Supplier ID", "Name", "Category", "Brand ID", "Brand Name", "Date", "Expiry", "Price", "Stock", "Net Weight", "Certification");
echo_table($column, $result);

// create table choose
$sql = "create table choose (transaction_id int(11), product_id int(11))";
execute_query($con, $sql);

// insert into choose
$sql = "insert into choose (transaction_id, product_id) values
(141201, 953370),
(141202, 502908),
(141203, 558036),
(141204, 343648),
(141205, 107989),
(141206, 745790),
(141207, 923797),
(141208, 698077),
(141209, 171321),
(141210, 166031),
(141211, 697615),
(141212, 343869),
(141213, 151278),
(141214, 917101),
(141215, 821105),
(141216, 770320),
(141217, 303161),
(141218, 924266),
(141219, 910891),
(151201, 277871),
(151202, 748346),
(151203, 621916),
(151204, 392890),
(151205, 348305),
(151206, 924565),
(151207, 975176),
(151208, 746147),
(151209, 740188),
(151210, 446136),
(151211, 656391),
(151212, 346411),
(151213, 555746),
(161201, 221000),
(161202, 405628),
(161203, 175833),
(161204, 464856),
(161205, 655116),
(161206, 864238),
(161207, 993895),
(161208, 801797),
(161209, 293054),
(161210, 153427),
(161211, 736785),
(161212, 214712),
(161213, 508415),
(161214, 419262),
(161215, 863315),
(161216, 700120),
(161217, 381121),
(161218, 472596)";
execute_query($con, $sql);

// select all tuples from choose
$result = execute_query($con, "select * from choose");
echo "CHOOSE TABLE";
$column = array ("Transaction ID", "Product ID");
echo_table($column, $result);

// create table transaction
$sql = "create table transaction (transaction_id int(11) not null primary key, customer_id int(11), date date, time time, product varchar(50), quantity int(11), payment_method varchar(50), discount float, price_per_unit float, total_price float)";
execute_query($con, $sql);

// insert into transaction
$sql = "insert into transaction (transaction_id, customer_id, date, time, product, quantity, payment_method, discount, price_per_unit, total_price) values
(141201, 19, '2021-12-14', '20:42:51', 'coffee', 5, 'cash', 0, 198.67, 993.35),
(141202, 25, '2021-12-14', '11:54:35', 'tea', 5, 'cash', 0, 92.8, 464),
(141203, 36, '2021-12-14', '19:32:56', 'sandwich loaf', 3, 'cash', 0, 73.56, 220.68),
(141204, 43, '2021-12-14', '19:26:56', 'tortilla', 4, 'e-payment', 0, 184.98, 739.92),
(141205, 28, '2021-12-14', '15:47:48', 'brocolli', 4, 'debit card', 0, 21.18, 84.72),
(141206, 23, '2021-12-14', '09:19:45', 'battery', 3, 'debit card', 0, 104.51, 313.53),
(141207, 28, '2021-12-14', '11:58:18', 'shampoo', 4, 'debit card', 0, 46.3, 185.2),
(141208, 9, '2021-12-14', '09:50:01', 'soap', 6, 'e-payment', 0, 80.13, 480.78),
(141209, 21, '2021-12-14', '10:22:40', 'beef', 1, 'credit card', 0, 102.91, 102.91),
(141210, 27, '2021-12-14', '18:06:45', 'juice', 2, 'credit card', 0.05, 35.03, 66.557),
(141211, 1, '2021-12-14', '09:22:17', 'pork', 3, 'debit card', 0.05, 120.31, 342.8835),
(141212, 2, '2021-12-14', '16:48:13', 'egg', 5, 'e-payment', 0, 18.41, 92.05),
(141213, 13, '2021-12-14', '16:26:33', 'greeting card', 4, 'e-payment', 0, 96.57, 386.28),
(141214, 43, '2021-12-14', '13:45:45', 'waffles', 4, 'e-payment', 0, 104.99, 419.96),
(141215, 10, '2021-12-14', '19:19:18', 'ice cream', 5, 'cash', 0.1, 61.38, 276.21),
(141216, 35, '2021-12-14', '11:23:16', 'soda', 5, 'cash', 0.1, 49.09, 220.905),
(141217, 14, '2021-12-14', '14:57:58', 'frozen vegetables', 5, 'cash', 0.1, 113.67, 511.515),
(141218, 14, '2021-12-14', '16:38:22', 'water bottle', 3, 'cash', 0.05, 84.77, 241.5945),
(141219, 26, '2021-12-14', '14:54:16', 'hand soap', 5, 'cash', 0.05, 127.62, 606.195),
(151201, 45, '2021-12-15', '19:08:03', 'dinner roll', 5, 'cash', 0.05, 101.59, 482.5525),
(151202, 37, '2021-12-15', '14:58:58', 'individual meals', 4, 'e-payment', 0.05, 36.23, 137.674),
(151203, 42, '2021-12-15', '18:29:43', 'fish sauce', 5, 'e-payment', 0.05, 26.36, 125.21),
(151204, 7, '2021-12-15', '17:58:39', 'bagel', 5, 'e-payment', 0.05, 91.76, 458.8),
(151205, 37, '2021-12-15', '13:55:43', 'paper towel', 4, 'e-payment', 0, 133.26, 533.04),
(151206, 8, '2021-12-15', '09:20:48', 'cucumber', 4, 'debit card', 0, 15.45, 61.8),
(151207, 48, '2021-12-15', '20:22:26', 'carrot', 2, 'debit card', 0, 113.29, 226.58),
(151208, 9, '2021-12-15', '14:43:37', 'cheddar cheese', 5, 'credit card', 0, 181.96, 909.8),
(151209, 35, '2021-12-15', '16:30:44', 'mozzarella cheese', 5, 'credit card', 0, 42.05, 210.25),
(151210, 32, '2021-12-15', '13:55:26', 'toilet paper', 2, 'credit card', 0, 145.24, 290.48),
(151211, 18, '2021-12-15', '11:44:54', 'sandwich bag', 4, 'debit card', 0, 110.8, 443.2),
(151212, 16, '2021-12-15', '10:56:37', 'spaghetti sauce', 5, 'debit card', 0, 100.41, 502.05),
(151213, 23, '2021-12-15', '17:38:21', 'laundry detergent', 6, 'debit card', 0, 29.96, 179.76),
(161201, 1, '2021-12-16', '15:16:55', 'ketchup', 4, 'debit card', 0, '37.82', 151.28),
(161202, 37, '2021-12-16', '17:25:29', 'dishwashing liquid/detergent', 3, 'e-payment', '0', 8.31, 24.93),
(161203, 36, '2021-12-16', '16:13:52', 'shaving cream', 4, 'e-payment', 0.1, 5.1, 18.36),
(161204, 14, '2021-12-16', '11:20:29', 'poultry', 2, 'e-payment', 0, 156.62, 313.24),
(161205, 28, '2021-12-16', '15:32:26', 'almond milk', 5, 'e-payment', 0, 117.75, 588.75),
(161206, 6, '2021-12-16', '15:04:43', 'organic milk', 3, 'e-payment', 0, 13.29, 39.87),
(161207, 27, '2021-12-16', '14:48:23', 'cereals', 5, 'e-payment', 0.05, 82.66, 392.635),
(161208, 30, '2021-12-16', '11:34:33', 'flour', 5, 'e-payment', 0.05, 168.95, 802.5125),
(161209, 4, '2021-12-16', '09:51:41', 'pasta', 5, 'cash', 0.05, 84.97, 403.6075),
(161210, 39, '2021-12-16', '12:18:49', 'mixes', 6, 'cash', 0.05, 99.26, 565.782),
(161211, 11, '2021-12-16', '11:43:54', 'corn starch', 5, 'cash', 0.1, 39.78, 179.01),
(161212, 26, '2021-12-16', '18:02:33', 'orange', 4, 'cash', 0, 168.77, 675.08),
(161213, 11, '2021-12-16', '08:01:31', 'sugar', 4, 'cash', 0, 5.1, 20.4),
(161214, 48, '2021-12-16', '12:27:39', 'honey', 4, 'cash', 0, 118.22, 472.88),
(161215, 6, '2021-12-16', '10:02:26', 'durian', 5, 'cash', 0, 73.79, 368.95),
(161216, 38, '2021-12-16', '14:12:49', 'yogurt', 5, 'cash', 0, 132.87, 664.35),
(161217, 50, '2021-12-16', '12:00:13', 'star fruit', 4, 'e-payment', 0, 30.79, 123.16),
(161218, 47, '2021-12-16', '18:29:47', 'butter', 3, 'e-payment', 0, 67.03, 201.09)";
execute_query($con, $sql);

// select all tuples from transaction
$result = execute_query($con, "select * from transaction");
echo "TRANSACTION INFORMATION";
$column = array ("Transaction ID", "Customer ID", "Date", "Time", "Product", "Quantity", "Payment Method", "Discount", "Price per unit", "Total price");
echo_table($column, $result);

// close connection
mysqli_close($con);

?>