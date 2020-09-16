<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER &quot; ans.&quot;" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2defaut="" F2etat="inactif" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurLigne="2" maxBoucle="500000" arrondiAuto="vrai" epaisseurPoint="2" totalAffichages="1000" totalBoucles="5000000" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="age EST_DU_TYPE NOMBRE" code="1#NOMBRE#age"/>
        <item algoitem="nom EST_DU_TYPE CHAINE" code="1#CHAINE#nom"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="AFFICHER &quot;Saisis ton nom et ton age :&quot;" code="4#Saisis ton nom et ton age :#0"/>
        <item algoitem="LIRE nom" code="2#nom#pasliste"/>
        <item algoitem="LIRE age" code="2#age#pasliste"/>
        <item algoitem="AFFICHER &quot;Bonjour &quot;" code="4#Bonjour #0"/>
        <item algoitem="AFFICHER nom" code="3#nom#0#pasliste"/>
        <item algoitem="AFFICHER &quot;, tu as &quot;" code="4#, tu as #0"/>
        <item algoitem="AFFICHER age" code="3#age#0#pasliste"/>
        <item algoitem="AFFICHER &quot; ans.&quot;" code="4# ans.#0"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
