/*
 Consultes SQL – Manipulació de dades
 */
 
/*1.	Modificar el camp titol de la taula empleats al valor ‘representant’, d’aquells 
que tinguin un valor 'representante'.*/

UPDATE empleats 
SET 
    titol = 'representant'
WHERE
    LOWER(titol) = 'representante';

/*2.	Volem actualitzar les salaris dels nostres empleats de tal forma que la salari 
d'un empleat sigui el 50% de l'objectiu de la seva oficina.*/

update empleats e set salari = (select objectiu*0.5 from oficines o where o.oficina = e.oficina);

/*3.	Volem posar a zero les vendes dels empleats de l'oficina 12.*/

UPDATE empleats e 
SET 
    vendes = 0
WHERE
    e.oficina = 12;

/*4.	Volem posar a zero el limit de crèdit dels clients assignats a empleats de 
l'oficina 12.*/

update clients c set limitcredit = 0 from empleats where oficina=12;

/*5.	Esborrar les línies de comandes de les comandes del client Jaime Llorens.*/



/*6.	Augmentar un 5% el preu de tots els productes del fabricant ACI.*/



/*7.	Afegir una nova oficina per a la ciutat de Madrid, amb el número d'oficina 30, 
amb un objectiu de 100000 i regió Centre.*/



/*8.	Canviar els empleats de l'oficina 21 a l'oficina 30.*/



/*9.	Eliminar les comandes de l'empleat 105.*/



/*10.	Eliminar les oficines que no tinguin empleats.*/
