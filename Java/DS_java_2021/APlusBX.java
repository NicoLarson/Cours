import java.util.Scanner;

/*
 * Représente une expression de la forme a + bx
 */

public class APlusBX 
{
	private int a, b;
	
	public APlusBX(int a, int b)
	{
                this.a = a;
                this.b = b;
                return a + " + " + b + "X";
	}	

	/*
	 * Retourne 1 + 0X
	 */
	
	public static APlusBX un()
	{
                
                return a + " + " + b + "X";
	}	
	

	/*
	 * Retourne 0 + 0X
	 */
	
	public static APlusBX zero()
	{
                return 0;
	}

	/*
	 * Retourne la somme de this et autre
	 * Par exemple, si this représente 1 + 2X et autre 3 - X, 
	 * alors on retourne 4 + X 
	 */
	
	public APlusBX somme(APlusBX autre) 
	{
                return 1;
	}
	
	/*
	 * Retourne l'oppose de this. 
	 * Par exemple, si this représente 1 - 2X 
	 * alors on retourne -1 + 2X  
	 */
	
	public APlusBX oppose() 
	{
                return 2;
	}
	
	/*
	 * Retourne la soustraction de this et autre
	 * Par exemple, si this représente 1 + 2X et autre 3 - X, 
	 * alors on retourne -2 + 3X 
	 */
	public APlusBX soustraction(APlusBX autre) 
	{
                return 3;
	}

	/*
	 * Retourne la valeur de l'expression si l'on replace X 
	 * par la valeur passée en paramètre. 
	 * Par exemple, si this représente 1 + 2X et x = 3, 
	 * alors on retourne 1 + 2(3) = 7 
	 */
	public int evaluation(int x) 
	{
                return x;
	}
	
	@Override
	public String toString() 
	{	
                
	}
	
	/*
	 * Demande à l'utilisateur de saisir 
	 * 1°) une première expression
	 * 2°) un opérateur : + (pour additionner), - (pour soustraire), = (pour évaluer)   
	 * 3°) une deuxième expression
	 * 
	 * Pour saisir une expression, deux solutions :
	 * 1°) 0 représente l'expression 0 + 0X 
	 * 2°) 1 représente l'expression 1 + 0X 
	 * 3°) E A B représente l'expression A + BX, si par exemple
	 * l'utilisateur saisit E 1 2, alors cela représente l'expression 1 + 2X
	 * 
	 * Une fois les saisies terminées, vous allez appliquer l'opérateur sur les deux expressions.
	 * Par exemple :
	 * 1°) "1 + 0" représente la somme de 1 + 0X et 0 + 0X, donc vous affichez 1 + 0X
	 * 2°) "E 1 2 = 3" représente l'évaluation de l'expression 1 + 2X avec X = 3, donc on affiche 7
	 * 3°) "E 1 2 - E 3 -1" représente la soustraction de 1 + 2X et 3 - X, donc on affiche -2 + 3X 
	 */	
	public static void main(String[] args) 
	{		
                Scanner input = new Scanner (System.in);
                System.out.println("Saisissez une première expression");
                System.out.println("Un opérateur : + (pour additionner), - (pour soustraire), = (pour évaluer)");
                System.out.println("Saisissez une première expression");

	}
}
