import streamlit as st
import pandas as pd
import pymysql


dbhost='justtry.406.csie.nuu.edu.tw'
dbuser='root'
dbport=33060
dbpass='nuuCSIE406'
dbname='gordon'
try:
    db = pymysql.connect(host=dbhost,user=dbuser,port=dbport,password=dbpass,database=dbname)
    print("連結成功")
    cursor = db.cursor()
except pymysql.Error as e:
    print("連線失敗"+str(e))
#sql = "SELECT * FROM Identify "
sql = '''SELECT*FROM Identify where exercise='二頭彎舉';'''
try:
    cursor.execute(sql)
    result=cursor.fetchall()
    result= pd.DataFrame(result)
    result.columns=['exercise','grade','suggest','flag','TIME','name']
    line_chart_data = result['grade']
    line_chart_data = pd.DataFrame(line_chart_data)
    line_chart = st.line_chart(line_chart_data)
except:
    print('幹')