package JDBC;


import java.sql.*;

public class app {

    private static final String URL = "Driver:mysql://localhost:3306/university";
    private static final String USER = "root";
    private static final String PASSWORD = "";

    private static Connection connection;
    private static Statement statement;
    private static ResultSet resultSet;


    public static void connect(){
        try{
            connection = DriverManager.getConnection(URL, USER, PASSWORD);
        }
        catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public static void disconnect(){
        try{
            if (resultSet != null){
                resultSet.close();
            }
            if (statement != null){
                statement.close();
            }
            if (connection != null){
                connection.close();
            }

        }catch (SQLException e){
            e.printStackTrace();
        }
    }
    public static void main(String[] args) {
        connect();
        try{
            statement = connection.createStatement();

            String sql = "insert into student (RegNo,Name) values (211,var)";
            statement.executeUpdate(sql);

        }
        catch(SQLException e){
            e.printStackTrace();
        }
        finally{
            disconnect();
        }
    }
}