import java.sql.*;

public class JDBC {
    private static final String url = "jdbc:mysql://localhost:3306/?useLegacyDatetimeCode=false&amp&serverTimezone=UTC&useSSL=false";
    private static final String username = "root";
    private static final String password = "Element11+";

    public static void main(String[] args) {
       Connection connection;
        try {

            connection = DriverManager.getConnection(url, username, password);

            if (!connection.isClosed()) {

                System.out.println("Соединение с БД установлено");
            }
        }catch (SQLException e) {
            e.printStackTrace();
            System.out.println("Не удалось загрузить класс драйвера");
        }
    }
    }
