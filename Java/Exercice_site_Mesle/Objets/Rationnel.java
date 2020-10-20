package Objets;

public class Rationnel
{
        float num;
        float den;

        public static void main(String[] args)
        {
                Rationnel a;
                a = new Rationnel();
                a.num = 1;
                a.den = 2;

                Rationnel b;
                b = new Rationnel();
                b.num = 4;
                b.den = 3;
                System.out.println("Numérateur a: " + a.num + ". "+ "Dénominateur a: " + a.den);
                System.out.println("Num b: "+b.num+". "+"Dén b: "+b.den);
        }

}
