package DST; 
class Test

{
        public static void main(String[] args)
        {
                HoraireFuseau cinqHeures = new HoraireFuseau(5, 0, Fuseau.GREENWITCH);
                System.out.println(cinqHeures);
                HoraireFuseau greenwitch = new HoraireFuseau(new Horaire(20, 30), Fuseau.GREENWITCH);
                System.out.println(greenwitch);
                HoraireFuseau paris = new HoraireFuseau(greenwitch, Fuseau.PARIS);
                System.out.println(paris);
                HoraireFuseau newYork  = new HoraireFuseau(paris, Fuseau.NY);
                System.out.println(newYork);
                HoraireFuseau pekin  = new HoraireFuseau(newYork, Fuseau.PEKIN);
                System.out.println(pekin);
                System.out.println(pekin.equals(paris));
                System.out.println(newYork.equals(cinqHeures));
                System.out.println(newYork.compareTo(cinqHeures));
        }
}

