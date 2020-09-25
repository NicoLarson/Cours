package Opérateur;

import java.util.Scanner;

public class cartons_camions
{
	public static void main(String[] arg)
	{
		Scanner input = new Scanner (System.in);
		System.out.println("Veuillez saisir le poids limite en kilo.");
		float M = input.nextFloat();
		System.out.println("Veuillez indiquer le poids d'un carton.");
		float k = input.nextFloat();
		int numbMaxCarton = (int)(M/k);
		System.out.println("Vous pouvez mettre " + numbMaxCarton + " cartons dans le camion.");
	}


}
