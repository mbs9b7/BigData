# BigData


scp -i key-ec2.pem Air\ Temperature/Global2011T/air_temp.2010 hadoop@52.91.152.83:air_temp.2010

Replace all white spaces from the beginning of the line
sed -r -i 's/^ *//' your_file

Replace all white spaces of a file
sed -r -i 's/\s+/ /g' your_file

CREATE TABLE air_temp (longititude float(6,3), latitude float(6,3), jan float(3,1), feb float(3,1), march float(3,1), april float(3,1), may float(3,1), june float(3,1), july float(3,1), aug float(3,1), sept float(3,1), oct float(3,1), nov float(3,1), decm float(3,1), PRIMARY KEY(longititude, latitude));

LOAD DATA LOCAL INPATH '/home/hadoop/air_temp/air_temp.1901' OVERWRITE INTO TABLE air_temp; 

SELECT latitude, longitude FROM air_temp where (jan+feb+mar+apr+may+june+july+aug+sept+oct+nov+dec)/12 >= 20 AND (jan+feb+mar+apr+may+june+july+aug+sept+oct+nov+dec)/12 <= 30;

INSERT OVERWRITE DIRECTORY '/user/hadoop/output' select printf("%f,%f", longitude, latitude) from air_temp limit 10;

MYSQL

create database weather;

use weather;

create table test2 (
longitude float(6,3),
latitude float(6,3),
PRIMARY KEY(longitude, latitude)
);

grant all privileges on *.* to '%'@'%';
grant all privileges on weather.* to ''@localhost;
 grant all privileges on *.* to ''@'%';

sqoop export --connect jdbc:mysql://localhost/weather --username root —password password --table test2 --export-dir /user/hadoop/output
