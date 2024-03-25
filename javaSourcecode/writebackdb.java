import java.sql.*;

public class writebackdb {
    writebackdb(){}
    void run(info info,String password){
        String driver ="com.mysql.cj.jdbc.Driver";      
		Connection conn = null;
		Statement st = null;
		ResultSet rs = null;
		String url= "jdbc:mysql://localhost:3306/undergraduate_project";
		String user = "root";
		try {
			Class.forName(driver);
			conn = DriverManager.getConnection(url, user, password);
			st = conn.createStatement();//connection
            String droptable="DROP TABLE IF EXISTS normalschedule";
            st.execute(droptable);
            droptable="DROP TABLE IF EXISTS internationalschedule";
            st.execute(droptable);
            String dropprofessortable="DROP TABLE IF EXISTS professorschedule";
            st.execute(dropprofessortable);
            droptable="DROP TABLE IF EXISTS classroomschedule";
            st.execute(droptable);
            String createnormaltable ="CREATE TABLE if not exists normalschedule "+
                "(`grade` INT,`1-1` INT,`1-2` INT,`1-3` INT,`1-4` INT,`1-5` INT,`1-6` INT,`1-7` INT,"+
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
                "(`grade` INT,`1-1` INT,`1-2` INT,`1-3` INT,`1-4` INT,`1-5` INT,`1-6` INT,`1-7` INT,"+
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
            String createprofessortable ="CREATE TABLE if not exists professorschedule "+
                "(`professorid` int,`1-1` INT,`1-2` INT,`1-3` INT,`1-4` INT,`1-5` INT,`1-6` INT,`1-7` INT,"+
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
            String createclassroomtable ="CREATE TABLE if not exists classroomschedule "+
                "(`classroomid` int,`1-1` INT,`1-2` INT,`1-3` INT,`1-4` INT,`1-5` INT,`1-6` INT,`1-7` INT,"+
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
            st.execute(createinternationaltable);
            st.execute(createprofessortable);
            st.execute(createclassroomtable);
            st.execute(createnormaltable);

            for(int i=0;i<info.professorid.rownum;i++){
                String insertDataSQL = "INSERT INTO  professorschedule VALUES ("+info.professorid.id[i]+","+
                info.professorid.timetable[i][0]+","+info.professorid.timetable[i][1]+","+info.professorid.timetable[i][2]+","+info.professorid.timetable[i][3]+","+info.professorid.timetable[i][4]+","+info.professorid.timetable[i][5]+","+info.professorid.timetable[i][6]+","+info.professorid.timetable[i][7]+","+
                info.professorid.timetable[i][8]+","+info.professorid.timetable[i][9]+","+info.professorid.timetable[i][10]+","+info.professorid.timetable[i][11]+","+info.professorid.timetable[i][12]+","+info.professorid.timetable[i][13]+","+info.professorid.timetable[i][14]+","+info.professorid.timetable[i][15]+","+
                info.professorid.timetable[i][16]+","+info.professorid.timetable[i][17]+","+info.professorid.timetable[i][18]+","+info.professorid.timetable[i][19]+","+info.professorid.timetable[i][20]+","+info.professorid.timetable[i][21]+","+info.professorid.timetable[i][22]+","+info.professorid.timetable[i][23]+","+
                info.professorid.timetable[i][24]+","+info.professorid.timetable[i][25]+","+info.professorid.timetable[i][26]+","+info.professorid.timetable[i][27]+","+info.professorid.timetable[i][28]+","+info.professorid.timetable[i][29]+","+info.professorid.timetable[i][30]+","+info.professorid.timetable[i][31]+","+
                info.professorid.timetable[i][32]+","+info.professorid.timetable[i][33]+","+info.professorid.timetable[i][34]+","+info.professorid.timetable[i][35]+","+info.professorid.timetable[i][36]+","+info.professorid.timetable[i][37]+","+info.professorid.timetable[i][38]+","+info.professorid.timetable[i][39]+","+
                info.professorid.timetable[i][40]+","+info.professorid.timetable[i][41]+","+info.professorid.timetable[i][42]+","+info.professorid.timetable[i][43]+","+info.professorid.timetable[i][44]+","+info.professorid.timetable[i][45]+","+info.professorid.timetable[i][46]+","+info.professorid.timetable[i][47]+","+
                info.professorid.timetable[i][48]+","+info.professorid.timetable[i][49]+","+info.professorid.timetable[i][50]+","+info.professorid.timetable[i][51]+","+info.professorid.timetable[i][52]+","+info.professorid.timetable[i][53]+","+info.professorid.timetable[i][54]+","+info.professorid.timetable[i][55]+","+
                info.professorid.timetable[i][56]+","+info.professorid.timetable[i][57]+","+info.professorid.timetable[i][58]+","+info.professorid.timetable[i][59]+","+info.professorid.timetable[i][60]+","+info.professorid.timetable[i][61]+","+info.professorid.timetable[i][62]+","+info.professorid.timetable[i][63]+","+
                info.professorid.timetable[i][64]+","+info.professorid.timetable[i][65]+","+info.professorid.timetable[i][66]+","+info.professorid.timetable[i][67]+","+info.professorid.timetable[i][68]+","+info.professorid.timetable[i][69]+","+info.professorid.timetable[i][70]+","+info.professorid.timetable[i][71]+","+
                info.professorid.timetable[i][72]+","+info.professorid.timetable[i][73]+","+info.professorid.timetable[i][74]+","+info.professorid.timetable[i][75]+","+info.professorid.timetable[i][76]+","+info.professorid.timetable[i][77]+","+info.professorid.timetable[i][78]+","+info.professorid.timetable[i][79]+
                ")";
                st.executeUpdate(insertDataSQL);
            }
            for(int i=0;i<info.classroomid.rownum;i++){
                String insertDataSQL = "INSERT INTO  classroomschedule VALUES ("+info.classroomid.id[i]+","+
                info.classroomid.timetable[i][0]+","+info.classroomid.timetable[i][1]+","+info.classroomid.timetable[i][2]+","+info.classroomid.timetable[i][3]+","+info.classroomid.timetable[i][4]+","+info.classroomid.timetable[i][5]+","+info.classroomid.timetable[i][6]+","+info.classroomid.timetable[i][7]+","+
                info.classroomid.timetable[i][8]+","+info.classroomid.timetable[i][9]+","+info.classroomid.timetable[i][10]+","+info.classroomid.timetable[i][11]+","+info.classroomid.timetable[i][12]+","+info.classroomid.timetable[i][13]+","+info.classroomid.timetable[i][14]+","+info.classroomid.timetable[i][15]+","+
                info.classroomid.timetable[i][16]+","+info.classroomid.timetable[i][17]+","+info.classroomid.timetable[i][18]+","+info.classroomid.timetable[i][19]+","+info.classroomid.timetable[i][20]+","+info.classroomid.timetable[i][21]+","+info.classroomid.timetable[i][22]+","+info.classroomid.timetable[i][23]+","+
                info.classroomid.timetable[i][24]+","+info.classroomid.timetable[i][25]+","+info.classroomid.timetable[i][26]+","+info.classroomid.timetable[i][27]+","+info.classroomid.timetable[i][28]+","+info.classroomid.timetable[i][29]+","+info.classroomid.timetable[i][30]+","+info.classroomid.timetable[i][31]+","+
                info.classroomid.timetable[i][32]+","+info.classroomid.timetable[i][33]+","+info.classroomid.timetable[i][34]+","+info.classroomid.timetable[i][35]+","+info.classroomid.timetable[i][36]+","+info.classroomid.timetable[i][37]+","+info.classroomid.timetable[i][38]+","+info.classroomid.timetable[i][39]+","+
                info.classroomid.timetable[i][40]+","+info.classroomid.timetable[i][41]+","+info.classroomid.timetable[i][42]+","+info.classroomid.timetable[i][43]+","+info.classroomid.timetable[i][44]+","+info.classroomid.timetable[i][45]+","+info.classroomid.timetable[i][46]+","+info.classroomid.timetable[i][47]+","+
                info.classroomid.timetable[i][48]+","+info.classroomid.timetable[i][49]+","+info.classroomid.timetable[i][50]+","+info.classroomid.timetable[i][51]+","+info.classroomid.timetable[i][52]+","+info.classroomid.timetable[i][53]+","+info.classroomid.timetable[i][54]+","+info.classroomid.timetable[i][55]+","+
                info.classroomid.timetable[i][56]+","+info.classroomid.timetable[i][57]+","+info.classroomid.timetable[i][58]+","+info.classroomid.timetable[i][59]+","+info.classroomid.timetable[i][60]+","+info.classroomid.timetable[i][61]+","+info.classroomid.timetable[i][62]+","+info.classroomid.timetable[i][63]+","+
                info.classroomid.timetable[i][64]+","+info.classroomid.timetable[i][65]+","+info.classroomid.timetable[i][66]+","+info.classroomid.timetable[i][67]+","+info.classroomid.timetable[i][68]+","+info.classroomid.timetable[i][69]+","+info.classroomid.timetable[i][70]+","+info.classroomid.timetable[i][71]+","+
                info.classroomid.timetable[i][72]+","+info.classroomid.timetable[i][73]+","+info.classroomid.timetable[i][74]+","+info.classroomid.timetable[i][75]+","+info.classroomid.timetable[i][76]+","+info.classroomid.timetable[i][77]+","+info.classroomid.timetable[i][78]+","+info.classroomid.timetable[i][79]+
                ")";
                st.executeUpdate(insertDataSQL);
            }
            for(int i=0;i<4;i++){
                String insertDataSQL = "INSERT INTO  internationalschedule VALUES ("+(i+1)+","+
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
                String insertDataSQL = "INSERT INTO  normalschedule VALUES ("+(i+1)+","+
                info.tempans.ans[i][1][0]+","+info.tempans.ans[i][1][1]+","+info.tempans.ans[i][1][2]+","+info.tempans.ans[i][1][3]+","+info.tempans.ans[i][1][4]+","+info.tempans.ans[i][1][5]+","+info.tempans.ans[i][1][6]+","+info.tempans.ans[i][1][7]+","+
                info.tempans.ans[i][1][8]+","+info.tempans.ans[i][1][9]+","+info.tempans.ans[i][1][10]+","+info.tempans.ans[i][1][11]+","+info.tempans.ans[i][1][12]+","+info.tempans.ans[i][1][13]+","+info.tempans.ans[i][1][14]+","+info.tempans.ans[i][1][15]+","+
                info.tempans.ans[i][1][16]+","+info.tempans.ans[i][1][17]+","+info.tempans.ans[i][1][18]+","+info.tempans.ans[i][1][19]+","+info.tempans.ans[i][1][20]+","+info.tempans.ans[i][1][21]+","+info.tempans.ans[i][1][22]+","+info.tempans.ans[i][1][23]+","+
                info.tempans.ans[i][1][24]+","+info.tempans.ans[i][1][25]+","+info.tempans.ans[i][1][26]+","+info.tempans.ans[i][1][27]+","+info.tempans.ans[i][1][28]+","+info.tempans.ans[i][1][29]+","+info.tempans.ans[i][1][30]+","+info.tempans.ans[i][1][31]+","+
                info.tempans.ans[i][1][32]+","+info.tempans.ans[i][1][33]+","+info.tempans.ans[i][1][34]+","+info.tempans.ans[i][1][35]+","+info.tempans.ans[i][1][36]+","+info.tempans.ans[i][1][37]+","+info.tempans.ans[i][1][38]+","+info.tempans.ans[i][1][39]+","+
                info.tempans.ans[i][1][40]+","+info.tempans.ans[i][1][41]+","+info.tempans.ans[i][1][42]+","+info.tempans.ans[i][1][43]+","+info.tempans.ans[i][1][44]+","+info.tempans.ans[i][1][45]+","+info.tempans.ans[i][1][46]+","+info.tempans.ans[i][1][47]+","+
                info.tempans.ans[i][1][48]+","+info.tempans.ans[i][1][49]+","+info.tempans.ans[i][1][50]+","+info.tempans.ans[i][1][51]+","+info.tempans.ans[i][1][52]+","+info.tempans.ans[i][1][53]+","+info.tempans.ans[i][1][54]+","+info.tempans.ans[i][1][55]+","+
                info.tempans.ans[i][1][56]+","+info.tempans.ans[i][1][57]+","+info.tempans.ans[i][1][58]+","+info.tempans.ans[i][1][59]+","+info.tempans.ans[i][1][60]+","+info.tempans.ans[i][1][61]+","+info.tempans.ans[i][1][62]+","+info.tempans.ans[i][1][63]+","+
                info.tempans.ans[i][1][64]+","+info.tempans.ans[i][1][65]+","+info.tempans.ans[i][1][66]+","+info.tempans.ans[i][1][67]+","+info.tempans.ans[i][1][68]+","+info.tempans.ans[i][1][69]+","+info.tempans.ans[i][1][70]+","+info.tempans.ans[i][1][71]+","+
                info.tempans.ans[i][1][72]+","+info.tempans.ans[i][1][73]+","+info.tempans.ans[i][1][74]+","+info.tempans.ans[i][1][75]+","+info.tempans.ans[i][1][76]+","+info.tempans.ans[i][1][77]+","+info.tempans.ans[i][1][78]+","+info.tempans.ans[i][1][79]+
                ")";
                st.executeUpdate(insertDataSQL);
            }
        
            for(int i=0;i<info.course.cnt;i++){
                rs=st.executeQuery("SELECT * FROM mapping_id WHERE class_id = "+info.course.id[i]);
                rs.next();
                if(!rs.next()){
                    st.executeUpdate("INSERT INTO  mapping_id VALUES ("+info.course.id[i]+","+info.professorid.id[info.course.professor[i]]+","+info.course.tempclassroom[i]+",-1,-1,-1,-1)");
                }
                else{
                    st.executeUpdate("UPDATE mapping_id SET professor_id = "+info.professorid.id[info.course.professor[i]]+" , classroom_id ="+info.course.tempclassroom[i]+"  WHERE class_id ="+info.course.id[i]);
                }        
            }
            

               conn.close();
		}         
		catch(ClassNotFoundException e)
		{
               System.out.println("can't find driver for reading files, please check writebackdb.java");
			e.printStackTrace();
		}
		catch(SQLException e)
		{
			e.printStackTrace();
               System.out.println("SQL access denied, please check writebackdb.java");
		}
    }
}
