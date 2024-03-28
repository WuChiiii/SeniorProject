import ssl
ssl._create_default_https_context = ssl._create_unverified_context
import urllib.request as req
import os

# retrieve == 1 ->> drop the current exitsting table first 
# dbE == 1 ->> the table courses exists
def crawler( url , header , last_id , dbE , retrieve = 0 ):
    request = req.Request( url , headers = { "User-Agent": header } )
    with req.urlopen( request ) as response:
        data = response.read().decode("utf-8")
    #print( data )
    import bs4
    root = bs4.BeautifulSoup( data , "html.parser" )
    courses = root.find_all( "span" , class_ = 'A03' )

    # print( courses ) # print( type( course ) ) ->> <class 'bs4.element.Tag'>

    # for course in courses:
        # print( course.string )

    List = []

    for course in courses:
        List.append( course.string )

    # print( List )

    import pymysql

    host = "localhost" 
    user = "root" 
    password = os.environ.get('DBpassw') # Enter your own password 
    db = "undergraduate_project" 

    connect = pymysql.connect( host = host , user = user , password = password , db = db )
    cursor = connect.cursor() 

    # print( len( List ) ) 


    if( retrieve == 1 ): 
        cursor.execute("drop table if exists undergraduate_project.courses;")

    # cursor.execute('create table courses if not exist ( "id" int(255) AUTO_INCREMENT PRIMARY_KEY, "courseName" varchar(255), "studentNumber" int(255), "period" int(255), "semester" varchar(255), "classType" varchar(255), classroomType varchar(255), "group" int(255) );')  
    if( dbE == 0 ):
        cursor.execute('create table if not exists courses ( id int PRIMARY KEY AUTO_INCREMENT, courseName varchar(255), courseNumber varchar(255), credit varchar(255), period varchar(255), semester varchar(255), groupType varchar(255), classType varchar(255), remarks varchar(255), program varchar(255));' )
    # id int AI PK 
    # courseName varchar(255) 
    # courseNumber varchar(255) 
    # credit varchar( 255 )
    # period varchar(255)
    # semester varchar(255) 
    # groupType varchar(255) 
    # classType varchar(255) 
    # remarks varchar(255) 
    # program varchar(255)

    for i in range( 0 , int( len( List ) / 10 ) ):
        ##########s### Local Group ############
        data = List[ i * 10 : ( i + 1 )  * 10 ]
        row = []
        row.append( data[ 0 ] ) 
        row.append( data[ 2 ] ) 
        row.append( data[ 3 ] ) 
        row.append( '3' )
        row.append( data[ 4 ] + data[ 5 ] )
        row.append( 'Local Group' ) 
        row.append( data[ 6 ] ) 
        row.append( data[ 8 ] ) 
        row.append( data[ 9 ] ) 

        sql = "insert into courses values (" + str( last_id ) +  ", %s , %s , %s , %s , %s , %s , %s , %s , %s );"
        last_id = last_id + 1
        try:
            cursor.execute( sql , row ) 
            connect.commit() 
        except pymysql.Error as e: 
            print("Error!")
            last_id = last_id - 1

        ############ International Group ############
        row[ 0 ] = data[ 1 ] 
        row[ 5 ] = "International Group"
        sql = "insert into courses values (" + str( last_id ) +  ", %s , %s , %s , %s , %s , %s , %s , %s , %s );"
        last_id = last_id + 1 
        try:
            cursor.execute( sql , row ) 
            connect.commit() 
        except pymysql.Error as e: 
            print("Error!") 
            last_id = last_id - 1

    return last_id
def checkDB():
    import pymysql
    host = "localhost" 
    user = "root" 
    password = os.environ.get('DBpassw') # Enter your own password 
    db = "undergraduate_project" 

    connect = pymysql.connect( host = host , user = user , password = password , db = db )
    cursor = connect.cursor() 
    cursor.execute('show tables like "courses" ;') 
    flag = cursor.fetchone()
    if ( flag is None ):
        return 0
    else:
        return 1

id = 1 
if( checkDB() == 0 ):
    id = crawler( "https://sys.ndhu.edu.tw/aa/class/RuleSearch/RuleDetail.aspx?id=112,1120000369,B,CSIE_1123335",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
            id , 0 , 0 )
    id = crawler( "https://sys.ndhu.edu.tw/aa/class/RuleSearch/RuleDetail.aspx?id=112,1120000370,B,CSIE_1123335",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
            id , 1 , 0 )
    id = crawler( "https://sys.ndhu.edu.tw/aa/class/RuleSearch/RuleDetail.aspx?id=112,1120000371,B,CSIE_1123335",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
            id , 1 , 0 )
    id = crawler( "https://sys.ndhu.edu.tw/aa/class/RuleSearch/RuleDetail.aspx?id=112,1120000372,B,CSIE_1123335",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
            id , 1 , 0 )
    id = crawler( "https://sys.ndhu.edu.tw/aa/class/RuleSearch/RuleDetail.aspx?id=112,1120000373,B,CSIE_1123335",
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/116.0.0.0 Safari/537.36",
            id , 1 , 0 )