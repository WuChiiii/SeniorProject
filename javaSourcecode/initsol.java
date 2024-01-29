import java.util.concurrent.ThreadLocalRandom;
import java.sql.*;

//import totalinfo.classinfo;

public class initsol {
    initsol() {
    }

    void createfun(info info) {
        String driver = "com.mysql.cj.jdbc.Driver";
        Connection conn = null;
        Statement st = null;
        ResultSet rs = null;
        String url = "jdbc:mysql://localhost:3306/undergraduate_project";
        String user = "root";
        String password = "";//enter your own password
        for (int i = 0; i < info.course.cnt; i++) {// admin的課程先塞
            // System.out.print("complete0");
            if (info.course.priority[i] == 0) {// admin加的
                try {
                    String time, classroomstr,sql;
                    int classroomtemp, count = 0;
                    int numarr[] = new int[info.course.period[i]];
                    Class.forName(driver);
                    conn = DriverManager.getConnection(url, user, password);
                    st = conn.createStatement();// connection
                    
                    System.out.print("complete0");
                    sql="select * from course_selection where id =" + info.course.id[i] + ";";
                    rs = st.executeQuery(sql);// here
                    rs.next();
                    System.out.print("complete");
                    time = rs.getString("time");
                    classroomstr = rs.getString("classroom");
                    sql="select * from classroom where classroom_no ='" + classroomstr + "';";
                    rs = st.executeQuery(sql);// here
                    System.out.println("complete2");
                    rs.next();
                    classroomtemp = rs.getInt("classroomid");
                    for(int k=0;k<info.classroomid.rownum;k++){
                        if(info.classroomid.id[k]==classroomtemp){
                            info.course.tempclassroom[i] = classroomtemp;
                            classroomtemp=k;
                            break;
                        }
                    }
                    for (int current = 0; current < time.length(); current++) {
                        int tmp = Integer.parseInt(time.substring(current, current + 1)) - 1;
                        tmp = tmp * 16;
                        current += 2;
                        if (current == time.length() - 1 || time.charAt(current + 1) == '/') {
                            tmp = tmp + Integer.parseInt(time.substring(current, current + 1)) - 1;
                            current++;
                        } else {
                            tmp = tmp + Integer.parseInt(time.substring(current, current + 2)) - 1;
                            current+=2;
                        }
                        numarr[count++] = tmp;
                        System.out.println(tmp);
                    }
                    for (int k = 0; k < count; k++) {
                        info.tempans.ans[info.course.semester[i]][info.course.group[i]][numarr[k]] = info.course.id[i];
                        info.classroomid.timetable[classroomtemp][numarr[k]] = 1;
                        info.professorid.timetable[info.course.professor[i]][numarr[k]] = 1;
                    }
                    conn.close();
                } catch (ClassNotFoundException e) {
                    System.out.println("找不到的驅動程式");
                    e.printStackTrace();
                } catch (SQLException e) {
                    e.printStackTrace();
                    System.out.println("找不到SQLhh");
                }
            }
        }
        for (int grade = 0; grade < 4; grade++) {// 必修電腦教室
            for (int group = 0; group < 2; group++) {
                for (int cur = 0; info.course.classify[grade][group][1][1][cur] != -1; cur++) {
                    if (info.course.priority[info.course.classify[grade][group][1][1][cur]] == 0)
                        continue;
                    System.out.println(info.course.classify[grade][group][1][1][cur]);
                    int temp = funt(grade, group, 1, 1, cur, info);
                    if (temp == 0)
                        cur--;
                }
            }
        }
        for (int grade = 0; grade < 4; grade++) {// 選修電腦教室
            for (int group = 0; group < 2; group++) {
                for (int cur = 0; info.course.classify[grade][group][1][0][cur] != -1; cur++) {
                    if (info.course.priority[info.course.classify[grade][group][1][0][cur]] == 0)
                        continue;
                    int temp = funt(grade, group, 1, 0, cur, info);
                    if (temp == 0)
                        cur--;
                }
            }
        }
        System.out.println("here2");
        for (int grade = 0; grade < 4; grade++) {// 必修非電腦教室
            for (int group = 0; group < 2; group++) {
                for (int cur = 0; info.course.classify[grade][group][0][1][cur] != -1; cur++) {
                    if (info.course.priority[info.course.classify[grade][group][0][1][cur]] == 0)
                        continue;
                    int temp = funt(grade, group, 0, 1, cur, info);
                    if (temp == 0)
                        cur--;
                }
            }
        }
        System.out.println("here3");
        for (int grade = 0; grade < 4; grade++) {// 選修非電腦教室
            for (int group = 0; group < 2; group++) {
                for (int cur = 0; info.course.classify[grade][group][0][0][cur] != -1; cur++) {
                    if (info.course.priority[info.course.classify[grade][group][0][0][cur]] == 0)
                        continue;
                    int temp = funt(grade, group, 0, 0, cur, info);
                    if (temp == 0)
                        cur--;
                }
            }
        }
        show(info);
    }

    int funt(int grade, int group, int classroomtype, int classtype, int cur, info info) {
        ThreadLocalRandom random = ThreadLocalRandom.current();
        int randomnumber = random.nextInt(80), id = info.course.classify[grade][group][classroomtype][classtype][cur];
        int remain = randomnumber % 16, firstRandomnum, classroomnum;
        if (remain != 3 && remain != 8) {
            if (remain < 3) {
                randomnumber = randomnumber + 3 - remain;
                if (info.course.period[id] == 2)
                    randomnumber++;
                remain = 3;
            } else {
                randomnumber = randomnumber + 8 - remain;
                remain = 8;
            }
        }
        firstRandomnum = randomnumber;
        while (true) {
            // System.out.println(" "+randomnumber+" "+grade+" "+cur+" "+firstRandomnum);
            randomnumber = findTheTime(firstRandomnum, grade, group, randomnumber, id, remain, info);
            remain = randomnumber % 16;
            // System.out.print(" "+randomnumber);
            if (randomnumber == -1) {
                clearFunction(info, grade, group);
                return 0;
            }
            classroomnum = findTheClassroom(info, randomnumber, id);
            if (classroomnum == -1) {// 當下時間沒有空教室
                System.out.println("hrer");
                if (remain == 3) {
                    randomnumber += 5;
                    remain = 8;
                    if (info.course.period[id] == 2)
                        randomnumber--;
                } else {
                    randomnumber += 11;
                    remain = 3;
                    if (randomnumber > 79)
                        randomnumber = 3;
                    if (info.course.period[id] == 2)
                        randomnumber++;
                }
                continue;
            }
            // System.out.println(" "+classroomnum);
            info.tempans.ans[grade][group][randomnumber] = info.course.id[id];// 到這邊表示教室 教授 同年級必修 空間皆符合要求
            info.tempans.ans[grade][group][randomnumber + 1] = info.course.id[id];
            info.tempans.classroom[grade][group][randomnumber] = 1;
            info.tempans.classroom[grade][group][randomnumber + 1] = 1;
            info.course.tempclassroom[id] = info.classroomid.id[classroomnum];// 填該堂課程分配到啥教室
            info.professorid.timetable[info.course.professor[id]][randomnumber] = 1;
            info.professorid.timetable[info.course.professor[id]][randomnumber + 1] = 1;
            info.classroomid.timetable[classroomnum][randomnumber] = 1;
            info.classroomid.timetable[classroomnum][randomnumber + 1] = 1;
            if (info.course.period[id] == 3) {// 連續三堂課的
                info.tempans.ans[grade][group][randomnumber + 2] = info.course.id[id];
                info.tempans.classroom[grade][group][randomnumber + 2] = 1;
                info.professorid.timetable[info.course.professor[id]][randomnumber + 2] = 1;
                info.classroomid.timetable[classroomnum][randomnumber + 2] = 1;
            }
            break;
        }
        return 1;
    }

    int findTheTime(int firstRandomnum, int grade, int group, int randomnumber, int cur, int remain, info info) {// cur is course id
        while ((info.course.period[cur] == 3) &&
                (info.tempans.ans[grade][group][randomnumber] != -1 ||
                        info.tempans.ans[grade][group][randomnumber + 1] != -1 ||
                        info.tempans.ans[grade][group][randomnumber + 2] != -1 ||
                        info.professorid.timetable[info.course.professor[cur]][randomnumber] != 0 ||
                        info.professorid.timetable[info.course.professor[cur]][randomnumber + 1] != 0 ||
                        info.professorid.timetable[info.course.professor[cur]][randomnumber + 2] != 0)
                ||
                ((info.course.period[cur] == 2) &&
                        (info.tempans.ans[grade][group][randomnumber] != -1 ||
                                info.tempans.ans[grade][group][randomnumber + 1] != -1 ||
                                info.professorid.timetable[info.course.professor[cur]][randomnumber] != 0 ||
                                info.professorid.timetable[info.course.professor[cur]][randomnumber + 1] != 0))) {// 隨機的時間有同年級必修或教授當下有課就往後延直到找到合適時間
            // System.out.print(" "+randomnumber+" "+cur+" ");
            if (remain == 3) {
                randomnumber += 5;
                remain = 8;
                if (info.course.period[cur] == 2)
                    randomnumber--;
            } else {
                randomnumber += 11;
                remain = 3;
                if (randomnumber > 79)
                    randomnumber = 3;
                if (info.course.period[cur] == 2)
                    randomnumber++;
            }
            if (randomnumber == firstRandomnum) {// 找到循環一圈了
                if (info.course.classroomtype[cur] == 1)// 電腦教室放不下先放一般教室
                {
                    info.course.classroomtype[cur] = 2;
                    continue;
                }
                return -1;
            }
        }
        return randomnumber;
    }

    int findTheClassroom(info info, int randomnumber, int id) {
        for (int classnum = 0; classnum < info.classroomid.rownum; classnum++) {
            if (info.classroomid.department[classnum] == 1)
                continue;
            if ((info.course.period[id] == 3 &&
                    info.classroomid.timetable[classnum][randomnumber] == 0
                    && info.classroomid.timetable[classnum][randomnumber + 1] == 0
                    && info.classroomid.timetable[classnum][randomnumber + 2] == 0) ||
                    (info.course.period[id] == 2 &&
                            info.classroomid.timetable[classnum][randomnumber] == 0
                            && info.classroomid.timetable[classnum][randomnumber + 1] == 0)) {// 判斷此時編號classnum教室有沒有人用

                if ((info.course.classroomtype[id] + info.classroomid.computer[classnum]) % 2 != 0)// 教室種類不同
                    continue;
                return classnum;
            }
        }
        return -1;
    }

    void clearFunction(info info, int grade, int group) {// 未完成刪除當下年級的資料
        for (int i = 0; i < 80; i++) {
            int classid = info.tempans.ans[grade][group][i]; // classid為整個課程資訊的編號
            if (classid != -1) {
                info.tempans.ans[grade][group][i] = -1;
                info.professorid.timetable[info.course.professor[classid]][i] = -1;
                info.classroomid.timetable[info.course.tempclassroom[classid]][i] = -1;
            }
        }
        /*
         * for(int i=0;i<info.course.maxOfGrade[grade];i++){
         * info.course.tempclassroom[info.course.semOrder[grade][i]]=-1;
         * }
         */
    }

    void show(info info) {
        for (int i = 0; i < 4; i++) {
            for (int k = 0; k < 2; k++) {
                for (int m = 0; m < 80; m++) {
                    System.out.print(info.tempans.ans[i][k][m]);
                }
                System.out.println(" ");
            }
        }
        System.out.println(" ");
    }
}
