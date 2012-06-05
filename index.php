<?php include("htmlheader.php"); ?>
    
    <body>
    	
    	<section id="page"> <!-- Defining the #page section with the section tag -->
    
		<?php include("pageheader.php"); ?>
                          
				<!-- 3 Boxes -->

				<div id="container">
					
					
						<figure class="figurebox"  id="box1">
							<a href="quisontlespirates.php"><img class="boximage" src="img/QuiSontLesPirates.jpg" alt="Qui sont les pirates?"/></a>
							<figcaption id="box1text" class="boxtext"><a href="quisontlespirates.php">Qui Sont Les Pirates ?</a></figcaption>
						</figure>
					
					
						<figure class="figurebox" id="box2">
							<a href="philosophiepirate.php"><img class="boximage" src="img/Philosophie.jpg" alt="Philosophie Pirate"/></a>
							<figcaption id="box2text" class="boxtext"><a href="philosophiepirate.php">C'est quoi la philosophie Pirate ?</a></figcaption>
						</figure>
					
					
						<figure class="figurebox" id="box3">
							<a href="propositionspirates.php"><img class="boximage" src="img/Proposition.jpg" alt="Propositions pour les élections 2012"/></a>
							<figcaption id="box3text" class="boxtext"><a href="propositionspirates.php">Et nos propositions pour les élections 2012 ?</a></figcaption>
						</figure>
					 

				</div>
				<!-- 3 Boxes END-->

			
			<!-- Article Outils start -->
			
			<article id="Outils">
			
				<div class="clear">
					
					<p>Vous gènez pas, jettez un oeuil au <a href="http://www.pirateparty.be/wiki/index.php/Crew_BW">Wiki</a> ou <a href="http://forum.pirateparty.be/forumdisplay.php?fid=22" class="external text" rel="nofollow">sur le forum</a>.</p>
					<div class="twitter"><a href="https://twitter.com/twitter" class="twitter-follow-button" data-show-count="false" data-lang="fr" data-size="small">Suivre @pp_bw</a></div>
				</div>
				<?php dernierTweet(); ?> <!-- Derniers Tweet de @pp_bw -->
			</article>
			
			<!-- Article Outils end -->	

			<?php include("footer.php"); ?>
            
		</section> <!-- Closing the #page section -->
    </body>
</html>
