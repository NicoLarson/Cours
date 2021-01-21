package DST;
class Fuseau
{
        public static Fuseau 
                GREENWITCH = new Fuseau("Greenwitch", 0),
                           PARIS = new Fuseau("Paris", 1),
                           NY = new Fuseau("New York", -5),
                           PEKIN = new Fuseau("Pekin", 8);

        /** Décalage par rapport au méridien de greenwitch */
        private Horaire decalageHoraire;
        private String nom;

        public Fuseau(String nom, Horaire decalageHoraire)
        {    this.decalageHoraire = decalageHoraire;
                this.nom = nom;    }

        public Fuseau(String nom, int decalageHoraire)
        {    this(nom, new Horaire(decalageHoraire, 0));    }

        /** Retourne l'heure qu'il est dans le fuseau this
         *       * quand il est horaireEnGreenwitch à GreenWitch*/
        public Horaire convertit(Horaire horaireEnGreenwitch)
        {
                return horaireEnGreenwitch.additionne(decalageHoraire); 
        }

        /** Retourne l'heure qu'il est sur le méridien de Greenwich 
         *       * quand il est horaire dans le fuseau this. */
        public Horaire enGreenWitch(Horaire horaire)
        {
                return horaire.soustrait(decalageHoraire);
        }

        protected String getNom()
        {    return nom; }}
