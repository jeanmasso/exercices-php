<?php

/* =========================== Exercices - PHP - Les variables - Partie - 1 =========================== */

/* Exercice 1
  - Créer une variable name et l'initialiser avec la valeur de votre choix.
  - Afficher son contenu
*/
$name = "Hello";
echo $name;


/* Exercice 2
 - Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix. Attention age est de type entier.
 - Afficher leur contenu.
*/
$lastname = "Doe";
$firstname = "John";
$age = 25;
echo $lastname."\r\n", $firstname."\r\n", $age."\r\n";


/* Exercice 3
 - Créer une variable km. L'initialiser à 1. Afficher son contenu.
 - Changer sa valeur par 3. Afficher son contenu.
 - Changer sa valeur par 125. Afficher son contenu.
*/
$km = 1; echo $km."\r\n";
$km = 3; echo $km."\r\n";
$km = 125; echo $km."\r\n";


/* Exercice 4
 - Créer une variable de type string, une variable de type int, une variable de type float,
   une variable de type booléan et les initialiser avec une valeur de votre choix.
 - Les afficher.
*/
$str = "words";
$int = 3144568;
$float = 3E-70;
$boolean = true;
var_dump($str, $int, $float, $boolean);
echo $str."\r\n", $int."\r\n", $float."\r\n", $boolean."\r\n";


/* Exercice 5
 - Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur.
 - Donner une valeur à cette variable et l'afficher.
*/
$null = null; echo "la valeur est dans ces guillemets '".$null."'.\r\n";
$null = 456; echo "la valeur est dans ces guillemets '".$null."'.\r\n";


/* Exercice 6
 - Créer une variable name et l'initialiser avec la valeur de votre choix.
 - Afficher : "Bonjour" + name + ", comment vas tu ?".
*/
$name = "Joe";
echo "Bonjour ".$name.", comment vas tu ?\r\n";


/* Exercice 7
 - Créer trois variables lastname , firstname et age et les initialiser avec les valeurs de votre choix.
 - Attention age est de type entier.
 - Afficher : "Bonjour" + lastname + firstname + ",tu as" + age + "ans".
*/
$lastname = "Doe";
$firstname = "Joe";
$age = 35;
echo "Bonjour ".$lastname." ".$firstname.",tu as ".$age." ans\r\n";


/* Exercice 8
 - Créer 3 variables.
    - Dans la première mettre le résultat de l'opération 3 + 4.
    - Dans la deuxième mettre le résultat de l'opération 5 * 20.
    - Dans la troisième mettre le résultat de l'opération 45 / 5.
 - Afficher le contenu des variables.
*/
$first = 3 + 4;
$second = 5 * 20;
$third = 45 / 5;
echo $first."\r\n", $second."\r\n", $third."\r\n";



/* =========================== Exercices - PHP - Les conditions - Partie - 2 =========================== */

/* Exercice 1
 - Créer une variable age et l'initialiser avec une valeur.
 - Si l'âge est supérieur ou égale à 18, afficher Vous êtes majeur.
 - Dans le cas contraire, afficher Vous êtes mineur.
*/
$age = 12;
if ($age >= 18) {
  echo "Vous êtes majeur.\r\n";
} else {
  echo "Vous êtes mineur.\r\n";
}


/* Exercice 2
 - Créer une variable isEasy de type booléan et l'initialiser avec une valeur.
 - Afficher C'est facile!! si c'est vrai. Dans le cas contraire afficher C'est difficile !!!.
 - Bonus : L'écrire de deux manières différentes.
*/
$isEasy = true;
if ($isEasy) {
  echo "C'est facile!!";
} else {
  echo "C'est difficile !!!";
}

if ($isEasy):
  echo "C'est facile!!";
else:
  echo "C'est difficile !!!";
endif;


/* Exercice 3
 - Créer deux variables age et gender. La variable gender peut prendre comme valeur :
    - Homme
    - Femme
 - En fonction de l'âge et du genre afficher la phrase correspondante :
    - Vous êtes un homme et vous êtes majeur
    - Vous êtes un homme et vous êtes mineur
    - Vous êtes une femme et vous êtes majeur
    - Vous êtes une femme et vous êtes mineur
 - Gérer tous les cas.
*/
$age = 22;
$gender = "Femme";
if ($gender == "Homme" && $age >= 18):
  echo "Vous êtes un homme et vous êtes majeur";
elseif ($gender == "Homme" && $age < 18):
  echo "Vous êtes un homme et vous êtes mineur";
elseif ($gender == "Femme" && $age >= 18):
  echo "Vous êtes une femme et vous êtes majeur";
else :
  echo "Vous êtes une femme et vous êtes mineur";
endif;


/* Exercice 4
 - L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
 - Créer une variable magnitude. Selon la valeur de magnitude, afficher la phrase correspondante.
 - Gérer tous les cas.
 - Utilser autre chose que des if else
*/
$magnitude = 1;
switch ($magnitude) :
  case 1:
    echo "Micro-séisme impossible à ressentir.\r\n";
    break;
  case 2:
    echo "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.\r\n";
    break;
  case 3:
    echo "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.\r\n";
    break;
  case 4:
    echo "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.\r\n";
    break;
  case 5:
    echo "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.\r\n";
    break;
  case 6:
    echo "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.\r\n";
    break;
  case 7:
    echo "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.\r\n";
    break;
  case 8:
    echo "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.\r\n";
    break;
  case 9:
    echo "Séisme capable de tout détruire sur une très vaste zone.\r\n";
    break;
endswitch;


/* Exercice 5
 - Traduire ce code avec des if et des else :
    <?php
      echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    ?>
*/
$gender = "Femme";
if ($gender != "Homme") {
  echo "C'est une développeuse !!!\r\n";
}else {
  echo "C'est un développeur !!!\r\n";
}



/* Exercice 6
 - Traduire ce code avec des if et des else :
    <?php
      echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?>
*/
$age = 17;
if ($age >= 18) {
  echo "Tu es majeur.\r\n";
}else {
  echo "Tu n'es pas majeur.\r\n";
}


/* Exercice 7
 - Traduire ce code avec des if et des else :
    <?php
      echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    ?>
*/
$isOk = true;
if ($isOk == false) {
  echo "c'est pas bon !!!\r\n";
}else {
  echo "c'est ok !!\r\n";
}


/* Exercice 8
 - Traduire ce code avec des if et des else :
    <?php
      echo ($isOk) ? 'c'est ok !!' : 'c'est pas bon !!!';
    ?>
*/
if ($isOk) {
  echo "c'est ok !!\r\n";
}else {
  echo "c'est pas bon !!!\r\n";
}



/* =========================== Exercices - PHP - Les boucles - Partie - 3 =========================== */

/* Exercice 1
 - Créer une variable et l'initialiser à 0.
 - Tant que cette variable n'atteint pas 10, il faut :
    - l'afficher
    - l'incrementer
*/
$variable = 0;
while ($variable != 10) {
  echo $variable++;
}


/* Exercice 2
 - Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
 - Tant que la première variable n'est pas supérieure à 20 :
    - multiplier la première variable avec la deuxième
    - afficher le résultat
    - incrementer la première variable
*/
$a = 0;
$b = 5;
while (!($a > 20)) {
  echo $a * $b."\r\n";
  $a++;
}


/* Exercice 3
 - Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
 - Tant que la première variable n'est pas inférieure ou égale à 10 :
    - multiplier la première variable avec la deuxième
    - afficher le résultat
    - décrémenter la première variable
*/
$i = 100;
$j = 1;
while (!($i <= 10)) {
  echo $i * $j."\r\n";
  $i--;
}


/* Exercice 4
 - Créer une variable et l'initialiser à 1.
 - Tant que cette variable n'atteint pas 10, il faut :
    - l'afficher
    - l'incrementer de la moitié de sa valeur
*/
$x = 1;
while ($x <= 10) {
  echo $x."\r\n";
  $x += $x/2;
}


/* Exercice 5
 - En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.
*/
for ($i = 1; $i <= 15; $i++) {
  echo "On y arrive presque\r\n";
}


/* Exercice 6
 - En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.
*/
for ($i = 20; $i >= 0 ; $i--) {
  echo "C'est presque bon\r\n";
}


/* Exercice 7
 - En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.
*/
for ($i = 1; $i <= 100; $i += 15) {
  echo "On tient le bon bout\r\n";
}


/* Exercice 8
 - En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.
*/
for ($i = 200; $i >= 0 ; $i -= 12) {
  echo "Enfin !!!!\r\n";
}


/* =========================== Exercices - PHP - Les fonctions - Partie - 4 =========================== */

/* Exercice 1
 - Faire une fonction qui retourne true.
*/
function isTrue() {
  return true;
}


/* Exercice 2
 - Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.
*/
function strOfCharacters($param) {
  return $param."\r\n";
}
strOfCharacters("Hello World !!!");


/* Exercice 3
 - Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines
*/
function concatStrOfCharact($a, $b){
  return $a." ".$b."\r\n";
}
concatStrOfCharact("Joe","Doe");


/* Exercice 4
 - Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
    - Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    - Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    - Les deux nombres sont identiques si les deux nombres sont égaux
*/
function multiInt($a,$b){
  if ($a > $b) {
    return $a." est plus grand.\r\n";
  }elseif ($a < $b) {
    return $a." est plus petit.\r\n";
  }else {
    return $a." et ".$b." sont identiques.\r\n";
  }
}
multiInt(10,5);


/* Exercice 5
 - Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.
*/
function concatStrInt($a, $b) {
  return $a." ".$b."\r\n";
}
concatStrInt(2020, "pire année.");


/* Exercice 6
 - Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
    - "Bonjour" + nom + prénom + ",tu as" + age + "ans".
*/
function helloYou($lastname, $firstname, $age) {
  return "Bonjour ".$lastname." ".$firstname.",tu as ".$age." ans.\r\n";
}
helloYou('Stark', 'Tony', 52);


/* Exercice 7
 - Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :
    - Homme
    - Femme
 - La fonction doit renvoyer en fonction des paramètres :
    - Vous êtes un homme et vous êtes majeur
    - Vous êtes un homme et vous êtes mineur
    - Vous êtes une femme et vous êtes majeur
    - Vous êtes une femme et vous êtes mineur
 - Gérer tous les cas.
*/
function people($age, $gender) {
  if ($gender == "Homme" && $age >= 18):
    return "Vous êtes un homme et vous êtes majeur.\r\n";
  elseif ($gender == "Homme" && $age < 18):
    return "Vous êtes un homme et vous êtes mineur.\r\n";
  elseif ($gender == "Femme" && $age >= 18):
    return "Vous êtes une femme et vous êtes majeur.\r\n";
  else :
    return "Vous êtes une femme et vous êtes mineur.\r\n";
  endif;
}
people(17,"Femme");


/* Exercice 8
 - Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
 - Tous les paramètres doivent avoir une valeur par défaut.
*/
function sumTotal($a = 10, $b = 20, $c = 40) {
  return $a + $b + $c."\r\n";
}
sumTotal();
sumTotal(50, 100, 10);