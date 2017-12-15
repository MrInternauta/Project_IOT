#include <Keypad.h> //------------------- Declaracion de pines de teclado numerico de la casa
const byte filas=4;
const byte columnas=4;
byte pins_filas[]={13,12,11,10};
byte pins_columnas[]={9,8,7,6};
char teclas[filas][columnas]=
{
  {'1','2','3','A'},
  {'4','5','6','B'},
  {'7','8','9','C'},
  {'*','0','#','D'}
};
Keypad Teclado1= Keypad(makeKeymap(teclas), pins_filas,pins_columnas,filas,columnas);

#include <Servo.h> //---------------Declaracion de pines de servomotor
Servo motorservo;
float grados=0;
#include<LiquidCrystal.h> //--------------------------------Declaracion de pines de pantallas LCD
LiquidCrystal lcd(4,3,2,1,0,14);//(rs,E,D4,D5,D6,D7) 
LiquidCrystal lcdDos(22,24,26,28,30,32);
const int PotenciometroA = A0;  //-------------Declaracion de pin de potenciometro
const int MotorGiroA = 15;      //-------------Declaracion de pin de giro A
const int MotorGiroB = 16;      //-------------Declaracion de pin de giro B
int ValorDelPotenciometro;     //----------------Variable donde se guarda el valor del potenciometro
int ledpin1=34; //LUCES 1      //-------------Declaracion de pin de leds de adentro
int ledpin2=36; //LUCES 2       //-------------Declaracion de pin leds de afuera
//Variables donde se almacena los Estados (enciende y apaga calefaccion)
int temp;
//Variable que almacena los datos del LM35
int sentemp=A4;
//Variable de estados
int status;
int val;
int ventilador = 18; //VENTILADOR
int ldr=A1;
int contador=0;

void setup() {
  lcdDos.begin(16,2);
lcdDos.print("Temperatura");
lcdDos.begin (16,2);
lcdDos.print("Intensidad de Luz");
  motorservo.attach(5);
  //Inicando la comunicacion de el bluetooth  
  Serial.begin(9600);
  //Imprimir por bluetooth (Conectado)
  Serial.println("Conectado");
  //  Declarando pines
  pinMode(ledpin1,OUTPUT);
  pinMode(ledpin2,OUTPUT);
  pinMode(ventilador,OUTPUT);
  pinMode (MotorGiroA, OUTPUT);
pinMode (MotorGiroB, OUTPUT);
  
  
 
}

void loop(){
  //------------------------------------------------------------------------ Control de teclado numerico de la casa
  char pulsacion=Teclado1.getKey();   
switch (pulsacion)
{
  case '0':
  motorservo.write(0);
  lcd.setCursor(0,2);
  lcd.print ("0");
  break;
  
  case '1':
  motorservo.write(10);
  delay(500);
  lcd.setCursor(0,2);
  lcd.print ("BIENVENIDO");
  break;

  case '2':
  motorservo.write(20);
  delay(500);
  lcd.setCursor(0,2);
  lcd.print ("ABRAHAM");
  break;

  case '3':
  motorservo.write(30);
  delay(500);
  lcd.setCursor(0,2);
  lcd.print ("30");
  break;

  case '4':
  motorservo.write(40);
  delay(500);
  lcd.setCursor(0,2);
  lcd.print ("ABRAHAM");
  break;

  case '5':
  motorservo.write(50);
  delay(500);
  lcd.setCursor(0,2);
  lcd.print ("ABRAHAM");
  break;

  case '6':
  motorservo.write(60);
  delay(500);
  lcd.setCursor(0,2);
  lcd.print ("ABRAHAM");
  break;

  case '7':
  motorservo.write(70);
  delay(500);
  lcd.setCursor(0,2);
  lcd.print ("ABRAHAM");
  break;

  case '8':
  motorservo.write(80);
  delay(500);
  lcd.setCursor(0,2);
  lcd.print ("ABRAHAM");
  break;

  case '9':
  motorservo.write(90);
  delay(500);
  lcd.setCursor(0,2);
  lcd.print ("INGRESE CONTRASEÑA");
  break;

  
}
 //------------------------------------------------------------------------ Control de pantallas LCD
   switch(contador)
   {
    case 0:
    Serial.print(" ");
    break;

    case 1:
temp=((analogRead(sentemp)*5.0*100.0)/1023.0);
lcdDos.setCursor(0,2);
lcdDos.print (temp);
lcdDos.print("ªC__");
break;
    case 2:
analogRead(ldr);
lcdDos.setCursor(0,2);
lcdDos.print(ldr);
lcdDos.print("Luz__");
break;

}

//------------------------------------------------------------------Control de servomotor
ValorDelPotenciometro = analogRead(PotenciometroA);
                  if (ValorDelPotenciometro < 500)
                        {
                          digitalWrite (MotorGiroA, HIGH);
                          digitalWrite (MotorGiroB, LOW); 
                         }
              else if (ValorDelPotenciometro > 524)
              {
                digitalWrite (MotorGiroA, LOW);      
                digitalWrite (MotorGiroB, HIGH); 
                
              } 
           else 
           {
            digitalWrite (MotorGiroA, LOW);
           digitalWrite (MotorGiroB, LOW);
           }
  temp = analogRead(sentemp); //Lee los datos del sensor LM35
        temp = (5.0 * temp * 100)/1023.0;//Formula para convertir a ºC
        Serial.println(temp);
        delay(150); 

  if(Serial.available()>0)
   {
    int val=Serial.read();

     //inicia si los valores guardados son diferentes a T
      //------------------------------------------------SOFTWARE
     if(val!='T')
     {



//------------------------------Temperatura
if(val== '1') //Se enciende el ventilador
{
 status= HIGH;
 digitalWrite(ventilador,status);
 delay(10);
}
if(val== '2'  ) //Se apaga el ventilador
{
status= LOW;
digitalWrite(ventilador,status);
delay(10);
}
if(val== '7') //Se enciende el control automatico de temperatura
{ 
 if(temp>30) //Si la temperatura es mayor 30 enciende el ventilador
 {
  status= HIGH;
 digitalWrite(ventilador,status);
 delay(10);
}
if(temp<20) //Si la temperatura es menor a 20 apaga el ventilador 
{
 status= LOW;
digitalWrite(ventilador,status);
delay(10); 
}
}
//------------------------------Ilumincion
if(val== '8'){
      //Iniciar la lectura de dia o de noche
int  valorLDR= analogRead(ldr);
   //Muestra el valor del ldr
   //noche
   if(valorLDR<=0 && valorLDR<=14){
     status = HIGH;
     digitalWrite(ledpin2,status);
     digitalWrite(ledpin1,status);
     delay(10);
   }
   
   //dia
   if(valorLDR>14){
      status = LOW;
     digitalWrite(ledpin2,status);
     digitalWrite(ledpin1,status);
     delay(10);
   }
 
      }
if(val== '5') //Encender luces de adentro
{
status= HIGH;
digitalWrite(ledpin1,status);
delay(10);
}
if(val== '6') //Apagar luces de adentro
{
status= LOW;
digitalWrite(ledpin1,status);
delay(10);
}
if(val== '3') //Encender luces de afuera
{
status= HIGH;
digitalWrite(ledpin2,status);
delay(10);
}
if(val== 'a') //Apagar luces de afuera
{
status= LOW;
digitalWrite(ledpin2,status);
delay(10);
}
//------------------------------Puertas
if(val== 'd') //Abre puerta 
{
  motorservo.write(0); 
  delay(500);
}
if(val== 'e') //Cierra puerta 
{
  motorservo.write(90);
  delay(500);
}





      
    }
    
  }

 }

