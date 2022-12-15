
<?php

$database = [
    [
        'title' => 'New Jersey',
        'author' => 'Bon Jovi',
        'year' => 1988,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg',
        'genre' => 'Rock'
    ],
    [
        'title' => 'Live at Wembley 86',
        'author' => 'Queen',
        'year' => 1992,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Ten\'s Summoner\'s Tales',
        'author' => 'Sting',
        'year' => 1993,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg',
        'genre' => 'Pop'
    ],
    [
        'title' => 'Steve Gadd band',
        'author' => 'Steve Gadd Band',
        'year' => 2018,
        'poster' => 'https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg',
        'genre' => 'Jazz'
    ],
    [
        'title' => 'Brave new World',
        'author' => 'Iron Maiden',
        'year' => 2000,
        'poster' => 'https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg',
        'genre' => 'Metal'
    ],
    [
        'title' => 'One more car, one more rider',
        'author' => 'Eric Clapton',
        'year' => 2002,
        'poster' => 'https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg',
        'genre' => 'Rock'
    ]

    
];?>

<!-- seconda versone -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap header-->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet'
    integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    
    <link rel="stylesheet" href="./assets/style.css">
    <title>vue dischi php</title>
</head>
<body>
    <div id="app">
        <header class="bg-header">
            <div class="container-fluid d-flex align-items-center">
                <img class="width-img p-2" src="./assets/img/logo-small.svg" alt="">
                <ul>
                    <li class="text-white m-2" v-for="(el,index) in arraigeneri" :key="index">{{el}}</li>
                    
                </ul>
            </div>
        </header>

        <main class="bg-main vh-100">
            <div class="container d-flex flex-wrap justify-content-center"  >
                <?php foreach ($database as $key => $value) { ?>
                    <div class="card m-2 bg-cards" style="width: calc(100% / 5);">
                    <img src="<?php echo $value["poster"] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title text-white text-center"><?php echo $value["title"] ?></h5>
                      <p class="card-text text-center text-white"><?php echo $value["genre"]?></p>
                      
                    </div>   
                  </div>
              <?php  } ?>
                     
                
                
                    
            </div>
        </main>
    </div>
    <!--vue 2.0-->
    <script src='https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js'></script>

    <!--axios-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js'
    integrity='sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg=='
    crossorigin='anonymous' referrerpolicy='no-referrer'></script>
    
   <!--bootstrap body-->
   <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'></script>
   <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js'></script>

   <!-- mio script -->
   <script src="./main.js"></script>
   
</body>
</html>