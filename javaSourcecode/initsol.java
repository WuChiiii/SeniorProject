import java.util.concurrent.ThreadLocalRandom;
import java.sql.*;

//import totalinfo.classinfo;

public class initsol {
    initsol() {
    }

    void createfun(info info,String password) {
        String driver = "com.mysql.cj.jdbc.Driver";
        Connection conn = null;
        Statement st = null;
        ResultSet rs = null;
        String url = "jdbc:mysql://localhost:3306/undergraduate_project";
        String user = "root";
        // for (int i = 0; i < info.course.cnt; i++) {// admin
        //     if (info.course.priority[i] == 0) {// admin加的
        //         try {
        //             String time, classroomstr,sql;
        //             int classroomtemp, count = 0;
        //             int numarr[] = new int[info.course.period[i]];
        //             Class.forName(driver);
        //             conn = DriverManager.getConnection(url, user, password);
        //             st = conn.createStatement();// connection
                    
        //             sql="select * from course_selection where id =" + info.course.id[i] + ";";
        //             rs = st.executeQuery(sql);
        //             rs.next();
        //             time = rs.getString("time");
        //             classroomstr = rs.getString("classroom");
        //             sql="select * from classroom where classroom_no ='" + classroomstr + "';";
        //             rs = st.executeQuery(sql);
        //             rs.next();
        //             classroomtemp = rs.getInt("classroomid");
        //             for(int k=0;k<info.classroomid.rownum;k++){
        //                 if(info.classroomid.id[k]==classroomtemp){
        //                     info.course.tempclassroom[i] = classroomtemp;
        //                     classroomtemp=k;
        //                     break;
        //                 }
        //             }
        //             for (int current = 0; current < time.length(); current++) {
        //                 int tmp = Integer.parseInt(time.substring(current, current + 1)) - 1;
        //                 tmp = tmp * 16;
        //                 current += 2;
        //                 if (current == time.length() - 1 || time.charAt(current + 1) == '/') {
        //                     tmp = tmp + Integer.parseInt(time.substring(current, current + 1)) - 1;
        //                     current++;
        //                 } else {
        //                     tmp = tmp + Integer.parseInt(time.substring(current, current + 2)) - 1;
        //                     current+=2;
        //                 }
        //                 numarr[count++] = tmp;
        //             }
        //             for (int k = 0; k < count; k++) {
        //                 info.tempans.ans[info.course.semester[i]][info.course.group[i]][numarr[k]] = info.course.id[i];
        //                 info.classroomid.timetable[classroomtemp][numarr[k]] = 1;
        //                 info.professorid.timetable[info.course.professor[i]][numarr[k]] = 1;
        //             }
        //             conn.close();
        //         } catch (ClassNotFoundException e) {
        //             System.out.println("can't find driver for reading files, please check initsol.java");
        //             e.printStackTrace();
        //         } catch (SQLException e) {
        //             e.printStackTrace();
        //             System.out.println("SQL access denied, please check initsol.java");
        //         }
        //     }
        // }
        for (int i = 0; i < info.course.cnt; i++){//priority 先
            if (info.course.priority[i] == 1){
                try{
                    Class.forName(driver);
                    conn = DriverManager.getConnection(url, user, password);
                    st = conn.createStatement();
                    String time, classroomstr,sql;
                    int classroomtemp, count = 0;
                    int numarr[] = new int[info.course.period[i]];
                    sql="select * from course_selection where id =" + info.course.id[i] + ";";
                    rs = st.executeQuery(sql);
                    rs.next();
                    time = rs.getString("time");
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
                    }
                    if(info.course.classroomflag[i] == 1){
                        for (int k = 0; k < count; k++) {
                            info.tempans.ans[info.course.semester[i]][info.course.group[i]][numarr[k]] = info.course.id[i];
                            info.classroomid.timetable[info.course.preclassroom[i]][numarr[k]] = 1;
                            info.professorid.timetable[info.course.professor[i]][numarr[k]] = 1;
                        }
                        info.course.tempclassroom[i]=info.classroomid.id[info.course.preclassroom[i]];
                    }
                    else{
                        int flag=1;
                        for (int classnum = 0; classnum < info.classroomid.rownum; classnum++) {
                            flag=1;
                            if (info.classroomid.department[classnum] == 1 || info.course.classroomtype[i] != info.classroomid.computer[classnum])
                                continue;
                            for (int k = 0; k < count; k++) {
                                if(info.classroomid.timetable[classnum][numarr[k]]==1){
                                    flag=0;
                                    break;
                                }
                            }
                            if(flag==0){
                                continue;
                            }
                            for (int k = 0; k < count; k++) {
                                info.tempans.ans[info.course.semester[i]][info.course.group[i]][numarr[k]] = info.course.id[i];
                                info.classroomid.timetable[classnum][numarr[k]] = 1;
                                info.professorid.timetable[info.course.professor[i]][numarr[k]] = 1;
                            }
                            info.course.tempclassroom[i]=info.classroomid.id[classnum];
                            break;
                        }
                        if(flag==0){
                            System.out.println("cannot found "+info.course.name+" classroom, please change your classtime");
                        }
                    }
                    conn.close();
                }
                catch (ClassNotFoundException e) {
                    System.out.println("can't find driver for reading files, please check initsol.java");
                    e.printStackTrace();
                } catch (SQLException e) {
                    e.printStackTrace();
                    System.out.println("SQL access denied, please check initsol.java");
                }

            }
        }
        for (int i = 0; i < info.course.cnt; i++){
            if (info.course.classroomflag[i] == 1){
                if(info.course.priority[i]==1){
                    continue;
                }
                ThreadLocalRandom random = ThreadLocalRandom.current();
                int randomnumber = random.nextInt(80);
                int routine=randomnumber;
                int remain=randomnumber % 16,finish=1;
                while(true){
                    randomnumber=findTheTime(routine,info.course.semester[i], info.course.group[i],randomnumber,i,remain,info);
                    if (randomnumber == -1) {
                        info.course.classroomflag[i]=0;
                        break;
                    }
                    if(randomnumber%16+info.course.period[i]>12 || (randomnumber<=39 && randomnumber+info.course.period[i]-1>=38)){//找課堂在13堂內的且不能周三的78
                        continue;
                    }
                    for(int k=0;k<info.course.period[i];k++){
                        if(info.classroomid.timetable[info.course.preclassroom[i]][randomnumber+k]==1){
                            finish=0;
                            break;
                        }
                    }
                    if(finish == 0 )
                        continue;
                    for(int k=0;k<info.course.period[i];k++){
                        info.tempans.ans[info.course.semester[i]][info.course.group[i]][randomnumber+k] = info.course.id[i];
                        info.classroomid.timetable[info.course.preclassroom[i]][randomnumber+k] = 1;
                        info.professorid.timetable[info.course.professor[i]][randomnumber+k] = 1;
                    }
                    info.course.tempclassroom[i]=info.classroomid.id[info.course.preclassroom[i]];
                    break;
                }
                
            }
        }
        for (int grade = 0; grade < 4; grade++) {// 必修電腦教室
            for (int group = 0; group < 2; group++) {
                for (int cur = 0; info.course.classify[grade][group][1][1][cur] != -1; cur++) {
                    if (info.course.priority[info.course.classify[grade][group][1][1][cur]] == 1 || info.course.classroomflag[info.course.classify[grade][group][1][1][cur]]==1)
                        continue;
                    int temp = funt(grade, group, 1, 1, cur, info);
                    if (temp == 0)
                        cur--;
                }
            }
        }
        for (int grade = 0; grade < 4; grade++) {// 選修電腦教室
            for (int group = 0; group < 2; group++) {
                for (int cur = 0; info.course.classify[grade][group][1][0][cur] != -1; cur++) {
                    if (info.course.priority[info.course.classify[grade][group][1][0][cur]] == 1 || info.course.classroomflag[info.course.classify[grade][group][1][0][cur]] == 1)
                        continue;
                    int temp = funt(grade, group, 1, 0, cur, info);
                    if (temp == 0)
                        cur--;
                }
            }
        }
        for (int grade = 0; grade < 4; grade++) {// 必修非電腦教室
            for (int group = 0; group < 2; group++) {
                for (int cur = 0; info.course.classify[grade][group][0][1][cur] != -1; cur++) {
                    if (info.course.priority[info.course.classify[grade][group][0][1][cur]] == 1 || info.course.classroomflag[info.course.classify[grade][group][0][1][cur]] == 1)
                        continue;
                    int temp = funt(grade, group, 0, 1, cur, info);
                    if (temp == 0)
                        cur--;
                }
            }
        }
        for (int grade = 0; grade < 4; grade++) {// 選修非電腦教室
            for (int group = 0; group < 2; group++) {
                for (int cur = 0; info.course.classify[grade][group][0][0][cur] != -1; cur++) {
                    if (info.course.priority[info.course.classify[grade][group][0][0][cur]] == 1 || info.course.classroomflag[info.course.classify[grade][group][0][0][cur]] == 1)
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
            randomnumber = findTheTime(firstRandomnum, grade, group, randomnumber, id, remain, info);
            remain = randomnumber % 16;
            if (randomnumber == -1) {
                System.out.println("here is "+info.course.name[id]);
                remainclass(info, grade, group, id);
                break;
            }
            if(randomnumber%16+info.course.period[id]>12 || (randomnumber<=39 && randomnumber+info.course.period[id]-1>=38)){//找課堂在13堂內的且不能周三的78
                continue;
            }
            classroomnum = findTheClassroom(info, randomnumber, id);
            if (classroomnum == -1) {// 當下時間沒有空教室
                // if (remain == 3) {
                //     randomnumber += 5;
                //     remain = 8;
                //     if (info.course.period[id] == 2)
                //         randomnumber--;
                // } else {
                //     randomnumber += 11;
                //     remain = 3;
                //     if (randomnumber > 79)
                //         randomnumber = 3;
                //     if (info.course.period[id] == 2)
                //         randomnumber++;
                // }
                continue;
            }
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
        do{
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
                    info.course.classroomtype[cur] = 3;
                    continue;
                }
                return -1;
            }
        }
        while ((info.course.period[cur] == 3) &&
                (info.tempans.ans[grade][group][randomnumber] != -1 ||
                info.tempans.ans[grade][group][randomnumber + 1] != -1 ||
                info.tempans.ans[grade][group][randomnumber + 2] != -1 ||
                info.professorid.timetable[info.course.professor[cur]][randomnumber] != 0 ||
                info.professorid.timetable[info.course.professor[cur]][randomnumber + 1] != 0 ||
                info.professorid.timetable[info.course.professor[cur]][randomnumber + 2] != 0)||
                ((info.course.period[cur] == 2) &&(info.tempans.ans[grade][group][randomnumber] != -1 ||
                info.tempans.ans[grade][group][randomnumber + 1] != -1 ||
                info.professorid.timetable[info.course.professor[cur]][randomnumber] != 0 ||
                info.professorid.timetable[info.course.professor[cur]][randomnumber + 1] != 0)));// 隨機的時間有同年級必修或教授當下有課就往後延直到找到合適時間
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

                if ((info.course.classroomtype[id] != info.classroomid.computer[classnum]))// 教室種類不同
                    continue;
                return classnum;
            }
        }
        return -1;
    }

    void remainclass(info info, int grade, int group, int id) {// 未完成刪除當下年級的資料
        System.out.println("comeon"+info.course.name[id]);
        for (int i = 0; i < 80; i++) {
            if(i%16+info.course.period[id]>12 || (i<=39 && i+info.course.period[id]-1>=38)){//找課堂在13堂內的且不能周三的78
                continue;
            }
            if((info.course.period[id] == 3) &&
                (info.tempans.ans[grade][group][i] != -1 ||
                info.tempans.ans[grade][group][i + 1] != -1 ||
                info.tempans.ans[grade][group][i + 2] != -1 ||
                info.professorid.timetable[info.course.professor[id]][i] != 0 ||
                info.professorid.timetable[info.course.professor[id]][i + 1] != 0 ||
                info.professorid.timetable[info.course.professor[id]][i + 2] != 0)||
                ((info.course.period[id] == 2) &&(info.tempans.ans[grade][group][i] != -1 ||
                info.tempans.ans[grade][group][i + 1] != -1 ||
                info.professorid.timetable[info.course.professor[id]][i] != 0 ||
                info.professorid.timetable[info.course.professor[id]][i + 1] != 0)))
                continue;
            int classroomnum = findTheClassroom(info, i, id);
            if (classroomnum == -1) {// 當下時間沒有空教室就往後延一個時間
                continue;
            }
            info.tempans.ans[grade][group][i] = info.course.id[id];// 到這邊表示教室 教授 同年級必修 空間皆符合要求
            info.tempans.ans[grade][group][i + 1] = info.course.id[id];
            info.tempans.classroom[grade][group][i] = 1;
            info.tempans.classroom[grade][group][i + 1] = 1;
            info.course.tempclassroom[id] = info.classroomid.id[classroomnum];// 填該堂課程分配到啥教室
            info.professorid.timetable[info.course.professor[id]][i] = 1;
            info.professorid.timetable[info.course.professor[id]][i + 1] = 1;
            info.classroomid.timetable[classroomnum][i] = 1;
            info.classroomid.timetable[classroomnum][i + 1] = 1;
            if (info.course.period[id] == 3) {// 連續三堂課的
                info.tempans.ans[grade][group][i + 2] = info.course.id[id];
                info.tempans.classroom[grade][group][i + 2] = 1;
                info.professorid.timetable[info.course.professor[id]][i + 2] = 1;
                info.classroomid.timetable[classroomnum][i + 2] = 1;
            }
            break;
        }
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
