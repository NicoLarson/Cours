<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHERCALCUL Largeur * Longeur" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2defaut="" F2etat="inactif" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurLigne="2" maxBoucle="500000" arrondiAuto="vrai" epaisseurPoint="2" totalAffichages="1000" totalBoucles="5000000" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="Largeur EST_DU_TYPE NOMBRE" code="1#NOMBRE#Largeur"/>
        <item algoitem="Longeur EST_DU_TYPE NOMBRE" code="1#NOMBRE#Longeur"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="LIRE Largeur" code="2#Largeur#pasliste"/>
        <item algoitem="LIRE Longeur" code="2#Longeur#pasliste"/>
        <item algoitem="AFFICHER &quot;La surface du rectangle est: &quot;" code="4#La surface du rectangle est: #0"/>
        <item algoitem="AFFICHERCALCUL Largeur * Longeur" code="20#Largeur * Longeur#0"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
