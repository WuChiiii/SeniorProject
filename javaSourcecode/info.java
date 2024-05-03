import java.sql.*;

public class info {
     professorno professorid;
     classroomno classroomid;
     classinfo course;
     temptimetable tempans = new temptimetable();

     info(String password) {
          String driver = "com.mysql.cj.jdbc.Driver";
          Connection conn = null, conn2=null;
          Statement st = null,st2=null;
          ResultSet rs = null;
          ResultSet result = null;
          int rowcount;
          String url = "jdbc:mysql://localhost:3306/undergraduate_project";
          String user = "root";
          try {
               Class.forName(driver);               
               conn = DriverManager.getConnection(url, user, password);
               conn2 = DriverManager.getConnection(url, user, password);
               st = conn.createStatement();
               st2 = conn2.createStatement();

               rs = st.executeQuery("SELECT COUNT(*) FROM teachers");
               rs.next();
               rowcount = rs.getInt(1);
               rs = st.executeQuery("select * from teachers");
               professorid = new professorno(rowcount);
               for (int i = 0; rs.next(); i++) {
                    professorid.id[i] = rs.getInt("teacherid");
                    professorid.name[i] = rs.getString("teacher_name");
                    String temp = rs.getString("teacher_department");
                    if (temp.equals("CSIE")) {
                         professorid.department[i] = 0;
                    } else {
                         professorid.department[i] = 1;
                    }
               }
               rs = st.executeQuery("select * from professorschedule");
               for (int i = 0; rs.next(); i++) {//
                    for (int m = 0; m < 80; m++) {
                         professorid.timetable[i][m] = 0;
                    }
               }
               rs = st.executeQuery("SELECT COUNT(*) FROM classroom");
               rs.next();
               rowcount = rs.getInt(1);
               rs = st.executeQuery("select * from classroom");
               classroomid = new classroomno(rowcount);
               for (int i = 0; rs.next(); i++) {
                    classroomid.id[i] = rs.getInt("classroomid");
                    classroomid.computer[i] = rs.getInt("classroom_type");
                    classroomid.size[i] = rs.getInt("classroom_no_seat");
                    classroomid.name[i] = rs.getString("classroom_no");
                    String temp = rs.getString("classroom_dept");
                    if (temp.equals("CSIE")) {
                         classroomid.department[i] = 0;
                    } else {
                         classroomid.department[i] = 1;// 外系
                    }
               }
               rs = st.executeQuery("select * from classroomschedule");
               for (int i = 0; rs.next(); i++) {
                    for (int m = 0; m < 80; m++) {
                         classroomid.timetable[i][m] = 0;
                    } 
               }

               rs = st.executeQuery("SELECT COUNT(*) FROM course_selection");
               rs.next();
               // result = st.executeQuery("SELECT COUNT(*) FROM course_selection");
               // result.next();
               rowcount = rs.getInt(1);
               rs = st.executeQuery("select  * from course_selection");
               course = new classinfo(rowcount);
               for (int i = 0; rs.next(); i++) {
                    String temp;
                    course.id[i] = rs.getInt("id");
                    course.name[i] = rs.getString("courseName");
                    //System.out.println(course.name[i]);
                    course.classtype[i] = rs.getInt("classType");
                    course.classroomtype[i] = rs.getInt("classroomType");
                    course.classroomflag[i]=0;
                    temp=rs.getString("classroom");
                    if(temp!=null && temp.length()>1){
                         //System.out.println(temp);
                         String sql;
                         int tmp;
                         sql="select * from classroom where classroom_no = '" + temp + "' ;";
                         result = st2.executeQuery(sql);
                         result.next();
                         tmp = result.getInt("classroomid");
                         //System.out.println(temp);
                         for(int k=0;k<classroomid.rownum;k++){
                              if(classroomid.id[k]==tmp){
                              course.preclassroom[i] = k;
                              tmp=k;
                              course.classroomflag[i]=1;
                              break;
                              }
                         }
                    }
                    temp = rs.getString("semester");
                    temp = temp.substring(0, 1);
                    course.semester[i] = Integer.parseInt(temp) - 1;
                    temp = rs.getString("time");
                    if(temp!=null && temp.length()>1)
                         course.priority[i]=1;
                    else 
                         course.priority[i]=0;
                    course.period[i] = rs.getInt("period");
                    for (int cur = 0; cur < professorid.rownum; cur++) {
                         if (rs.getInt("teacherid") == professorid.id[cur]) {
                              course.professor[i] = cur;
                         }
                    }
                    course.group[i] = rs.getInt("groupType");
                    if(course.semester[i]==3){
                         course.group[i]=1;
                    }
                    for (int cur = 0; cur < rowcount; cur++) {
                         if (course.classify[course.semester[i]][course.group[i]][course.classroomtype[i]][course.classtype[i]][cur] == -1) {
                              course.classify[course.semester[i]][course.group[i]][course.classroomtype[i]][course.classtype[i]][cur] = i;
                              break;
                         }
                    }
               }
               conn.close();
               conn2.close();
          } catch (ClassNotFoundException e) {
               System.out.println("can't find driver for reading files, please check info.java");
               e.printStackTrace();
          } catch (SQLException e) {
               e.printStackTrace();
               System.out.println("SQL access denied, please check info.java");
          }
     }

     public class professorno {
          public int id[], department[];
          public String name[];
          public int[][] timetable;
          public int rownum;

          professorno(int rowcount) {
               rownum = rowcount;
               id = new int[rowcount];
               department = new int[rowcount];
               name = new String[rowcount];
               timetable = new int[rowcount][80];
          }
     }

     public class classroomno {
          public int id[], size[], computer[], department[];
          public int[][] timetable;
          public int rownum;
          public String name[];

          classroomno(int rowcount) {
               id = new int[rowcount];
               computer = new int[rowcount];
               department = new int[rowcount];
               size = new int[rowcount];
               name = new String[rowcount];
               timetable = new int[rowcount][80];
               rownum = rowcount;
          }
     }

     public class classinfo {
          public int id[], professor[], period[], classroomtype[], classtype[], semester[], classify[][][][][],
                    priority[],classroomflag[];
          public String name[];
          public int tempclassroom[], group[], cnt,preclassroom[];

          classinfo(int rowcount) {
               cnt = rowcount;
               classroomflag = new int[rowcount];
               preclassroom = new int[rowcount];
               id = new int[rowcount];
               professor = new int[rowcount];
               group = new int[rowcount];
               priority = new int[rowcount];
               name = new String[rowcount];
               period = new int[rowcount];
               classroomtype = new int[rowcount];
               tempclassroom = new int[rowcount];
               classtype = new int[rowcount];
               semester = new int[rowcount];
               classify = new int[4][2][3][2][rowcount];
               for (int i = 0; i < rowcount; i++) {
                    tempclassroom[i] = -1;
               }
               for (int i = 0; i < 4; i++) {
                    for (int j = 0; j < 2; j++) {
                         for (int k = 0; k < 3; k++) {
                              for (int m = 0; m < 2; m++) {
                                   for (int n = 0; n < rowcount; n++) {
                                        classify[i][j][k][m][n] = -1;
                                   }
                              }
                         }
                    }
               }
          }

          void show(int rowcount) {
               for (int i = 0; i < 4; i++) {
                    for (int j = 0; j < 2; j++) {
                         for (int k = 0; k < 3; k++) {
                              for (int m = 0; m < 2; m++) {
                                   for (int n = 0; n < rowcount; n++) {
                                        System.out.print(classify[i][j][k][m][n] + " ");
                                   }
                                   System.out.println();
                              }
                         }
                    }
               }
          }
     }

     public class temptimetable {
          public int[][][] ans = new int[4][2][80];// 此刻表代表每個年級的課表 同個時間不得有兩個數字
          public int[][][] classroom = new int[4][2][80];

          temptimetable() {
               for (int k = 0; k < 4; k++)
                    for (int u = 0; u < 2; u++)
                         for (int m = 0; m < 80; m++) {
                              ans[k][u][m] = -1;
                              classroom[k][u][m] = 0;
                         }

          }
     }

}
