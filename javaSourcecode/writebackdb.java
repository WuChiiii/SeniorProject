import java.sql.*;

public class writebackdb {
    writebackdb(){}
    void run(info info){
        String driver ="com.mysql.cj.jdbc.Driver";      
		Connection conn = null;
		Statement st = null;
		String url= "jdbc:mysql://localhost:3306/undergraduate_project";
		String user = "root";
		String password = "";//enter your own password
		try {
			Class.forName(driver);
			conn = DriverManager.getConnection(url, user, password);
			st = conn.createStatement();//connection
            String droptable="DROP TABLE IF EXISTS normalschedule";
            st.execute(droptable);
            droptable="DROP TABLE IF EXISTS internationalschedule";
            st.execute(droptable);
            String createnormaltable ="CREATE TABLE if not exists normalschedule "+
                "(`1-1` INT,`1-2` INT,`1-3` INT,`1-4` INT,`1-5` INT,`1-6` INT,`1-7` INT,"+
                "`1-8` INT,`1-9` INT,`1-10` INT,`1-11` INT,`1-12` INT,`1-13` INT,`1-14` INT,`1-15` INT,"+
                "`1-16` INT ,`2-1` INT,`2-2` INT,`2-3` INT,`2-4` INT,`2-5` INT,`2-6` INT,`2-7` INT,"+
                "`2-8` INT,`2-9` INT,`2-10` INT,`2-11` INT,`2-12` INT,`2-13` INT,`2-14` INT,`2-15` INT,"+
                "`2-16` INT,`3-1` INT,`3-2` INT,`3-3` INT,`3-4` INT,`3-5` INT,`3-6` INT,`3-7` INT,"+
                "`3-8` INT,`3-9` INT,`3-10` INT,`3-11` INT,`3-12` INT,`3-13` INT,`3-14` INT,`3-15` INT,"+
                "`3-16` INT ,`4-1` INT,`4-2` INT,`4-3` INT,`4-4` INT,`4-5` INT,`4-6` INT,`4-7` INT,`4-8` INT,"+
                "`4-9` INT,`4-10` INT,`4-11` INT,`4-12` INT,`4-13` INT,`4-14` INT,`4-15` INT,`4-16` INT,"+
                "`5-1` INT,`5-2` INT,`5-3` INT,`5-4` INT,`5-5` INT,`5-6` INT,`5-7` INT,`5-8` INT,`5-9` INT,"+
                "`5-10` INT,`5-11` INT,`5-12` INT,`5-13` INT,`5-14` INT,`5-15` INT,`5-16` INT)"+
                "ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ; ";
            String createinternationaltable ="CREATE TABLE if not exists internationalschedule "+
                "(`1-1` INT,`1-2` INT,`1-3` INT,`1-4` INT,`1-5` INT,`1-6` INT,`1-7` INT,"+
                "`1-8` INT,`1-9` INT,`1-10` INT,`1-11` INT,`1-12` INT,`1-13` INT,`1-14` INT,`1-15` INT,"+
                "`1-16` INT ,`2-1` INT,`2-2` INT,`2-3` INT,`2-4` INT,`2-5` INT,`2-6` INT,`2-7` INT,"+
                "`2-8` INT,`2-9` INT,`2-10` INT,`2-11` INT,`2-12` INT,`2-13` INT,`2-14` INT,`2-15` INT,"+
                "`2-16` INT,`3-1` INT,`3-2` INT,`3-3` INT,`3-4` INT,`3-5` INT,`3-6` INT,`3-7` INT,"+
                "`3-8` INT,`3-9` INT,`3-10` INT,`3-11` INT,`3-12` INT,`3-13` INT,`3-14` INT,`3-15` INT,"+
                "`3-16` INT ,`4-1` INT,`4-2` INT,`4-3` INT,`4-4` INT,`4-5` INT,`4-6` INT,`4-7` INT,`4-8` INT,"+
                "`4-9` INT,`4-10` INT,`4-11` INT,`4-12` INT,`4-13` INT,`4-14` INT,`4-15` INT,`4-16` INT,"+
                "`5-1` INT,`5-2` INT,`5-3` INT,`5-4` INT,`5-5` INT,`5-6` INT,`5-7` INT,`5-8` INT,`5-9` INT,"+
                "`5-10` INT,`5-11` INT,`5-12` INT,`5-13` INT,`5-14` INT,`5-15` INT,`5-16` INT)"+
                "ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ; ";
            String createclassroompair="CREATE TABLE if not exists `classroompair` ("+
                "`classinfoid` int,"+
                "`classroom` int"+
                ") ENGINE=InnoDB DEFAULT CHARACTER SET = utf8mb4 ;";
            st.execute(createinternationaltable);
            st.execute(createnormaltable);
            st.execute(createclassroompair);

            // Insert data into the table
            for(int i=0;i<4;i++){
                for(int k=0;k<2;k++){
                    for(int m=0;m<80;m++){
                        System.out.print(info.tempans.ans[i][k][m] );
                    }
                    System.out.println(" ");
                }
            }
            for(int i=0;i<4;i++){
                String insertDataSQL = "INSERT INTO  normalschedule VALUES ("+
                info.tempans.ans[i][0][0]+","+info.tempans.ans[i][0][1]+","+info.tempans.ans[i][0][2]+","+info.tempans.ans[i][0][3]+","+info.tempans.ans[i][0][4]+","+info.tempans.ans[i][0][5]+","+info.tempans.ans[i][0][6]+","+info.tempans.ans[i][0][7]+","+
                info.tempans.ans[i][0][8]+","+info.tempans.ans[i][0][9]+","+info.tempans.ans[i][0][10]+","+info.tempans.ans[i][0][11]+","+info.tempans.ans[i][0][12]+","+info.tempans.ans[i][0][13]+","+info.tempans.ans[i][0][14]+","+info.tempans.ans[i][0][15]+","+
                info.tempans.ans[i][0][16]+","+info.tempans.ans[i][0][17]+","+info.tempans.ans[i][0][18]+","+info.tempans.ans[i][0][19]+","+info.tempans.ans[i][0][20]+","+info.tempans.ans[i][0][21]+","+info.tempans.ans[i][0][22]+","+info.tempans.ans[i][0][23]+","+
                info.tempans.ans[i][0][24]+","+info.tempans.ans[i][0][25]+","+info.tempans.ans[i][0][26]+","+info.tempans.ans[i][0][27]+","+info.tempans.ans[i][0][28]+","+info.tempans.ans[i][0][29]+","+info.tempans.ans[i][0][30]+","+info.tempans.ans[i][0][31]+","+
                info.tempans.ans[i][0][32]+","+info.tempans.ans[i][0][33]+","+info.tempans.ans[i][0][34]+","+info.tempans.ans[i][0][35]+","+info.tempans.ans[i][0][36]+","+info.tempans.ans[i][0][37]+","+info.tempans.ans[i][0][38]+","+info.tempans.ans[i][0][39]+","+
                info.tempans.ans[i][0][40]+","+info.tempans.ans[i][0][41]+","+info.tempans.ans[i][0][42]+","+info.tempans.ans[i][0][43]+","+info.tempans.ans[i][0][44]+","+info.tempans.ans[i][0][45]+","+info.tempans.ans[i][0][46]+","+info.tempans.ans[i][0][47]+","+
                info.tempans.ans[i][0][48]+","+info.tempans.ans[i][0][49]+","+info.tempans.ans[i][0][50]+","+info.tempans.ans[i][0][51]+","+info.tempans.ans[i][0][52]+","+info.tempans.ans[i][0][53]+","+info.tempans.ans[i][0][54]+","+info.tempans.ans[i][0][55]+","+
                info.tempans.ans[i][0][56]+","+info.tempans.ans[i][0][57]+","+info.tempans.ans[i][0][58]+","+info.tempans.ans[i][0][59]+","+info.tempans.ans[i][0][60]+","+info.tempans.ans[i][0][61]+","+info.tempans.ans[i][0][62]+","+info.tempans.ans[i][0][63]+","+
                info.tempans.ans[i][0][64]+","+info.tempans.ans[i][0][65]+","+info.tempans.ans[i][0][66]+","+info.tempans.ans[i][0][67]+","+info.tempans.ans[i][0][68]+","+info.tempans.ans[i][0][69]+","+info.tempans.ans[i][0][70]+","+info.tempans.ans[i][0][71]+","+
                info.tempans.ans[i][0][72]+","+info.tempans.ans[i][0][73]+","+info.tempans.ans[i][0][74]+","+info.tempans.ans[i][0][75]+","+info.tempans.ans[i][0][76]+","+info.tempans.ans[i][0][77]+","+info.tempans.ans[i][0][78]+","+info.tempans.ans[i][0][79]+
                ")";
                st.executeUpdate(insertDataSQL);
            }
            for(int i=0;i<4;i++){
                String insertDataSQL = "INSERT INTO  internationalschedule VALUES ("+
                info.tempans.ans[i][1][0]+","+info.tempans.ans[i][1][1]+","+info.tempans.ans[i][1][2]+","+info.tempans.ans[i][1][3]+","+info.tempans.ans[i][1][4]+","+info.tempans.ans[i][1][5]+","+info.tempans.ans[i][1][6]+","+info.tempans.ans[i][1][7]+","+
                info.tempans.ans[i][1][8]+","+info.tempans.ans[i][1][9]+","+info.tempans.ans[i][1][11]+","+info.tempans.ans[i][1][11]+","+info.tempans.ans[i][1][12]+","+info.tempans.ans[i][1][13]+","+info.tempans.ans[i][1][14]+","+info.tempans.ans[i][1][15]+","+
                info.tempans.ans[i][1][16]+","+info.tempans.ans[i][1][17]+","+info.tempans.ans[i][1][18]+","+info.tempans.ans[i][1][19]+","+info.tempans.ans[i][1][21]+","+info.tempans.ans[i][1][21]+","+info.tempans.ans[i][1][22]+","+info.tempans.ans[i][1][23]+","+
                info.tempans.ans[i][1][24]+","+info.tempans.ans[i][1][25]+","+info.tempans.ans[i][1][26]+","+info.tempans.ans[i][1][27]+","+info.tempans.ans[i][1][28]+","+info.tempans.ans[i][1][29]+","+info.tempans.ans[i][1][31]+","+info.tempans.ans[i][1][31]+","+
                info.tempans.ans[i][1][32]+","+info.tempans.ans[i][1][33]+","+info.tempans.ans[i][1][34]+","+info.tempans.ans[i][1][35]+","+info.tempans.ans[i][1][36]+","+info.tempans.ans[i][1][37]+","+info.tempans.ans[i][1][38]+","+info.tempans.ans[i][1][39]+","+
                info.tempans.ans[i][1][41]+","+info.tempans.ans[i][1][41]+","+info.tempans.ans[i][1][42]+","+info.tempans.ans[i][1][43]+","+info.tempans.ans[i][1][44]+","+info.tempans.ans[i][1][45]+","+info.tempans.ans[i][1][46]+","+info.tempans.ans[i][1][47]+","+
                info.tempans.ans[i][1][48]+","+info.tempans.ans[i][1][49]+","+info.tempans.ans[i][1][51]+","+info.tempans.ans[i][1][51]+","+info.tempans.ans[i][1][52]+","+info.tempans.ans[i][1][53]+","+info.tempans.ans[i][1][54]+","+info.tempans.ans[i][1][55]+","+
                info.tempans.ans[i][1][56]+","+info.tempans.ans[i][1][57]+","+info.tempans.ans[i][1][58]+","+info.tempans.ans[i][1][59]+","+info.tempans.ans[i][1][61]+","+info.tempans.ans[i][1][61]+","+info.tempans.ans[i][1][62]+","+info.tempans.ans[i][1][63]+","+
                info.tempans.ans[i][1][64]+","+info.tempans.ans[i][1][65]+","+info.tempans.ans[i][1][66]+","+info.tempans.ans[i][1][67]+","+info.tempans.ans[i][1][68]+","+info.tempans.ans[i][1][69]+","+info.tempans.ans[i][1][71]+","+info.tempans.ans[i][1][71]+","+
                info.tempans.ans[i][1][72]+","+info.tempans.ans[i][1][73]+","+info.tempans.ans[i][1][74]+","+info.tempans.ans[i][1][75]+","+info.tempans.ans[i][1][76]+","+info.tempans.ans[i][1][77]+","+info.tempans.ans[i][1][78]+","+info.tempans.ans[i][1][79]+
                ")";
                st.executeUpdate(insertDataSQL);
            }
            for(int i=0;i<info.course.cnt;i++){
                String insertpair="INSERT INTO  classroompair VALUES ("+info.course.id[i]+","+info.course.tempclassroom[i]+")";
                st.executeUpdate(insertpair);          
            }
            

               conn.close();
		}         
		catch(ClassNotFoundException e)
		{
               System.out.println("找不到寫入之驅動程式");
			e.printStackTrace();
		}
		catch(SQLException e)
		{
			e.printStackTrace();
               System.out.println("找不到SQL");
		}
    }
}
