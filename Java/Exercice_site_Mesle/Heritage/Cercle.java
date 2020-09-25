package Heritage;

public class Cercle
{
	private class Cercle extends Point
	{
	private double r = 0;
	public Cercle(double x, double y, double r)
	{
		super(x,y);
		setR(r);	
	}	
	
	public Cercle(Point center,double r)
	{
		this(center.getx(),center.gety(), r);
	}
	public double getR()
	{
		return r;
	}
	public void setR(double r)
	{
		if(r > 0)
			this.r=r;
	}
	
	public static void main(String[] args)
	{
		Cercle cercle = new Cercle (1,2,0);
		System.out.println(cercle.getX()+"/"+cercle.getY()+"/"+cercle.getR);
	}
	}}

