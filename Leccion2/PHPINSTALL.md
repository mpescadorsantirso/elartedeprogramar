# Instalar php en Windows

## Descargar php
Descargamos php 7.3.1 desde aqui:

[https://windows.php.net/downloads/releases/php-7.3.1-nts-Win32-VC15-x64.zip]

## Extraer los archivos

Extraemos el archivo en C:\php7.3

## Configurar php.ini

Copiamos el archivo php.ini-development a php.ini.
Importante que se trate de un duplicado.
Cambiamos:
```
;extension_dir = "ext"
```
por
```
extension_dir = "ext"
```
y quitamos el punto y coma de las siguentes lineas:
```
extension=bz2
extension=curl
extension=fileinfo
extension=gd2
extension=gettext
;extension=gmp
extension=intl
;extension=imap
;extension=interbase
;extension=ldap
extension=mbstring
;extension=exif      ; Must be after mbstring as it depends on it
;extension=mysqli
;extension=oci8_12c  ; Use with Oracle Database 12c Instant Client
;extension=odbc
extension=openssl
;extension=pdo_firebird
;extension=pdo_mysql
;extension=pdo_oci
;extension=pdo_odbc
extension=pdo_pgsql
;extension=pdo_sqlite
;extension=pgsql
;extension=shmop

; The MIBS data available in the PHP distribution must be installed.
; See http://www.php.net/manual/en/snmp.installation.php
;extension=snmp

extension=soap
extension=sockets
;extension=sodium
;extension=sqlite3
;extension=tidy
extension=xmlrpc
extension=xsl

```
## Añadir al path

Boton derecho sobre el menu del sistema -->Configuracion

Buscamos "variables" y seleccionamos "Editar las variables del Sistema"

Pulsamos "Variables de entorno"

En "Variables del sistema" buscamos "Path" y pulsamos "Editar"

Pulsamos "Nuevo" e introducimos "C:\php7.3".

Aceptar-->Aceptar-->Aceptar
y ya está.