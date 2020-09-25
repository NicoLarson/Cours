package Conditions;

import java.util.Scanner;

public class major
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner (System.in);
		System.out.println("Quelle âge avez vous?");
		int age = input.nextInt();
		if(age < 18)
		{
			System.out.println("Vous êtes mineurs.");
		}else{
			System.out.println("Vous êtes majeurs.");
		}
	}


}
