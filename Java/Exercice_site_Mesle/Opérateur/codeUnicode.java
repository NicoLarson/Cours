package Opérateur;

import java.util.Scanner;

public class codeUnicode
{
	public static void main(String[] args)
	{
			char codeUnicode = '0';
			System.out.println(codeUnicode + ": " +(int)codeUnicode);
			for(int i = 0; i<9;i++)
			{
				System.out.println(++codeUnicode + ": " +(int)codeUnicode);
			}
	}
}
