========= SQL =========
<!----- DDL (pelanggan) ----->
<!-- CREATE -->
CREATE DATABASE examp1;
CREATE TABLE <pelanggan> (
    id int (9) NOT NULL PRIMARY KEY,
    nama varchar (50) NOT NULL,
    email varchar(25) NOT NULL,
)
<!-- ALTER -->
ALTER TABLE customer RENAME TO pelanggan;
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);
<!-- DROP -->
DROP TABLE pelanggan;

<!----- DML (pelanggan) ----->
<!-- INSERT -->
INSERT INTO customer VALUES ('085876765654','dwirayeni','dwi98@gmail.com')
INSERT INTO customer VALUES ('089222431425','evareksanjaya','rEvasan@gmail.com')
INSERT INTO customer VALUES ('081234432543','dilanurfatinah','d1laeverybody@gmail.com')
<!-- SELECT -->
SELECT `email` FROM `pelanggan`
SELECT * from customer WHERE nama = "dwirayeni";
<!-- UPDATE -->
UPDATE customer SET nama='dewindut' WHERE hp='085876765654'
<!-- DELETE -->
DELETE from customer WHERE nama='dilanurfatinah'


<!----- DCL (pelanggan) ----->
<!-- GRANT -->
CREATE USER 'pelanggan'@'localhost' IDENTIFIED BY 'plku';
GRANT SELECT,CREATE,INSERT,UPDATE,DELETE ON examp1.pelanggan TO 'pelanggan'@'localhost';
<!-- REVOKE -->
REVOKE SELECT ON examp1.pelanggan FROM 'pelanggan'@'localhost';
REVOKE CREATE ON examp1.pelanggan FROM 'pelanggan'@'localhost';
REVOKE INSERT ON examp1.pelanggan FROM 'pelanggan'@'localhost';
REVOKE UPDATE ON examp1.pelanggan FROM 'pelanggan'@'localhost';
REVOKE DELETE ON examp1.pelanggan FROM 'pelanggan'@'localhost';


<!----- DDL (barang) ----->
<!-- CREATE -->
CREATE DATABASE examp1;
CREATE TABLE <barang> (
    id int (9) NOT NULL PRIMARY KEY,
    harga varchar (10) NOT NULL,
    nama_barang varchar(30) NOT NULL,
)
<!-- ALTER -->
ALTER TABLE barang CHANGE merk nama_barang varchar (30);
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);
<!-- DROP -->
DROP TABLE barang;

<!----- DML (pelanggan) ----->
<!-- INSERT -->
INSERT INTO barang VALUES ('2674','10.000','bolpoint')
INSERT INTO barang VALUES ('2694','400.000','hoodie')
INSERT INTO barang VALUES ('2774','20.000','stabilo')
INSERT INTO barang VALUES ('2174','89.000','earphone')
<!-- SELECT -->
SELECT * from barang WHERE nama_barang= "earphone";
SELECT `harga` FROM `barang`
<!-- UPDATE -->
UPDATE barang SET harga='24.500' WHERE nama_barang='stabilo'
<!-- DELETE -->
DELETE from barang WHERE harga='24.500';


<!----- JOIN ----->
<!-- INNER JOIN -->
SELECT pelanggan.nama, barang.harga FROM pelanggan INNER JOIN barang ON pelanggan.id = barang.id;
<!-- OUTER JOIN -->
<!-- RIGHT OUTER JOIN -->
SELECT barang.nama_barang, pelanggan.nama FROM pelanggan RIGHT JOIN barang ON barang.id= pelanggan.id;
<!-- LEFT OUTER JOIN -->
SELECT pelanggan.nama, barang.nama_barang FROM barang LEFT JOIN pelanggan ON pelanggan.id= barang.id;   
<!-- CROSS JOIN -->
SELECT * FROM pelanggan CROSS JOIN barang;
<!-- NATURAL JOIN -->
SELECT * FROM pelanggan NATURAL LEFT JOIN barang;