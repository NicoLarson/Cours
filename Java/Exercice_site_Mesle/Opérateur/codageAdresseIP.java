package Opérateur;

import java.util.Scanner;

public class codageAdressIp
{
	public static void main(String[] args)
	{
		Scanner input = new Scanner (System.in);	
		String addIP;
		int ipPart1 = input.nextInt();
		int ipPart2 = input.nextInt();
		int ipPart3 = input.nextInt();
		int ipPart4 = input.nextInt();
		System.out.println(ipPart1+"."+ipPart2+"."+ipPart3+"."+ipPart4+".");
	}
}
