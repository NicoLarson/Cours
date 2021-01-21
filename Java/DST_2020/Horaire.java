package DST;

class Horaire implements Comparable
{
        private int heures, minutes;

        public Horaire(int heures, int minutes)
        {    while(heures < 0)
                heures += 24;
                this.heures = heures%24;
                this.minutes = minutes%60; }

        private Horaire(int minutes)
        {    this(minutes/60, minutes%60); }

        public Horaire(Horaire horaire)
        {    this.heures = horaire.heures;
                this.minutes = horaire.minutes; }

        public int getHeures()
        {    return heures; }

        public int getMinutes()
        {    return minutes; }



        @Override
        public String toString()
        {
                return heures + ":" + minutes;
        }

        protected int enMinutes()
        {    return heures*60 + minutes; }

        private Horaire oppose()
        {    return new Horaire(24 * 60 - enMinutes()); }

        public Horaire additionne(Horaire autre)
        {    return new Horaire(enMinutes() + autre.enMinutes()); }

        public Horaire soustrait(Horaire autre)
        {    return additionne(autre.oppose()); }

        @Override
        public int compareTo(Comparable autre)
        {    return enMinutes() - ((Horaire)autre).enMinutes(); }
}
