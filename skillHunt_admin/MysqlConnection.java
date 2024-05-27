package skillHunt_admin;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class MysqlConnection {
	private String username;
	private String pwd;
	private String dbname;
	private Connection conn;
	
	public MysqlConnection() {
		this.dbname = "final_project";
		this.username = "root";
		this.pwd = "";
		connectDb();
	}
	
	public Connection connectDb() {
		
		try {
			conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/"+dbname,username,pwd);
			return conn;
		}
		catch(SQLException e) {
			System.out.println(e);
			return conn;
		}
		
		
	}
}
