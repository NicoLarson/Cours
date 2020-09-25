package Boucles;

import java.util.Scanner;

public class factorielle
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner (System.in);
		System.out.println("Saisissez un nombre: ");
		int fact = input.nextInt();
		int n = fact;
/*		while(n>1)
		{
			n--;
			fact *=n;
		}
		do
		{
		n--;
		fact*=n;
		}
		while(n>1);*/
		for(int i=fact-1;i>0;i--)
		{
			fact*=i;	
		}
		System.out.println(fact);
	}
}
