<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER Y" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="actif" fctcode=""/>
    <F2 F2para="" F2defaut="" F2etat="inactif" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurLigne="2" maxBoucle="500000" arrondiAuto="vrai" epaisseurPoint="2" totalAffichages="1000" totalBoucles="5000000" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="X EST_DU_TYPE NOMBRE" code="1#NOMBRE#X"/>
        <item algoitem="Y EST_DU_TYPE NOMBRE" code="1#NOMBRE#Y"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="LIRE X" code="2#X#pasliste"/>
        <item algoitem="LIRE Y" code="2#Y#pasliste"/>
        <item algoitem="X PREND_LA_VALEUR X + Y" code="5#X#X + Y#pasliste"/>
        <item algoitem="Y PREND_LA_VALEUR X - Y" code="5#Y#X - Y#pasliste"/>
        <item algoitem="X PREND_LA_VALEUR X - Y" code="5#X#X - Y#pasliste"/>
        <item algoitem="AFFICHER &quot;X = &quot;" code="4#X = #0"/>
        <item algoitem="AFFICHER X" code="3#X#0#pasliste"/>
        <item algoitem="AFFICHER &quot;; Y =&quot;" code="4#; Y =#0"/>
        <item algoitem="AFFICHER Y" code="3#Y#0#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
