/*1*/
SELECT 
    o.oficina, o.ciutat
FROM
    oficines o
WHERE
    objectiu > (SELECT 
            SUM(salari)
        FROM
            empleats e
        WHERE
            e.oficina = o.oficina);
/*2*/
SELECT 
    numemp, nom
FROM
    empleats e
WHERE
    salari >= (SELECT 
            objectiu
        FROM
            oficines
        WHERE
            oficina = e.oficina); 
/*con join*/
SELECT 
    numemp, nom
FROM
    empleats e,
    oficines o
WHERE
    salari >= objectiu
        AND o.oficina = e.oficina;

/*3*/
SELECT 
    codprod, codfab
FROM
    productes
WHERE
    codfab = 'aci'
        AND existencies > (SELECT 
            existencies
        FROM
            productes
        WHERE
            codprod = '41004' AND codfab = 'aci');

/*4*/
/* esto da las oficinas donde dirige el 108
select oficina from oficines where dir=108*/
SELECT 
    numemp, nom, oficina
FROM
    empleats
WHERE
    oficina NOT IN (SELECT 
            oficina
        FROM
            oficines
        WHERE
            dir = 108);

/*con not exists (hay que hacer join entre la tabla de dentro y la de fuera*/
SELECT 
    numemp, nom, oficina
FROM
    empleats e
WHERE
    oficina IS NOT NULL
        AND NOT EXISTS( SELECT 
            oficina
        FROM
            oficines
        WHERE
            dir = 108 AND e.oficina = oficina);

/*5*/
SELECT 
    p.codfab, p.codprod, p.descr
FROM
    productes p
WHERE
    EXISTS( SELECT 
            *
        FROM
            linia_comanda lc
        WHERE
            lc.codprod = p.codprod
                AND lc.codfab = p.codfab
                AND lc.import >= 25000);

/*6 - con el from enlaza las tablas del empleados 
y la de comanda, para poner la condición*/
SELECT 
    numclie, nom
FROM
    clients
WHERE
    EXISTS( SELECT 
            *
        FROM
            empleats,
            comanda
        WHERE
            clie = numclie AND rep_ven = numemp
                AND nom = 'Alvaro Jaumes');
/*otra opción con otra subselect: si tenemos el número de empleado
de Alvaro Jaumes (se puede hacer con exists o in/con in puede dar 
error si hay duplicidad)*/
SELECT 
    numclie, nom
FROM
    clients
WHERE
    EXISTS( SELECT 
            *
        FROM
            comanda
        WHERE
            clie = numclie AND exists 
            (select* from empleats
            where rep_ven=numemp
                AND nom = 'Alvaro Jaumes'));

/*con el in*/
SELECT 
    numclie, nom
FROM
    clients
WHERE
    EXISTS( SELECT 
            *
        FROM
            comanda
        WHERE
            clie = numclie
                AND rep_ven IN (SELECT 
                    numemp
                FROM
                    empleats
                WHERE
                    nom = 'Alvaro Jaumes'));

/*7*/
SELECT 
    numemp, nom, oficina
FROM
    empleats
WHERE
    oficina IN (SELECT 
            oficina
        FROM
            oficines
        WHERE
            vendes > objectiu);
/*el mismo con exists*/
SELECT 
    numemp, nom, oficina
FROM
    empleats e
WHERE
    EXISTS( SELECT 
            oficina
        FROM
            oficines
        WHERE
            vendes > objectiu
                AND e.oficina = oficina);


