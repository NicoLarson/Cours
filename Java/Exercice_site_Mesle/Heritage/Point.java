package Heritage;

public class Point 
{
	private double x,y;
	
	Point (double x, double y)
	{
		this.x =x;
		this.y=y;
	}
	public double getX()
	{
		return x;
	}
 	public double getY()
	{
		return y;
	}	
	public void setX(double x)
	{
		this.x = x;
	}
	public void setY(double y)
	{
		this.y = y;
	}
	public static void main(String[] args)
	{
		Point point = new Point (3,5);
		System.out.println(point.getX() + "/" + point.getY());	
	}
}
