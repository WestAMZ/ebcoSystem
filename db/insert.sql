INSERT INTO `puesto` (`id_puesto`, `nombre`, `descripcion`) VALUES
(1, 'Gerente general', 'Administra los sitios a nivel general'),
(2, 'Gerente de sitio', 'Administra a nivel de sitio o sucursal'),
(3, 'Contador', 'lleva la contabilidad de la empresa'),
(4, 'Jefe Recursos Humanos', 'Lleva el control del personal dentro de la empresa'),
(5, 'Jefe de Finanzas', 'Encargado del area de finanzas dentro de la empresa'),
(6, 'Tecnico de Mantenimiento', 'Realiza las distintas actividades de mantenimiento a las maquinas de la empresa');

INSERT INTO `sitio` (`id_sitio`, `nombre`, `pais`, `ciudad`, `direccion`, `latitud`, `longitud`, `telefono`, `estado`) VALUES
(1, 'Sucursal Corinto', 'Nicaragua', 'Chinandega', '', 0, 0, '25223765', 1),
(2, 'Sucursal San Jorge', 'Nicaragua', 'Rivas', '', 0, 0, '25223740', 1),
(3, 'Puerto Sandino', 'Nicaragua', 'Nagarote', NULL, 0, 0, NULL, 1),
(4, 'Sucursal San Juan del sur', 'Nicaragua', 'Rivas', NULL, 0, 0, NULL, 1),
(5, 'Sucursal Puerto Cabeza', 'Nicaragua', 'Zelaya RAAN', NULL, 0, 0, NULL, 1);

INSERT INTO `empleado` (`id_empleado`, `nombre1`, `nombre2`, `apellido1`, `apellido2`, `cedula`, `telefono`, `firma`, `id_puesto`, `id_sitio`, `id_jefe`, `inss`, `fecha_ingreso`, `estado`) VALUES
(1, 'westly', 'alejandro', 'meza', 'sotomayor', '001-160695-0026D', NULL, NULL, 1, 1, NULL, '', '2000-02-02', 1),
(2, 'Eleazar', 'Gerardo', 'Martinez', 'Carballo', '401-180196-0004C', NULL, NULL, 2, 4, NULL, '', '2004-04-02', 1),
(4, 'Ricardo', 'Enmanuel', 'Martinez', 'Carballo', '401-180196-0003B', NULL, NULL, 2, 5, NULL, '', '2006-06-12', 1),
(5, 'Donaldo', 'Javier', 'Vargas', 'Mena', '001-180397-0002S', NULL, NULL, 3, 2, NULL, '', '2004-03-10', 1),
(6, 'Martin', 'Rene', 'Larios', NULL, '001-150593-0023D', NULL, NULL, 3, 1, NULL, '', '2002-11-02', 1),
(7, 'Reymundo', 'Javier', 'Tenorio', 'Quiroz', '401-130192-003X', NULL, NULL, 5, 2, NULL, '', '2000-06-23', 1),
(8, 'Nuvia', 'Yolanda', 'Sanchez', 'Sandigo', '401-251293-0006F', NULL, NULL, 6, 5, NULL, '', '2006-05-02', 1),
(9, 'Luis', 'Alfonso', 'Cardoza', 'Bird', '001-150795-0002K', NULL, NULL, 6, 1, NULL, '', '2005-04-08', 1),
(10, 'Jeeson', 'Steven', 'Dominguez', NULL, '401-101194-0012L', NULL, NULL, 6, 3, NULL, '', '2008-03-12', 1);

INSERT INTO `insidencia` (`id_insidencia`, `fecha`, `descripcion`, `nivel`, `estado`, `id_usuario`, `adjunto`) VALUES
(1, '2016-06-29', 'Problemas en el area de mantenimiento', 0, 1, 1, ''),
(2, '2016-06-29', 'Tambien estoy teniendo unos inconvenientes en esa area, si sabe de algo me lo hacen saber por favor', 0, 1, 1, ''),
(3, '2016-06-29', 'jghg', 0, 1, 1, '');




INSERT INTO `usuario` (`id_usuario`, `correo`, `password`, `id_empleado`, `role`, `estado`, `foto`) VALUES
(1, 'westlymeza@gmail.com', 'a1d5285401e5441cf7ff053c4276c1af764f4ef3', 1, 1, 1, '120161106.jpg'),
(2, 'eleazarg2112@gmail.com', 'a1d5285401e5441cf7ff053c4276c1af764f4ef3', 2, 2, 1, '220160630.jpg'),
(4, 'ricardom0490@gmail.com', 'a1d5285401e5441cf7ff053c4276c1af764f4ef3', 4, 2, 1, '320160630.jpg');
