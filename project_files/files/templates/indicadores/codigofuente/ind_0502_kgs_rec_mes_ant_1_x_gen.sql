# Kilogramos Recolectados del Mes Anterior por generador
# Barras
# Cada Residuo

SELECT IF(gen.nombrecorto IS NULL OR gen.nombrecorto='',gen.razonsocial,gen.nombrecorto) AS 'Item', sum(cantidad) AS 'Cantidad'
FROM manifiesto AS man INNER JOIN relgenman USING(idmanifiesto) INNER JOIN generador AS gen USING(idgenerador) 
	INNER JOIN relmanrec USING(idmanifiesto) INNER JOIN recoleccion USING(idrecoleccion) INNER JOIN relresrec USING(idrecoleccion) INNER JOIN residuo AS res USING(idresiduo)
__WHR__ AND 
YEAR(man.fecha) = IF(MONTH(CURDATE())=1,YEAR(CURDATE())-1,YEAR(CURDATE())) AND MONTH(man.fecha) = IF(MONTH(CURDATE())=1,12,MONTH(CURDATE())-1) AND cantidad != 0.0
GROUP BY gen.razonsocial
ORDER BY Cantidad Desc