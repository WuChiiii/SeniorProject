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
		String url= "jdbc:mysql://localhost:3306/undergraduate_project";
		String user = "root";
		String password = "";//enter your own password
		try {
			Class.forName(driver);
			conn = DriverManager.getConnection(url, user, password);
			System.out.println("成功連結資料庫");
			 
			st = conn.createStatement();//connection

               rs = st.executeQuery("SELECT COUNT(*) FROM users");//here
               rs.next();
               rowcount = rs.getInt(1);
			rs= st.executeQuery("select * from users");
               professorid=new professorno(rowcount);
               //System.out.println(rowcount);
			for(int i=0;rs.next();i++)
			{
				professorid.id[i]=rs.getInt("userid");
                    professorid.name[i]=rs.getString("name");  
			}                                                                                                            //to here is data loaded for professorname
			rs = st.executeQuery("select * from professorschedule");
               rs.next();
               for(int i=0;rs.next();i++){// 
                    for(int m=0;m<80;m++)
                    {
                         professorid.timetable[i][m]=0;    
                    }
               }
               rs = st.executeQuery("SELECT COUNT(*) FROM classroom");//here
               rs.next();
               rowcount = rs.getInt(1);
			rs= st.executeQuery("select * from classroom");
               classroomid=new classroomno(rowcount);
               //System.out.println(rowcount);
			for(int i=0;rs.next();i++)
			{
				classroomid.id[i]=rs.getInt("classroomid");
                    classroomid.computer[i]=rs.getInt("classroom_type");
                    classroomid.size[i]=rs.getInt("classroom_no_seat");
                    classroomid.name[i]=rs.getString("classroom_no");  
			}
               rs = st.executeQuery("select * from classroomschedule");
               rs.next();
               for(int i=0;rs.next();i++)
               {
                         for(int m=0;m<80;m++)
                         {
                              classroomid.timetable[i][m]=0;
                         }              //to here is data loaded for classroomname
               }      
                     
               rs = st.executeQuery("SELECT COUNT(*) FROM course_selection");//here
               rs.next();
               rowcount = rs.getInt(1);
			rs= st.executeQuery("select * from course_selection");
               course=new classinfo(rowcount);
               //System.out.println(rowcount);
               for(int i=0;rs.next();i++)
			{
                    String temp;
				course.id[i]=rs.getInt("id");
                    course.name[i]=rs.getString("courseName");  
                    course.classtype[i]=rs.getInt("classType");
                    course.classroomtype[i]=rs.getInt("classroomType");
                    temp=rs.getString("semester");
                    temp=temp.substring(0,1);
                    course.semester[i]= Integer.parseInt(temp)-1;
                    course.period[i]=rs.getInt("period");
                    for(int cur=0;cur<professorid.rownum;cur++){
                         if(rs.getInt("userid")==professorid.id[cur]){
                              course.professor[i]=cur;
                         }
                    }
                    course.group[i]=rs.getInt("groupType");
                    for(int cur=0;cur<rowcount;cur++){
                         if(course.classify[course.semester[i]][course.group[i]][ course.classroomtype[i]][course.classtype[i]][cur]==-1){
                              course.classify[course.semester[i]][course.group[i]][ course.classroomtype[i]][course.classtype[i]][cur]=i;
                              break;
                         }
                    }
               }
               //course.show(rowcount);
               conn.close();
		}         
		catch(ClassNotFoundException e)
		{
               System.out.println("找不到讀檔的驅動程式");
			e.printStackTrace();
		}
		catch(SQLException e)
		{
			e.printStackTrace();
               System.out.println("找不到SQL121");
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
        public int tempclassroom[],group[],cnt;//存6個年級的課程
        classinfo(int rowcount)
        {
          cnt=rowcount;
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
        public int[][][] ans =new int[4][2][80];//此刻表代表每個年級的課表 同個時間不得有兩個數字
        public int[][][] classroom=new int [4][2][80];
        temptimetable()
        { 
          for(int k=0;k<4;k++)
               for(int u=0;u<2;u++)
                    for(int m=0;m<80;m++){
                         ans[k][u][m]=-1;
                         classroom[k][u][m]=0;
                    }
          
        }
   }
    
}
