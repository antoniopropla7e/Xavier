#include <iostream>
#include <string>


using namespace std;


void ejercicio1() {
    cout << "--- 1. Calculadora de Área de Rectángulo ---\n";
    
   
    double base, altura, area;

 
    cout << "Introduce la base del rectángulo: ";
    if (!(cin >> base)) return; 

   
    cout << "Introduce la altura del rectángulo: ";
    if (!(cin >> altura)) return; 
    
    area = base * altura;

   
    cout << "El área del rectángulo es: " << area << endl;
}

void ejercicio2() {
    cout << "\n--- 2. Verificador de Número Par o Impar ---\n";
    
    int numero;

    
    cout << "Introduce un número entero: ";
    if (!(cin >> numero)) return;

    
    if (numero % 2 == 0) {
        cout << "El número " << numero << " es Par.\n";
    } else {
        cout << "El número " << numero << " es Impar.\n";
    }
}



void ejercicio3() {
    cout << "\n--- 3. Sumatoria de 1 a N ---\n";

    int n;
    int suma = 0;

   
    cout << "Introduce un número N para la sumatoria (1 a N): ";
    if (!(cin >> n)) return;

 
    for (int i = 1; i <= n; ++i) {
        suma += i; 
    }

    cout << "La suma de los números de 1 hasta " << n << " es: " << suma << endl;
}

void ejercicio4() {
    cout << "\n--- 4. Validación Simple de Contraseña ---\n";

    const string passCorrecta = "12345";
    string intento;
    

    while (intento != passCorrecta) {
        cout << "Introduce la contraseña: ";
        cin >> intento; 
        if (intento != passCorrecta) {
            cout << "Contraseña incorrecta. Inténtalo de nuevo.\n";
        }
    }

   
    cout << "¡Acceso Concedido! Bienvenido.\n";
}


void ejercicio5() {
    cout << "\n--- 5. Cálculo de Factorial ---\n";

    int n;
    
    long long factorial = 1; 

    cout << "Introduce un número entero no negativo para calcular su factorial: ";
    if (!(cin >> n)) return;

    if (n < 0) {
        cout << "Error: El factorial solo se define para números no negativos.\n";
        return;
    }


    if (n == 0) {
        factorial = 1;
    } else {
       
        for (int i = 1; i <= n; ++i) {
            factorial *= i; // factorial = factorial * i;
        }
        /* Alternativa:
        for (int i = n; i >= 1; --i) {
            factorial *= i;
        }
        */
    }

   
    cout << "El factorial de " << n << " (" << n << "!) es: " << factorial << endl;
}

int main() {

    cin.clear();
    cin.ignore(10000, '\n'); 
    
    ejercicio1();
    
    cin.clear();
    cin.ignore(10000, '\n');
    
    ejercicio2();
    
    cin.clear();
    cin.ignore(10000, '\n');
    
    ejercicio3();
    
    cin.clear();
    cin.ignore(10000, '\n');
    
    ejercicio4();
    
    cin.clear();
    cin.ignore(10000, '\n');
    
    ejercicio5();
    
    return 0;
}