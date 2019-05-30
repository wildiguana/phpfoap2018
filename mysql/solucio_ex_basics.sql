/*Consultes SQL
1. Llista totes les dades de les oficines.*/

select * from OFICINES;

/*2. Llista el nom, oficina, i data de contracte de tots els empleats.*/

select nom,oficina,contracte from EMPLEATS;

/*3. Llista els atributs id_fabricante, id_producto, descripció i preu de tots els
productes.*/

select codfab,codprod,descr,preu from PRODUCTES;

/*4. Respecte a la consulta de l'apartat anterior: com a títol de la 
primera columna apareixerà fabricant en comptes de ‘id_fabricante’.*/

select codfab as "fabricant",codprod,descr,preu from PRODUCTES;

/*5. Llista la ciutat, regió i el superàvit de cada oficina.*/

select ciutat,regio,vendes-objectiu as "superàvit" from OFICINES where 
vendes-objectiu>0;

/*6. De cada producte obtingui el seu fabricant, el codi producte, la seva descripció i
el valor de l’inventari.*/

select codfab,codprod,descr,preu*existencies as "valor_inventari" from 
PRODUCTES;

/*7. Llista el nom, mes i any del contracte de cada venedor. La funció 
MONTH(DATA) torna el mes d’una data. La funció YEAR(DATA) torna l’any 
d’una data.*/

select nom, MONTH(contracte) as "mes", YEAR(contracte) as "any" from 
EMPLEATS;

/*8. Obtingui un llistat ordenat alfabèticament (pel nom) dels empleats.*/

select * from EMPLEATS order by nom;

/*9. Obtingui un llistat dels empleats per ordre d’antiguitat a l’empresa (els de més
antiguitat apareixen primer).*/

select * from EMPLEATS order by contracte asc;

/*10.Obtingui un llistat dels empleats (id_empleado, nom i vendes) ordenats per volum
de vendes traient els de menors vendes primer.*/

select numemp,nom,vendes from EMPLEATS order by vendes asc;

/*11.Obtingui un llistat dels empleats (id_empleado, nom i vendes) per ordre
d’antiguitat a l’empresa començant pels incorporats més recentment.*/

select numemp,nom,vendes from EMPLEATS order by contracte desc;

/*12.Obtingui un llistat dels empleats (id_empleado, nom i vendes) ordenats per volum
de vendes traient primer els de majors vendes.*/

select numemp,nom,vendes from EMPLEATS order by vendes desc;

/*13.Mostra les vendes de cada oficina, ordenades per ordre alfabètic de regió i dins
de cada regió per ciutat.*/

select oficina,vendes from OFICINES order by regio, ciutat;

/*14.Llista les oficines (regió, ciutat i superavit) (superavit=ventes-objectiu)
classificades per regió i dins de cada regió pel superàvit de manera que les de
major superàvit apareguin les primeres.*/

select oficina,regio,ciutat,vendes-objectiu as "superàvit" from OFICINES 
where vendes-objectiu > 0 order by regio,vendes-objectiu desc;

/*15.Llista els codis dels directors de les oficines. El director 108 apareix en sis
oficines, per tant apareixerà sis vegades en el resultat de la consulta.*/

select dir from OFICINES;

/*16.Torna a fer l'exercici 15 però ara volem que el director 108 aparegui una sola
vegada.*/

select distinct dir from OFICINES;

















