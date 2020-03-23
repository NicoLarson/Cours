<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER D" texte=""/>
    <extension extnom="inactif"/>
    <fonction fctetat="inactif" fctcode=""/>
    <F2 F2para="" F2defaut="" F2etat="inactif" F2lignes=""/>
    <repere repetat="inactif" repcode="-10#10#-10#10#2#2"/>
    <param epaisseurLigne="2" maxBoucle="500000" arrondiAuto="vrai" epaisseurPoint="2" totalAffichages="1000" totalBoucles="5000000" nbDecimales="8"/>
    <item algoitem="FONCTIONS_UTILISEES" code="200#declarationfonctions"/>
    <item algoitem="VARIABLES" code="100#declarationsvariables">
        <item algoitem="A EST_DU_TYPE NOMBRE" code="1#NOMBRE#A"/>
        <item algoitem="B EST_DU_TYPE NOMBRE" code="1#NOMBRE#B"/>
        <item algoitem="C EST_DU_TYPE NOMBRE" code="1#NOMBRE#C"/>
        <item algoitem="D EST_DU_TYPE NOMBRE" code="1#NOMBRE#D"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="LIRE A" code="2#A#pasliste"/>
        <item algoitem="LIRE B" code="2#B#pasliste"/>
        <item algoitem="LIRE C" code="2#C#pasliste"/>
        <item algoitem="LIRE D" code="2#D#pasliste"/>
        <item algoitem="A PREND_LA_VALEUR A + C" code="5#A#A + C#pasliste"/>
        <item algoitem="C PREND_LA_VALEUR A - C" code="5#C#A - C#pasliste"/>
        <item algoitem="A PREND_LA_VALEUR A - C" code="5#A#A - C#pasliste"/>
        <item algoitem="B PREND_LA_VALEUR B + D" code="5#B#B + D#pasliste"/>
        <item algoitem="D PREND_LA_VALEUR B - D" code="5#D#B - D#pasliste"/>
        <item algoitem="B PREND_LA_VALEUR B - D" code="5#B#B - D#pasliste"/>
        <item algoitem="AFFICHER &quot;A = &quot;" code="4#A = #0"/>
        <item algoitem="AFFICHER A" code="3#A#0#pasliste"/>
        <item algoitem="AFFICHER &quot;; B = &quot;" code="4#; B = #0"/>
        <item algoitem="AFFICHER B" code="3#B#0#pasliste"/>
        <item algoitem="AFFICHER &quot;; C = &quot;" code="4#; C = #0"/>
        <item algoitem="AFFICHER C" code="3#C#0#pasliste"/>
        <item algoitem="AFFICHER &quot;; D = &quot;" code="4#; D = #0"/>
        <item algoitem="AFFICHER D" code="3#D#0#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
