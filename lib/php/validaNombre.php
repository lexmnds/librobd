<?php

require_once __DIR__ . "/BAD_REQUEST.php";
require_once __DIR__ . "/ProblemDetails.php";

function validaNombre(false|string $nombre)
{

 if ($nombre === false)
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "Falta el nombre.",
   type: "/error/faltanombre.html",
   detail: "La solicitud no tiene el valor de nombre."
  );

 $trimNombre = trim($nombre);

 if ($trimNombre === "")
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "Nombre en blanco.",
   type: "/error/nombreenblanco.html",
   detail: "Pon texto en el campo nombre.",
  );

 return $trimNombre;
}

function validaTalla(false|string $talla)
{

 if ($talla === false)
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "Falta el talla.",
   type: "/error/faltatalla.html",
   detail: "La solicitud no tiene el valor de talla."
  );

 $trimTalla = trim($talla);

 if ($trimTalla === "")
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "Talla en blanco.",
   type: "/error/tallaenblanco.html",
   detail: "Pon texto en el campo talla.",
  );

 return $trimTalla;
}

function validaTela(false|string $tela)
{

 if ($tela === false)
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "Falta el tela.",
   type: "/error/faltatela.html",
   detail: "La solicitud no tiene el valor de tela."
  );

 $trimTela = trim($tela);

 if ($trimTela === "")
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "Tela en blanco.",
   type: "/error/telaenblanco.html",
   detail: "Pon texto en el campo nombre.",
  );

 return $trimTela;
}

function validaColor(false|string $color)
{

 if ($color === false)
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "Falta el color.",
   type: "/error/faltacolor.html",
   detail: "La solicitud no tiene el valor de color."
  );

 $trimColor = trim($color);

 if ($trimColor === "")
  throw new ProblemDetails(
   status: BAD_REQUEST,
   title: "Color en blanco.",
   type: "/error/colorenblanco.html",
   detail: "Pon texto en el campo color.",
  );

 return $trimColor;
}