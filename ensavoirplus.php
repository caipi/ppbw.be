<?php include("htmlheader.php"); ?>
    
    <body>
    	
    	<section id="page"> <!-- Defining the #page section with the section tag -->
    
		<?php include("pageheader.php"); ?>
            
			<section id="articles"> <!-- A new section with the articles -->
                           		
				<!-- Article SavoirPlus start -->
    
                <article id="SavoirPlus"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
                    <h2>En savoir plus</h2>
                    
                    <div class="line"></div>
                    
                    <div class="articleBody clear">
                    
                    	<figure class="carre"> <!-- The figure tag marks data (usually an image) that is part of the article -->
	                    	<img src="img/SavoirPlus.jpg" alt="En Savoir Plus..."/>
                        </figure>

						<p>Wikipedia :
						<ul><li><a href="http://fr.wikipedia.org/wiki/Parti_pirate_international">Parti Pirate International</a></li>
						<li><a href="http://fr.wikipedia.org/wiki/Parti_pirate_%28France%29">Parti pirate (France)</a></li>
						<li><a href="http://fr.wikipedia.org/wiki/Parti_pirate">partis pirate en Europe</a></li>
						</ul></p>
						<p>Le site du Parti Pirate Belge : <a href="http://pirateparty.be/?lang=fr">www.pirateparty.be</a>.</p>
						<p><a href="https://www.google.com/search?q=parti+pirate+belge&tbm=nws">Suivez également l'actualité</a> sur Google.</p>
						<p>Le <a href="http://www.pirateparty.be/wiki/index.php/F****_%28suggested%29_manual_FR">F*** Manual</a> proposé par le Parti Pirat belge.</p>
						<p>Bien d'autres choses viendront sur ce site alors patience... :)</p>

                    </div>
                    
                    <a href="#" onclick="history.back();"><b>&laquo;-</b> Retour</a>
                </article>
                
				<!-- Article SavoirPlus end -->
			</section>
			<?php include("footer.php"); ?>
            
		</section> <!-- Closing the #page section -->
    </body>
</html>
