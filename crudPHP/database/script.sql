CREATE DATABASE crud;

use crud;

CREATE TABLE `actas` (
  `id` int(11) NOT NULL,
  `acta` bigint(30) NOT NULL,
  `actaComp` bigint(30) NOT NULL,
  `lugar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `rubro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `dni` int(8) NOT NULL,
  `domicilio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `medidaCautelar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dispoLegal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `objetos` varchar(511) COLLATE utf8_unicode_ci NOT NULL,
  `inspector` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `legajo` int(25) NOT NULL,
  `observaciones` varchar(511) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL
)

DESCRIBE actas;
