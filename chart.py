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

d = st.date_input("請選擇日期")
sql='''SELECT*FROM accountnow;'''
cursor.execute(sql)
result=cursor.fetchone()
result=list(result)
sql='''SELECT `exercise`,`times`, `grade`, `suggest`, `TIME` FROM Identify where TIME='%s' and name='%s';'''%(str(d),result[0])
cursor.execute(sql)
re=cursor.fetchall()
list1 = list(re)
re= pd.DataFrame(re, columns=('運動','次數','分數','建議','日期'))

st.table(re)
try:
    sql = '''SELECT*FROM Identify where exercise='二頭彎舉' and TIME='%s';'''%(str(d))
    cursor.execute(sql)
    result=cursor.fetchall()
    result= pd.DataFrame(result)
    result.columns=['exercise','grade','suggest','flag','TIME','name','times']
    x = result['times']
    y = result['grade']
    p=figure(
    x_axis_label='次數',
    y_axis_label='分數',
    title='二頭彎舉')
    p.title.text_font_size = '30pt'
    p.title.text_font_family = "DFKai-SB"
    p.title_location='above'
    p.xaxis.axis_label_text_font_size = "20pt"
    p.xaxis.axis_label_text_font_style = "bold"
    p.xaxis.axis_label_text_font_family = "DFKai-SB"
    p.xaxis.major_label_text_font_size = "15pt"
    
    p.yaxis.axis_label_text_font_size = "20pt"
    p.yaxis.axis_label_text_font_style = "bold"
    p.yaxis.axis_label_text_font_family = "DFKai-SB"
    p.yaxis.major_label_text_font_size = "15pt"
    p.line(x, y, legend_label='Score', line_width=4 , line_color = 'black')
    st.bokeh_chart(p, use_container_width=False)
except:
    st.write("沒有資料")
