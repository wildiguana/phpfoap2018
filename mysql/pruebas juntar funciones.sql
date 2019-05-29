/*ejercicio 6 de los TOP*/
/*quin es el client (nom) que més comandes ha fet?*/
/* selecciona y ordena*/
select c.clie,count(*) as numcomandes from comanda c group by c.clie order by numcomandes desc;
/*utilza la función max (el 4) - no se pueden juntar funciones de totales - para sacar el 4 hace
lo siguiente: crea una tabla temporal "tmp"*/
select max(tmp.numcomandes) from (

select count(*) as numcomandes from comanda c group by c.clie order by numcomandes desc
)tmp;

/*hace un filtro de totales con having*/

/*ej 2 de consultes SQL - manipulació de dades*/

update empleats e set salari = (select objectiu*0.5 from oficines o where o.oficina = e.oficina)

