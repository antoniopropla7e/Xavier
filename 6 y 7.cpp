#include <iostream>

using namespace std;

int main() {
    int opcion;

    do {

        cout << "\n--- MENÚ SIMPLE ---" << endl;
        cout << "1. Saludar" << endl;
        cout << "2. Despedirse" << endl;
        cout << "3. Salir" << endl;
        cout << "Selecciona una opcion (1-3): ";
        

        cin >> opcion;

        switch (opcion) {
            case 1:
                cout << "¡Hola! Bienvenido/a al programa." << endl;
                break;
            case 2:
                cout << "¡Adiós! Que tengas un buen dia." << endl;
                break;
            case 3:
                cout << "Saliendo del programa. ¡Hasta pronto!" << endl;
                break;
            default:
                cout << "Opcion no valida. Por favor, elige 1, 2 o 3." << endl;
                break;
        }

    } while (opcion != 3);

    return 0;
}

#include <iostream>

using namespace std;


float calcularAreaRectangulo(float base, float altura);

int main() {
    float baseRectangulo, alturaRectangulo;
    float areaCalculada;

   
    cout << "Introduce la base del rectangulo: ";
    cin >> baseRectangulo;

    
    cout << "Introduce la altura del rectangulo: ";
    cin >> alturaRectangulo;

   
    areaCalculada = calcularAreaRectangulo(baseRectangulo, alturaRectangulo);

   
    cout << "\nEl area del rectangulo con base " << baseRectangulo 
         << " y altura " << alturaRectangulo 
         << " es: " << areaCalculada << endl;

    return 0;
}


float calcularAreaRectangulo(float base, float altura) {
  
    float area = base * altura;
    
   
    return area;
}