package Conditions;

import java.util.Scanner;

public class assurances
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner (System.in);
		System.out.println("Saisissez le montant des dommages");
		double dom = input.nextDouble();
		double franc = dom / 10;
		if(franc > 4000)
		{
			franc = 4000;
		}
		double remb = dom - franc;
		System.out.println("Montant du remboursement: "+remb);
	}
}
