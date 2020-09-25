package Opérateur;

import java.util.Scanner;

public class moyennes
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner(System.in);	
		System.out.println("Saisissez un nombre");
		float a = input.nextFloat();
		System.out.println("Saisissez un second nombre");
		float b = input.nextFloat();
		double moyenne = (a+b)/2;
		double moyenneGeo = Math.sqrt(a*b);
		System.out.println("la moyenne des deux nombres est: "+moyenne);
		System.out.println("La moyenne géométrique est: "+moyenneGeo);
	}
}
