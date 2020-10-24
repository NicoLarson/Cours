package DST;
public class HoraireFuseau extends Horaire
{
        private Fuseau fuseau;

        public Fuseau getFuseau()
        {    return fuseau;    }

        public HoraireFuseau(int heures, int minutes, Fuseau fuseau)
        {    super(heures, minutes);
                this.fuseau = fuseau;    }

        /** construit un objet avec "horaire" exprimé 
         *       * dans le fuseau "fuseau". */
        public HoraireFuseau(Horaire horaire, Fuseau fuseau)
        {    super(horaire);
                this.fuseau = fuseau;    }

        /** Construit un horaire avec un horaire exprimé dans 
         *       * un autre fuseau. */
        public HoraireFuseau(HoraireFuseau horaire, Fuseau fuseau)
        {
        }

        /** Construit un horaire avec comme fuseau le 
         *       * méridien de Greenwitch */
        public HoraireFuseau(int heures, int minutes)
        {    this(heures, minutes, Fuseau.GREENWITCH);    }

        /** Retourne l'heure qu'il est au même moment
         *       * sur le méridien de Greenwitch */
        public Horaire enGreenWitch()
        {    return fuseau.enGreenWitch(this);    }

        @Override
        public boolean equals(Object o)
        {    return compareTo((Comparable)o) == 0;    }

        @Override
        public int compareTo(Comparable autre)
        {    return enGreenWitch().enMinutes() -    
                ((HoraireFuseau)autre).enGreenWitch().enMinutes();    }
}
 
