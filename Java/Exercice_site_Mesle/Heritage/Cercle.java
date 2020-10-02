package Heritage;

public class Cercle extends Point
{
		private double rayon = 0;
	
		public Cercle(double abs, double ord, double rayon)
		{
			super(abs, ord);
			setRayon(rayon);
		}
	
		public Cercle(Point centre, double rayon)
		{
			this(centre.getAbs(), centre.getOrd(), rayon);
		}
	
		public double getRayon()
		{
			return rayon;
		}
	
		public void setRayon(double rayon)
		{
			if (rayon > 0)
				this.rayon = rayon;
		}
	
	public static void main(String[] args)
	{
		Cercle cercle = new Cercle (1,2,0);
		System.out.println(cercle.getX()+"/"+cercle.getY()+"/"+cercle.getR());
	}
}

