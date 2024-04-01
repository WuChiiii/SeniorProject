//import java.sql.*;


public class mainclass{                              
	public static void main (String[] args){ 
		String password = System.getenv("DBpassw") ;
		System.out.println("success start");
		info info= new info(password);
		initsol firstsol=new initsol(); 
		firstsol.createfun(info,password);
		writebackdb db=new writebackdb();
		db.run(info,password);
		System.out.println("test ending");
	}
}

