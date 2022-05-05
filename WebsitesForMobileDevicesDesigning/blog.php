<?php 
  include_once 'header.php';
?>
                <section >
                        <?php
                           if(isset($_SESSION["userid"])){
                               echo "<p>Welcome " . $_SESSION["useruid"] . "</p>";
                           }
                        ?>
                    <section>
                    <div>
                        <h1 class="font-effect-fire">Ikemefuna Eke Blogs</h1>
                    </div>
                    </section>
                    
                    <div class="blog">
                        <div >
                            <p>My time in Europe</p>
                            <img src="img/poland.jpg">
                            <video width="300" height="168" controls>
                                <source src= "your_movie.mp4" type="video/mp4">
                            </video>
                            <p>
                            The culture of Europe is rooted in its art, architecture, film, different types of music, economics, literature, and philosophy.
                            European culture is largely rooted in what is often referred to as its "common cultural heritage".
                            </p>
                            <p>
                            The cuisines of European countries are diverse by themselves, although there are common characteristics that distinguish European cooking from cuisines of Asian countries and others.
                            Compared with traditional cooking of Asian countries, for example, meat is more prominent and substantial in serving-size. 
                            Steak, in particular, is a common dish across Europe. European cuisines also put substantial emphasis on sauces as condiments, seasonings, or accompaniments (in part due to the difficulty of seasonings penetrating the often larger pieces of meat used in European cooking). 
                            Dairy products are often utilized in the cooking process. 
                            Wheat-flour bread has long been the most common source of starch in this cuisine, along with pasta, dumplings, and pastries, although the potato has become a major starch plant in the diet of Europeans and their diaspora since the European colonization of the Americas.
                            </p>
                        </div>
                        <div>
                            <p>My time on Mars</p>
                            <img src="img/mars.jpg">
                            <video width="300" height="168" controls>
                                <source src= "your_movie.mp4" type="video/mp4">
                            </video>
                            <p>
                            Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.
                            </p>
                            <p>
                            In English, Mars carries the name of the Roman god of war and is often called the "Red Planet".
                            The latter refers to the effect of the iron oxide prevalent on Mars's surface, which gives it a striking reddish appearance in the sky.
                            Mars is a terrestrial planet with a thin atmosphere, with surface features such as impact craters, valleys, dunes, and polar ice caps.
                            </p>
                        </div>
                        <div>
                            <p>My time on the Moon</p>
                            <img src="img/moon.jpg">
                            <video width="300" height="168" controls>
                                <source src= "your_movie.mp4" type="video/mp4">
                            </video>
                            <p>
                            The Moon is Earth's only natural satellite. 
                            </p>
                            <p>
                            At about one-quarter the diameter of Earth (comparable to the width of Australia),[16] it is the fifth largest satellite in the Solar System, the largest satellite in the Solar System relative to its major planet,[f] and larger than any known dwarf planet. 
                            The Moon is a planetary-mass object that formed a differentiated rocky body, making it a satellite planet under the geophysical definitions of the term.
                            It lacks any significant atmosphere, hydrosphere, or magnetic field. 
                            Its surface gravity is about one-sixth of Earth's (0.1654 g). 
                            Jupiter's moon Io is the only satellite in the Solar System known to have a higher surface gravity and density.
                            </p>
                        </div>    
                    </div>
                </section>   
                
                
<?php 
  include_once 'footer.php';
?>