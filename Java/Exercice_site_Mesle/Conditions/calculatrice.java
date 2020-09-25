package Condition;
import java.util.Scanner;
public class calculatrice
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner (System.in);
		System.out.println("Saisissez le premier chiffre: ");
		int a = input.nextInt();
		
		System.out.println("Saisissez le second chiffre: ");
		int b = input.nextInt();

		System.out.println("Saisissez votre opérateur (+,-,*,/): ");
		char op = input.next().charAt(0);	
		
		switch (op)
		{
			case'+':
		System.out.println(a+b);
		break;
			case '-':
		System.out.println(a-b);
		break;
			case '*':
		System.out.println(a*b);
		break;
			case '/':
		System.out.println(a/b);
		break;
			default:
		System.out.println("Veuillez saisir l'un des opérateurs suivant +,-,*,/.");
		break;
		}
	}
}
