<?php

spl_autoload_register(function($class_name){
    require $class_name . ".php";
});

$realisateur1 = new Realisateur("Tim","Burton","Homme","1958-08-25");

$realisateur2 = new Realisateur("schumacher","Joel","Homme","1939-08-29");

$realisateur3 = new Realisateur("Spielberg","Steven","Homme","1946-12-18");

$_genre1 = new Genre("action");
$_genre2 = new Genre("aventure");

$film1 = new Film("Batman",1989,126,$realisateur1,$_genre1,"Le célèbre et impitoyable justicier, Batman, est de retour. Plus beau, plus fort et plus dépoussiéré que jamais, il s'apprête à nettoyer Gotham City et à affronter le terrible Joker...");

$film2 = new Film("Batman : le defi",1991,128,$realisateur1,$_genre1,"Non seulement Batman doit affronter le Pingouin, monstre génétique doté d'une intelligence à toute épreuve, qui sème la terreur mais, plus difficile encore, il doit faire face à la séduction de deux super-femmes, la douce Selina Kyle et la féline Catwoman qui va lui donner bien du fil a retordre. Si Bruce Wayne apprécie Selina, Batman n'est pas insensible au charme de Catwoman.");

$film3 = new Film("Baman forever",1995,122,$realisateur2,$_genre1,"Nul ne sait que Bruce Wayne, le patron d'un vaste et puissant consortium, l'homme le plus riche des Etats-Unis, revêt chaque nuit la combinaison et le masque de cuir de Batman pour voler au secours de ses concitoyens injustement opprimés. Personne, hormis son fidèle maître d'hôtel Alfred et son vieil ami, le commissaire Gordon."
);

$film4 = new Film("Batman et Robin",1997,125,$realisateur2,$_genre1,"Dans cette nouvelle aventure, Batman aura bien besoin de son audacieux partenaire Robin, juché sur sa fringante moto turbo. En effet, le glacial M. Freeze fait régner une vague de froid polaire sur Gotham City avec la complicité de la belle et vénéneuse Poison Ivy, au baiser mortel et aux formes sinueuses, qui rêve de soumettre le monde au pouvoir des femmes-fleurs.");

$film5 = new Film("Les aventuriers de l'arche perdue",1981,115,$realisateur3,$_genre2,"1936. Parti à la recherche d'une idole sacrée en pleine jungle péruvienne, l'aventurier Indiana Jones échappe de justesse à une embuscade tendue par son plus coriace adversaire : le Français René Belloq.
Revenu à la vie civile à son poste de professeur universitaire d'archéologie, il est mandaté par les services secrets et par son ami Marcus Brody, conservateur du National Museum de Washington, pour mettre la main sur le Médaillon de Râ, en possession de son ancienne amante Marion Ravenwood, désormais tenancière d'un bar au Tibet.
Cet artefact égyptien serait en effet un premier pas sur le chemin de l'Arche d'Alliance, celle-là même où Moïse conserva les Dix Commandements. Une pièce historique aux pouvoirs inimaginables dont Hitler cherche à s'emparer...");

$film6 = new Film("Indiana Jones et le temple maudit",1984,118,$realisateur3,$_genre2,"L'archéologue aventurier Indiana Jones est de retour. Il poursuit une terrible secte qui a dérobé un joyau sacré doté de pouvoirs fabuleux. Une chanteuse de cabaret et un époustouflant gamin l'aideront a affronter les dangers les plus insensés.");

$film7 = new Film("Indiana Jones et la derniere croisade",1989,127,$realisateur3,$_genre2,"L'archéologue aventurier Indiana Jones se retrouve aux prises avec un maléfique milliardaire. Aux côtés de la cupide Elsa et de son père, il part à la recherche du Graal.");

$film8 = new Film("Indiana Jones et le crane dee cristal",2008,123,$realisateur3,$_genre2,"La nouvelle aventure d'Indiana Jones débute dans un désert du sud-ouest des Etats-Unis. Nous sommes en 1957, en pleine Guerre Froide. Indy et son copain Mac viennent tout juste d'échapper à une bande d'agents soviétiques à la recherche d'une mystérieuse relique surgie du fond des temps. De retour au Marshall College, le Professeur Jones apprend une très mauvaise nouvelle : ses récentes activités l'ont rendu suspect aux yeux du gouvernement américain. Le doyen Stanforth, qui est aussi un proche ami, se voit contraint de le licencier. A la sortie de la ville, Indiana fait la connaissance d'un jeune motard rebelle, Mutt, qui lui fait une proposition inattendue. En échange de son aide, il le mettra sur la piste du Crâne de Cristal d'Akator, relique mystérieuse qui suscite depuis des siècles autant de fascination que de craintes. Ce serait à coup sûr la plus belle trouvaille de l'histoire de l'archéologie. Indy et Mutt font route vers le Pérou, terre de mystères et de superstitions, où tant d'explorateurs ont trouvé la mort ou sombré dans la folie, à la recherche d'hypothétiques et insaisissables trésors. Mais ils réalisent très vite qu'ils ne sont pas seuls dans leur quête : les agents soviétiques sont eux aussi à la recherche du Crâne de Cristal, car il est dit que celui qui possède le Crâne et en déchiffre les énigmes s'assure du même coup le contrôle absolu de l'univers. Le chef de cette bande est la cruelle et somptueuse Irina Spalko. Indy n'aura jamais d'ennemie plus implacable... Indy et Mutt réuissiront-ils à semer leurs poursuivants, à déjouer les pièges de leurs faux amis et surtout à éviter que le Crâne de Cristal ne tombe entre les mains avides d'Irina et ses sinistres sbires ?");



$acteur1 = new Acteur("Keaton","Micheal","Homme",1951-9-05,"Batman");
$acteur2 = new Acteur("Kilmer","Val","Homme",1959-12-31,"Batman");
$acteur3 = new Acteur("Ford","Harrison","Homme",1942-07-13,"IndianaJones");

echo $realisateur1->afficherFilmographie();
echo $_genre1->afficherFilmGenre();