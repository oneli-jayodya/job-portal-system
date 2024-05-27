package skillHunt_admin;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

public class Login {
	protected String username;
	protected String password;
	protected MysqlConnection dbc;
	
	public Login(String username, String password) {
		this.username = username;
		this.password = password;
		
	}

	public Login() {
		 dbc= new MysqlConnection();
		 
	}
	
	public int log(String username, String password) {
		try {
			String sql = "SELECT name,password FROM Admin WHERE name=? AND password=?";
			PreparedStatement statement = dbc.connectDb().prepareStatement(sql);
			statement.setString(1, username);
	        statement.setString(2, password);
			ResultSet rs=statement.executeQuery();
			
			if(username.isEmpty() | password.isEmpty() ) {
				return 3;
			}else {
				if(rs.next()) {
					return 1;
				}else {
					return 0;
				}
			}
			
		}catch(SQLException e) {
			return 2;
		}
	}
}
