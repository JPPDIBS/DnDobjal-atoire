<meta charset="UTF-8">

<?php

$Adjectif = ["terrifiant", "sanglant", "Maudite", "Sacrée", "Magique", "Bénie", "Corrompue", "Divine", "Vénérable", "Surnaturelle", "Inébranlable", "Spectrale", "Destructrice", "Fantomatique", "Runique", "Abyssal", "Ténébreux", "Obscur", "Souterrain", "Sinueux", "Énigmatique", "Étouffant", "Rupestre", "Insidieux", "Fangeux", "Malfamé", "Lugubre", "Humide", "Glauque", "Hanté", "Claustrophobique", "Viscéral", "Sinistre", "inspirant","légendaire"];

$Objetdégats = ["épée courte la ", "marteau de guerre le ", "arc le ", "épée longue la ", "fléau le ", "Baton le ", "arbalète la ","lance la","rapière la","cimeterre le"];

$Objetdedéfense = [" armure loude la ", "+bonus dex armure intermédiaire (max CA 18) la ", "+bonus dex armure légère (max CA 15) la "];

$Objetannexe = ["anneau ", "colier ", "bracelet", "boucle d'oreille ", "broche ", "idole divine", "colier de dent", "bague", "bouclier +1 CA le ", "bouclier +1 CA le ", "bouclier +2 CA le ", "casque +1 CA le "];

$Dégats = ["2d4", "3d4", "4d4", "2d6", "3d6", "1d8", "2d8", "1d10", "2d10", "1d12","2d4", "3d4", "4d4", "2d6", "3d6", "1d8", "2d8", "1d10", "2d10", "1d12","2d4", "3d4", "4d4", "2d6", "3d6", "1d8", "2d8", "1d10", "2d10", "1d12","2d4", "3d4", "4d4", "2d6", "3d6", "1d8", "2d8", "1d10", "2d10", "1d12",


"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"3d4","4d4","2d6","2d8","1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"1d10", "2d10", "1d12",
"2d4+mcha","1d6+mcha", "2d6+mcha", "1d8+mcha", "2d8+mcha", "1d10+mcha", "1d12+mcha",
"2d4+mint","1d6+mint", "2d6+mint", "1d8+mint", "2d8+mint", "1d10+mint", "1d12+mint",
"2d4+msag","1d6+msag", "2d6+msag", "1d8+msag", "2d8+msag", "1d10+msag", "1d12+msag",



];

$CA = ["13", "13", "13", "13", "13", "14", "14", "14", "14", "14", "14", "14", "15", "15", "15", "15"];

$Bonus = ["", "", "", "", "", "","", "", "", "", "", "","", "", "", "", "", "","", "", "", "", "", "","", "", "", "", "", "","", "", "", "", "", "","", "", "", "", "", "","", "", "", "", "", "","", "", "", "", "", "","", "", "", "", "", "","", "", "", "", "", "","", "", "", "", "", "", "+1", "+1", "+1", "+1", "+2", "+2", "+3", "+4","+1", "+1", "+1", "+1","+1", "+1", "+1", "+1","+1", "+1", "+1", "+1",];




$Effetarme = [
    "vous perdez 2m de vitesse de deplacement mais toutes vos attaques au corp a corp infligent 3 degats de plus",
    "augmente de 2 dégats de feu vos attaques au corp a corp",
    "augmente de 2 dégats de glace vos attaques au corp a corp",
    "augmente de 2 dégats radiant vos attaques au corp a corp",
 "toutes vos attaques au corp a corp gagnent -5 pour toucher, mais toutes vos attaques avec des armes a distance infligent +7 degats perforant",
 "augmente de 1m ta vitesse de déplacement",
    "augmente de 1.5m ta vitesse de déplacement",
    "augmente de 2m ta vitesse de déplacement",
    "augmente de 2.5m ta vitesse de déplacement",
     "augmente de 1m ta vitesse de déplacement",
    "augmente de 1.5m ta vitesse de déplacement",
    "augmente de 2m ta vitesse de déplacement",
    "augmente de 2.5m ta vitesse de déplacement",
    "vous perdez 2m de vitesse de deplacement mais toutes vos attaques au corp a corp infligent 3 degats de plus",
    "au debut de chaque combat offre 3 points de vie temporaire",
     "au debut de chaque combat offre 3 points de vie temporaire a tout le groupe",
    "au debut de chaque combat offre 5 points de vie temporaire",
    "au debut de chaque combat offre 7 points de vie temporaire",
    "tous vos dégats sont augmentés de +4 mais vous perdez 25% de vos points de vie maximum arrondis au supérieur",

    "octroie vision dans le noir","octroie vision dans le noir",

"brille d'une lumière qui éclaire sur 6m",

"augmente votre CA de 1",
    "augmente votre CA de 1",
    "augmente votre CA de 1",
    "augmente votre CA de 1",
    "augmente votre CA de 2 (ne peut pas dépasser 23)",

    "offre 1 emplacement de sort de niveau 1 supplémentaire",
    "offre 1 emplacement de sort de niveau 1 supplémentaire",
    "offre 1 emplacement de sort de niveau 1 supplémentaire",
    "offre 2 emplacement de sort de niveau 1 supplémentaire",
    "offre 1 emplacement de sort de niveau 1 supplémentaire",
    "offre 2 emplacement de sort de niveau 1 supplémentaire",

    "augmente tout vos dégats au corp a corp de 1",
    "augmente tout vos dégats au corp a corp de 2",
    "augmente tout vos dégats au corp a corp de 3",

    "augmente tout vos dégats magiques de 1",
    "augmente tout vos dégats magiques de 2",
    "toutes vos attaques au corp a corp voient leurs dégats doublés. Par contre vous avez un désavantage sur tout vos jet d'attaques et -5 au jet",
    "après avoir effectué des dégats avec cette arme augmenter votre CA de 1",
    "après avoir effectué des dégats avec cette arme augmenter votre CA de 1",
    "après avoir effectué des dégats avec cette arme augmenter votre CA de 1",
    "après avoir effectué des dégats avec cette arme augmenter votre CA de 2",
];
$Effetarmure = [
    "augmente de 1m ta vitesse de déplacement",
    "augmente de 1.5m ta vitesse de déplacement",
    "augmente de 2m ta vitesse de déplacement",
    "augmente de 2.5m ta vitesse de déplacement",
     "augmente de 1m ta vitesse de déplacement",
    "augmente de 1.5m ta vitesse de déplacement",
    "augmente de 2m ta vitesse de déplacement",
    "augmente de 2.5m ta vitesse de déplacement",
    "quand les pv du porteur arrivent a 0, cet objet se detruit, le fais revenir a la vie a la moitié de ses PV. ",
    "vous gagnez un emplacement de sort de niveau 2 utilisable uniquement pour lancer un sort d'évocation",
    "vous gagnez un emplacement de sort de niveau 2 utilisable uniquement pour lancer un sort de necromantie",
    "vous gagnez un emplacement de sort de niveau 2 utilisable uniquement pour lancer un sort d'illusion",
    "vous gagnez un emplacement de sort de niveau 2 utilisable uniquement pour lancer un sort d'évocation",
    
    "au debut de chaque combat offre 3 points de vie temporaire",
     "au debut de chaque combat offre 3 points de vie temporaire a tout le groupe",
    "au debut de chaque combat offre 5 points de vie temporaire",
    "au debut de chaque combat offre 7 points de vie temporaire",
    "réduit de 1 les degats tranchant et contondant que vous vous prennez",
    "réduit de 2 les degats tranchant et contondant que vous vous prennez",
    "réduit de 1 les degats tranchant, perforant et contondant que vous vous prennez",
    "réduit de 1 les degats tranchant  que vous vous prennez",
    "réduit de 2 les degats tranchant  que vous vous prennez",
    "réduit de 3 les degats tranchant  que vous vous prennez",
    "réduit de 2 les degats tranchant  que vous vous prennez",
    "réduit de 3 les degats tranchant  que vous vous prennez",
    "réduit de 1 les degats Contondant  que vous vous prennez",
    "réduit de 2 les degats Contondant  que vous vous prennez",
    "réduit de 3 les degats Contondant  que vous vous prennez",
    "réduit de 2 les degats Contondant  que vous vous prennez",
    "réduit de 3 les degats Contondant  que vous vous prennez",
    "réduit de 1 les degats Perforant  que vous vous prennez",
    "réduit de 2 les degats Perforant  que vous vous prennez",
    "réduit de 3 les degats Perforant  que vous vous prennez",
    "réduit de 2 les degats Perforant  que vous vous prennez",
    "réduit de 3 les degats Perforant  que vous vous prennez",
    
    "tous vos soins sont augmentés de +1",
    "tous vos soins sont augmentés de +1",
    "tous vos soins sont augmentés de +2",

    "vous obtenez une résistance aux dégats radiants",
    "vous obtenez une résistance aux dégats de feu",

    "réduit de 1 tout types de dégts que vous vous prenez",
    "réduit de 2 les degats élementaires  que vous vous prennez",
    "réduit de 2 les degats magique  que vous vous prennez",
    "réduit de 1 les degats magiques  que vous vous prennez",
    "réduit de 1 tout types de dégts que vous vous prenez",
    "réduit de 2 les degats élementaires  que vous vous prennez",
    "réduit de 2 les degats magique  que vous vous prennez",
    "réduit de 1 les degats magiques  que vous vous prennez",

    
    
    "brille d'une lumière qui éclaire sur 6m",

    "augmente votre force de +1 (ne peut pas dépasser 25)",
    "augmente votre force de +2 (ne peut pas dépasser 25)",
    "augmente votre déxtérité  de +1 (ne peut pas dépasser 25)",
    "augmente votre déxtérité de +2 (ne peut pas dépasser 25)",

    "augmente votre Constitution de +1 (ne peut pas dépasser 25)",
    "augmente votre Constitution de +2 (ne peut pas dépasser 25)",
    "augmente votre Constitution de +1 (ne peut pas dépasser 25)",
    "augmente votre Constitution de +2 (ne peut pas dépasser 25)",
    "augmente votre Charisme de +1 (ne peut pas dépasser 25)",
    "augmente votre Charisme  de +2 (ne peut pas dépasser 25)",
    "offre 1 emplkacement de sort de niveau 1 supplémentaire",
    "offre 2 emplkacement de sort de niveau 1 supplémentaire",

    "porter cet objet vous fais maitriser un sort de niveau 0 de magicien",

     
];
$Effetannexe = [
    "une fois entre 2 long repos vous pouvez relancer un jet de sauvegarde raté",  
    "tant que vous portez cet objet votre CA est de 15 elle ne peut pas depasser 15 ou etre en dessous de 15",
    "augmente de 1m ta vitesse de déplacement",
    "augmente de 1.5m ta vitesse de déplacement",
    "augmente de 2m ta vitesse de déplacement",
    "augmente de 2.5m ta vitesse de déplacement",
     "augmente de 1m ta vitesse de déplacement",
    "augmente de 1.5m ta vitesse de déplacement",
    "augmente de 2m ta vitesse de déplacement",
    "augmente de 2.5m ta vitesse de déplacement",
    "quand les pv du porteur arrivent a 0, cet objet se detruit, le fais revenir a la vie a la moitié de ses PV. ",
    "cet objet permet de changer l'apparance de votre personnage, attention ce changement d'apparence ne permet pas de changer de race, de taille, de poids ou de sexe. Juste quelques trait du visage. en revanche n'importe quel magicien pourra detecter ce changement d'apparence",

    "votre apparance devient effrayante vous avez un avantage sur tout vos jets d'intimidation et de persuasion",

    "vous gagnez un emplacement de sort de niveau 2 utilisable uniquement pour lancer un sort d'évocation",
     "vous gagnez un emplacement de sort de niveau 2 utilisable uniquement pour lancer un sort de necromantie",
     "vous gagnez un emplacement de sort de niveau 2 utilisable uniquement pour lancer un sort d'illusion",
     "vous gagnez un emplacement de sort de niveau 2 utilisable uniquement pour lancer un sort d'évocation",
    "vous pouvez briser cet objet par une action bonus pour gagner une action en plus durant ce tour",
  

    "réduit de 1 les degats tranchant et contondant que vous vous prennez",
    "réduit de 2 les degats tranchant et contondant que vous vous prennez",
    "réduit de 1 les degats tranchant, perforant et contondant que vous vous prennez",
    "réduit de 1 les degats tranchant  que vous vous prennez",
    "réduit de 1 les degats tranchant  que vous vous prennez",
    "réduit de 2 les degats tranchant  que vous vous prennez",

    "réduit de 1 les degats Contondant  que vous vous prennez",
    "réduit de 1 les degats Contondant  que vous vous prennez",
    "réduit de 2 les degats Contondant  que vous vous prennez",

    "réduit de 1 les degats Perforant  que vous vous prennez",
    "réduit de 1 les degats Perforant  que vous vous prennez",
    "réduit de 2 les degats Perforant  que vous vous prennez",




    "tous vos soins sont augmentés de +1",
    "tous vos soins sont augmentés de +1",
    "tous vos soins sont augmentés de +1",
    "tous vos soins sont augmentés de +2",
    "tous vos soins sont augmentés de +3",
    "une fois entre 2 court repos votre prochain sort de soin soigne du montant maximum",


    "une fois entre 2 repos long vous pouvez lancer boule de feu gratuitement",
    "une fois entre 2 repos long vous pouvez lancer Soins des blessures gratuitement",
    "une fois entre 2 repos long vous pouvez lancer mot de guérison de groupe gratuitement",
    "une fois entre 2 repos long vous pouvez lancer Retour a la vie gratuitement",

    "octroie vision dans le noir",
    "octroie vision dans le noir",
    "octroie vision dans le noir",
    "octroie vision dans le noir",
    "octroie vision dans le noir",

    "brille d'une lumière qui éclaire sur 6m",
    "brille d'une lumière qui éclaire sur 6m",
    "brille d'une lumière qui éclaire sur 6m",
    "brille d'une lumière qui éclaire sur 6m",
    "brille d'une lumière qui éclaire sur 6m",

    "augmente votre force de +1 (ne peut pas dépasser 20)",
    "augmente votre force de +2 (ne peut pas dépasser 20)",
    "augmente votre déxtérité  de +1 (ne peut pas dépasser 20)",
    "augmente votre déxtérité de +2 (ne peut pas dépasser 20)",
    "augmente votre Constitution de +1 (ne peut pas dépasser 20)",
    "augmente votre Constitution de +2 (ne peut pas dépasser 20)",
    "augmente votre Inteligence de +1 (ne peut pas dépasser 20)",
    "augmente votre Inteligence  de +2 (ne peut pas dépasser 20)",
    "augmente votre Sagesse de +1 (ne peut pas dépasser 20)",
    "augmente votre Sagesse de +2 (ne peut pas dépasser 20)",
    "augmente votre Charisme de +1 (ne peut pas dépasser 20)",
    "augmente votre Charisme  de +2 (ne peut pas dépasser 20)",
    "augmente votre force de +1 (ne peut pas dépasser 20)",
    "augmente votre force de +2 (ne peut pas dépasser 20)",
    "augmente votre déxtérité  de +1 (ne peut pas dépasser 20)",
    "augmente votre déxtérité de +2 (ne peut pas dépasser 20)",
    "augmente votre Constitution de +1 (ne peut pas dépasser 20)",
    "augmente votre Constitution de +2 (ne peut pas dépasser 20)",
    "augmente votre Inteligence de +1 (ne peut pas dépasser 20)",
    "augmente votre Inteligence  de +2 (ne peut pas dépasser 20)",
    "augmente votre Sagesse de +1 (ne peut pas dépasser 20)",
    "augmente votre Sagesse de +2 (ne peut pas dépasser 20)",
    "augmente votre Charisme de +1 (ne peut pas dépasser 20)",
    "augmente votre Charisme  de +2 (ne peut pas dépasser 20)",
    "augmente votre force de +1 (ne peut pas dépasser 20)",
    "augmente votre force de +2 (ne peut pas dépasser 20)",
    "augmente votre déxtérité  de +1 (ne peut pas dépasser 20)",
    "augmente votre déxtérité de +2 (ne peut pas dépasser 20)",
    "augmente votre Constitution de +1 (ne peut pas dépasser 20)",
    "augmente votre Constitution de +2 (ne peut pas dépasser 20)",
    "augmente votre Inteligence de +1 (ne peut pas dépasser 20)",
    "augmente votre Inteligence  de +2 (ne peut pas dépasser 20)",
    "augmente votre Sagesse de +1 (ne peut pas dépasser 20)",
    "augmente votre Sagesse de +2 (ne peut pas dépasser 20)",
    "augmente votre Charisme de +1 (ne peut pas dépasser 20)",
    "augmente votre Charisme  de +2 (ne peut pas dépasser 20)",

    "augmente votre CA de 1",
    "augmente votre CA de 1",
    "augmente votre CA de 1",
    "augmente votre CA de 1",
    "augmente votre CA de 2 (ne peut pas dépasser 20)",
    "augmente votre CA de 3 (ne peut pas dépasser 18)",

    "offre 1 emplacement de sort de niveau 1 supplémentaire",
    "offre 2 emplacement de sort de niveau 1 supplémentaire",
    "offre 3 emplacement de sort de niveau 1 supplémentaire",
    "offre 1 emplacement de sort de niveau 2 supplémentaire",
    "offre 2 emplacement de sort de niveau 2 supplémentaire",
    "offre 1 emplacement de sort de niveau 3 supplémentaire",
    "offre 1 emplacement de sort de niveau 4 supplémentaire",


    "porter cet objet vous fais maitriser un sort de niveau 0 de magicien",
    "porter cet objet vous fais maitriser un sort de niveau 0 de magicien",
    "porter cet objet vous fais maitriser un sort de niveau 0 de magicien",
    "porter cet objet vous fais maitriser un sort de niveau 0 de magicien",
    "porter cet objet vous fais maitriser un sort de niveau 0 de magicien",

    "augmente une statistique de votre choix de 1",

    "le porteur de cet objet ne ressent pas les effets de la fatigue ou de la faim",
 
    "maitrise Acrobaties",
    "maitrise Arcanes",
    "maitrise Athlétisme",
    "maitrise Discrétion",
    "maitrise Dressage",
    "maitrise Escamotage",
    "maitrise Histoire",
    "maitrise Intimidation",
    "maitrise Médecine",
    "maitrise Nature",
    "maitrise Perception",
    "maitrise Perspicacité",
    "maitrise Représentation",
    "maitrise Religion",
    "maitrise Survie",

    "maitrise Acrobaties",
    "maitrise Arcanes",
    "maitrise Athlétisme",
    "maitrise Discrétion",
    "maitrise Dressage",
    "maitrise Escamotage",
    "maitrise Histoire",
    "maitrise Intimidation",
    "maitrise Médecine",
    "maitrise Nature",
    "maitrise Perception",
    "maitrise Perspicacité",
    "maitrise Représentation",
    "maitrise Religion",
    "maitrise Survie",

    "maitrise Acrobaties",
    "maitrise Arcanes",
    "maitrise Athlétisme",
    "maitrise Discrétion",
    "maitrise Dressage",
    "maitrise Escamotage",
    "maitrise Histoire",
    "maitrise Intimidation",
    "maitrise Médecine",
    "maitrise Nature",
    "maitrise Perception",
    "maitrise Perspicacité",
    "maitrise Représentation",
    "maitrise Religion",
    "maitrise Survie",

    "fait maitriser Acrobaties à tous le groupe",
    "fait maitriser Arcanes à tous le groupe",
    "fait maitriser Athlétisme à tous le groupe",
    "fait maitriser Discrétion à tous le groupe",
    "fait maitriser Dressage à tous le groupe",
    "fait maitriser Escamotage à tous le groupe",
    "fait maitriser Histoire à tous le groupe",
    "fait maitriser Intimidation à tous le groupe",
    "fait maitriser Médecine à tous le groupe",
    "fait maitriser Nature à tous le groupe",
    "fait maitriser Perception à tous le groupe",
    "fait maitriser Perspicacité à tous le groupe",
    "fait maitriser Représentation à tous le groupe",
    "fait maitriser Religion à tous le groupe",
    "fait maitriser Survie à tous le groupe",
    
    ]
?>
