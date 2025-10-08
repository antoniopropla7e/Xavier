base = 12.5
altura = 8.7
area = base * altura
print (area)

edad = 19
if edad <18:
     print ("GTFO")
elif edad == 18:
    print ("Get in")
else:
    print ("?")

# Suma
suma = a + b
print(f"Suma de {a} + {b} es:  {suma}")
a = 10
b = 3 

# Resta
resta = a - b
print(f"Resta de {a} - {b} es:  {resta}")

a = 10
b = 3 
# Multiplicacion
multiplicacion = a * b
print(f"Multiplicacion de {a} * {b} es:  {multiplicacion}")

a = 10
b = 3 
# Division
division = a // b
print(f"Division de {a} // {b} es:  {division}")

frutas = ["Manzana","Banana","Naranja","Pera","Uva"]
print (f"La primera fruta: {frutas[0]}")

print (f"la ultima fruta: {frutas[-1]}")

print (f"la fruta de el medio:{frutas[2]}")

numero_a = 9
numero_b = 3

numero_c = 11
numero_d = 6

if numero_a % numero_b == 0:
    print(f"{numero_a} es divisible por {numero_b}.")
else:
    print(f"{numero_a} no es divisible por {numero_b}.")
    

if numero_c % numero_d == 0:
    print(f"{numero_c} es divisible por {numero_d}.")
else:
    print(f"{numero_c} NO es divisible por {numero_d}.")

    coordenadas = (24.6581, -113.1326)

latitud, longitud = coordenadas


print(f"Latitud: {latitud}")     
print(f"Longitud: {longitud}")    

contrasena_correcta = "33333"

contrasena_ingresada = input("Por favor, ingresa la contraseña: ")


if contrasena_ingresada == contrasena_correcta:

    print("\n¡Acceso concedido! Bienvenido.")
else:

    print("\nAcceso denegado. La contraseña es incorrecta.")

for i in range (1,11):
    print (i)