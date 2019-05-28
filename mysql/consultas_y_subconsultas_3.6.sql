select o.oficina, o.ciutat from oficines o where objectiu>(select sum(salari)
from empleats e where e.oficina=o.oficina);


1. Llista les oficines on l'objectiu de vendes de l'oficina excedeixi la suma de salaris
dels venedors individuals (d'aquella oficina).
2. Empleats amb salari que siguin iguals o superiors a l'objectiu de llur oficina de
vendes (emp rant subconsultes i sense subconsultes).
3. Llista dels productes del fabricant ACI per als quals les existències superen les
existències del producte amb fabricant ACI i codi producte 41004.
4. Llistar els venedors que no treballen en oficines dirigides per l'e mpleat 108.
5. Llista de productes (amb la descripció) per als quals s'ha rebut una comanda
d'import 25.000 o més. (Considerant productes de qualsevol fabricant).
6. Llistar els noms dels clients que tenen assignat el representant Alvaro Jaumes
(suposant que no poden haver hi representants amb el mateix nom).
7. Llistar els empleats (numemp, nom, i núm. d'oficina) que treballen en oficines
"bones" (les que tenen vendes superiors al seu
8. Empleats que NO treballen en oficines dirigides per Ana Bustamante.
9. L listar els clients assignats a Ana Bustamante que no tenen ninguna comanda
superior a 50000.