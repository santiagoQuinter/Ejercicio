
# Registro de vehiculos y usuarios

Este proyecto consiste en la implementación de un sistema de registro de vehículos y usuarios, además de la visualización de la marca y  la placa de cada vehículo y estadísticas que consiste en el conteo de vehículos por marcas.

Este proyecto implementa una solución para dar respuesta al siguiente ejercicio:

Cree una aplicación web en PHP utilizando Laravel que permita acceder a la zona de login y
realizar las siguientes acciones:
1. Acceder a la zona de inicio: para acceder a la zona de inicio se debe enviar por la
URL el código: A765. En caso de que el código sea válido se desplegarán 3 enlaces,
el primero a “registrar vehículos”, el segundo a “listar vehículos” y el tercero a
“estadísticas vehículos”. En caso contrario deberá desplegar un mensaje que diga
zona prohibida.
1. Registrar vehículos: Cree un sistema que permita registrar tanto vehículos como
dueños al mismo tiempo. En un mismo formulario recoja todos los datos y registre los
datos de las 2 tablas.
Nota: se recomienda registrar primero los datos de los dueños para evitar problemas
de claves foráneas inexistentes. Registre 2 vehículos y 2 dueños. Verifique
únicamente que la marca sea válida.
1. Listar vehículos: Liste todos los vehículos con los siguientes datos: placa y marca;
para los vehículos tipo Mazda muestre al lado de la placa un mensaje en verde que
diga (“Los de Mazda son los mejores”) y para los vehículos tipo Toyota muestra la
placa en rojo y negrilla.
1. Estadísticas vehículos: Muestre cuántos vehículos de cada tipo existen registrados
en el sistema (por ejemplo: 3 Mazda, 2 Toyota, 0 Chevrolet)

Una vez inciado el proyecto los pasos para ingresar a la zona de inicio es el siguiente
1. Ingresar en la url el siguiente código: A765, una vez el código sea validado por el sistema devuelve una la vista zona de inicio en donde se encuentran habilitados los tres enlaces correspondientes al ejercicio 1 con sus respectivas descripciones de cada uno.
En caso que el código no sea correcto se mostrará el texto "Zona prohíbida"

### Registro de usuarios
1. Clic en "Registrar Usuarios" de la "Zona de Inicio".
2. Llenar el formulario con los datos solicitados y dar clic en "Registrar", en caso de que los datos solicitados sean llenado correctamente(ningun campo vacío y marca=MAZDA,CREVROLET,TOYOTA) aparecerá el letrero "Registro exitoso"

### Listado de Vehículos
Clic en "Listar Vehículos" de la "Zona de Incio"
Aparecerá el listado de los vehículos por marca y placa siguiendo las reglas del ejecicio 3

### Estadíscitasd de Vehículos
Clic en "Estadíscitasd de Vehículos" de la "Zona de Incio"
Aparecerá la cantida de vehículos por cada marca








<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>
