import java.sql.*;

public class info {
     professorno professorid;
     classroomno classroomid;
     classinfo course;
     temptimetable tempans=new temptimetable();
     info()
     {
          String driver ="com.mysql.cj.jdbc.Driver";      
		Connection conn = null;
		Statement st = null;
		ResultSet rs = null;
          int rowcount;
		String url= "jdbc:mysql://localhost:3306/schedule";
		String user = "root";
		String password = "bruno920718";
		try {
			Class.forName(driver);
			conn = DriverManager.getConnection(url, user, password);
			System.out.println("成功連結資料庫");
			 
			st = conn.createStatement();//connection

               rs = st.executeQuery("SELECT COUNT(*) FROM professorno");//here
               rs.next();
               rowcount = rs.getInt(1);
			rs= st.executeQuery("select * from professorno");
               professorid=new professorno(rowcount);
			for(int i=0;rs.next();i++)
			{
				professorid.id[i]=rs.getInt("id")-1;
                    professorid.name[i]=rs.getString("Name");  
			}                                                          
               rs = st.executeQuery("select * from professortimetable");
               rs.next();
               for(int i=0;rs.next();i++){// 
                    for(int m=0;m<80;m++)
                    {
                         professorid.timetable[i][m]=rs.getInt(m+1);    
                    }
               }                                                           //to here is data loaded for professorname
			
               rs = st.executeQuery("SELECT COUNT(*) FROM classroomno");//here
               rs.next();
               rowcount = rs.getInt(1);
			rs= st.executeQuery("select * from classroomno");
               classroomid=new classroomno(rowcount);
			for(int i=0;rs.next();i++)
			{
				classroomid.id[i]=rs.getInt("id")-1;
                    classroomid.computer[i]=rs.getInt("classroomtype");
                    classroomid.size[i]=rs.getInt("size");
                    classroomid.name[i]=rs.getString("Name");  
			}    
               rs = st.executeQuery("select * from classroomtimetable");
               rs.next();
               for(int i=0;rs.next();i++)
               {
                         for(int m=0;m<80;m++)
                         {
                              classroomid.timetable[i][m]=rs.getInt(m+1);
                         }              //to here is data loaded for classroomname
               }
               /*for(int i=0;i<rowcount;i++)
			{
                    System.out.print(classroomid.id[i]+" "+classroomid.name[i]+" "+classroomid.size[i]);
                    System.out.println(classroomid.computer[i]);
			}*/         
               rs = st.executeQuery("SELECT COUNT(*) FROM classinfo");//here
               rs.next();
               rowcount = rs.getInt(1);
			rs= st.executeQuery("select * from classinfo");
               course=new classinfo(rowcount);
               for(int i=0;rs.next();i++)
			{
				course.id[i]=rs.getInt("id")-1;
                    course.name[i]=rs.getString("courseName");  
                    course.classtype[i]=rs.getInt("classtype");
                    course.classroomtype[i]=rs.getInt("classroomtype");
                    course.semester[i]=rs.getInt("semester")-1;
                    course.period[i]=rs.getInt("period");
                    course.professor[i]=rs.getInt("professor")-1;
                    course.group[i]=rs.getInt("group");
                    for(int cur=0;cur<rowcount;cur++){
                         if(course.classify[course.semester[i]][course.group[i]][ course.classroomtype[i]][course.classtype[i]][cur]==-1){
                              course.classify[course.semester[i]][course.group[i]][ course.classroomtype[i]][course.classtype[i]][cur]=course.id[i];
                              break;
                         }
                    }
               }
               //course.show(rowcount);
               conn.close();
		}         
		catch(ClassNotFoundException e)
		{
               System.out.println("找不到驅動程式123");
			e.printStackTrace();
		}
		catch(SQLException e)
		{
			e.printStackTrace();
               System.out.println("找不到SQL");
		}
     }
   public class professorno{//debug 完成
        public int id[];
        public String name[];
        public int[][] timetable;
        public int rownum;
        professorno(int rowcount){
          rownum=rowcount;
          id=new int[rowcount];
          name=new String[rowcount];
          timetable= new int[rowcount][80];
        }
   }
   public class classroomno{//debug 完成
        public int id[],size[],computer[];
        public int[][] timetable;
        public int rownum;
        public String name[];
        classroomno(int rowcount){
          id=new int[rowcount];
          computer=new int[rowcount];
          size=new int[rowcount];
          name=new String[rowcount];
          timetable= new int[rowcount][80];
          rownum=rowcount;
        }
   }
   public class classinfo{//debug 完成
        public int id[],professor[],period[],classroomtype[],classtype[],semester[],classify[][][][][];
        public String name[];
        public int tempclassroom[],group[];//存6個年級的課程
        classinfo(int rowcount)
        {
          id=new int[rowcount];
          professor=new int[rowcount];
          group=new int[rowcount];
          name=new String[rowcount];
          period=new int[rowcount];
          classroomtype=new int[rowcount];
          tempclassroom=new int[rowcount];
          classtype=new int[rowcount];
          semester=new int[rowcount];
          //semOrder=new int[6][rowcount];
          classify=new int[4][2][2][2][rowcount];
          for(int i=0;i<rowcount;i++)
          {
               tempclassroom [i]= -1;
          }
          for(int i=0;i<4;i++){
               for(int j=0;j<2;j++){
                    for(int k=0;k<2;k++){
                         for(int m=0;m<2;m++){
                              for(int n=0;n<rowcount;n++){
                                   classify[i][j][k][m][n]=-1;
                              }
                         }
                    }
               }
          }
        }
        void show(int rowcount){
          for(int i=0;i<4;i++){
               for(int j=0;j<2;j++){
                    for(int k=0;k<2;k++){
                         for(int m=0;m<2;m++){
                              for(int n=0;n<rowcount;n++){
                                   System.out.print(classify[i][j][k][m][n] +" ");
                              }
                              System.out.println();
                         }
                    }
               }
          }
          //System.out.print(classify[2][1][1][1][0] +" ");
        }
   }
   public class temptimetable{
        public int[][][] ans =new int[4][2][90];//此刻表代表每個年級的課表 同個時間不得有兩個數字
        temptimetable()
        { 
          for(int k=0;k<4;k++)
               for(int u=0;u<2;u++)
                    for(int m=0;m<80;m++)
                         ans[k][u][m]=-1;
        }
   }
    
}
