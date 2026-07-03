# Healive - Healthcare AI Chatbot 🩺🤖

Healive is an innovative, centralized healthcare management platform built as a PHP-based web application. It integrates an AI-powered natural language chatbot to streamline patient interactions, optimize hospital administration, and offer 24/7 accessible healthcare tools. 

The application serves three primary user cohorts: **Patients**, **Doctors**, and **System Administrators**, acting as an all-in-one platform for managing health data, medical scheduling, and wellness.

---

## 🚀 Core Features

### 👤 Patient Portal
* **Health Profile & Registration:** Detailed user onboarding capturing personal records, blood types, and automated unique User ID generation.
* **Appointment Scheduling:** Seamless real-time booking, cancellations, and status tracking with specialized healthcare providers.
* **Health Tracker & Vitals Logging:** Logs and calculates metrics such as Heart Rate, Blood Pressure (Systolic & Diastolic), Height (cm), and Weight (kg) alongside graphic health charts.
* **Organ Donor Network:** Active internal module allowing patients to register as donors or query the database for organ/blood availability.
* **Telemedicine & Digital Reports:** Access to uploaded medical files and virtual session links directly from matching practitioner accounts.

### 🩺 Doctor Portal
* **Appointment Desks:** Automated lists showcasing complete patient records, associated symptoms, and attached historical reports.
* **Prescription & Diagnostic Reports:** Digital generation of comprehensive test and medication sheets containing treatment schedules.
* **Patient Descriptions:** Simple administrative forms to update treatment statuses, specific case diagnoses, and localized ward data.

### 🛡️ Administrative Dashboards
* **Staff Management:** Direct permissions to insert, classify (e.g., Surgery, Bone, Dentistry, Mental Health), or remove practitioners from active schedules.
* **Global Systems Auditing:** Centralized analytics pages for checking total registrations, aggregate feedbacks, ongoing schedules, and user queries.

---

## 💻 Tech Stack

* **Frontend:** HTML5, CSS3, JavaScript (ES6+), FontAwesome Icons, Chart.js (Data Visualization)
* **Backend:** PHP (Server-side dynamic scripts, Session management, MD5 Encryption integration)
* **Database Management:** MySQL (Relational structural architecture supporting relational cross-keys)
* **AI Engine Framework:** Botpress / Natural Language Processing framework for handling conversational intent, system navigation, and urgent symptoms triage.

---

## 🛠️ System Requirements

### Software Specification
* **Operating System:** Windows XP/7/10/11 or modern Linux distributions
* **Web Environment Server:** XAMPP Server / WAMP Server
* **Server Side:** PHP 7.4 or above
* **Database Engine:** MySQL 5.7+
* **Supported Browsers:** Google Chrome, Microsoft Edge, Mozilla Firefox

### Hardware Configuration (Minimum)
* **Processor:** Intel Pentium 4 / AMD Athlon (Core i3 and above recommended)
* **Memory (RAM):** 8 GB or higher
* **Storage Space:** 1 TB Hard Drive / SSD allocation

---

## 📂 Database Architecture

The system operates on a multi-relational database configuration named `registration`. Core operational tables include:

| Table Name | Primary Key | Critical Foreign/Associated Columns |
| :--- | :--- | :--- |
| **`admin`** | `AdminID` | `adminpassword` |
| **`patients`** | `UserID` | `Name`, `Email`, `ContactNumber`, `Bloodtype`, `Password` (MD5) |
| **`doctor`** | `DoctorID` | `Doctorname`, `Address`, `ContactNumber`, `categorey` |
| **`bookapp`** | `AppoID` | `patientID` (FK), `docID` (FK), `Date`, `Time`, `symptoms`, `medical_report` |
| **`description`** | `descID` | `patientID` (FK), `doctorIDdesc`, `descName`, `treatment`, `note` |
| **`donor`** | `donarID` | `donarname`, `donarblood`, `organ` |
| **`feedback`** | `PID` | `feedback` |
| **`contact_messages`**| `id` | `name`, `email`, `message`, `Submitted at` |

---

## ⚙️ Installation & Setup Manual

Follow these sequential instructions to run **Healive** locally using **XAMPP**:

1. **Download Local Environment:** Ensure you have the latest version of [XAMPP](https://www.apachefriends.org/) installed.
2. **Clone/Move Source Files:** Extract the project bundle zip file and place the primary directory into your server's host file path:
   ```bash
   C:\xampp\htdocs\healive_chatbot\

   ---

## 🔐 Default Login Credentials (Testing)

For quick access and testing purposes, you can use the following default credentials to log into each respective portal:

| Role | User ID / Username | Password |
| :--- | :--- | :--- |
| **Patient** | `1` | `123` |
| **Doctor** | `1` | `1234` |
| **Admin** | `1` | `1234` |
