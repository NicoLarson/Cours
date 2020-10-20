package Objets;

public class opRationnel
{
 public int num, den;
 public String toString()
 {
  return num+"/"+den;
 }
 
 static opRationnel cree(int num, int den)
 {
         opRationnel r = new opRationnel();
       
  return r;

 }
 
 public opRationnel copie()
 {
  return null;
 }

 /**
  * Retourne le rationnel qu'il faut additioner
  * à this pour obtenir 0.
  */
 
 public opRationnel oppose()
 {
  return null;
 }

 /**
  * Retourne le rationnel par lequel il faut multiplier 
  * this pour obtenir 1.
  */
 public opRationnel inverse()
 {
  return null;
 }

 /**
  * Retourne le plus grand commun diviseur de a et b
  * Utilisez les propriétés suivantes :
  * pgcd(a, 0) = a
  * pgcd(a, b) = pgcd(b, a modulo b)
  * 
  *  Modifier ensuite la méthode "cree(int, int)" 
  *  pour que les rationnels soient toujours créés 
  *  sous forme irréductible. 
  */
 
 static int pgcd(int a, int b)
 {
  return 0;
 }

 /**
  * Retourne vrai ssi le rationnel est positif.
  */
 public boolean estPositif()
 {
  return true;
 }

 public opRationnel plus(opRationnel autre)
 {
  return null;
 }

 public opRationnel moins(opRationnel autre)
 {
  return null;
 }

 public opRationnel multiplie(opRationnel autre)
 {
  return null;
 }

 public opRationnel divise(opRationnel autre)
 {
  return null;
 }

 /**
  * Retourne vrai ssi this - autre vaut zéro.
  */
 
 public boolean egale(opRationnel autre)
 {
  return true;
 }
 
 /**
  * Retourne :
  * 1 si this > autre
  * 0 si this est égal à autre
  * -1 si this < autre 
  */
 
 public int compareTo(opRationnel autre)
 {
  return 0;
 }

 public static void main(String[] args)
 {
  opRationnel a, b;
  a = new opRationnel();
  b = new opRationnel();
  a.num = 1;
  a.den = 2;
  b.num = 4;
  b.den = 3;
  System.out.println("a = 1/2 = " + a);
  System.out.println("b = 4/3 = " + b);
  System.out.println("compareTo(" + a + ", " + b + ") = -1 = "
    + a.compareTo(b));
  System.out.println("1/2 = " + a.copie());
  System.out.println("-1/2 = " + a.oppose());
  System.out.println("11/6 = " + a.plus(b));
  System.out.println("2/3 = " + a.multiplie(b));
  System.out.println("3/8 = " + a.divise(b));
 }
}
