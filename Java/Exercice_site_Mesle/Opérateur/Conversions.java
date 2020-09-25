package Opérateur;

import java.util.Scanner;

public class Conversions {
	public static void main(String[] args) {
	Scanner input = new Scanner(System.in);
	char chara = input.next().charAt(0);
	System.out.println("Après " + chara + ", on a " + ++chara +".");
	input.close();
	}
}
