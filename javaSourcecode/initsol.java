import java.util.concurrent.ThreadLocalRandom;

//import totalinfo.classinfo;

public class initsol {//還未debug
    initsol() {}

    void createfun(info info) {// 產生出始50組解
        for(int grade=0;grade<4;grade++){//必修電腦教室
            for(int group=0;group<2;group++){
                for(int cur=0;info.course.classify[grade][group][1][1][cur]!=-1;cur++){
                    int temp=funt(grade,group,1,1,cur,info);
                    if(temp==0)
                        cur--;
                }
            }
        }
        for(int grade=0;grade<4;grade++){//選修電腦教室
            for(int group=0;group<2;group++){
                for(int cur=0;info.course.classify[grade][group][1][0][cur]!=-1;cur++){
                    int temp=funt(grade,group,1,0,cur,info);
                    if(temp==0)
                        cur--;
                }
            }
        }
        for(int grade=0;grade<4;grade++){//必修非電腦教室
            for(int group=0;group<2;group++){
                for(int cur=0;info.course.classify[grade][group][0][1][cur]!=-1;cur++){
                    int temp=funt(grade,group,0,1,cur,info);
                    if(temp==0)
                        cur--;
                }
            }
        }
        for(int grade=0;grade<4;grade++){//選修非電腦教室
            for(int group=0;group<2;group++){
                for(int cur=0;info.course.classify[grade][group][0][0][cur]!=-1;cur++){
                    int temp=funt(grade,group,0,0,cur,info);
                    if(temp==0)
                        cur--;
                }
            }
        }
        show(info);
    }

    int funt(int grade,int group,int classroomtype,int classtype, int cur,info info){
        ThreadLocalRandom random = ThreadLocalRandom.current();
        int randomnumber = random.nextInt(80),id=info.course.classify[grade][group][classroomtype][classtype][cur];
                    int remain = randomnumber % 16, firstRandomnum, classroomnum;
                    if (remain != 3 && remain != 8) {
                        if (remain < 3) {
                            randomnumber = randomnumber + 3 - remain;
                            if (info.course.period[id] == 2)
                                randomnumber++;
                            remain=3;
                        } 
                        else{
                            randomnumber = randomnumber + 8 - remain;
                            remain=8;
                        }
                    }
                    firstRandomnum=randomnumber;
                    while (true) {
                        //System.out.println(" "+randomnumber+" "+grade+" "+cur+" "+firstRandomnum);
                        randomnumber = findTheTime(firstRandomnum,grade,group,randomnumber,id,remain,info);
                        remain = randomnumber % 11;
                        System.out.print(" "+randomnumber);
                        if(randomnumber==-1){
                            clearFunction(info,grade,group);
                            return 0;
                        }
                        classroomnum=findTheClassroom(info,randomnumber,id);
                        if (classroomnum==-1){//當下時間沒有空教室
                            if (remain == 3) {
                                randomnumber += 5;
                                remain =8;
                            if (info.course.period[id] == 2)
                                randomnumber--;
                            }    
                            else {
                                randomnumber +=11;
                                remain =3;
                            if (randomnumber > 79)
                                    randomnumber =3;
                                if (info.course.period[id] == 2)
                                    randomnumber++;
                            }
                            continue;
                        }
                        System.out.println(" "+classroomnum);
                        info.tempans.ans[grade][group][randomnumber]=id;//到這邊表示教室 教授 同年級必修 空間皆符合要求
                        info.tempans.ans[grade][group][randomnumber+1]=id;
                        info.course.tempclassroom[id]=classroomnum;//填該堂課程分配到啥教室
                        info.professorid.timetable[info.course.professor[id]][randomnumber]=1;
                        info.professorid.timetable[info.course.professor[id]][randomnumber+1]=1;
                        info.classroomid.timetable[classroomnum][randomnumber] = 1;
                        info.classroomid.timetable[classroomnum][randomnumber+1] = 1;
                        if (info.course.period[id] == 3){//連續三堂課的
                            info.tempans.ans[grade][group][randomnumber+2]=id;
                            info.professorid.timetable[info.course.professor[id]][randomnumber+2]=1;
                            info.classroomid.timetable[classroomnum][randomnumber+2] = 1;
                        }    
                        break;
                    }
            return 1;
    }
    int findTheTime(int firstRandomnum, int grade, int group, int randomnumber, int cur,int remain, info info) {//cur is course id
        while ((info.course.period[cur] == 3) &&
                (info.tempans.ans[grade][group][randomnumber] != -1 ||
                info.tempans.ans[grade][group][randomnumber + 1] != -1 ||
                info.tempans.ans[grade][group][randomnumber + 2] != -1||
                info.professorid.timetable[info.course.professor[cur]][randomnumber]!=0||
                info.professorid.timetable[info.course.professor[cur]][randomnumber+1]!=0||
                info.professorid.timetable[info.course.professor[cur]][randomnumber+2]!=0)||
                ((info.course.period[cur] == 2) &&
                (info.tempans.ans[grade][group][randomnumber] != -1 ||
                info.tempans.ans[grade][group][randomnumber + 1] != -1||
                info.professorid.timetable[info.course.professor[cur]][randomnumber]!=0||
                info.professorid.timetable[info.course.professor[cur]][randomnumber+1]!=0))) {// 隨機的時間有同年級必修或教授當下有課就往後延直到找到合適時間
                //System.out.print(" "+randomnumber+" "+cur+" ");
            if (remain == 3) {
                randomnumber += 5;
                remain =8;
                if (info.course.period[cur] == 2)
                    randomnumber--;
            } 
            else {
                randomnumber += 11;
                remain =3;
                if (randomnumber > 79)
                    randomnumber =3;
                if (info.course.period[cur] == 2)
                    randomnumber++;
            }
            if (randomnumber == firstRandomnum) {// 找到循環一圈了
                if(info.course.classroomtype[cur]==1)//電腦教室放不下先放一般教室
                {
                    info.course.classroomtype[cur]=2;
                    continue;
                }
                return -1;
            }
        }
        return randomnumber;
    }

    int findTheClassroom(info info,int randomnumber,int id) {
        for (int classnum = 0; classnum < info.classroomid.rownum; classnum++) { 
            if ((info.course.period[id] == 3 &&
                info.classroomid.timetable[classnum][randomnumber] == 0
                && info.classroomid.timetable[classnum][randomnumber + 1] == 0
                && info.classroomid.timetable[classnum][randomnumber + 2] == 0) ||
                (info.course.period[id] == 2 &&
                info.classroomid.timetable[classnum][randomnumber] == 0
                && info.classroomid.timetable[classnum][randomnumber + 1] == 0)) {// 判斷此時編號classnum教室有沒有人用

                if((info.course.classroomtype[id]+info.classroomid.computer[classnum])%2!=0)// 教室種類不同
                        continue;
                return classnum;
            }
        }
        return -1;
    }

    void clearFunction(info info,int grade,int group) {//未完成刪除當下年級的資料
        for(int i=0;i<80;i++){
            int classid=info.tempans.ans[grade][group][i]; //classid為整個課程資訊的編號
            if(classid!=-1){
                info.tempans.ans[grade][group][i]=-1;
                info.professorid.timetable[info.course.professor[classid]][i]=-1;
                info.classroomid.timetable[info.course.tempclassroom[classid]][i]=-1;
            }
        }
        /*for(int i=0;i<info.course.maxOfGrade[grade];i++){
            info.course.tempclassroom[info.course.semOrder[grade][i]]=-1;
        }*/
    }
    void show(info info){
            for(int i=0;i<4;i++){
                for(int k=0;k<2;k++){
                    for(int m=0;m<80;m++){
                        System.out.print(info.tempans.ans[i][k][m] );
                    }
                    System.out.println(" ");
                }
            }
        System.out.println(" ");
    }
}
