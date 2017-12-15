import serial
import time
locations=['COM4']
for device in locations:
    try:
        print ("Conectando...",device)
        arduino = serial.Serial('COM4, 9600)
        break
    except:
        print ("Fallo conexion",device)
time.sleep(1.8)
while True:
     # parte domotica recibe temperatura
     fa = open ('estado_temperatura.txt','w')
     escribirtext = arduino.readline()
     fa.write(escribirtext)
     fa.close

    # parte domotica envia
     fi = open('estado_domotica.txt','r+')
     speed3 = fi.read()
     fi.close()
     arduino.write(speed3)





     print ("recibe - Temperatura: " + escribirtext)
     print ("envia - Boton: " + speed3)
