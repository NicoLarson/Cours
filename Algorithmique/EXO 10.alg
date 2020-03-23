<?xml version="1.0" encoding="UTF-8"?>
<Algo>
    <description courant="AFFICHER A" texte="A = 0.5; B = 0.2; C = 0.1; D = 0.05; E = 0.02; F = 0.01"/>
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
        <item algoitem="E EST_DU_TYPE NOMBRE" code="1#NOMBRE#E"/>
        <item algoitem="F EST_DU_TYPE NOMBRE" code="1#NOMBRE#F"/>
        <item algoitem="S EST_DU_TYPE NOMBRE" code="1#NOMBRE#S"/>
    </item>
    <item algoitem="DEBUT_ALGORITHME" code="101#debutalgo">
        <item algoitem="A PREND_LA_VALEUR 0.5" code="5#A#0.5#pasliste"/>
        <item algoitem="B PREND_LA_VALEUR 0.2" code="5#B#0.2#pasliste"/>
        <item algoitem="C PREND_LA_VALEUR 0.1" code="5#C#0.1#pasliste"/>
        <item algoitem="D PREND_LA_VALEUR 0.05" code="5#D#0.05#pasliste"/>
        <item algoitem="E PREND_LA_VALEUR 0.02" code="5#E#0.02#pasliste"/>
        <item algoitem="F PREND_LA_VALEUR 0.01" code="5#F#0.01#pasliste"/>
        <item algoitem="LIRE A" code="2#A#pasliste"/>
        <item algoitem="LIRE B" code="2#B#pasliste"/>
        <item algoitem="LIRE C" code="2#C#pasliste"/>
        <item algoitem="LIRE D" code="2#D#pasliste"/>
        <item algoitem="LIRE E" code="2#E#pasliste"/>
        <item algoitem="LIRE F" code="2#F#pasliste"/>
        <item algoitem="LIRE S" code="2#S#pasliste"/>
        <item algoitem="S PREND_LA_VALEUR S % A" code="5#S#S % A#pasliste"/>
        <item algoitem="AFFICHER &quot;S = &quot;" code="4#S = #0"/>
        <item algoitem="AFFICHER S" code="3#S#0#pasliste"/>
        <item algoitem="AFFICHER &quot;; A = &quot;" code="4#; A = #0"/>
        <item algoitem="AFFICHER A" code="3#A#0#pasliste"/>
    </item>
    <item algoitem="FIN_ALGORITHME" code="102#finalgo"/>
</Algo>
