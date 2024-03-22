//import java.sql.*;


public class mainclass{                              
	public static void main (String[] args){ 
		System.out.println("success start");
		info info= new info();
		initsol firstsol=new initsol(); 
		firstsol.createfun(info);
		writebackdb db=new writebackdb();
		db.run(info);
		System.out.println("success ending");
	}
}

