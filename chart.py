import streamlit as st
import pandas as pd
import datetime
from bokeh.plotting import figure
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
                charset = 'utf8',
                port = '33060'
            )
    except Exception as e:
        print(e)
    else:
        if mysqldb.is_connected():
            print('資料庫名稱: ', db)
            cursor = mysqldb.cursor()
    return mysqldb, cursor
mysqldb,cursor = conn(username,password,database)

d = st.date_input("When's your birthday",
datetime.date(2019, 7, 6))
st.write('Your birthday is:', d)

#sql = "SELECT * FROM Identify "
sql = '''SELECT*FROM Identify where exercise='二頭彎舉';'''
cursor.execute(sql)
result=cursor.fetchall()
result= pd.DataFrame(result)
result.columns=['exercise','grade','suggest','flag','TIME','name','times']
x = result['times']
y = result['grade']
p=figure(
x_axis_label='次數',
y_axis_label='分數')
p.line(x, y, legend_label='Score', line_width=2)
st.bokeh_chart(p, use_container_width=False)
