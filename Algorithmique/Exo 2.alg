<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description texte="" courant="AFFICHER &quot;.&quot;"/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2defaut="" F2para="" F2etat="inactif" F2lignes=""/>
    <repere repcode="-10#10#-10#10#2#2" repetat="inactif"/>
    <param totalAffichages="1000" arrondiAuto="vrai" nbDecimales="8" maxBoucle="500000" epaisseurPoint="2" totalBoucles="5000000" epaisseurLigne="2"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="num EST_DU_TYPE NOMBRE" code="1#NOMBRE#num"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Ecrivez un nombre entier : &quot;" code="4#Ecrivez un nombre entier : #0"/>
        <item algoitem="LIRE num" code="2#num#pasliste"/>
        <item algoitem="AFFICHER &quot;Votre nombre est : &quot;" code="4#Votre nombre est : #0"/>
        <item algoitem="AFFICHER num" code="3#num#0#pasliste"/>
        <item algoitem="AFFICHER &quot;.&quot;" code="4#.#0"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
