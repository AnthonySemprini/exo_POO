<h1>exo cinema POO</h1>

<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.
Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes)
ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film
(synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre
cinématographique (science-fiction, aventure, action, ...).
Votre application devra recenser également les acteurs de chacun des films. On désire connaître le
nom, le prénom, le sexe et la date de naissance de l'acteur ainsi que le rôle (nom du personnage)
joué par l'acteur dans le(s) film(s) concerné(s).
Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre
en place correctement !
Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure
où ce rôle a été incarné par plusieurs acteurs.)
On doit pouvoir :
Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de
Batman : Michael Keaton, Val Kilmer, George Clooney, …)
Lister le casting d'un film (dans le film Star Wars Episode IV, Han Solo a été incarné par
Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)
Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade
Runner, ...)
Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)
Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</p>

<h2>Resultat</h2>




<?php

spl_autoload_register(function($class_name){    //lie les pages ensemble dans le bonne oredre
    require $class_name . ".php";
});
        //Realisteur

$realisateur1 = new Realisateur("Tim","Burton","Homme","1958-08-25");
$realisateur2 = new Realisateur("schumacher","Joel","Homme","1939-08-29");
$realisateur3 = new Realisateur("Spielberg","Steven","Homme","1946-12-18");
$realisateur4 = new Realisateur("Lucas","George","Homme","1944-05-14");

        //Genre

$_genre1 = new Genre("action");
$_genre2 = new Genre("aventure");
$_genre3 = new Genre("Science-fiction");

        //Film

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

$film9 = new Film ("Star Wars, episode 6 : Le retour du jedi",1983,134,$realisateur4,$_genre3,"L'Empire galactique est plus puissant que jamais : la construction de la nouvelle arme, l'Etoile de la Mort, menace l'univers tout entier... Arrêté après la trahison de Lando Calrissian, Han Solo est remis à l'ignoble contrebandier Jabba Le Hutt par le chasseur de primes Boba Fett. Après l'échec d'une première tentative d'évasion menée par la princesse Leia, également arrêtée par Jabba, Luke Skywalker et Lando parviennent à libérer leurs amis.
Han, Leia, Chewbacca, C-3PO et Luke, devenu un Jedi, s'envolent dès lors pour une mission d'extrême importance sur la lune forestière d'Endor, afin de détruire le générateur du bouclier de l'Etoile de la Mort et permettre une attaque des pilotes de l'Alliance rebelle. Conscient d'être un danger pour ses compagnons, Luke préfère se rendre aux mains de Dark Vador, son père et ancien Jedi passé du côté obscur de la Force.
REGARDER CE FILM");

        //Acteur

$acteur1 = new Acteur("Keaton","Micheal","Homme","1951-09-05");
$acteur2 = new Acteur("Kilmer","Val","Homme","1959-12-31");
$acteur3 = new Acteur("Ford","Harrison","Homme","1942-07-13");
$acteur4 = new Acteur("Connery","Sean","Homme","1930-08-25");
$acteur5 = new Acteur("Quan","Ke Huy","Homme","1972-04-30");
$acteur6 = new Acteur("Devito","Danny","Homme","1940-11-17");
$acteur7 = new Acteur("Michelle","Pfeiffer","Femme","1958-04-29");

        //Role

$role1 = new Role("Batman");
$role2 = new Role("Indiana Jones");
$role3 = new Role("Pére de Indiana");
$role4 = new Role("demi lune");
$role5 = new Role("Ostwald cobblepot alias pingoin");
$role6 = new Role("Catwoman");
$role7 =new Role("Han Solo");

        //Casting
        
$casting1 = new Casting($film1,$acteur1,$role1);
$casting2 = new Casting($film2,$acteur1,$role1);
$casting3 = new Casting($film2,$acteur6,$role5);
$casting4 = new Casting($film2,$acteur7,$role6);
$casting5 = new Casting($film3,$acteur2,$role1);
$casting6 = new Casting($film4,$acteur2,$role1);
$casting7 = new Casting($film5,$acteur4,$role3);
$casting8 = new Casting($film6,$acteur4,$role3);
$casting9 = new Casting($film6,$acteur5,$role4);
$casting10 = new Casting($film7,$acteur4,$role3);
$casting11 = new Casting($film8,$acteur3,$role2);
$casting12 = new Casting($film9,$acteur3,$role7);



echo $realisateur1->afficherFilmographie();
echo $_genre1->afficherFilmGenre();

echo $film8->afficherCasting();
echo $role1->afficherCasting();
echo $acteur3->afficherCasting();
echo $film2->afficherCasting();
