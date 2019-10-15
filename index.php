<!DOCTYPE html>
<!--Yury Kanygin portfolio web site -->
<!--Web developer Galina Davies, 26.07.2019-->   
<html>
    <head>
    <?php include 'head.php';?>    
   </head>
    <body>
        <div class="grid-container">
        
            <header id="mainheader">
                <img src="https://www.icce.uk/pics/eonround.jpg" class="round">   
                <h3 style="color:#403f3f;">Yury Kanygin - heating, ventilation and air conditioning engineer</h3>
            </header>
                
            <nav>                            
                <a href="https://www.icce.uk/rusindex.php" target="blank">Русская версия</a>
                <a href="https://vk.com/kuznets60" target="blank"><img src="https://icce.uk/ikons/vk.png" alt="VKontakt" class="png"></a>
               <a href="https://www.linkedin.com/in/yury-kanygin" target="blank"><img src="https://icce.uk/ikons/linkedin.png" alt="LinkedIn" class="png"></a>
                <a href="https://www.facebook.com/kanygin" target="blank"><img src="https://icce.uk/ikons/fb.png" alt="Facebook" class="png"></a>              
            </nav>
            
            <nav id="sidenav">
            <?php include 'sidenaveng.php';?>    
            </nav>
        
            <article id="main">
                <?php include 'maineng.php';?>
            </article>
        
            <article id="skills">
                <?php include 'skillseng.php';?>
            </article> 
            
            <article id="article8"><h3>Experience</h3>
            <p>Present <br><span class="title"> HVAC Engineer</span></p>    
            </article>
            
            <figure id="figure8">
                <?php include 'figure8.php';?>
            </figure>
                
            <article id="article7">
                <?php include 'article7eng.php';?>
            </article>
        
            <figure id="figure7">"Scarlet Sails"
            <?php include 'figure7.php';?>
            </figure>
            
            <figure id="figure6">
                <?php include 'figure6.php';?>
            </figure>
            
            <article id="article6">
                <?php include 'article6eng.php';?> 
            </article>
        
            <figure id="figure5">
                <?php include 'figure5.php';?>
            </figure>   
            
            <article id="article5">
                <?php include 'article5eng.php';?>
                    
            </article>
            
            <figure id="figure4">
                <?php include 'figure4.php';?>
            </figure>
            
            <article id="article4"> 
                <?php include 'article4eng.php';?>
            </article>
            
            <figure id="figure3">
                <?php include 'figure3.php';?>
            </figure>            
            
            <article id="article3">
                <?php include 'article3eng.php';?> 
            </article>
            
            <figure id="figure2">
                <?php include 'figure2.php';?>
            </figure> 
            
            <article id="article2">
                <?php include 'article2eng.php';?>
            </article>

            <article id="article1">
                <?php include 'article1eng.php';?>
            </article>
            
            <article id="article0">
                
                <h3>Hobbies</h3>

                <p>I'm passionate about green energy-saving technologies and photography.</p>
                
                <!--LiveInternet counter-->
                <div id="LiveInternet"><?php include 'liveinternet.php';?>
                
                </div>
                <!--/LiveInternet-->
                
                <!--Indicator to top of the website-->
                <p><?php include 'totop.php';?>
                    
                </p>
            </article>
            
            <footer><?php include 'footer.php';?>
            </footer>
        </div>
        
    </body>
</html>        