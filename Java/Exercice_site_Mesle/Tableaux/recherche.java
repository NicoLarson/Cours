package Tableaux;

import java.util.Scanner;

public class recherche
{
	public static void main (String[] args)
	{
		Scanner input = new Scanner (System.in);
		int[] tab = new int[]{23,3,0,87,2,5,8,1};
		System.out.println("Saisissez un nombre: ");
		int num = input.nextInt();
		boolean ok = false;
		for(int i=0;i<tab.length;i++)
		{
			if(num == tab[i])
			{
				System.out.println("Ce nombre se trouve dans le tableau.");
				ok = true;
				break;
			}	
		}		
		if(ok == false)
				System.out.println("Ce nombre ne se trouve pas dans le tableau.");
	}
}
