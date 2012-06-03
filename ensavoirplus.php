<!DOCTYPE html> <!-- The new doctype -->
<html>
	
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
                    
                    	<figure> <!-- The figure tag marks data (usually an image) that is part of the article -->
	                    	<img src="img/SavoirPlus.jpg" width="620" height="340" alt="En Savoir Plus..."/>
                        </figure>

						<p>Commençons simplement par la page Wikipedia sur <a href="http://fr.wikipedia.org/wiki/Parti_pirate_international">le Parti Pirate International</a>.</p>
						<p>Ou bien celle du <a href="http://fr.wikipedia.org/wiki/Parti_pirate_%28France%29">Parti pirate (France)</a>.</p>
						<p>Ou le site du Parti Pirate Belge : <a href="http://pirateparty.be/?lang=fr">www.pirateparty.be</a>.</p>
						<p>Et un coup d'oeuil sur la situation des <a href="http://fr.wikipedia.org/wiki/Parti_pirate">partis pirate en Europe</a> sur Wikipedia également.</p>
						<p><a href="https://www.google.com/search?q=parti+pirate+belgei&ie=utf-8&oe=utf-8&client=ubuntu&channel=fs#q=parti+pirate+belge&hl=fr&client=ubuntu&hs=L9t&channel=fs&prmd=imvns&source=lnms&tbm=nws&ei=Mu3HT_vyIu6U0QXsw8mPDw&sa=X&oi=mode_link&ct=mode&cd=5&ved=0CEMQ_AUoBA&fp=1&biw=1631&bih=931&bav=on.2,or.r_gc.r_pw.r_cp.r_qf.,cf.osb&cad=b">Suivez également l'actualité</a> sur Google.</p>
						<p>Mais tout "bon" pirate devrait lire <a href="http://www.pirateparty.be/wiki/index.php/F****_%28suggested%29_manual_FR">le F*** Manual</a></p>
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
