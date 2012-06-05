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
						<p>Si vous voulez en savoir plus sur le parti pirate, et sur sa section Brabant wallon, nous vous invitons à nous 
						<a href="contact.php">contacter</a> pour discuter ensemble. Vous êtes également bienvenus à nos 
						<a href="http://www.pirateparty.be/wiki/index.php/Crew_BW#Prochain_rendez-vous"> prochaines réunions</a>. Si vous préférez, nous vous offrons aussi des 
						<a href="faq.php">réponses aux questions les plus posées</a> et, ci-dessous, quelques liens externes qui nous semblent intéressants pour cerner les pirates.</p>
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
