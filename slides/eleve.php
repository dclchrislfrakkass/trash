<link rel="stylesheet" href="css/demo.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<script src="js/modernizr.js"></script>



<body class="col 12">
    
<div class="slide col-7">
<!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
<ul class="slides">
    <li>
        <img src="images/generalite/radio lycee point FR - Ecriture.001.jpeg" />
    <p class="flex-caption">AAAA <a href="test.html"><i class="fas fa-angle-double-down"></i>test</a></p>
        </li>
        <li>
        <img src="images/generalite/radio lycee point FR - Ecriture.002.jpeg" />
    <p class="flex-caption">02</p>
        </li>
        <li>
        <img src="images/generalite/radio lycee point FR - Ecriture.003.jpeg" />
    <p class="flex-caption">03</p>
        </li>
        <li>
        <img src="images/generalite/radio lycee point FR - Ecriture.004.jpeg" />
    <p class="flex-caption">04</p>
    </li>
    <li>
    <img src="images/generalite/radio lycee point FR - Ecriture.004.jpeg" />
    <p class="flex-caption">05</p>
    </li>
</ul>
</div>


</div>

<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>

<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>

<script type="text/javascript">
    $(function(){
    SyntaxHighlighter.all();
    });
    $(window).load(function(){
    $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
        $('body').removeClass('loading');
        }
    });
    });

// Can also be used with $(document).ready()
$(window).load(function() {
$('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
});
});

</script>


<!-- Syntax Highlighter -->
<script type="text/javascript" src="js/shCore.js"></script>
<script type="text/javascript" src="js/shBrushXml.js"></script>
<script type="text/javascript" src="js/shBrushJScript.js"></script>

<!--options -->


<script src="js/jquery.easing.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<script defer src="js/demo.js"></script>
</body>