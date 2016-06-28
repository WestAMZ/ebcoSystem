use ebco;
insert into puesto(nombre,descripcion) values('Gerente general','Administra los sitios a nivel general');
insert into sitio(nombre,pais,ciudad,latitud,longitud,estado) values('ficticio','ficticio','ficticio',0,0,1);
insert into empleado(nombre1,nombre2,apellido1,apellido2,cedula,fecha_ingreso,id_puesto,id_sitio,estado)
values('westly','alejandro','meza','sotomayor','001-160695-0026D','2000-2-2',1,1,1);
/*password : ebco123*/
insert into usuario(correo,password,id_empleado,foto,role,estado)
values('westlymeza@gmail.com','a1d5285401e5441cf7ff053c4276c1af764f4ef3',1,'120161106.jpg',1,1);
