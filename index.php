<?php
$motdepasse="abibdu03";
if(isset($_POST["envoi"])) {
	if(isset($_POST["mdp"]) and !empty($_POST["mdp"])) {
		if($_POST["mdp"] == $motdepasse) {
			$accessgranted = 1;
	}
	else{
		$erreur = "Mauvais mot de passe <br />";
	}
	}
	else
	{
	$erreur = "Vous devez remplir la case mot de passe <br />";
	}
	}
if(!isset($accessgranted)) { ?>
<h1>page protégé par mot de passe</h1>
<hr>
<?php 

	
	if(isset($erreur)) { echo $erreur; }
?>

<form action="" method="post">
Entrez le mot de passe ci-dessous : <br>
Mot de passe : <input type="text" name="mdp" >
<input type="submit" name="envoi" value="Entrer">
</form>
<?php } else { ?>
	<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Mémo HTML et CSS</title>
        <link rel="stylesheet" href="normalize.css">
        <link rel="stylesheet" href="style.css">
        <link href="logo.jpg" rel="shortcut icon">
    </head>
    <body><div class="stock">
        <header class="banniere"><div class="containerh1"><img class="imgban" src="HTML.png" width="55" height="55"><h1 id="debut"><strong>Liste balises HTML et propriétés CSS</strong></h1><img src="CSS.png" width="55" height="55" class="imgban"></div></header>
        <div class="menu_nav"><h3><span class="normal">Menu de navigation</span></h3>
        <nav><ul>
                <li><a href="#desc_site"><span class="link">Description du site</span></a></li>
                <li><a href="#b_html"><span class="link">Balises HTML</span></a></li>
                <li><a href="#b_prim_form_txt"><span class="link">Balises primordiales et formatage texte</span></a></li>
                <li><a href="#b_link_adress"><span class="link">Balises liens et addresses</span></a></li>
                <li><a href="#b_list_progress"><span class="link">Balises listes et barre de progression</span></a></li>
                <li><a href="#b_tabl"><span class="link">Balises tableau</span></a></li>
                <li><a href="#b_media"><span class="link">Balises média</span></a></li>
                <li><a href="#b_form_txt"><span class="link">Balises formatage texte</span></a></li>
                <li><a href="#p_css"><span class="link">Propriété CSS</span></a></li>
                <li><a href="#b_p_prim"><span class="link">Balises et propriétés primordiales</span></a></li>
                <li><a href="#p_form_txt"><span class="link">Propriétés formatage texte</span></a></li>
                <li><a href="#p_color_fond"><span class="link">Propriétés couleur et fond</span></a></li>
                <li><a href="#p_box"><span class="link">Propriétés boites</span></a></li>
                <li><a href="#p_flexbox"><span class="link">Propriétés flexbox</span></a></li>
                <li><a href="#p_grid"><span class="link">Propriétés grille</span></a></li>
                <li><a href="#p_other"><span class="link">Autres propriétés</span></a></li>
                <li><a href="https://www.w3.org/Style/Examples/007/fonts.fr.html" target="_blank"><span class="link">Police CSS</span></a></li>
        </ul></nav></div>
        <span id="desc_site" class="rep">.</span>
        <section class="site">
                <h3><span class="normal">Description du site:</span></h3>
                <p>Ce site référence une <em>grande partie des balises HTML et des propriétés CSS</em> en comptant évidemment toutes les plus importantes qui pourront vous servir 
                à <em>réaliser la présentation de presque n'importe quel site internet</em>.<br>
                Vous retrouverez également un menu de navigation qui vous permettra de vous déplacer et vous repérer plus facilement sur cette page <span id="b_html"></span> internet.<br>
                Je précise également que ce site sera le plus possible tenu à jour mais je ne garantis pas que <b>les nouvelles balises</b> soient ajoutés dans un délaitrès court.</p>
                <span id="b_prim_form_txt"></span>
        </section>

        <div class="code"><div>
        <div>
            <h2><strong>Liste balises HTML</strong></h2>
            <h3><strong>Balises primoradials et formatage texte</strong></h3>
            <code>
                    < !DOCTYPE html> : sert a donner le type du document<br>
                    < html > < /html> : sert a définir le type de la page<br>
                    < head >< /head> : sert a définir les caractéristiques de la page <br>
                    < meta charset= « utf-8 » > : langage à toujours placer au début de < head><br>
                    < body >< /body > : sert à definir  le début et la fin du contenu de la page<br>
                    < p >< /p > : sert à créer des paragraphes<br>
                    < br > :  sert à revenir à la ligne<br>
                    < hr > : sert à faire une séparaison avec une ligne<br>
                    < strong >< /strong > : met en avant une portion de texte pour le navigateur (+affichage en gras)<br>
                    < em >< /em > : met en avant une portion du texte pour le navigateur (+affichage italique)<br>
                    < del >< /del > : montre le fait qu’une info n’est pas vrai et plus à prendre en compte et à remplacer (+texte barré)<br>
                    < ins >< /ins > : donne la correction de cette info<br>
                    < mark >< /mark > :met en avant une partie du texte (surligne)<br>
                    < b >< /b > : met en évidence un texte mais pas autant que < strong> (+ecriture gras)<br>
                    < i >< /i > : permet de signifier que cette portion de texte n’est pas en lien avec le paragraphe (à utiliser en dernier recours+ecriture italique)<br>
                    < s >< /s > : montre qu’un extrait de texte n’est pas correct et n’est pas pertinant (+texte barré)<br>
                    < h1 >< /h1 > à < h6 >< /h6 > ; titre plus ou moins grand (avec ordre d’importance) + en général un seul h1 par page<br>
                    < !--    --> annotation dans code source<br>
                    < q >< /q > :montre qu’il s’agit d’une citation d’un autre site (+guillemets)<br>
                    < q cite= « http :….» >< /q > : citation + donne lien de la source<br>
                    < cite >< /cite > : permet de citer un nom de doc.(écriture itallique)<br>
                    < blockquote >< /blockquote > : permet de citer tout un paragraphe ( apparition d’une marge)<br>
                    < blockquote cite= « http….»  >< /blockquote > : cite + donne le lien de la source<br>
                    < details >< /details > : permet de cacher un contenu et de ne le révéler que en cliquant sur details<br>
                    < summary >< /summary > : permet de changer le nom de details<br>
                    < bdi>< /bdi> : écrit un mot étrangé dans le sens qui convient (exemple : arabe)<br>
                    < bdi dir= « ltr »>< /bdi> permet de spécifier l’ordre d’affichage (ltr= left to right, rtl=right to left)<br>
                    < bdo dir= « ... »>< /bdo> impose un sens d’affichage au navigateur<br>
                    < sub>< /sub> : représente ce qui est marqué en indice<br>
                    < sup>< /sup> : représente ce qui est marqué en exposant<br>
                    < wbr> montre qu’on peut couper un mot ou une url à cet endroit<br>
                    < code>< /code> permet de montrer un passage de code (change la police)<br>
                    < kbd>< /kbd> permet de montrer un raccourci clavier (change la police)<br>
                    < meter value= « (valeur entre 0 et 1 pour le pourcentage) »>< /meter><br>
                                   Min(valeur minimal)<br>
                                   Max(valeur maximal)<br>
                                   High(seuil ou la valeur devient haute)<br>
                                   Low (seuil ou la valeur devient basse)<br>
                                   Optimum(seuil ou la valeur est optimum)<br>
                    < output>< /output> peut être utilisé pour signifier qu’il s’agit d’un résultat d’un calcul et autres<br>
                    < pre>< /pre> permet de faire apparaitre le texte exactement comme tu l’as écrit entre ces balises(pratique pour le code)<br>
                    < ruby>< /ruby> permet de spécifier qu’il s’agit d'une langue d’asie oriental<br>
                    < rt>< /rt> permet de spécifier la prononciation<br>
                    < samp>< /samp> permet d’afficher ce que ferait la sortie d’un programme informatique<br>
                    < time>< /time> permet de signifier qu’il s’agit d’une date><br>
                    < time datetime= « 20**-**-**  ** :**:**»>< /time> permet d’afficher le l’année le mois et le jour + heure, minute,seconde(pour le moteur de rechercher)<span  id="b_link_adress"></span><br>
                    < var>< /var> permet de signifier qu’il s’agit d’une variable (écriture italique)<br>
                    
            </code>
            </div>
            <div>
            <h3><strong>Balises de liens et adresses</strong></h3>
            <code>
                    < a href= « https :… » >< /a> : permet de mettre un bout de texte/image en lien de page internet<br>
                    < a href= « #nom_id» >< /a>: permet de relier à des ancres sur la page
                    < a href= « https :… » title= « …»>< /a> ; permet d’afficher une info bulle sur le lien <br>
                    < a href= « https :… » target= « _blank »>< /a> : pour ouvrir le lien dans une autre page<br>
                    < abbr>< /abbr> : précise qu’il s’agit d’une abbréviation<br>
                    < abbr title= «mot entier »>< /abbr> : permet de préciser le mot complet<br>
                    En général title à l’intérieur d’une balise sert à préciser via une bulle de texte quelque chose sur l’ensemble de mots concernés<span id="b_list_progress"></span><br>
                    < address>< /address> précise que c’est une adresse (+ écriture italique)<br>
                    < a href= « mailto :une adresse mail »>< /a> : renvoie directement sur une adresse de messagerie électronique installé sur le pc<br>   
            </code>
            </div>
            <div>
            <h3><strong>Balises de listes et barre de progression</strong></h3>
            <code>
                    < dfn>< /dfn> indique que la definition de ce mot se trouve juste après ou juste avant<br>
                    < dl>< /dl> crée une liste de définitions<br>
                    < dt>< /dt> montre le mot à définir<br>
                    < dd>< /dd> définit le mot à définir<br>
                    < progress value= « … » max= « … »> < /progress> montre la progression de quelque chose avec une barre<br>    
                    < ul>< /ul> permet d’ouvrir une liste sans ordre(petit point)<br>
                    < ol>< /ol>ouvre une liste avec un ordre(numéros 1 à …)<br>
                    < ol reversed> numéros … à 1<br>
                    < ol start= « un numéro »> permet de démarrer à partir du numéro qu’on veut<br>
                    < ol type= « une lettre/ un numéro/ chiffre romain »><span id="b_tabl"></span><br>
                    < li>< /li>introduit un élément dans la liste<br>
            </code>
            </div>
            <div>
            <h3><strong>Balises de tableau</strong></h3>
            <code>
                    < table>< /table> permet de démarrer un tableau<br>
                    < caption>< /caption> rajoute le titre du tableau (facultatif)<br>
                    < thead>< /thead> montre qu’il s’agit de l’entête du tableau au navigateur<br>
                    < tbody>< /tbody>montre qu’il s’agit du corps du tableau<br>
                    < tfoot>< /tfoot>montre qu’il s’agit du pied du tableau (rarement utilisé)<br>
                    < tr>< /tr> crée une ligne de tableau<br>
                    < td>< /td> crée une colonne dans cette ligne <br>
                    < td rowspan= « nombre »>< /td> met le contenu sur plusieurs lignes<br>
                    < td colspan= « nombre »>< /td> met le contenu sur plusieurs colonnes<br>
                    < th>< /th>crée une colonne d’entête dans cette ligne<br>
                    < th abbr= « … »>< /th> donne l’abbréviation du nom de cette colonne (pas visible de base)<br>
                    < th id= « … »>< /th> donne l’identifiant de cette colonne<span id="b_media"></span><br>
                    < td headers= « … »>< /td> montre à quel identifiant cette case correspond <br>
            </code>
            </div>
            <div>
            <h3><strong>Balises de média</strong></h3>
            <code>
                    < img src= «… » alt=«texte alternatif à afficher si image ne peut pas être afficher par moteur de recherche »> affiche l'image<br>
                    < img src …. Width= « largeur de l’image »> permet de modifier la largeur de l’image<br>
                    < img src… height= « hauteur le l’image »>permet de modidier la hauteur (peut être rempli par auto pour être proportionnel à la largeur<br>
                    < figure>< /figure> balise qui va permettre de donner des infos sur l’image grâce à d’autres balises<br>
                    < figcaption>< /figcaption> permet de donner une légende/crédit à l’image<br>
                    < map name= « exemple »> va permettre de définir une zone cliquable<br>
                    < img usemap= « #exemple » src=… alt=…>permet de définir une zone cliquable<br>
                    < area href= « lien sur lequel envoyer » shape = «rect »(rectangle) coords= « x1,y1   x2,y2 »><br>
                    < audio src= « exemple.mp3 » controls (permet de controler le son) autoplay(si tu veux démarrer automatiquement le son) loop(lit le fichier en boucle)>Votre navigateur ne supporte pas l’audio< /audio> <br>
                    <span id="b_form_txt"></span>
                    < video src= « exemple.mp4  width= « largeur» height= « hauteur » controls posters= « miniature.png »>Votre navigateur ne prend pas en charge la vidéo< /video><br>
            </code>
            </div>
            <div>
            <h3><strong>Balises formatages texte</strong></h3>
            <code>
                    < div>< /div> permet de créer des blocks de contenu<br>
                    < span>< /span> permet d’appliquer  une chose précise via CSS sur un petit contenu<br>
                    < main>< /main> définit le contenu principale de votre body (facultatif)<br>
                    < section>< /section> definis une section, commence généralement par un titre et est suivi par un ou des paragraphes<br>
                    < article>< /article> définis une section indépendante  à notre site<br>
                    < header>< /header>désigne l’entête du doc (titre h1) mais peut être aussi l’entête d’un article avec un autre h<br>
                    < footer>< /footer> désigne le pied de la portion dans laquelle il est(crédit,…)<br>
                    < nav>< /nav> désigne un menu de navigation<span id="p_css"></span><br> 
                    < aside>< /aside>partie de contenu à part, hors <span id="b_p_prim"></span>sujet<br>                  
            </code>
            </div>
        </div>
        <div>
        <h2> <strong>Liste propriétés CSS</strong></h2>
            <div>
            <h3><strong>Balises et propriétés primordials pour css</strong></h3>
            <code>
                    < link rel= «stylesheet» href « style.css »> permet de lier une page css<br>
                    < balise  id= «exemple»> (juste pour un élément)<br>
                    #exemple ou balise#exemple pour appliquer le style juste à cette élément<br>
                    < balise class= « exemple »> (pour plusieurs éléments)<span id="p_form_txt"></span><br>
                    .exemple pour appliquer le style sur toutes les balises qui ont cette classe, peut être affiné en rajoutant un enchainement de balise nécessaire avant le .exemple (balise1 balise2 balise3.exemple)<br>
            </div>
            </code>
            <div>
            <h3><strong>Propriétés formatage texte</strong></h3>
            <code>
                    {font-style :exemple ;} exemple :italic / normal(retour a ecriture normale)<br>
                    {font-variant :exemple ;} exemple : small caps(petite majuscules)<br>
                    {font-weight :exemple ;} exemple : normal/bold ou bolder(txt en gras)/nombre(épaisseur minimal du txt est 100 et max est 900)<br>
                    font-size :nombrepx ;(nombre= taille de la police en pixel)/nombre%(nbr=taille de la police en %)/nbrem(nbr= pourcentage de la police par rapport à l’élément parent comme body)/xx-small(très très petit)/x-small(très petit)/small(petit)/medium(moyen)/large(grand)/x-large(très large)/xx-large(très très large)<br>
                    line-height :exemple ;(pour l’écart entre les lignes)(ex :nombrepx/nombre%/nbrem)<br>
                    font-family : exemple, exemple; (permet de mdifier la police de caractère ) (ex : voir doc police)<br>
                    font :style variant weight size height familiy ; (permet de prendre en compte tout les élément vu au dessus avec une balise en respectant cette ordre)<br>
                    text-decoration : line (couleur, optionnel) ;<br>
                    line=(underline/overligne/line-through<br>
                    text-shadow : x1px x2px x3px couleur (x1= horizontal x2=vertical x3= intensité de l’ombre)<br>
                    text-transform : exemple ; (exemple= capitalize(1er lettre capital), uppercase(tout en maj), lowercase( tout en minuscules)<br>
                    text-align : exemple ; (exemple=left/right/center/justify)<br>
                    vertical-align :exemple ; (exemple= baseligne/nombrepx/sub/super/top/middle/text-bottom)<br>
                    text-indent :exemple ; (exemple= nbrpx/…) (=alinéa)<br>
                    text-overflow :exemple ; (exemple= clip(coupure net)/ellipsis(3 petits points))<br>
                    letter-spacing :exemple ; (espacement des lettres)(ex : nbrpx)<br>
                    white-space : exemple ; (ex= normal/nowrap(pas de retour à la ligne)/pre(garde l’affichage du texte dans le fichier html)/pre-line/pre-wrap(retour à la ligne géré par le navigateur)<br>
                    word-spacing :ex ; (ex=nbrpx) (espace entre chaque mot)<br>
                    word-break : ex ; (ex : normal/break-all/keep-all)<br>
                    word-wrap : ex ; (ex : normal/break-word(permet de couper une url et des longs mots)<br>
                    direction : ex ; (ex : initial/rtr/rtl)<br>
                    text-align-last : ex ; (ex : left/right/center/…)<span id="p_color_fond"></span><br>
                    a:link{text-decoration:none;}:permet d’enlever le soulignement sous les liens<br>                    
            </code>
            </div>
            <div>
            <h3><strong>Propriétés couleur et fond</strong></h3>
            <code>
                    Color :exemple ;<br>
                    (exemple= nom couleur(voir site) ou valeur pour : red :de 0 à FF(=255) vert=pareil bleu=pareil donc par exemple blanc=#FFFFFF ou rgba(val red, val grenn, valblue, valopacité de 0 à 1.0) ou hsl(valcouleur(0 à 360) saturation(0 à 100) luminosité(0 à 100)<br>
                    Background-color :couleur (voir au dessus);<br>
                    Background-image :url(lien)<br>
                    Background-position :nbrpx nbrpx/top/bottom/bottom left/center….<br>
                    Background-repeat :no-repeat(quand l’image n’est pas très grande)/repeat-x/repeat-y/space/round<br>
                    Backgound-size :cover(couvre tout l’espace et s’adapte à la taille de la fenêtre)/contain(s’adapte pour que toute l’image soit toujours affiché);<br>
                    Background-size :nbrpx nbrpx ;<br>
                    Background-origin ou background-clip: padding-box/border-box/content-box(le met pile au début du contenu)<br>
                     Background-attachment :local/scroll(le fond défile également)/fixed(le fond ne défile pas)<br>
                    PROPRIETE STYLISER LISTE<br>
                    List-style-image :url(image) ;<br>
                    List-style-position :outside(puce à l’ext de la boite)/inside(inclut la puce dans la boite)<span id="p_box"></span><br>
                    List-style-type :none(retire la puce)/disc(rond)/square/circle<br>
            </code>
            </div>
            <div>
            <h3><strong>Propriétés boîte</strong></h3>
            <img usemap="#boite" src="boite.jpg" width="350" height="auto">
            <map name="boite"><area href="https://memohtlm-css.thgonzales.now.sh/boite.jpg" shape="rect" coords="0, 0, 350, 264" target="_blank"></map><figcaption>Tirée de la chaîne de FormationVidéo</figcaption><br>
            <code>
                    Width : largeur de la boite en px ; (min-width :nbrpx pour largeur minim et max-width :nbrpx)<br>
                    Height :hauteur de la boite ; (idem)<br>
                    Padding-top/right/bottom/left :nbrpx<br>
                    Margin-top/right/bottom/left :nbrpx<br>
                    Overflow : auto/hidden(enlève ce qui dépasse)/scroll<br>
                    Overflow-x/overflow-y : …..<br>
                    Overflow-wrap :break-word(permet de faire en cassant le mot retourner à la ligne)<br>
                    Border-width :nbrpx<br>
                    Border-style :dotted/dashed/double/groove/ridge/inset/ouset<br>
                    Border-color :<br>
                    Border-top/bottom/left/right<br>
                    Border-image(voir border-image.com)<br>
                    Border-radius(arrondi) :en px ou en %<br>
                    Border-top-left-radius/….<br>
                    Outline :même commande que border<br>
                    Pour gérer les tableaux :<br>
                    Border :nbrpx solid color ;<br>
                    Border-collapsed : collapsed(bordure collé)/separated(bordure séparé)<br>
                    Si bordure séparé : border-spaced :nbrpx<br>
                    + pour le tableau on peut utiliser padding)<br>
                    PROPRIETE AFFICHAGE<br>
                    Display :none(enlève de l’affichage)/block(les espace comme des blocks différents)/inligne(les mets à la suite)<br>
                    Visibility :visible/hidden(cache mais laisse son emplacement)<br>
                    Opacity :nbr(entre 0 et 1)<br>
                    Position : relative/absolute<br>
                    Top/right/left/bottom : nbr px<br>
                    z-index :nbr ; (celui avec cette valeur qui est la plus haute sera afficher au dessus des autres)<br>
                    float :left/right (permet à une image d’avoir du texte tout de suite après ou avant)<br>
                    clear :right/left/both (se met à la fin du flottement)*<br>
                    box-shadow : x y nbrpx(étendu de l’ombre) <span id="p_flexbox"></span>color<br>
                    box-sizing : content-box(ne prends pas en compte la valeur des bordures et paddings qu’il y a dans les boîtes comprises à l’intérireur donc dépassement de la bordure)/ border-box(les prends en compte)<br> 
            </code>
            </div>
        <div>
        <h3><strong>Propriétés flexbox</strong></h3>
        <img usemap="#flexbox" src="flexbox.jpg" width="350" height="auto">
        <map name="flexbox"><area href="https://memohtlm-css.thgonzales.now.sh/flexbox.jpg" shape="rect" coords="0, 0, 350, 264" target="_blank"></map><figcaption>Tirée de la chaîne de FormationVidéo</figcaption><br>
        Pour le conteneur:<br>
        <code>
                        Display :flex(met les différents objets à l’intérieur d’un conteneur) /inline-flex(se comporte comme inline, peu intéressant) ;<br>
                        Flex-direction :row(alignement) row-reverse(align inversé)column(colonne)column-reverse(colonne inversé) ; (permet de choisir la direction, l orientation des objets contenus)<br>
                        Flex-wrap :nowrap(pas de coupure pour revenir à la ligne)wrap(coupure pour revenir à la ligne)wrap-reverse(inverse résultat wrap);(permet de couper un block de contenu pour qu’il revienne à la ligne)<br>
                        Justify-content :flex-start(met les éléments au début de l’axe principal)flex-end/center/space-between(espace entre les éléments)/space-around(espace autour des éléments)/space-evenly(espace égaux partout)<br>
                        Align-items :stretch(les objets contenus occupe le tout l’espace du conteneur)/flex-start(prend juste la place nécessaire, se met au début)/flex-end(se met à  la fin)center(centré)/baseline(tous les autres contenus se mettent à hauteur du contenu contenu dans la boite la plus grande);<br>                        
        </code>
        Pour les objets:<br>
        Order :nbr(+ la valeur est petite  + l’objet est prioritaire dans sa disposition=premier affiché)<br>
        Flex-grow :nbr(+ le nbr est grand + l’objet va occuper de la place dans l’espace du conteneur restant vide);<br>
        Flex-shrink :nbr ;(définit à quelle point l’objet peut céder de la place)<br>
        Flex-basis :nbrpx(définis la taille que l’élément prend initialement)<br>
        Align-self :(voir align-items) ;(permet à un objet de s’aligner différemment de ce qui est précisé dans le <span id="p_grid"></span>conteneur)<br>
        Column-gap : définis l’espace entre les objets sur les colonnes<br>
        Raw-gap<br>
            </div>
        <div>
        <h3><strong>Propriétés grid css</strong></h3> 
        <img usemap="#grid" src="grid.jpg" width="350" height="auto">
        <map name="grid"><area href="https://memohtlm-css.thgonzales.now.sh/grid.jpg" shape="rect" coords="0, 0, 350, 264" target="_blank"></map><figcaption>Tirée de la chaîne de FormationVidéo</figcaption><br>
        Pour le conteneur:<br>
        !POUR TOUTE CETTE PARTIE CE QUI EST VALABLE POUR LES COLONNES SERA EN GENERAL VALABLE POUR LES LIGNES ET INVERSEMENT !<br>
        <code>
                        Display :grid ;<br>
                        Grid-template-columns : nbrpx  (taile des columns)+ pour chaque column= 1 nbrpx rajouté(nbrpx/ xfr= partage la largeur selon l’espace disponible et le nombre x/ minmax(nbrpx minumum, nbrpx maximum))<br>
                        Grid-template-rows :même chose qu’au dessus<br>
                        Grid-auto-rows :nbrpx(tout ce qui n’a pas été défini par moi fait cette taille)<br>
                        Grid-auto-columns<br>
                        Grid-auto-flow :row/column(les éléments restants se mettent sur une ligne/colonne)<br>
                        <br>
                        Grid-template-areas : «  nom(ligne 1 colonne1) nom(ligne1 colonne 2) nom…<br>
**********************« nom(ligne2 ….)<br>
                        Avec .=cellule vide<br>
                        Justify-content :comme pour flex box mais avec les différents objets du conteneur)<br>
                        Align-content :voir en haut<br>
                        Align-items :voir en haut<br>
                        Justify-items : voir en haut<br>
                        Grid-column-gap : nbrpx (définis l’espace entre les colonnes)<br>
                        Grid-row-gap : voir en haut<br>                           
        </code> <br>      
        Pour un/les objet(s):<br>
        <code>
                        Grid-column : x(se met automatiquement sur la colonne x)<br>
                        Grid column : x /  -x (prend toute la place sur cette ligne/colonne)<br>
                        Grid-row-start :x (commence à la ligne x)<br>
                        Grid-row-end :x<br>
                        Grid-area : nom(définit les noms des différent élements du site)<br>
                        Align-self :voir align dans flex box, se passe uniquement pour cet <span id="p_other"></span>objet<br>
                        Justify-self :<br>                       
        </code>    
            </div>
        <div>
        <h3><b>Autres propriétés</b></h3>
        <code>
                        Position : fixed<br>
                        Left :x<br>
                        Top :x<br>
                        Bottom :x<br>
                        (permet à un texte sur par exemple une side bar de rester fixe)<br>
                        Pour que la résolution s’adapte selon la résolution :<br>
                        Img : max-width : x ; height :auto ;<br>
                        (Html : < meta name= « viewport » content= « width :device-width, initial-scale=1 »>)<br>
                        @media(width/min-width/max-width : nombrepx){…} <br>                     
        </code>
        </div> 
        </div> 
        </div>
</div></body>
</html>







<?php  } ?>