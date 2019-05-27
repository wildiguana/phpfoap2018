select codfab,codprod,descr,preu*existencies as "valor_inventari" from PRODUCTES;
select nom, MONTH(contracte) as "mes", YEAR(contracte) as "any" from EMPLEATS;
select * from EMPLEATS order by nom;
select * from EMPLEATS order by contracte asc;
select numemp,nom,vendes from EMPLEATS order by vendes asc;
select numemp,nom,vendes from EMPLEATS order by contracte desc;
select numemp,nom,vendes from EMPLEATS order by vendes desc;
select oficina,vendes from OFICINES order by regio, ciutat;
select oficina,regio,ciutat,vendes-objectiu as "superàvit" from OFICINES where vendes-objectiu > 0 order by regio,vendes-objectiu desc;
select dir from OFICINES;
select distinct dir from OFICINES;


(select year(c.data), p.existencies, p.codprod from productes p left join linia_comanda lc on p.codprod=lc.codprod and p.codfab=lc.codfab left join comanda c on lc.numcomanda=c.numcomanda where  year(c.data)=1990) union ( SELECT "",existencies,codprod FROM productes where existencies = 0); -- select distinct p.existencies, p.codprod from productes p, linia_comanda lc, comanda c where( p.codprod=lc.codprod  and lc.numcomanda=c.numcomanda )and  p.existencies=0 and year(c.data)=1997
select  e.nom, e.oficina, o.regio, o.ciutat from empleats e left join oficines o on e.oficina=o.oficina;
select  e.nom, e.oficina, o.regio, o.ciutat from empleats e right join oficines o on e.oficina=o.oficina;
select  co.numcomanda, cl.nom as "Nom client", co.import_total, cl.limitcredit from clients cl inner join comanda co on cl.numclie =co.clie;
select  e.nom, e.oficina,o.ciutat, o.regio from empleats e left join oficines o on e.oficina=o.oficina;
select  e.nom as "Nombre Director", e.titol, e.oficina, o.objectiu as "Ob.>> 600000 €"  from empleats e inner join oficines o on e.numemp=o.dir where o.objectiu>600000 and e.numemp=o.dir;
select e.nom as "Nombre Empleado", cl.nom as "nombre Cliente", c.import_total from comanda c inner join empleats e on c.rep_ven=e.numemp inner join clients cl on c.clie=cl.numclie where c.import_total>25000;
select e.nom as "Nombre Empleado", e.contracte, c.data from comanda c inner join empleats e on c.rep_ven=e.numemp where e.contracte=c.data;
select e.numemp, e.nom as "Nombre Empleado", e.titol, e.cap, e.salari from empleats e inner join empleats j on e.cap=j.numemp where e.salari>j.salari; -- select e.numemp, e.nom as "Nombre Empleado", e.titol, e.cap, e.salari from empleats e, empleats j where e.cap=j.numemp and e.salari>j.salari;
select e.* from empleats e left join comanda c on e.numemp=c.rep_ven left join linia_comanda lc on lc.numcomanda=c.numcomanda where e.salari<10000 or c.import_total;