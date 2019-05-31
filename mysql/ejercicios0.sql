--ejercicio 1 listar todos los datos de las oficinas.
--1 listar todos los datos de las oficinas:

SELECT * FROM `oficines`;

--las siguientes instrucciones dan solo información de una tabla:
--SELECT oficina as llistat_oficines from oficines;
--SELECT * FROM `oficines` WHERE 1

--2 listar el nombre, oficina y datos de contrato de todos los empleados.

SELECT nom, oficina, contracte FROM empleats;

--3 listar los atributos id_fabricante, id_producto, descripción y precio 
-- de todos los productos:

SELECT codfab, codprod, descr, preu FROM productes;

--(SELECT * FROM `productes` WHERE 1) es lo mismo?

--4 Siguiendo a la consulta del apartado anterior: como título de la primera columna
-- aparecerá fabricant en lugar de "id_fabricante".
-- para que respete espacios hay que poner comillas
SELECT codbaf as "fabricant del producte" FROM productes;

--5 Listar la ciudad, región y el superávit de cada oficina.
--con where pone un filtro para no ver los negativos
SELECT ciutat,regio,vendes-objectiu FROM oficines WHERE vendes-objectiu>0;

--6 De cada producto obtener el fabricante, el código de producto, descripción y
-- el valor del inventario.
--similar al 3
SELECT codfab,codprod,descr,preu*existencies FROM productes;

--7 Listar el nombre, mes y año del contrato de cada vendedor. La función MONTH(DATA)
-- devuelve el mes de una fecha. La función YEAR(DATA) devuelve el año de una fecha.

SELECT nom, month(contracte) as mes, year(contracte) as any from empleats;

--8 Obtener un listado ordenado alfabéticamente (por nombre) de los empleados.
--por defecto si no se pone nada lo hace ascendente (en este caso sobra)
SELECT * FROM empleats order BY nom ASC;

--9 Obtener un listado de los empleados por orden de antigüedad en la empresa
-- (los de más antigüedad aparecen en primer lugar).

SELECT * FROM empleats ORDER BY contracte ASC;

--10 Obtener un listado de los empleados (id_empleado, nom y vendes) ordenados
-- por volumen de ventas, sacando los de menores ventas primero.

SELECT cap,nom,vendes FROM empleats ORDER BY vendes asc;

--11 Obtener un listado de los empleados (id_empleado, nom y vendes) por orden
-- de antigüedad en la empresa comenzando por los incorporados más recientemente.

SELECT cap,nom,vendes, contracte FROM empleats ORDER BY contracte DESC;

--12 Obtener un listado de los empleados (id_empleado, nom y vendes) ordenados por
-- volumen de ventas, sacando primero los de mayor ventas.

SELECT cap,nom,vendes FROM empleats ORDER BY vendes DESC;

--13 Mostrar las ventas de cada oficina, ordenadas por orden alfabético de región
-- y dentro de cada región por ciudad.

SELECT regio,ciutat,vendes FROM oficines ORDER BY regio ASC;

--14 Listar las oficinas (regió, ciutat y superavit) (superavit=ventes-objectiu)
-- clasificadas por región y dentro de cada región por el superávit de manera que
-- las de mayor superávit aparezcan primero.

SELECT ciutat,regio,vendes-objectiu as supera FROM oficines ORDER BY regio, supera desc;

--15 Listar los códigos de los directores de oficinas. El director 108 aparece en 6
-- oficinas, por tanto aparecerá seis veces en el resultado de la consulta.

SELECT dir FROM oficines;

--16 Volver a hacer el ejercicio 15, pero ahora queremos que el director 108 aparezca una
-- sola vez.

SELECT dir FROM oficines;

-- igual que el anterior, pero cuidado con el distinct que elimina repeticiones
-- (en otro caso poner * delante de dir)
SELECT DISTINCT dir FROM oficines;

