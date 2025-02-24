import java.util.Scanner;

public class Elo {

    static double calcular_puntuacion_esperada(int A, int B) {
        return 1.0 / (1.0 + Math.pow(10, (RB - RA) / 400.0));
    }

    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        System.out.print("Puntuación Elo del jugador A: ");
        int RA = scanner.nextInt();
        System.out.print("Puntuación Elo del jugador B: ");
        int RB = scanner.nextInt();
        System.out.println("Puntuación esperada del jugador A: " + calcular_puntuacion_esperada(RA, RB));

        scanner.close();
    }
}
