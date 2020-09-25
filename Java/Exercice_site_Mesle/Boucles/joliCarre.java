package Boucles;

import java.util.Scanner;

public class joliCarre
{
	public static void main (String[] args)
	{
		Scanner input = new Scanner (System.in);
		System.out.println("Saisissez une valeur: ");
		int n = input.nextInt();
		input.close();
		for (int i=0;i<n;i++)
		{
			System.out.println("");
			System.out.println("");
			for(int j=0;j<n;j++)
			{
				System.out.print("X ");
			}	
		}	
	}

}
