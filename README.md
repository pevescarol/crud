# crud

Crea una base de datos con el nombre:  "college"

Luego crea una tabla: "students" con lo siguiente:

```sh
CREATE TABLE `students` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`first_name` varchar(30) NOT NULL,
`last_name` varchar(30) DEFAULT NULL,
`gender` varchar(10) DEFAULT NULL,
`email` varchar(50) DEFAULT NULL,
`course` varchar(20) DEFAULT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT
```


Ejecuta:

```sh
http://localhost/crud

```
