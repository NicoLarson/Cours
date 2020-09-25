package variable;
import java.util.Scanner;
public class PermutVar
{
    Scanner scanner = new Scanner(System.in);
    System.out.print("Saisisez x :");
    int x = scanner.next();
    System.out.print("Saisisez y :");
    int y = Scanner.next();
    x = y + x;
    y = x - y;
    x = x -y;
    System.out.println("x = " + "x" + "; " + "y = " + "y" + "; ");
}

--------------------------
Correction

package variables;

import java.util.Scanner;

public class PermutationDeuxValeurs
{
	public static void main(String[] args)
	{
		Scanner scanner = new Scanner(System.in);
		System.out.print("Saisis deux valeurs\n* ");
		int i = scanner.nextInt();
		System.out.print("* ");
		int j = scanner.nextInt();
		int temp = i;
		i = j;
		j = temp;
		System.out.println("AprÃ¨s permutation, les variables contiennent " + i + " et " + j + ".");
		scanner.close();
	}	
}