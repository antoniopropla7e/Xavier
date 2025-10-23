base = float(input("Introduce la base del triángulo: "))

altura = float(input("Introduce la altura del triángulo: "))

area = (base * altura) / 2

print(f"\nEl área del triángulo con base {base} y altura {altura} es: {area}")

numero = int(input("Introduce un número entero: "))

if numero % 2 == 0:
    print(f"El número {numero} es PAR.")
else:
    print(f"El número {numero} es IMPAR.")


calificacion = 75  
asistencia = 85    

print(f"Calificación: {calificacion}, Asistencia: {asistencia}%")

if calificacion >= 70 and asistencia >= 80:
    print("Resultado: Aprobado ✅")
else:
    print("Resultado: Reprobado ❌")


suma_total = 0
print("--- Sumador Interactivo ---")
print("Ingresa números para sumar. Ingresa 0 para finalizar y ver el total.")

while True:
    
    try:
        numero = int(input("Ingresa un número (0 para salir): "))
    except ValueError:
        print("Entrada no válida. Por favor, ingresa un número entero.")
        continue

    if numero == 0:
        break

    suma_total += numero
    print(f"Suma actual: {suma_total}")

print(f"\n¡Proceso finalizado! La suma total de los números ingresados es: {suma_total}")

precios = [50.0, 120.50, 80.0, 45.99, 200.75]
print("Precios originales:", precios)

precios_con_iva = []

FACTOR_IVA = 1.21

for precio_original in precios:
    
    precio_final = round(precio_original * FACTOR_IVA, 2)

    precios_con_iva.append(precio_final)

print("\nPrecios con IVA (21%):", precios_con_iva)