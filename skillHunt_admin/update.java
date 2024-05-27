package skillHunt_admin;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import java.awt.Color;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JButton;
import javax.swing.SwingConstants;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;

public class update extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField oldtext;
	private JTextField newtext;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					update frame = new update();
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
	public update() {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(500, 200, 550, 500);
		contentPane = new JPanel();
		contentPane.setBackground(new Color(0, 0, 64));
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JLabel lblNewLabel = new JLabel("========UPDATE CATEGORY========");
		lblNewLabel.setFont(new Font("Tahoma", Font.BOLD, 20));
		lblNewLabel.setForeground(new Color(255, 255, 255));
		lblNewLabel.setBounds(22, 25, 464, 48);
		contentPane.add(lblNewLabel);
		
		JLabel lblNewLabel_1 = new JLabel("Enter current name :");
		lblNewLabel_1.setFont(new Font("Yu Gothic Medium", Font.PLAIN, 16));
		lblNewLabel_1.setForeground(new Color(128, 255, 255));
		lblNewLabel_1.setBounds(57, 118, 238, 27);
		contentPane.add(lblNewLabel_1);
		
		oldtext = new JTextField();
		oldtext.setFont(new Font("Tahoma", Font.BOLD, 17));
		oldtext.setBounds(67, 155, 298, 34);
		contentPane.add(oldtext);
		oldtext.setColumns(10);
		
		JLabel lblNewLabel_2 = new JLabel("Enter new name :");
		lblNewLabel_2.setFont(new Font("Yu Gothic Medium", Font.PLAIN, 16));
		lblNewLabel_2.setForeground(new Color(128, 255, 255));
		lblNewLabel_2.setBounds(57, 234, 238, 27);
		contentPane.add(lblNewLabel_2);
		
		newtext = new JTextField();
		newtext.setFont(new Font("Tahoma", Font.BOLD, 17));
		newtext.setBounds(67, 271, 298, 34);
		contentPane.add(newtext);
		newtext.setColumns(10);
		
		JButton btnNewButton = new JButton("UPDATE");
		btnNewButton.addActionListener(new ActionListener() {
			 @Override
	            public void actionPerformed(ActionEvent e) {
				 	
				 	String oldName = oldtext.getText();
	            	String newName = newtext.getText();
	            	Category categoryObject = new Category();
	            	
	            	int edit = categoryObject.update(oldName,newName);
	            	
	            	if (edit==0) {
                    	JOptionPane.showMessageDialog(null, "Please enter values!");
	            	}else {
                    	int confirm = JOptionPane.showConfirmDialog(null, "Are you sure you want to edit the category?", "Confirm Update", JOptionPane.YES_NO_OPTION);

		            	if (confirm == JOptionPane.YES_OPTION) {
		            	
		                   
		                    if (edit==1) {
		                    	JOptionPane.showMessageDialog(null, "Please enter values!");
		                        JOptionPane.showMessageDialog(null, "Category Updated successfully !!");
		                        oldtext.setText(""); 
		                        newtext.setText(""); 
		                    } else {
		                        JOptionPane.showMessageDialog(null, "Category not found in the database or error updating category");
		                    }
		            	}
	            }
			 }
		});
		btnNewButton.setFont(new Font("Yu Gothic", Font.BOLD, 18));
		btnNewButton.setVerticalAlignment(SwingConstants.BOTTOM);
		btnNewButton.setBounds(60, 367, 136, 48);
		contentPane.add(btnNewButton);
		
		JButton btnNewButton_1 = new JButton("GO TO MAIN");
		btnNewButton_1.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				dispose();
				Dashboard dash = new Dashboard();
				dash.setVisible(true);
			}
		});
		btnNewButton_1.setBackground(new Color(30, 145, 75));
		btnNewButton_1.setForeground(new Color(255, 255, 255));
		btnNewButton_1.setFont(new Font("Yu Gothic", Font.BOLD, 18));
		btnNewButton_1.setVerticalAlignment(SwingConstants.BOTTOM);
		btnNewButton_1.setBounds(259, 364, 182, 51);
		contentPane.add(btnNewButton_1);
	}
}
