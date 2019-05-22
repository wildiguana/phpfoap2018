--ejercicio 1 listar todos los datos de las oficinas.
--1 listar todos los datos de las oficinas:

SELECT * FROM `oficines`;

--las siguientes instrucciones dan solo información de una tabla:
--SELECT oficina as llistat_oficines from oficines;
--SELECT * FROM `oficines` WHERE 1

--2 listar el nombre, oficina y datos de contrato de todos los empleados:

SELECT nom, oficina, contracte FROM empleats;

--3 listar los atributos id_fabricante, id_producto, descripción y precio de todos los productos:

SELECT

--4 
-- para que respete espacios hay que poner comillas
SELECT codbaf as "fabricant del producte" FROM productes;

--5
--con where pone un filtro para no ver los negativos
SELECT ciutat,regio,vendes-objectiu FROM oficines WHERE vender-objectiu>0;

--6
--similar al 3
SELECT codfab,codprod,descr,preu*existencies

--7

SELECT nom, month(contracte) as mes, year(contracte) as any from empleats;

--8
--por defecto si no se pone nada lo hace ascendente (en este caso sobra)
SELECT * FROM empleats order BY nom ASC;

--9

SELECT * FROM empleats

--10

--11

--12

--13

--14

SELECT ciutat,regio,vendes-objectiu as supera FROM oficines ORDER BY regio supera desc;

--15

SELECT dir FROM oficines;

--16

-- igual que el anterior, pero cuidado con el distinct que elimina repeticiones
-- (en otro caso poner * delante de dir)
SELECT DISTINCT dir FROM oficines;

