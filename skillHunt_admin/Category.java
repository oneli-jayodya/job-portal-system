package skillHunt_admin;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import javax.swing.table.DefaultTableModel;

public class Category{

		protected String cname;
		protected int id;
		protected MysqlConnection dbc;
		
		public Category( int id, String cname) {
			this.id = id;
			this.cname = cname;
			
		}

		public Category() {
			 dbc= new MysqlConnection();
			 
		}
		
		
		//check exits
		public int exits(String cname) {
			
			try{
				String checkDuplicateSql = "SELECT * FROM categories WHERE category_name = ?";
		        PreparedStatement checkStatement = dbc.connectDb().prepareStatement(checkDuplicateSql);
		        checkStatement.setString(1, cname);
		        ResultSet resultSet = checkStatement.executeQuery();
	
		        if (resultSet.next()) {
		            // Category name already exit
		            return 0;
		        }else {
		        	return 1;
		        }
			}catch(SQLException s) {
				return 0;
			}
		}
		
		
		//insert category
		public Boolean insert(String cname) {
			
			try {
				// Create SQL statement
	            String sql = "INSERT INTO categories (category_name) VALUES (?)";
	            PreparedStatement statement = dbc.connectDb().prepareStatement(sql);
	            
	            // Set values for parameters
	            statement.setString(1, cname);
	            
	            if(cname.isEmpty()) {
	            	return false;
				}else {
					
	            // Execute the statement
					int rowsInserted = statement.executeUpdate();
					if (rowsInserted > 0) {
					
						return true;
					}else {
						return false;
					}
			        }
			
			}catch(SQLException e) {
				return false;
			}
		}
		
		
		
		//view category
		public DefaultTableModel view() {
		    DefaultTableModel model = new DefaultTableModel();

		    try {
		        // Retrieve data from the database
		        String sql = "SELECT * FROM categories";
		        PreparedStatement statement = dbc.connectDb().prepareStatement(sql);

		        ResultSet resultSet = statement.executeQuery();

		        // Get column names
		        int columnCount = resultSet.getMetaData().getColumnCount();
		        for (int i = 1; i <= columnCount; i++) {
		            model.addColumn(resultSet.getMetaData().getColumnName(i));
		        }

		        // Get data rows
		        while (resultSet.next()) {
		            Object[] rowData = new Object[columnCount];
		            for (int i = 0; i < columnCount; i++) {
		                rowData[i] = resultSet.getObject(i + 1);
		            }
		            model.addRow(rowData);
		        }

		    } catch (SQLException e) {
		        e.printStackTrace();
		    }

		    return model;
		}
		
		
		//edit category
		public int update(String oldName, String newName) {
		    try {
		        if (newName.isEmpty()) {
		            return 0;
		        } else {
		            String updateSql = "UPDATE categories SET category_name = ? WHERE category_name = ?";
		            PreparedStatement statement = dbc.connectDb().prepareStatement(updateSql);
		            statement.setString(1, newName);
		            statement.setString(2, oldName);
		            
		            int rowsUpdated = statement.executeUpdate();
		            if (rowsUpdated > 0) {
		                return 1;
		            } else {
		                return 2;
		            }
		        }
		    } catch (SQLException e) {
		        return 2;
		    }
		}
		
		//delete category			
		public boolean delete(String cname) {
		    
			try {
	            // Delete category from the database
	            String deleteQuery = "DELETE FROM categories WHERE category_name = ?";
	            PreparedStatement preparedStatement = dbc.connectDb().prepareStatement(deleteQuery);
	            preparedStatement.setString(1, cname);
	            int rowsAffected = preparedStatement.executeUpdate();
	            
	            if (rowsAffected > 0) {
	                return true;
	            } else {
	               return false;
	            }
	        } catch (SQLException e) {
	            
	            return false;
	        }
		}
}
