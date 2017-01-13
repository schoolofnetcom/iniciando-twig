<?php
/*$loader = new Twig_Loader_Array([
'index' => 'Hello World!! {{ name }}'
]);*/

$loader = new Twig_Loader_Filesystem(__DIR__ . '/../twig_templates');

$twig = new Twig_Environment($loader);

//echo $twig->render('interpolacao.html.twig', ['name' => 'Luiz Carlos', 'escola' => 'School of Net']);
//echo $twig->render('variaveis.html.twig');
//echo $twig->render('operadores.html.twig');
//echo $twig->render('arrays.html.twig');
//echo $twig->render('estrutura_repeticao.html.twig');
//echo $twig->render('estruturas_condicionais.html.twig');
//echo $twig->render('outros_operadores.html.twig');
//echo $twig->render('tests.html.twig');
//$cliente = new \SON\Cliente();
//$cliente->id = 100;
//$cliente->name = "Luiz Carlos";
/*echo $twig->render('objects.html.twig', [
'cliente' => $cliente
]);*/
//$cliente = new \SON\Cliente();
//$cliente->id = 100;
//$cliente->name = "Luiz Carlos";
//echo $twig->render('funcoes.html.twig', ['cliente' => $cliente]);
//echo $twig->render('tests.html.twig');
//echo $twig->render('filters.html.twig');
//$cliente = new \SON\Cliente();
//echo $twig->render('tags.html.twig', ['cliente' => $cliente]);