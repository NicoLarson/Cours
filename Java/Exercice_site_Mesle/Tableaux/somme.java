package Tableaux;

public class somme
{
	public static void main(String[] arg)
	{
		int[] tab = new int[]{1,3,19,3,98};	
		int somme=0;
		for (int i=0;i<tab.length;i++)
		{
			somme += tab[i];
		}
		System.out.println(somme);
	}
}
