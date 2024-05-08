//import java.sql.*;


public class mainclass{                              
	public static void main (String[] args){ 
		String password = System.getenv("DBpassw") ;
		//System.out.println("success start");
		info info= new info(password);
		initsol firstsol=new initsol(); 
		int success=firstsol.createfun(info,password);
		if(success == 0){
			System.out.println("fail to add the schedule");
			return;
		}
		writebackdb db=new writebackdb();
		db.run(info,password);
		//System.out.println("test ending");
	}
}

