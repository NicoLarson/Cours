package Tableaux;

public class opMatrices
{
        public static void main(String[] args)
        {
                final int T = 3;
                int[][] a = new int[T][T];
                int[][] b = new int[T][T];
                for (int i = 0;i < T;i++)
                {
                        for(int j = 0;j<T;i++)
                        {
                                a[i][j]=100*i + 10*1;
                                System.out.println(a[i][j]);
                        }
                }
        }
}
