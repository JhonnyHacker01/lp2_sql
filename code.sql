LABORTORIO 1

### **1. Mostrar los nombres y apellidos de los profesores de una facultad**

```sql
SELECT nombres, apellido
FROM usuario
WHERE tipo = 'profesor';
```

```sql
SELECT u.nombres, u.apellidos, f.nombre as facultad
FROM udh.usuario AS u
JOIN udh.escuela AS e
ON u.id_escuela = e.id
JOIN udh.facultad as f
ON e.id_facultad = f.id
WHERE u.tipo = "profesor" and f.id = 1;
```

2. Mostrar los nombres de las escuelas de cada facultad, también se deberá mostrar el nombre de las facultades

```sql
SELECT e.nombre AS escuela, f.nombre AS facultad
FROM escuela e
JOIN facultad f ON e.id_facultad = [f.id](http://f.id/);
```

```sql
SELECT e.nombre as escuela, f.nombre as facultad
FROM escuela as e
JOIN facultad as f
ON e.id_facultad = f.id
```

3. Crear una vista que muestre únicamente los datos de los usuarios estudiantes

```sql
CREATE VIEW vista_estudiantes AS
SELECT *
FROM usuario
WHERE tipo = 'estudiante';

SELECT * FROM vista_estudiantes;
```

```sql
CREATE VIEW estudiantes AS
SELECT *
FROM usuario as u
WHERE u.tipo = "estudiante"
```

4. Crear una vista que muestre los nombres de los estudiantes y los nombres de las facultades a las que pertenecen

```sql
CREATE VIEW vista_estudiantes_facultades AS
SELECT u.nombres, u.apellidos, f.nombre AS facultad
FROM usuario u
JOIN escuela e ON u.id_escuela = [e.id](http://e.id/)
JOIN facultad f ON e.id_facultad = [f.id](http://f.id/)
WHERE u.tipo = 'estudiante';

SELECT * FROM vista_estudiantes_facultades;
```

```sql
CREATE VIEW estudiantes_facultad AS
SELECT u.nombres, u.apellidos, f.nombre as facultad
FROM udh.usuario AS u
JOIN udh.escuela AS e
ON u.id_escuela = e.id
JOIN udh.facultad as f
ON e.id_facultad = f.id
WHERE u.tipo = "estudiante";
```

LABORATORIO 2

### **2. Vista: detalles de los pedidos con información del usuario**

```sql
CREATE VIEW Vista_Detalles_Pedido_Usuario AS
SELECT
  u.nombre AS nombre_usuario,
  u.email,
  p.id_pedido,
  p.fecha_pedido,
  p.estado,
  pr.nombre AS nombre_producto,
  dp.cantidad,
  dp.precio_unitario
FROM Detalles_Pedido dp
JOIN Pedidos p ON dp.id_pedido = p.id_pedido
JOIN Usuarios u ON p.id_usuario = u.id_usuario
JOIN Productos pr ON dp.id_producto = pr.id_producto;
```

---

### ✅ **3. Listar los productos y su stock actual**

Tu tabla `Productos` **no tiene una columna de stock**, así que deberías agregarla:

```sql
ALTER TABLE Productos ADD stock INT NOT NULL DEFAULT 0;
```

Y para listar:

```sql
SELECT nombre, stock FROM Productos;

```

---

### ✅ **4. Vista: nombre y precio de productos pedidos por un usuario específico**

```sql
CREATE VIEW Vista_Productos_Usuario AS
SELECT
  u.nombre AS nombre_usuario,
  pr.nombre AS nombre_producto,
  pr.precio
FROM Detalles_Pedido dp
JOIN Pedidos p ON dp.id_pedido = p.id_pedido
JOIN Usuarios u ON p.id_usuario = u.id_usuario
JOIN Productos pr ON dp.id_producto = pr.id_producto;
```

*Puedes luego filtrar con `WHERE nombre_usuario = 'NombreEjemplo'`.*

---

### ✅ **5. Vista: estado de los pedidos con la fecha y el nombre del usuario**

```sql
CREATE VIEW Vista_Estado_Pedidos AS
SELECT
  p.estado,
  p.fecha_pedido,
  u.nombre AS nombre_usuario
FROM Pedidos p
JOIN Usuarios u ON p.id_usuario = u.id_usuario;
```

---

### ✅ **6. Vista: cantidad de productos pedidos y total vendido por producto**

```sql
CREATE VIEW Vista_Productos_Vendidos AS
SELECT
  pr.nombre,
  COUNT(dp.id_detalle) AS cantidad_veces_pedido,
  SUM(CAST(dp.cantidad AS UNSIGNED)) AS total_unidades,
  SUM(CAST(dp.cantidad AS UNSIGNED) * CAST(dp.precio_unitario AS DECIMAL(10,2))) AS total_vendido
FROM Detalles_Pedido dp
JOIN Productos pr ON dp.id_producto = pr.id_producto
GROUP BY pr.id_producto;
```

---

### ✅ **7. Vista: productos en stock y con descripción > 100 caracteres**

```sql
CREATE VIEW Vista_Productos_Stock_DescripcionLarga AS
SELECT *
FROM Productos
WHERE stock > 0 OR LENGTH(descripcion) > 100;
```

---

### ✅ **8. Vista: productos pedidos por más de 5 usuarios distintos**

```sql
CREATE VIEW Vista_Productos_MasDe5Usuarios AS
SELECT
  p.id_producto,
  pr.nombre,
  COUNT(DISTINCT pe.id_usuario) AS usuarios_distintos
FROM Detalles_Pedido p
JOIN Pedidos pe ON p.id_pedido = pe.id_pedido
JOIN Productos pr ON p.id_producto = pr.id_producto
GROUP BY p.id_producto
HAVING usuarios_distintos > 5;
```

---

### ✅ **9. Vista: productos más caros por categoría de pedido, con precio > promedio**

Tu modelo no tiene "categoría de pedido", así que quizás se refería a productos con precio por encima del promedio:

```sql
CREATE VIEW Vista_Productos_Caros AS
SELECT *
FROM Productos
WHERE precio > (SELECT AVG(precio) FROM Productos);
```

---

### ✅ **10. Vista: pedidos y total gastado por cada usuario**

```sql
CREATE VIEW Vista_Pedidos_Usuario_Gasto AS
SELECT
  u.id_usuario,
  u.nombre,
  COUNT(DISTINCT p.id_pedido) AS cantidad_pedidos,
  SUM(CAST(dp.cantidad AS UNSIGNED) * CAST(dp.precio_unitario AS DECIMAL(10,2))) AS total_gastado
FROM Usuarios u
JOIN Pedidos p ON u.id_usuario = p.id_usuario
JOIN Detalles_Pedido dp ON p.id_pedido = dp.id_pedido
GROUP BY u.id_usuario;
```