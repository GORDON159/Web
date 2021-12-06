import streamlit as st
import pandas as pd
import pymysql
username = 'root'
password = 'nuuCSIE406'
database = 'gordon'
host = 'justtry.406.csie.nuu.edu.tw'
import mysql.connector as mysql

def conn(name, pword, db, mysqldb = None, cursor = None):
    try:
        mysqldb = mysql.connect( 
                host = host,
                user = name,
                password = pword,
                database = db,
                raise_on_warnings = True,
                charset = 'utf8'
            )
    except Exception as e:
        print(e)
    else:
        if mysqldb.is_connected():
            print('資料庫名稱: ', db)
            cursor = mysqldb.cursor()
    return mysqldb, cursor
mysqldb,cursor = conn(username,password,database)
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