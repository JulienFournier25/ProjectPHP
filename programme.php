<?php require_once 'includes/header.php' ?>

<img src="assets/img/photo-produit-vin-vigne-0880.png" class="w-100 image-body" alt="...">

<div class="container activityContainer d-grid gap-md-4 gap-3">
    <div class="row text-center">
        <h1 class="text-white">Programme</h1>
    </div>
    <div class="row gap-3 justify-content-center">
        <a class="col-lg-4 col-md-8 activity" data-bs-toggle="modal" data-bs-target="#wineTasting">
            <img src="assets/img/degustation.jpg" class="activityImg" alt="degustation">
            <div class="activityContent text-center h-100 align-items-center d-grid">
                <h2 class="text-dark">Comment déguster un vin ?</h2>
            </div>
        </a>
        <a class="col-lg-4 col-md-8 activity" data-bs-toggle="modal" data-bs-target="#wineCombination">
            <img src="assets/img/accords_mets_et_vin.jpg" class="activityImg" alt="wineCombination">
            <div class="activityContent text-center h-100 align-items-center d-grid">
                <h2 class="text-dark">Accord mets et vins</h2>
            </div>
        </a>
    </div>
    <div class="row gap-3 justify-content-center">
        <a class="col-lg-4 col-md-8 activity" data-bs-toggle="modal" data-bs-target="#winePreservation">
            <img src="assets/img/vin-conservation.jpg" class="activityImg" alt="winePreservation">
            <div class="activityContent text-center h-100 align-items-center d-grid">
                <h2 class="text-dark">Comment conserver son vin après ouverture ?</h2>
            </div>
        </a>
        <a class="col-lg-4 col-md-8 activity" data-bs-toggle="modal" data-bs-target="#wineColor">
            <img src="assets/img/winecolor.jpg" class="activityImg" alt="wineColor">
            <div class="activityContent text-center h-100 align-items-center d-grid">
                <h2 class="text-dark">Comprendre les bases du vin</h2>
            </div>
        </a>
    </div>
</div>
<!-- Modal 1-->
<div class="modal fade " id="wineTasting" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="wineTastingLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content bg-danger bg-gradient">
            <div class="modal-header">
                <h1 class="modal-title" id="wineTastingLabel">Comment déguster un vin ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                Déguster un vin, ça s’apprend et c’est même un métier ! Les œnologues ont mis au point différents gestes et critères qui permettent d’évaluer la qualité d’un vin. Voici quelques conseils pour apprendre à déguster un vin correctement mais soyez avertis : il faudra aiguiser vos sens pour pouvoir apprécier toute la saveur de votre vin !
                <br>
                <h2>Déguster un vin : choisir son verre</h2>
                <br>
                Le choix du verre est primordial ! Vous pourrez conserver tous les arômes et toute la délicatesse de votre vin en utilisant un verre adapté. Oubliez les verres à eau qui sont trop évasés et laissent s’échapper les arômes trop rapidement. Le vin doit être servi dans un verre à pied dont la forme doit s’adapter au vin dégusté.
                Par exemple, les verres à Bourgogne ventrus avec le col resserré sont parfaits pour les vins rouges et blancs.
                Ne tenez jamais le verre par le calice au risque de réchauffer le vin. A la place, tenez-le toujours par le pied ou par la jambe.
                <br>
                <h2>Déguster un vin : la vue</h2>
                <br>
                En observant le vin dans son verre, vous allez pouvoir analyser sa couleur ou sa robe. Placez votre verre à hauteur d’yeux et inclinez-le légèrement vers l’avant d’un angle de 45 degrés. Si vous le pouvez, faites votre observation sur un blanc ou neutre pour pouvoir voir toutes les nuances de couleur de votre vin.
                Effectuez un léger mouvement de rotation afin d’observer les gouttes de vin sur les parois du verre. Cette méthode permet de déterminer la viscosité de votre vin et ainsi d’estimer le niveau d’alcool présent à l’intérieur. Plus il y aura de “larmes” sur la surface du verre, plus le vin sera alcoolisé.
                <br>
                <h2>Déguster un vin : l’odorat</h2>
                <br>
                C’est l’étape préalable à la dégustation du vin : avant de le gouter, il faut le sentir. Cela vous permettra de vous faire une idée de ses arômes et de ses saveurs. Plus vous aurez l’habitude de faire appel à votre odorat, plus vous parviendrez à saisir toute les nuances des arômes de votre vin.
                Le premier nez consiste à sentir votre vin sans le remuer au préalable. Son odeur sera alors assez subtile mais cette première inspiration est très importante. Une fois cela fait, remuez le vin et respirez de nouveau : c’est le deuxième nez ! Vous découvrirez une palette d’arômes plus complète et complexe que lors du premier nez. Vous pouvez répéter cette étape autant de fois que vous le désirez afin de percevoir tous les arômes.
                Attention cependant, il y a des odeurs faciles à reconnaître ! Si vous détectez cette forte odeur de liège ou de moisi, renvoyez le vin si vous êtes au restaurant ou bien changez de bouteille si vous êtes chez vous, votre vin est probablement bouchonné !
                <br>
                <h2>Déguster un vin : le goût</h2>
                <br>
                Il est enfin temps de porter le verre à vos lèvres ! Prenez une petite gorgée de vin et faites-la tourner dans l’ensemble de votre bouche afin que le vin entre en contact avec votre palais, votre langue, vos gencives et vos joues. Vous allez pouvoir estimer la texture du vin : soyeux, mordant, acide, sucré etc. Lors d’une dégustation, juste avant de prendre une gorgée de vin, vous pouvez également aspirer un peu d’air du verre. Ainsi, vous aurez un aperçu des odeurs du vin plus que de la texture. On appelle cette méthode la retro-olfaction.
                Lors d’une dégustation, il est conseillé de recracher le vin que vous goutez et de ne pas l’avaler. Cela nécessite d’avoir déjà une certaine expérience de la dégustation puisque si vous ne l’avalez pas, vous ressentirez forcément un peu moins les arômes de votre vin.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal 2-->
<div class="modal fade" id="wineCombination" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="wineCombinationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content bg-danger bg-gradient">
            <div class="modal-header">
                <h1 class="modal-title" id="wineCombinationLabel">Accord mets et vins</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Accorder un plat avec un vin nécessite quelques précautions donc des points fondamentaux à respecter afin que le vin sublime votre repas.
                Dans le premier on cherchera à associer des arômes et des textures qui compléteront celles du plat en s’assurant que le vin se situe bien dans la même famille aromatique (par exemple des arômes de cassis complétés par des arômes de mûre et myrtille). Dans le second, on accordera un vin présentant la même gamme aromatique que celle du plat (par exemple un pigeon à la truffe avec un vieux Pomerol, ce vin ayant, au cours de son vieillissement, la faculté de développer des arômes de ce précieux champignon).
                <br>
                Que boire avec votre APÉRITIF ?
                <br>
                On aimera associer des gougères avec un vin mousseux comme le Champagnes blanc, des petits toasts de foie gras avec un Sauternes ou bien des blinis et œufs de saumon avec un Pouilly-Fumé.
                <br>
                Que boire avec votre ENTRÉE ?
                <br>
                Il existe donc en France un vaste choix de potages, crèmes et veloutés. De hors d’œuvre de légumes (crus ou cuits... ), élaborés à partir de pâtes brisée, feuilletée, à brioche... Bien sûr, ne nombreuses innovations sont effectuées chaque année avec le foie gras, les soufflés, les mousses... Toutes ces entrées sont autant d’occasions pour les sommeliers et les convives de jouir d’accords mets et vins divers et variés ! Citons par exemple : les huîtres avec un vin de Bourgogne comme le chablis premier cru, un soufflé au fromage avec un AOC côtes du Jura blanc, un tartare de daurade avec un Alsace grand cru Altenberg de Bergbieten Riesling.
                <br>
                Que boire avec votre PLAT PRINCIPAL ?
                <br>
                Le plat principal comme son nom l’indique est le plat le plus nourrissant du repas. Autrefois, il était souvent servi en deux temps, le premier plat (de poisson) et le deuxième plat (de viande). En France, il existe de nombreux plats principaux régionaux pouvant servir de plat unique et s’accordant à merveille avec des vins locaux comme la raclette avec une Roussette de Savoie, la tartiflette avec un vin de Savoie Abymes, l’entrecôte Bordelaise avec un bon vin de Saint-Emilion, la poularde au vin jaune avec un vin jaune du Jura...
                <br>
                Que boire avec votre FROMAGE ?
                <br>
                Avec plus de 400 fromages dont 46 appellations d’origine contrôlée, la France demeure une exception dans le monde ! Son savoir-faire dans l’élaboration des fromages est considérable. Reste ensuite à essayer de s’y retrouver dans cette multitude de fromages. Les professionnels les classent par types de pâtes, de croûtes et de laits : pâte molle, pâte pressée (cuite et non cuite), pâte persillée, pâte fraîche, croûte naturelle, croûte fleurie... Il y en a vraiment pour tous les goûts et pour chaque jour de l’année ! On aimera accorder les fromages de chèvre comme le Sainte Maure de Touraine avec un vin de Loire comme le Sancerre blanc, mais aussi les fromages à pâtes persillées comme le Roquefort avec un Sauternes ou un Sainte Croix du Mont.
                <br>
                Que boire avec votre DESSERT ?
                <br>
                Dans le repas occidental actuel le dessert est le plat que l’on consomme en dernier. Autrefois, il ponctuait l’ensemble du repas par des petites apparitions entre les plats salés. Les desserts sont des mets sucrés et regroupent une grande quantité de plats divers : gâteaux, pâtisseries (à base de pâtes feuilletée, brisée, sablée, à choux, à brioche... ), flans, glaces, sorbets, fruits et bien d’autres encore. Ils sont heureusement classés en différentes catégorie. Accorder une tarte au chocolat noir avec un vieux Banyuls rouge du Roussillon relève de la magie tant ils sont faits pour aller ensemble. Les bavarois aux fruits exotiques seront merveilleux avec des vins doux naturels blancs comme le Maury !
                <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal 3-->
<div class="modal fade" id="winePreservation" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="winePreservationLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content bg-danger bg-gradient">
            <div class="modal-header">
                <h1 class="modal-title" id="winePreservationLabel">Comment conserver son vin après ouverture ?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Le vin doit être conservé à l’abri de ses ennemis (Température, Oxygène, Lumière) afin de s’assurer qu’il conserve toutes ses qualités. Ces conseils sont valables que la bouteille soit fermée ou ouverte.
                <br>
                Comment protéger le vin ?
                <br>
                Le vin doit être conservéà l’abri de ses ennemis afin de s’assurer qu’il conserve toutes ses qualités. Ces conseils sont valables que la bouteille soit fermée ou ouverte.
                <br>
                Conservez de préférence vos bouteilles dans le noir. Une fois ouverte, ne laissez la bouteille sur la table, rangez-la plutôt dans un placard.
                <br>
                En fonction des saisons et selon la température dans votre habitation, entreposez le vin dans un endroit froid, ce qui augmentera sa durée de conservation. Le réfrigérateur est conseillé(il cumule température basse et absence de lumière) mais seulement si vous disposez du temps nécessaire pour que le vin se réchauffe avant la prochaine dégustation. Par exemple si vous ouvrez la bouteille le midi et souhaitez boire denouveau le soir, laissez la bouteille dans la pièce la plus froide de la maison.
                <br>
                Limitez le contact avec l’air en bouchant votre bouteille le plus tôt possible. De même, une bouteille bien remplie s’altère moins vite qu’une bouteille vide en raison de la présence d’air dans la bouteille qui est plus ou moins réduite. Vous pouvez éventuellement utiliser une pompe à air.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal 4-->
<div class="modal fade" id="wineColor" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="wineColorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content bg-danger bg-gradient">
            <div class="modal-header">
                <h1 class="modal-title" id="wineColorLabel">Comprendre les bases du vin</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Pourquoi le vin est-il rouge/blanc/rosé ?
                <br>
                C’est certainement l’une des premières questions que l’on se pose sur le vin : pourquoi existe-il en blanc, rouge, rosé et même orange ? Contrairement à ce que l’on pourrait penser instinctivement, cela ne s’explique pas par la couleur du cépage (la variété de raisin) … En effet, que les raisins soient blancs ou rouges, leur jus reste blanc. Les différences de coloration du vin s’expliquent en réalité principalement par la macération des peaux de raisins dans le jus en fermentation. Ce sont en particulier les anthocyanes, des pigments solubles situés dans la pellicule des raisins qui sont responsables de la teinte rouge du vin. Pour ce qui est de l’intensité de la couleur, divers paramètres rentrent en compte, comme le cépage, les rendements de la vigne, le terroir et le climat, la vinification, l’élevage, la teneur en sucre, l’âge du vin.
                Mis à part le cas spécifique du champagne, le vin rosé n’est pas un assemblage de vin blanc et de vin rouge ! Il s’agit d’une macération sur le même principe que celle du vin rouge, mais beaucoup plus courte.
                Il est ainsi possible de faire du vin blanc à partir de raisins rouge (en ne faisant pas macérer les peaux avec le jus), alors que l’inverse n’est pas vrai. En effet, en faisant macérer les peaux de raisins blanc, on n’obtient bien entendu pas de vin rouge, mais tout de même du vin … orange.
                <br>
                De quoi est composé le vin ?
                <br>
                Finalement, cette question se pose peut-être moins souvent, alors qu’elle est tout à fait légitime : quelle est la composition chimique du vin ? Il est principalement composé d’eau, à environ 85%, et d’alcool (principalement de l’éthanol, mais aussi du glycérol, du sorbitol, du butylène glycol et du méthanol), environ entre 12 et 16%. Il comprend aussi des sucres (glucose et fructose), des acides (tartrique, citrique, acétique, lactique, malique …) et des composés phénoliques (tanins, anthocyanes). On y trouve également des substances minérales (anions – ions négatifs-, cations – ions positifs-, et métaux) notamment du potassium, du soufre, du phosphore, du chlore, ainsi que de diverses substances organiques.
                <br>
                Pourquoi certains vins blancs sont-ils sucrés ?
                <br>
                La première fois que vous avez goûté un vin moelleux ou liquoreux, vous êtes probablement demandé d’où provenait ce sucre ? N’allez pas imaginer un vigneron en train de sucrer son vin blanc sec, le processus est bien sûr naturel !
                Petit rappel : lors de la fermentation, le sucre des raisins se transforme en alcool. Dans le cas des vins secs, c’est la quasi-totalité des sucres qui est transformée en alcool, alors que dans le cas des vins moelleux, tout le sucre n’est pas transformé et il reste donc du sucre résiduel ; et ce, parce que les raisins étaient initialement plus sucrés (vendangés très tardivement, ou botrytisés, ou encore passerillés).
                <br>
                Comment reconnaître les défauts du vin (Oxydation, réduction, bouchon) ?
                <br>
                Vous redoutez le moment si solennel de goûter le vin au restaurant ? Vous avez parfois un doute sur la qualité du vin, notamment sur le fait qu’ils soit bouchonné, mais vous n’osez pas en parler au sommelier de peur de vous tromper ? S’il est toujours possible en cas de doute de demander l’avis du sommelier, autant apprendre à reconnaître les défauts du vin vous-même. Concrètement, un vin bouchonné se traduira par une odeur de moisi assez prononcé, d’humidité : une odeur assez reconnaissable, en somme. Ce défaut provient du traitement chimique du bouchon de liège avec la molécule du tri-chloro-anisole (TCA).
                Un autre défaut courant du vin est la réduction : une odeur de renfermé, de croupi, voire de viande faisandée. Ces arômes sont le signe que le vin est resté longtemps enfermé et a été trop privé d’oxygène. Ils disparaissent normalement rapidement avec l’aération du vin.
                Enfin, le vin peut parfois se trouver oxydé (ce qui n’est pas un défaut lorsque c’est volontaire comme pour le cas des vins jaunes) : il exprimera des arômes de pomme blette, de cidre, de noix.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>
<?php require_once 'includes/footer.php' ?>