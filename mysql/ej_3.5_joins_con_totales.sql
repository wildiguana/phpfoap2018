/*SConsultes SQL Consultes Agrupades
1. Quin és l'import total de les comandes realitzades per l'empleat Vicente Pantalla?*/

SELECT sum(imprt_total) AS total_pedidos FROM empleats,comanda WHERE rep_ven = numemp
AND nom = 'Vicente Pantalla';

/*2. Trobar en quina data es va realitzar la primera comanda.*/

SELECT min(data) AS primera_data_comanda FROM comanda;
/* select nom, data as primera_data_comanda from empleats, comanda
where rep_ven=numemp order by data asc; -- otra opcion
--- otra opcion:
 select nom, data as primera_data_comanda from empleats, comanda
where rep_ven=numemp and data=(select min(data) from comanda);--esta funciona*/ 

/*3. Quantes comandes hi ha de més de 25000 €?*/

select count(*) as comandes_major_25000 from comanda where import_total>25000;

/*4. Llistar quants empleats estan assignats a cada oficina.*/

select oficina, count(*) as num_empleats from empleats where oficina is not null
group by oficina;
/*select oficina, count(*) as num_empleats from empleats 
group by oficina;  --- de esta forma sale el empleado sin oficina
--otra manera
select o.oficina, count(e.oficina) as num from oficines o left outer join
empleats on (e.oficina=o.oficina) group by o.oficina;   --- o
select o.oficina, count(e.oficina) as num from oficines o left join
empleats on (e.oficina=o.oficina) group by o.oficina;

/*5. Quants empleats treballen en cada ciutat on tenim oficines?*/

SELECT 
    ciutat, COUNT(numemp)
FROM
    oficines o,
    empleats e
WHERE
    e.oficina = o.oficina
GROUP BY ciutat;

/*select ciutat, count(numemp) from oficines o left outer join empleats
on (e.oficina=o.oficina) group by ciutat;*/
/*select o.oficina, count(numemp) from oficines o left outer join empleats
on (e.oficina=o.oficina) group by ciutat;*/

/*6. Per a cada empleat, obtenir el seu número, nom, i import venut per aquest a cada
client (indicant el número de client). Si un empleat no ha venut res a un client, sortirà
nu ll.*/

select numemp, nom, clie as client, sum(import_total) as total_venut from
empleats left outer join comanda on rep_ven =numemp group by numemp, clie;

/*7. Per a cada empleat que ha venut més de 30.000€ en comandes, trobar el seu
import mitjà de comandes. En el resultat indicar el número d'empleat i el seu import
mitjà de comandes.*/

select rep_ven, avg(import_total) as import_mig from comanda
group by rep_ven having sum(import_total)>30000;

/*8. Llistar de cada producte, la seva descripció, preu i la suma total del qu e s'ha venut.
Només volem els productes que la suma total del que s'ha venut sigui superior al
valor del 75% de les existències. Ordena per la quantitat total.*/

select descr, preu, existencies, sum (quant) as total_comanda
from productes p, linia_comanda lc
where lc.codfab = p.codfab and lc.codprod = p.codprod
group by p.codfab, p.codprod
having sum (quant)>existencies*0.75
order by 4;

/*9. Rang de salaris (min i max) dels empleats de cada oficina.*/

select oficina,min(salari),max(salari) from empleats where oficina is not null
group by oficina;

/*10. Quants clients diferents són atesos per cada empleat?*/

select rep_ven, count(distinct clie) as "numero clients" from comanda
group by rep_ven;
/* si no le pone "distinct" lo que hace es contar aunque se repitan (si un vendedor
le vende 2 veces a un cliente lo cuenta como uno más)*/
/*11. Per a cada oficina amb dos o més empleats, calcular el salari total i les vendes
totals de tots els empleats de l'oficina.*/

select oficina, sum(salari), sum(vendes) from empleats where oficina is not null
group by oficina having count(numemp) >=2;

/*12. Mitjana d’empleats de les oficines que estan per sota de la mitjana de vendes de
les oficines.*/
/*13. Mitjana de la quanti tat que sha venut d’aquells productes els quals han sigut
comprats més cops que la mitjana de compres de tots els producte.*/
/*14. Trobar les comandes que s’han realitzat abans de la data mitjana de les comandes.*/
/*15. Empleats que han atès comandes que superen l’impo rt mitja de les comandes.*/