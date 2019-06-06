-- -----------------------------------------------------
-- Realizad sobre la base de datos “vuelo” las siguientes consultas 
-- (1 punto cada consulta, nota máxima 10):
-- -----------------------------------------------------

-- 1. Lista el nombre, apellidos y dni de los pasajeros de vuelos con 
-- origen Bellevue. Queremos el resultado ordenado por apellido de la Z→A

SELECT nombre,apellidos,DNI FROM pasajeros ORDER BY apellidos DESC;

-- -----------------------------------------------------

-- 2. Listado de aviones con información sobre el número de vuelos que 
-- haya realizado sino ha realizado ninguno deberá salir un 0.

SELECT idAvion,IdVuelo FROM vuelo;

-- -----------------------------------------------------

-- 3. Lista de los aviones del fabricante Boeing para los cuales la 
-- capacidad supera la capacidad del avión con matricula 03020 del mismo 
-- fabricante.(subconsulta).

SELECT capacidad FROM avion where fabricante='boeing';

-- -----------------------------------------------------

-- 4. Lista el nombre, el apellido y el asiento de los pasajeros cuyo 
-- nombre comienza por H y viajaron en el vuelo con identificador 77.



-- -----------------------------------------------------

-- 5. Listado de aviones que no han realizado ningún vuelo. (subconsulta).



-- -----------------------------------------------------

-- 6. Listado de vuelos con origen en Pemuco o San Pedro con fecha de 
-- salida posterior al 2017-12-01.



-- -----------------------------------------------------

-- 7. Listado de empleados cuyo número de vuelos sea superior a 2.



-- -----------------------------------------------------

-- 8. Listar el nombre de los pasajeros y el nombre de los empleados que 
-- han compartido vuelo en un avión del fabricante Airbus. Queremos que 
-- la columna nombre del pasajero sea renombrada por Pasajero y la columna 
-- nombre del empleado por Empleado, además deberá estar ordenado por el 
-- nombre del pasajero A→Z.



-- -----------------------------------------------------

-- 9. Añadir un nuevo empleado con DNI 12345678R que se llama Joan Soler 
-- Pineda y es Director general.

   INSERT INTO empleados (nombre,apellidos,DNI,CategoriaProfesional) VALUES
('Joan' 'Soler' 'Pineda','Director General');

-- -----------------------------------------------------

-- 10. Añadir el nuevo empleado al vuelo con identificador 12 ocupando el 
-- puesto de Piloto.



-- -----------------------------------------------------

-- 11. Borrar los aviones que no tiene asignado ninguna tripulación.



-- -----------------------------------------------------

-- 12. Bajar un 10% la autonomía de los aviones que han realizado más de 
-- 2 vuelos.



-- -----------------------------------------------------