# 🗳️ Maganatti Voting System

## 📖 Overview
**Maganatti Voting System** is a digital voting platform designed for universities and higher learning institutions to conduct secure, transparent, and efficient student elections.  
It replaces manual ballot voting with an electronic system that ensures fairness, reduces errors, and prevents multiple voting.

---

## 🎯 Purpose
The system aims to:
- Simplify and digitize the election process.
- Ensure transparency and security in student voting.
- Provide real-time results and easy management for administrators.
- Prevent duplicate or unauthorized votes.

---

## ⚙️ How It Works
In this system, each student is issued a **unique Identity Card** containing a **Card ID**.  
When the sub-user (e.g., election officer) enters the Card ID:
- The system displays all the information about the student, including personal details.
- It also shows the list of candidates contesting in the student’s section.
- The student can then cast a single vote for their preferred candidate.

Once a student finishes voting:
- Their record is **automatically disabled**, preventing multiple votes.
- All data is securely stored, and **only authorized administrators** can update or manage election information.

---

## 🔑 Key Features
- ✅ Secure login and user authentication  
- 🧍‍♂️ Student registration via unique ID card  
- 🗳️ One-person-one-vote enforcement  
- 📊 Real-time vote counting and result display  
- 🧾 Candidate and section management  
- 🔒 Data protection and admin-only access  
- 💻 Simple and responsive web interface  

---

## 🧩 System Roles
- **Admin:** Manages candidates, voters, and election settings.  
- **Sub User:** Verifies students and facilitates the voting process.  
- **Voter (Student):** Casts vote once using their card ID.

---

## 🖥️ Technology Stack
| Component | Technology |
|------------|-------------|
| **Frontend** | HTML5, CSS3, Bootstrap |
| **Scripting** | JavaScript |
| **Backend** | PHP |
| **Database** | MySQL |
| **IDE / Editor** | Visual Studio Code |

---

## 🚀 Getting Started
1. Clone or download the project folder:
   ```bash
   git clone https://github.com/YourUsername/Maganatti_Voting_System.git
   ```
2. Move the folder into your web server directory (e.g., `htdocs` for XAMPP).
3. Start **Apache** and **MySQL** from XAMPP Control Panel.
4. Import the database file (`voting_system.sql`) into **phpMyAdmin**.
5. Open your browser and visit:
   ```
   http://localhost/Maganatti_Voting_System
   ```
6. Log in as admin to configure the election and manage voters/candidates.

---

## 🔐 Security
- Each student’s credentials are unique and verified before voting.  
- All votes and personal data are stored securely in the database.  
- Only authorized administrators can modify or update information.  
- Once a vote is cast, the voter’s account is disabled to prevent duplicate voting.

---

## 📚 License
This project is developed for **academic and institutional use** under the MIT License.  
You may modify or extend it for your university’s election system.

---

## 👨‍💻 Author
**Developed by:** waqo dida 
**Project:** Maganatti Voting System  


---
