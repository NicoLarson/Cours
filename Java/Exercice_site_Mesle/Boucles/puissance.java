package Boucle;

import java.util.Scanner;

public class puissance
{
	public static void main (String[] args)
	{
		Scanner input = new Scanner (System.in);
		System.out.println("Saisissez une valeurs numériques: ");
		int b = input.nextInt();	
		System.out.println("Saisissez une puissance: ");
		int n = input.nextInt();	
		int tot=1;
		if(n<0)
		{	
			System.out.println("Veuillez saisir une puissance positive.");
		}else{
			for(int i=n;i>0;i--)
			{
				tot = tot * b;
			}
			System.out.println(tot);
		}
	}

}
