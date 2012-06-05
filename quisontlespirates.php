<?php include("htmlheader.php"); ?>
	<?php $filename = "quisontlespirates.php"; ?>
    
    <body>
    	
    	<section id="page"> <!-- Defining the #page section with the section tag -->
    
		<?php include("pageheader.php"); ?>
            
			<section id="articles"> <!-- A new section with the articles -->
                           		
				<!-- Article Qui Sont-ils start -->
                
                <article id="QuiSontLesPirates"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
                    <h2>Qui sont les pirates?</h2>
                    
                    <div class="line"></div>
                    
                    <div class="articleBody clear">
                    
                    	<figure> <!-- The figure tag marks data (usually an image) that is part of the article -->
	                    	<img src="img/QuiSontLesPirates.jpg" alt="Qui Sont les Pirates ?"/>
                        </figure>
                        
                        <p>Un pirate est un citoyen, de droite, de gauche ou d’ailleurs, qui se rend compte que le monde change drastiquement. Comme l’imprimerie a favorisé la renaissance au XVe siècle, Internet et la technologie changent profondément notre monde aujourd'hui. <b>Aujourd’hui, chacun a la possibilité de s’informer, de s’exprimer et de communiquer</b>. Les citoyens peuvent <b>construire ensemble</b>, sans barrières. Une idée peut être partagée, amendée et réalisée sans intermédiaire. Les outils sont disponibles. Les citoyens peuvent être actifs.</p>
                        
                        <p>Un pirate souhaite que le monde, et en particulier le monde politique, prenne ces changements en compte pour en faire un monde meilleur, où chacun se sent à sa place.</p>
						
						<p><b>Vous êtes un pirate. Nous sommes tous des pirates.</b></p>
						
						<p>Plus pratiquement, les Pirates belges sont aussi des équipes, à travers le pays, qui se rassemblent dans une autonomie certaine, de manière à promouvoir la réflexion, les échanges d'idées et les initiatives. En Brabant Wallon, le Crew (l'équipage pirate) est coordonnée par trois personnes mais beaucoup de pirates participent aux réunions mensuelles. Venez nous rencontrer pour discuter !</p>
                    </div>
                    
                    <a href="#" onclick="history.back();"><b>&laquo;-</b> Retour</a>
                </article>
                
				<!-- Article Qui Sont-ils end -->
			</section>
			<?php include("footer.php"); ?>
            
		</section> <!-- Closing the #page section -->
    </body>
</html>
