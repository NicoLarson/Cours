package Boucles;

import java.util.Scanner;

public class tableDeMultiplications
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner (System.in);
		System.out.println("Saisissez un nombre: ");
		int n = input.nextInt();
		int i = 0;
		int tot;
		while (i<10)
		{
			i++;
			tot = n * i;
			System.out.println(n +" x "+i+" = "+tot);
		}
	}
}
