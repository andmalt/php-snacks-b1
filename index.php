
<!-- 
    -- Snack 1 --

    Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario, di 8 partite. Ogni array avrà una squadra di casa e una squadra ospite,
    punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

    Olimpia Milano - Cantù | 55-60
-->
<!-- <?php 
    $matches = [
        [
            'team1' => 'Virtus Roma',
            'team2' => 'Olimpia Milano',
            'points_team1' => 77,
            'points_team2' => 75,
        ],
        [
            'team1' => 'Virtus Latina',
            'team2' => 'Olimpia Torino',
            'points_team1' => 59,
            'points_team2' => 78,
        ],
        [
            'team1' => 'Pallacanestro Frosinone',
            'team2' => 'Venezia basket',
            'points_team1' => 85,
            'points_team2' => 79,
        ],
        [
            'team1' => 'Firenze Pallacanestro',
            'team2' => 'Bologna',
            'points_team1' => 64,
            'points_team2' => 101,
        ],
        [
            'team1' => 'Napoli basket',
            'team2' => 'Trento pallacanestro',
            'points_team1' => 71,
            'points_team2' => 82,
        ],
        [
            'team1' => 'Messina basket',
            'team2' => 'Bari Pallacanestro',
            'points_team1' => 68,
            'points_team2' => 96,
        ],
        [
            'team1' => 'Virtus Velletri',
            'team2' => 'Ancona basket',
            'points_team1' => 86,
            'points_team2' => 79,
        ],
        [
            'team1' => 'Pisa basket',
            'team2' => 'Genova Pallacanestro',
            'points_team1' => 55,
            'points_team2' => 69,
        ],
    ]
?>
<ul>
    <?php foreach($matches as $match){ ?>
        <li><?php echo $match['team1']; ?> - <?php echo $match['team2']; ?> | <?php echo $match['points_team1']; ?>-<?php echo $match['points_team2']; ?></li>
    <?php }; ?>
</ul> -->


<!-- 
    -- Snack 2 --

    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
 che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


<!--  <?php 
    $data = $_GET;

    var_dump($_GET);

    if(empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])) {
        echo "Accesso negato";
    }elseif(strlen($_GET["name"]) <= 3 ){
        echo "Accesso negato";
    }elseif(strpos($_GET["mail"] , "@") == false || strpos($_GET["mail"] , ".") == false ){
        echo "Accesso negato";
    }elseif(!is_numeric($_GET["age"])){
        echo "Accesso negato"; 
    }else{
        echo "Accesso riuscito";
    }

    var_dump($data);
 ?> -->



<!-- 
    -- Snack 3 --

Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
 Stampare ogni data con i relativi post.

Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<!-- 
<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($posts as $post => $value) { ?>
    <h3> <?php echo $post ?> </h3>
    <ul></ul>
    <?php foreach($value as $v) {?>
    <li><h4>Title: <?php echo $v['title'] ?></h4></li>
    <li><p>author: <?php echo $v['author'] ?></p></li>
    <li><p>text: <?php echo $v['text'] ?> </p></li>
        <?php } ?>
    <?php } ?>
</body>
</html> -->




<!-- 
-- Snack 4 --   

Creare un array con 15 numeri casuali, 
tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->

<!-- 
<?php 
    $numbers = [];

    $i = 0 ;
    while(count($numbers) < 15 ){
        $rannum = rand(1 ,100);
        if(!in_array($rannum , $numbers ) ){
            $numbers[$i] = $rannum;
        };

        $i++;
    };

    var_dump($numbers);
?> -->








 <!--  
    -- Snack 5 --

    Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
-->

<!-- <?php 
    $parag = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi totam quod aliquam minima iure animi id enim amet modi qui.
    Repellat suscipit aut nulla nostrum atque eius nesciunt tempora modi.Lorem ipsum dolor sit amet consectetur adipisicing elit.
    Sequi totam quod aliquam minima iure animi id enim amet modi qui. Repellat suscipit aut nulla nostrum atque eius nesciunt tempora modi.
    Lorem ipsum dolor sit amet consectetur adipisicing elit.Sequi totam quod aliquam minima iure animi id enim amet modi qui. 
    Repellat suscipit aut nulla nostrum atque eius nesciunt tempora modi.';

$paragDiv = explode('.', $parag);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<ol>
    <?php foreach($paragDiv as $p) { ?>
        <li><?php if(!empty($p)){ 
                echo $p;
            } ?>
        </li>
    <?php } ?>
</ol>
</body>
</html>
-->






<!--
-- Snack 6 --  

Utilizzare questo array: https://pastebin.com/CkX3680A
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<!-- 
<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="grey">
        <?php foreach($db['teachers'] as $s) {?>
            <ul>
                <li> <?php echo $s['name'] ?> <?php echo $s['lastname'] ?> </li>
            </ul>
        <?php } ?>
    </div>
    
    <div id="green">
         <?php foreach($db['pm'] as $s) {?>
            <ul>
                <li> <?php echo $s['name'] ?> <?php echo $s['lastname'] ?> </li>
            </ul>
        <?php } ?>
    </div>
</body>
</html>


 -->

<!-- 
-- Snack 7 --  

Creare un array contenente qualche alunno di un'ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<!-- 
<?php 
    $arrclass = [
        [
            'name' => 'Andrea',
            'surname' => 'Bontempi',
            'school_grades' => [5,7,5,9,7]
        ],
        [
            'name' => 'Simone',
            'surname' => 'Rossi',
            'school_grades' => [6,7,8,7,6]
        ],
        [
            'name' => 'Sara',
            'surname' => 'Bianchi',
            'school_grades' => [9,9,9,8,10]
        ],
        [
            'name' => 'Simona',
            'surname' => 'Aquilani',
            'school_grades' => [8,8,7,8,6]
        ],
        [
            'name' => 'Francesco',
            'surname' => 'Totti',
            'school_grades' => [6,6,6,7,5]
        ],
    ];



    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php foreach($arrclass as $alumn){ ?>
            <h3>Alunno:</h3>
            <ul>
                <li> Nome: <?php echo $alumn['name'] ?> </li>
                <li> Cognome: <?php echo $alumn['surname'] ?> </li>
                <li> MV: <?php echo array_sum($alumn['school_grades']) / count($alumn['school_grades']) ?> </li>
            </ul>
        <?php } ?>
    </div>
</body>
</html>


 -->
