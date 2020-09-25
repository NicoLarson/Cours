package Conditions;

import java.util.Scanner;
public class valAbs
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner(System.in);
		System.out.println("Saisissez une valeur: ");
		float val = input.nextFloat();
		if(val < 0)
			val *= -1;
		System.out.println("La valeur absolu est: "+ val+".");		
		input.close();
	}
}
