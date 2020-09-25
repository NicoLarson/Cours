package Conditions;

import java.util.Scanner;

public class admission
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner (System.in);
		System.out.println("Saisissez votre note: ");
		int a = input.nextInt();
		if(a < 8)
		{
			System.out.println("Ajourné!");	
		}
		else if(a<10)
		{
			System.out.println("Rattrapage!");	
		}
		else
		{
			System.out.println("Admis!");	
		}
	}
}
	

