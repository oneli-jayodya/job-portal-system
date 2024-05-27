package skillHunt_admin;

import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.border.EmptyBorder;
import java.awt.Color;
import javax.swing.JLabel;
import javax.swing.JOptionPane;

import java.awt.Font;
import javax.swing.JTextField;
import javax.swing.JButton;
import javax.swing.ImageIcon;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.JCheckBox;

public class Admin extends JFrame {

	private static final long serialVersionUID = 1L;
	private JPanel contentPane;
	private JTextField un;
	private JTextField pw;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					Admin frame = new Admin();
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
	public Admin() {
		
		
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(500, 200, 600, 400);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));

		setContentPane(contentPane);
		contentPane.setLayout(null);
		
		JPanel panel = new JPanel();
		panel.setBackground(new Color(0, 0, 106));
		panel.setBounds(0, 0, 586, 363);
		contentPane.add(panel);
		panel.setLayout(null);
		
		JLabel log = new JLabel("ADMIN LOG IN");
		log.setFont(new Font("Gill Sans MT", Font.BOLD, 25));
		log.setForeground(new Color(0, 255, 255));
		log.setBounds(217, 49, 210, 51);
		panel.add(log);
		
		JLabel user = new JLabel("User Name");
		user.setFont(new Font("Tahoma", Font.PLAIN, 16));
		user.setForeground(new Color(255, 255, 255));
		user.setBounds(86, 140, 119, 36);
		panel.add(user);
		
		un = new JTextField();
		un.setFont(new Font("Yu Gothic UI", Font.BOLD, 15));
		un.setBounds(205, 140, 222, 36);
		panel.add(un);
		un.setColumns(10);
		
		JLabel word = new JLabel("Password");
		word.setFont(new Font("Tahoma", Font.PLAIN, 16));
		word.setForeground(new Color(255, 255, 255));
		word.setBounds(86, 202, 113, 36);
		panel.add(word);
		
		pw = new JPasswordField();
		pw.setFont(new Font("Yu Gothic UI", Font.BOLD, 15));
		pw.setBounds(207, 205, 220, 36);
		panel.add(pw);
		pw.setColumns(10);
		
		JButton exit = new JButton("Exit");
		exit.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				JFrame frmLogin = new JFrame("Exit");
				if (JOptionPane.showConfirmDialog(frmLogin, "Confirm if you want to exit","Login Systems",
				JOptionPane.YES_NO_OPTION)==JOptionPane.YES_NO_OPTION) {
					System.exit(0);
				}
			}
		});
		exit.setForeground(new Color(255, 255, 255));
		exit.setBackground(new Color(255, 0, 0));
		exit.setFont(new Font("Times New Roman", Font.BOLD, 14));
		exit.setBounds(77, 275, 119, 44);
		panel.add(exit);
		
		JButton reset = new JButton("Reset");
		reset.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				un.setText(null);
				pw.setText(null);
			}
		});
		reset.setFont(new Font("Times New Roman", Font.BOLD, 14));
		reset.setBounds(246, 275, 113, 44);
		panel.add(reset);
		
		JButton login = new JButton("Login");
		login.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				String password= pw.getText();
				String username= un.getText();	
				
				Login lobj = new Login();
				int mzg = lobj.log(username, password);
				
					if(mzg ==1) {
						JOptionPane.showMessageDialog(null, "Login Successful");
						dispose();
						Dashboard db = new Dashboard();
						db.setVisible(true);
					}else if(mzg==3) {
						JOptionPane.showMessageDialog(null, "Fill the details");
					}else {
						JOptionPane.showMessageDialog(null, "Invalid name or password");
					}
			}
		});
		login.setForeground(new Color(255, 255, 255));
		login.setBackground(new Color(0, 128, 64));
		login.setFont(new Font("Times New Roman", Font.BOLD, 14));
		login.setBounds(402, 275, 124, 44);
		panel.add(login);
		
		JLabel lblNewLabel = new JLabel("New label");
		lblNewLabel.setIcon(new ImageIcon(Admin.class.getResource("/skillHunt_admin/assets/user-login-icon-29 (1).png")));
		lblNewLabel.setBounds(50, 10, 120, 120);
		panel.add(lblNewLabel);
		
		JCheckBox show = new JCheckBox("Show password");
		show.addActionListener(new ActionListener() {
			public void actionPerformed(ActionEvent e) {
				if(show.isSelected()) {
					((JPasswordField) pw).setEchoChar((char)0);
				}else {
					((JPasswordField) pw).setEchoChar('*');
				}
			}
		});
		show.setForeground(new Color(255, 255, 255));
		show.setBackground(new Color(0, 0, 128));
		show.setBounds(433, 212, 128, 21);
		panel.add(show);
	}
}
