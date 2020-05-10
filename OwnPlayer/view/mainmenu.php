<body>
    <div class="container">
        <div class="mySlides">
            <div class="numbertext"> 1 / 4</div>
            <img class= "sliderimage" src="images/wallpaper/wallpaper1.jpg">
        </div>
        <div class="mySlides">
            <div class="numbertext"> 2 / 4</div>
            <img class= "sliderimage" src="images/wallpaper/wallpaper2.jpg">
        </div>
        <div class="mySlides">
            <div class="numbertext"> 3 / 4</div>
            <img class= "sliderimage" src="images/wallpaper/wallpaper3.jpg">
        </div>
        <div class="mySlides">
            <div class="numbertext"> 4 / 4</div>
            <img class= "sliderimage" src="images/wallpaper/wallpaper4.jpeg">
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <!-- Image text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail images -->
        <div class="row">
            <div class="column">
                <img class="demo cursor" src="images/wallpaper/wallpaper1.jpg" style="width:100%" onclick="currentSlide(1)" alt="The Woods">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/wallpaper/wallpaper2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Cinque Terre">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/wallpaper/wallpaper3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Mountains and fjords">
            </div>
            <div class="column">
                <img class="demo cursor" src="images/wallpaper/wallpaper4.jpeg" style="width:100%" onclick="currentSlide(4)" alt="Northern Lights">
            </div>    
        </div>
    </div>

    <div>
        <table style="width:100%;">
            <tr>                
                <th>       
                    <div class="container">
                        <image class="elemetlinkimage" src= <?php loadtitle ('title1'); ?> >
                        <div width="520" height="250">
                            <form action="Index.php" method="post">
                            	<button type="submit" name="sentpage" value="page1" style="border:none;">
                            		<image class="elemetlinkimage" src= <?php loadcover ('cover1'); ?> >
                            	</button>                                                                                                
                            </form>
                        </div>     
                    </div>
                </th>
                <th>
                    <div class="container">
                        <image class="elemetlinkimage" src= <?php loadtitle ('title2'); ?> height="82.39">
                        <div width="520" height="250">
                        	<form action="Index.php" method="post">
                            	<button type="submit" name="sentpage" value="page2" style="border:none;">
                            		<image class="elemetlinkimage" src= <?php loadcover ('cover2'); ?> >
                            	</button>                                                                                                
                            </form>                            
                        </div> 
                    </div>
                </th>
                <th>
                    <div class="container">
                        <image class="elemetlinkimage" src= <?php loadtitle ('title3'); ?> >
                        <div width="520" height="250">
                        	<form action="Index.php" method="post">
                            	<button type="submit" name="sentpage" value="page3" style="border:none;">
                            		<image class="elemetlinkimage" src= <?php loadcover ('cover3'); ?> >
                            	</button>                                                                                                
                            </form>                            
                        </div> 
                    </div>
                </th>
            </tr>
            <tr>
                <th>
                    <div class="container">
                        <div width="520" height="250">
                        	<form action="Index.php" method="post">
                            	<button type="submit" name="sentpage" value="page4" style="border:none;">
                            		<table>
                                        <tr>
                                            <th>
                                                <image style="background-color: #4f4b66;" height="250" src= <?php loadtitle ('title4'); ?>>
                                            </th>
                                            <th>
                                                <image class="elemetlinkimage" src= <?php loadcover ('cover4'); ?> >
                                            </th>
                                        </tr>
                                	</table>
                            	</button>                                                                                                
                            </form>                            
                        </div> 
                    </div>
                </th>
                <th>
                    <div class="container">                    
                        <image class="elemetlinkimage" src= <?php loadtitle ('title5'); ?> height="50">
                        <div width="520" height="250">
                        	<form action="Index.php" method="post">
                            	<button type="submit" name="sentpage" value="page5" style="border:none;">
                            		<image class="elemetlinkimage" src= <?php loadcover ('cover5'); ?> >
                            	</button>                                                                                                
                            </form>                            
                        </div> 
                    </div>
                </th>
                <th>
                    <div class="container">
                        <div style="background-color: black; margin-left: 30%; margin-right: 30%; border-radius: 24px 24px 0px 0px; -moz-border-radius: 24px 24px 0px 0px; -webkit-border-radius: 24px 24px 0px 0px; border: 0px solid #000000;">
                            <image class="elemetlinkimage" src= <?php loadtitle ('title6'); ?> height="70" style="margin-top: 30">
                            <div width="520" height="250">
                                <form action="Index.php" method="post">
                                	<button type="submit" name="sentpage" value="page6" style="border:none;">
                                		<image class="elemetlinkimage" src= <?php loadcover ('cover6'); ?> >
                                	</button>                                                                                                
                                	<image class="elemetlinkimage" src="http://192.168.1.6/animes/Koutetsujou%20no%20Kabaneri/black.JPG" height="20">
                                	<image class="elemetlinkimage" src="http://192.168.1.6/animes/Koutetsujou%20no%20Kabaneri/white.jpg" height="20" width="520">
                                </form>                                
                            </div> 
                        </div>
                    </div>
                </th>
            </tr>
            <tr>
                <th>
                    <div class="container">
                        <image class="elemetlinkimage" src= <?php loadtitle ('title7'); ?> width="220">
                        <div width="520" height="250">
                        	<form action="Index.php" method="post">
                            	<button type="submit" name="sentpage" value="page7" style="border:none; background-color: white;">
                            		<image class="elemetlinkimage" src= <?php loadcover ('cover7'); ?> >
                            	</button>                                                                                                
                            </form>                            
                        </div> 
                    </div>
                </th>
                <th>
                    <div class="container">
                        <image class="elemetlinkimage" src="http://192.168.1.6/animes/Oda%20Nobunaga%20no%20Yabou/title.png">
                        <div width="520" height="250">
                            <a href="http://192.168.1.3/WebSites/OwnPlayer/seasonvideos/odanobunaganoyabou.php">
                                <image class="elemetlinkimage" src="http://192.168.1.6/animes/Oda%20Nobunaga%20no%20Yabou/Oda%20Nobunaga%20no%20Yabou%20Cover.jpg">
                            </a>
                        </div> 
                    </div>
                </th>
                <th>
                    <div class="container">
                        <image class="elemetlinkimage" src="http://192.168.1.6/animes/Oda%20Nobunaga%20no%20Yabou/title.png">
                        <div width="520" height="250">
                            <a href="http://192.168.1.3/WebSites/OwnPlayer/seasonvideos/odanobunaganoyabou.php">
                                <image class="elemetlinkimage" src="http://192.168.1.6/animes/Oda%20Nobunaga%20no%20Yabou/Oda%20Nobunaga%20no%20Yabou%20Cover.jpg">
                            </a>
                        </div> 
                    </div>
                </th>
            </tr>
            <tr>
                <th>
                    <div class="container">
                        <image class="elemetlinkimage" src="http://192.168.1.6/animes/Oda%20Nobunaga%20no%20Yabou/title.png">
                        <div width="520" height="250">
                            <a href="http://192.168.1.3/WebSites/OwnPlayer/seasonvideos/odanobunaganoyabou.php">
                                <image class="elemetlinkimage" src="http://192.168.1.6/animes/Oda%20Nobunaga%20no%20Yabou/Oda%20Nobunaga%20no%20Yabou%20Cover.jpg">
                            </a>
                        </div> 
                    </div>
                </th>
                <th>
                    <div class="container">
                        <image class="elemetlinkimage" src="http://192.168.1.6/animes/Oda%20Nobunaga%20no%20Yabou/title.png">
                        <div width="520" height="250">
                            <a href="http://192.168.1.3/WebSites/OwnPlayer/seasonvideos/odanobunaganoyabou.php">
                                <image class="elemetlinkimage" src="http://192.168.1.6/animes/Oda%20Nobunaga%20no%20Yabou/Oda%20Nobunaga%20no%20Yabou%20Cover.jpg">
                            </a>
                        </div> 
                    </div>
                </th>
                <th>
                    <div class="container">
                        <image class="elemetlinkimage" src="http://192.168.1.6/animes/Oda%20Nobunaga%20no%20Yabou/title.png">
                        <div width="520" height="250">
                            <a href="http://192.168.1.3/WebSites/OwnPlayer/seasonvideos/odanobunaganoyabou.php">
                                <image class="elemetlinkimage" src="http://192.168.1.6/animes/Oda%20Nobunaga%20no%20Yabou/Oda%20Nobunaga%20no%20Yabou%20Cover.jpg">
                            </a>
                        </div> 
                    </div>
                </th>
            </tr>
        </table> 
    </div>
</body>

<style>
* {
  box-sizing: border-box;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
  background-color: black;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  text-align: center;
  float: left;
  width: 25%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.sliderimage {
    height: 50%; 
    max-width: 50%;
    margin-left: auto; 
    margin-right: auto; 
    display: block;
}

.row 
{    
    height: 30%;
    background-color: 080A24;
    color: white;
}

h4 {
    margin-left: 25%;
    margin-right: auto;
    position:relative;
    text-align:center;
    width: 320;
    color: black;
    /* background-color: black; */
}

.elemetlinkimage {
    margin-left: auto; 
    margin-right: auto; 
    max-width: 520; 
    max-height: 250; 
    display: block; /* remove extra space below image */
}
</style>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
    showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    } 
</script>
