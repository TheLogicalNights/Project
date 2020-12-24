
-->For proper working of database please hit below queries on mysql database

create database IACTS

use IACTS

create table form1(name varchar(20),mob_no varchar(10),email varchar(25),speciallity varchar(20),hospital varchar(20),
		   iacts_no varchar(20),med_reg_no varchar(20),address varchar(20),area varchar(20),city varchar(20),pincode varchar(10),state varchar(20));

create table form1(name varchar(20),mob_no varchar(10),email varchar(25),speciallity varchar(20),hospital varchar(20),
		  med_reg_no varchar(20),address varchar(20),area varchar(20),city varchar(20),pincode varchar(10),state varchar(20));

create table form1(name varchar(20),mob_no varchar(10),email varchar(25),speciallity varchar(20),hospital varchar(20),
		  med_reg_no varchar(20),address varchar(20),area varchar(20),city varchar(20),pincode varchar(10),state varchar(20));

create table form1(name,mob_no,email,speciallity,hospital,iacts_no,med_reg_no,address,area,city,pincode,state);


-->after setting database

			$servername = "localhost";
			$username = "root";
			$password = "swapnil123";
			$dbname = "IACTS";

change above code from index.php as 

			$servername = "your_host_name";
			$username = "your_database_username";
			$password = "database_password";
			$dbname = "IACTS";


-->Thank You!
