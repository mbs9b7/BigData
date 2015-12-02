# BigData


scp -i key-ec2.pem Air\ Temperature/Global2011T/air_temp.2010 hadoop@52.91.152.83:air_temp.2010

sed -r -i 's/\s+/ /g' air_temp.2010

CREATE TABLE air_temp(longitude FLOAT, latitude FLOAT, jan FLOAT, feb FLOAT, mar FLOAT, apr FLOAT, may FLOAT, june FLOAT, july FLOAT, aug FLOAT, sept FLOAT, oct FLOAT, nov FLOAT, dec FLOAT) ROW FORMAT DELIMITED FIELDS TERMINATED BY ' '; 

LOAD DATA LOCAL INPATH '/home/hadoop/air_temp/air_temp.1901' OVERWRITE INTO TABLE air_temp; 

SELECT latitude, longitude FROM air_temp where (jan+feb+mar+apr+may+june+july+aug+sept+oct+nov+dec)/12 >= 20 AND (jan+feb+mar+apr+may+june+july+aug+sept+oct+nov+dec)/12 <= 30;

INSERT OVERWRITE DIRECTORY '/user/hadoop/output' select printf("%f %f", longitude, latitude) from air_temp limit 10;
