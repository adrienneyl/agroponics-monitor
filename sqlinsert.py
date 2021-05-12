import mysql.connector
import time
import datetime

ts = time.time()
timestamp = datetime.datetime.fromtimestamp(ts).strftime('%Y-%m-%d %H:%M:%S')
mydb = mysql.connector.connect(
    host="localhost",
    user="agroponics",
    password="SQLAGRO!",
    db="SensorData")

mycursor = mydb.cursor()

sql = "INSERT INTO ActiveData (pH, Temperature, FlowVel, ElecCon) VALUES (%s, %s, %s, %s)"
val = ("5", "20", "3", "10")

mycursor.execute(sql, val)

mydb.commit()
print(mycursor.rowcount, "record inserted.")
