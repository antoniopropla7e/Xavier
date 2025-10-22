#include <iostream>
#include <string> 
#include <cmath> 
#include <limits> 

using namespace std;


const int LIMITE = 10; 


const int numeroSecreto = 42; 


int main() {
    
  
    cout << "===========================================" << endl;
    cout << "           1. Tipos de Datos y E/S        " << endl;
    cout << "===========================================" << endl;

    cout << "¡Hola, Mundo!" << endl;

    int edad = 30;
    
    float pi_aproximado = 3.14159f; 
    char inicial = 'A';
    bool esMayorDeEdad = true;

    cout << "\n--- Valores de Variables ---" << endl;
    cout << "Entero (edad): " << edad << endl;
    cout << "Flotante (pi_aproximado): " << pi_aproximado << endl;
    cout << "Carácter (inicial): " << inicial << endl;
   
    cout << "Booleano (esMayorDeEdad): " << esMayorDeEdad << endl;
    
   
    double num1, num2;
    cout << "\n\n===========================================" << endl;
    cout << "      2. Operaciones Aritméticas y cmath    " << endl;
    cout << "===========================================" << endl;
    
    cout << "--- Operaciones y cmath ---" << endl;
    cout << "Introduce el primer número (para operaciones y raíz): ";
   
    if (!(cin >> num1)) {
        cout << "Error de entrada. Terminando..." << endl;
        return 1;
    }
    cout << "Introduce el segundo número (para operaciones y potencia): ";
    if (!(cin >> num2)) {
        cout << "Error de entrada. Terminando..." << endl;
        return 1;
    }

    cout << "\n--- Resultados Aritméticos ---" << endl;
    cout << "Suma: " << num1 + num2 << endl;
    cout << "Resta: " << num1 - num2 << endl;
    cout << "Multiplicación: " << num1 * num2 << endl;
    
    if (num2 != 0) {
        cout << "División: " << num1 / num2 << endl;
    } else {
        cout << "División: No es posible dividir por cero." << endl;
    }

    cout << "\n--- Resultados con cmath ---" << endl;
    cout << "Potencia (" << num1 << " elevado a " << num2 << "): " << pow(num1, num2) << endl;

    if (num1 >= 0) {
        cout << "Raíz Cuadrada del primer número: " << sqrt(num1) << endl;
    } else {
        cout << "Raíz Cuadrada: No se puede calcular la raíz de un número negativo." << endl;
    }

    int edad_usuario;
    cout << "\n\n===========================================" << endl;
    cout << "      3. Estructuras de Control (if/else)    " << endl;
    cout << "===========================================" << endl;

    cout << "--- Verificación de Mayoría de Edad ---" << endl;
    cout << "Por favor, introduce tu edad: ";
    
    cin.ignore(numeric_limits<streamsize>::max(), '\n');
    cin >> edad_usuario;

    if (edad_usuario >= 18) {
        cout << "¡Felicitaciones! Tienes " << edad_usuario << " años, por lo que eres mayor de edad. 🎉" << endl;
    } else {
        cout << "Tienes " << edad_usuario << " años, por lo que eres menor de edad. 👶" << endl;
    }

    int numero_tabla;

    cout << "\n\n===========================================" << endl;
    cout << "       4. Bucle For y Constantes (const)     " << endl;
    cout << "===========================================" << endl;

    cout << "--- Tabla de Multiplicar ---" << endl;
    cout << "El límite de la tabla es: " << LIMITE << endl;
    cout << "Introduce el número del cual quieres la tabla: ";
    
    cin.ignore(numeric_limits<streamsize>::max(), '\n');
    cin >> numero_tabla;

    cout << "\nTabla de multiplicar del " << numero_tabla << ":" << endl;

    for (int i = 1; i <= LIMITE; ++i) {
        cout << numero_tabla << " x " << i << " = " << numero_tabla * i << endl;
    }

    int intento = 0; 
    
    cout << "\n\n===========================================" << endl;
    cout << "        5. Bucle While y Constantes          " << endl;
    cout << "===========================================" << endl;

    cout << "--- Juego de Adivinanza (Bucle while) ---" << endl;
    cout << "Adivina el número secreto entre 1 y 100." << endl;

    cin.ignore(numeric_limits<streamsize>::max(), '\n');
    
    while (intento != numeroSecreto) {
        cout << "\nIntroduce tu intento: ";
        cin >> intento;

        if (intento < numeroSecreto) {
            cout << "¡Incorrecto! El número secreto es MÁS ALTO. ⬆️" << endl;
        } else if (intento > numeroSecreto) {
            cout << "¡Incorrecto! El número secreto es MÁS BAJO. ⬇️" << endl;
        }
        
    }

    cout << "\n¡Felicidades! Adivinaste el número secreto (" << numeroSecreto << "). 🏆" << endl;
    
    cout << "\n*** Fin del Programa Consolidado ***" << endl;

    return 0;
}