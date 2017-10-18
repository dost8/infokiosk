
<head>
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css" rel="stylesheet" />
    <script type="text/javascript">
        $(document).on('ready', function () {
            $(".regular").slick({
                dots: true,
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 3
            });
        });
  </script>
</head>
<body>
    <section class="regular slider">
        <div>
            <img src="http://placehold.it/350x300?text=1">
        </div>
        <div>
            <img src="http://placehold.it/350x300?text=2">
        </div>
        <div>
            <img src="http://placehold.it/350x300?text=3">
        </div>
        <div>
            <img src="http://placehold.it/350x300?text=4">
        </div>
        <div>
            <img src="http://placehold.it/350x300?text=5">
        </div>
        <div>
            <img src="http://placehold.it/350x300?text=6">
        </div>
    </section>
</body>


<?php
die;
    include_once 'cls.operations.php';
    $operation = new Operations();

    $result = array_reverse( $operation->selectQuery('SELECT "news" FROM news LIMIT 10'));
    $count = 0;
    $div = null;      $li = null;
    $i = 0;
    $active = 'active';
    foreach($result as $key => $value){
        $li .= '<li data-target="#newsCarousel" data-slide-to="'.$i.'" class="'.$active.'"></li>';
        $div .= '<div class="item '.$active.'">'.urldecode($value['news']).'</div>';
        $i++;
        $active = '';
    }
?>
hol
<!-- <div id="newsCarousel" class="carousel slide" data-ride="carousel"> -->
<div class="newsCarousel">
    <!-- Indicators -->

    <?=$div?>


    <!-- <a href="#" class="left carousel-control" data-slide="prev" >
        <span class="fa fa-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a href="#" class="right carousel-control" data-slide="next">
        <span class="fa fa-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a> -->
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $('.newsCarousel').slick({
            dots : true,
            infinite : true,
            speed : 500,
            fade : true,
            cssEase : 'linear'
        })
    })
</script>