C#

using System;
using System.Collections.Generic;
using System.Linq; 

public class Program
{
    public static void Main(string[] args)
    {
        Console.WriteLine("\n--- NIVEL FÁCIL 💡 ---\n");
        Ejercicio1();
        Ejercicio2();

        Console.WriteLine("\n--- NIVEL INTERMEDIO 📈 ---\n");
        Ejercicio3();
        Ejercicio4();

        Console.WriteLine("\n--- NIVEL AVANZADO 🏆 ---\n");
        Ejercicio5();
    }

    public static void Ejercicio1()
    {
        Console.WriteLine("1. Verificador de Mayoría de Edad");
        
        Console.Write("Por favor, introduce tu edad: ");
        
        if (int.TryParse(Console.ReadLine(), out int edad))
        {
            if (edad >= 18)
            {
                Console.WriteLine("Resultado: Es mayor de edad.");
            }
            else
            {
                Console.WriteLine("Resultado: Es menor de edad.");
            }
        }
        else
        {
            Console.WriteLine("Error: Entrada no válida para la edad.");
        }
        Console.WriteLine(new string('-', 30));
    }

    public static void Ejercicio2()
    {
        Console.WriteLine("2. Creación y Acceso a Tuplas");

        (string Nombre, int Edad) estudiante = ("Ana", 22);

        Console.WriteLine($"Estudiante: {estudiante.Nombre}");
        Console.WriteLine($"Edad: {estudiante.Edad}");
        
        Console.WriteLine(new string('-', 30));
    }

    public static void Ejercicio3()
    {
        Console.WriteLine("3. Lista de Tareas (List<string>)");

        List<string> tareas = new List<string>();

        Console.WriteLine("Introduce 3 tareas:");
        
        for (int i = 0; i < 3; i++)
        {
            Console.Write($"Tarea #{i + 1}: ");
            string tarea = Console.ReadLine();
            
            tareas.Add(tarea);
        }

        Console.WriteLine("\n--- TAREAS PENDIENTES ---");
        
        foreach (string t in tareas)
        {
            Console.WriteLine($"- {t}");
        }
        
        Console.WriteLine(new string('-', 30));
    }

    public static void Ejercicio4()
    {
        Console.WriteLine("4. Procesamiento de Lista de Números (List<int>)");

        List<int> numeros = new List<int> { 10, 5, 20, 8, 15 };
        
     
        int suma = 0;
        int maximo = numeros[0]; 
        
        foreach (int num in numeros)
        {
          
            suma += num;
            
            if (num > maximo)
            {
                maximo = num;
            }
        }

        Console.WriteLine($"Lista de números: {string.Join(", ", numeros)}");
        Console.WriteLine($"Suma total: {suma}");
        Console.WriteLine($"Número más alto: {maximo}");
        
        Console.WriteLine(new string('-', 30));
    }

    public static void Ejercicio5()
    {
        Console.WriteLine("5. Inventario de Productos (List<Tuple>)");

        List<(string Nombre, double Precio, int Stock)> inventario = new List<(string, double, int)>
        {
            ("Laptop", 1200.00, 5),      
            ("Mouse", 25.50, 45),
            ("Teclado", 75.99, 8),       
            ("Monitor", 350.00, 12),
            ("Webcam", 50.00, 3)         
        };
        
        int umbralStock = 10;
        
        Console.WriteLine($"\n--- PRODUCTOS CON STOCK BAJO (< {umbralStock}) ---");

        foreach (var producto in inventario)
        {
            if (producto.Stock < umbralStock)
            {
                Console.WriteLine($"Producto: {producto.Nombre} | Stock Actual: {producto.Stock}");
            }
        }
        
        Console.WriteLine(new string('-', 30));
    }
}