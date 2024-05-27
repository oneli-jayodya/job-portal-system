package skillHunt_admin;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import java.awt.Color;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.SwingConstants;
import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JTable;
import javax.swing.table.DefaultTableModel;
import javax.swing.JScrollPane;
import javax.swing.ImageIcon;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import java.awt.event.MouseAdapter;
import java.awt.event.MouseEvent;
import java.awt.print.PrinterException;

public class Dashboard extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField name;
	DefaultTableModel model;
	private JTable table;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Dashboard frame = new Dashboard();
					frame.setVisible(true);
					
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public Dashboard() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(0, 0, 1450, 850);
		contentPane = new JPanel();
		contentPane.setBackground(new Color(0, 0, 64));
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JPanel panel = new JPanel();
		panel.setBackground(new Color(0, 0, 64));
		panel.setBounds(10, 10, 1400, 776);
		contentPane.add(panel);
		panel.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("---------------Welcome Admin Panel--------------");
		lblNewLabel.setBounds(189, 39, 1070, 51);
		lblNewLabel.setForeground(new Color(255, 255, 255));
		lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 42));
		lblNewLabel.setHorizontalAlignment(SwingConstants.CENTER);
		panel.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("Enter Category Name ");
		lblNewLabel_1.setFont(new Font("Trebuchet MS", Font.PLAIN, 24));
		lblNewLabel_1.setForeground(new Color(177, 241, 243));
		lblNewLabel_1.setBounds(82, 174, 318, 57);
		panel.add(lblNewLabel_1);
		
		name = new JTextField();
		name.setFont(new Font("Tahoma", Font.BOLD, 18));
		name.setBounds(355, 186, 368, 43);
		panel.add(name);
		name.setColumns(10);
		
		
		JLabel lblNewLabel_2 = new JLabel("New label");
		lblNewLabel_2.setIcon(new ImageIcon(Dashboard.class.getResource("/skillHunt_admin/assets/add (1).png")));
		lblNewLabel_2.setBounds(954, 146, 81, 85);
		panel.add(lblNewLabel_2);
				
		
		JLabel label = new JLabel("New label");
		label.setIcon(new ImageIcon(Dashboard.class.getResource("/skillHunt_admin/assets/edit (1).png")));
		label.setBounds(951, 248, 84, 85);
		panel.add(label);
		
		
		JLabel lblNewLabel_3 = new JLabel("New label");
		lblNewLabel_3.setFont(new Font("Yu Gothic", Font.BOLD, 18));
		lblNewLabel_3.setIcon(new ImageIcon(Dashboard.class.getResource("/skillHunt_admin/assets/delete (1).png")));
		lblNewLabel_3.setBounds(954, 348, 81, 85);
		panel.add(lblNewLabel_3);
		
		
		
		JButton btnNewButton_4 = new JButton("EXIT");
		btnNewButton_4.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				JFrame frame=new JFrame("Exit");
				if(JOptionPane.showConfirmDialog(frame, "Confirm if you want to exit","MYSQL connector",
						JOptionPane.YES_NO_OPTION)==JOptionPane.YES_NO_OPTION)
				{
					System.exit(0);
				}
			}
		});
		btnNewButton_4.setBackground(new Color(255, 0, 0));
		btnNewButton_4.setVerticalAlignment(SwingConstants.BOTTOM);
		btnNewButton_4.setFont(new Font("Yu Gothic", Font.BOLD, 20));
		btnNewButton_4.setForeground(new Color(255, 255, 255));
		btnNewButton_4.setBounds(1169, 600, 160, 60);
		panel.add(btnNewButton_4);
		
		JScrollPane scrollPane = new JScrollPane();
		scrollPane.addMouseListener(new MouseAdapter() {
			@Override
			public void mouseClicked(MouseEvent e) {
				DefaultTableModel tblmodel = (DefaultTableModel)table.getModel();
				String tblname = tblmodel.getValueAt(table.getSelectedRow(), 2).toString();
				
				name.setText(tblname);
				
			}
		});
		scrollPane.setBounds(202, 283, 500, 500);
		panel.add(scrollPane);
		
		table = new JTable(model);
		scrollPane.setViewportView(table);
		table.setModel(new DefaultTableModel(
			new Object[][] {
			},
			new String[] {
				"Id", "Category_name"
			}
		));
		
		JButton add = new JButton("ADD CATEGORY");
		add.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
			    String cname = name.getText();
			    Category categoryObject = new Category();
			    int suc = categoryObject.exits(cname);
			   

			    if (suc == 0) {
			        JOptionPane.showMessageDialog(null, "Category already exists!");
			    } else {
			    	 boolean success = categoryObject.insert(cname);

			        if (success) {
			            JOptionPane.showMessageDialog(null, "Category inserted successfully!");
			        } else {
			            JOptionPane.showMessageDialog(null, "Failed to insert category. Please try again.");
			        }
			    }
			}
			
		});
		add.setVerticalAlignment(SwingConstants.BOTTOM);
		add.setForeground(new Color(0, 0, 255));
		add.setFont(new Font("Yu Gothic", Font.BOLD, 18));
		add.setBounds(1067, 158, 229, 51);
		panel.add(add);
		
		JButton btnNewButton_5 = new JButton("VIEW CATEGORY");
		btnNewButton_5.addActionListener(new ActionListener() {
			@Override
            public void actionPerformed(ActionEvent e) {
				Category cobj = new Category();
                model = cobj.view();
                table.setModel(model);
            }
		});
		btnNewButton_5.setForeground(new Color(0, 0, 255));
		btnNewButton_5.setFont(new Font("Yu Gothic", Font.BOLD, 18));
		btnNewButton_5.setVerticalAlignment(SwingConstants.BOTTOM);
		btnNewButton_5.setBounds(1068, 471, 229, 51);
		panel.add(btnNewButton_5);
		
		JButton btnNewButton_2 = new JButton("DELETE CATEGORY");
		btnNewButton_2.addActionListener(new ActionListener() {
			  @Override
            public void actionPerformed(ActionEvent e) {
				  int selectedRow = table.getSelectedRow();

			        // Check if a row is selected
			      if (selectedRow == -1) {
			            // No row is selected, show an error message
			            JOptionPane.showMessageDialog(null, "Please select a row to delete");
			      } else {
					  String cname = name.getText();
					  // Show a confirmation message to the user
				      int confirm = JOptionPane.showConfirmDialog(null, "Are you sure you want to delete the category?", "Confirm Deletion", JOptionPane.YES_NO_OPTION);
	
				     // If the user clicks "Yes", delete the category
				      if (confirm == JOptionPane.YES_OPTION) {
		            	Category categoryObject = new Category();
		            	
		            	boolean deletionSuccess = categoryObject.delete(cname);
		                   
		                    if (deletionSuccess) {
		                        JOptionPane.showMessageDialog(null, "Category deleted successfully from the database");
		                        name.setText(""); 
		                    } else {
		                        JOptionPane.showMessageDialog(null, "Category not found in the database or error deleting category");
		                    }
				      }
			     }
            }
		});
		btnNewButton_2.setForeground(new Color(0, 0, 255));
		btnNewButton_2.setVerticalAlignment(SwingConstants.BOTTOM);
		btnNewButton_2.setFont(new Font("Yu Gothic", Font.BOLD, 18));
		btnNewButton_2.setBounds(1067, 368, 229, 51);
		panel.add(btnNewButton_2);
		
		JButton btnNewButton_1 = new JButton("EDIT CATEGORY");
		btnNewButton_1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				
				
				dispose();
				update edit = new update();
				edit.setVisible(true);
			}
		});
		btnNewButton_1.setVerticalAlignment(SwingConstants.BOTTOM);
		btnNewButton_1.setForeground(new Color(0, 0, 255));
		btnNewButton_1.setFont(new Font("Yu Gothic", Font.BOLD, 18));
		btnNewButton_1.setBounds(1067, 260, 229, 51);
		panel.add(btnNewButton_1);
		
		JButton btnNewButton = new JButton("PRINT");
		btnNewButton.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				try {
					table.print();
				}catch(PrinterException p) {
					System.out.format("No printer found");
				}
			}
		});
		btnNewButton.setBackground(new Color(222, 189, 35));
		btnNewButton.setFont(new Font("Yu Gothic", Font.BOLD, 20));
		btnNewButton.setVerticalAlignment(SwingConstants.BOTTOM);
		btnNewButton.setForeground(new Color(255, 255, 255));
		btnNewButton.setBounds(954, 600, 160, 60);
		panel.add(btnNewButton);
		
		JLabel lblNewLabel_4 = new JLabel("");
		lblNewLabel_4.setIcon(new ImageIcon(Dashboard.class.getResource("/skillHunt_admin/assets/view (1).png")));
		lblNewLabel_4.setBounds(954, 459, 81, 85);
		panel.add(lblNewLabel_4);
		
		JButton btnNewButton_3 = new JButton("RESET");
		btnNewButton_3.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				name.setText("");
			}
		});
		btnNewButton_3.setBackground(new Color(0, 64, 64));
		btnNewButton_3.setForeground(new Color(255, 255, 255));
		btnNewButton_3.setVerticalAlignment(SwingConstants.BOTTOM);
		btnNewButton_3.setFont(new Font("Yu Gothic", Font.BOLD, 20));
		btnNewButton_3.setBounds(1067, 686, 160, 60);
		panel.add(btnNewButton_3);
		
	}
}
