package Boucles;
import java.util.Scanner;
public class compteARebours
{
	public static void main (String[] args)
	{
		Scanner input = new Scanner (System.in);
		System.out.println("Saisissez une valeur numérique positive: ");
		int n = input.nextInt();
		/*Tant que
		while(n > 0)
		{
			n--;
			System.out.println(n);	
		}
		/*Répéter jusqu'à
		do
		{
			n--;
			System.out.println(n);	
		}
		while(n>0);
		/*Pour*/
		for(int i=n;i>0;i--)
			System.out.println(--n);	
	}
}
