import java.lang.reflect.InvocationTargetException;
import java.sql.*;


public class JDBC {
    private static final String url = "jdbc:mysql://localhost:3306/tutorial?useLegacyDatetimeCode=false&serverTimezone=UTC&useSSL=false";
    private static final String username = "root";
    private static final String password = "Element11+";

    public static void main(String[] args) {

        try {
            Class.forName("com.mysql.cj.jdbc.Driver").getDeclaredConstructor().newInstance();
            System.out.println("Соединение успешно!");
            Connection connection= DriverManager.getConnection(url, username, password);
            Statement statement = connection.createStatement();
            ResultSet resultSet = statement.executeQuery("select * from tutorial.order_number");
            while (resultSet.next()){
                System.out.println(resultSet.getString(1)+" "+(resultSet.getString(2)));
            }
            resultSet.close();
            statement.close();
            connection.close();
        } catch (SQLException e){
            e.printStackTrace();
        }catch (ClassNotFoundException e){
            e.printStackTrace();
        } catch (InstantiationException e) {
            e.printStackTrace();
        } catch (InvocationTargetException e) {
            e.printStackTrace();
        } catch (NoSuchMethodException e) {
            e.printStackTrace();
        } catch (IllegalAccessException e) {
            e.printStackTrace();
        }
    }
    }
