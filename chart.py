import streamlit as st
import pandas as pd

# 設定網頁標題
st.title('My App')

# 加入網頁文字內容
st.write("My first app")

# 加入 pandas 資料表格
st.write(pd.DataFrame({
    'first column': [1, 2, 3, 4],
    'second column': [10, 20, 30, 40]
}))
