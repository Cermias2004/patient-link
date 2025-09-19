# Patient-Link

A healthcare appointment management system built with PHP and MySQL.

## Overview

Patient-Link is a database-driven web application designed to solve common healthcare scheduling issues including:
- Scheduling conflicts and double-bookings
- Limited accessibility outside office hours
- Inefficient productivity due to last-minute cancellations
- Secure patient data management

## Features

- **Patient Portal**: Book, view, and modify appointments
- **Staff Interface**: Manage all doctor schedules and patient registration
- **Doctor Dashboard**: View personal schedules and patient information
- **Billing System**: Track appointment costs and payment status
- **Role-based Access Control**: Secure data access by user type

## Database Schema

The system uses a normalized (3NF) MySQL database with four main entities:
- **Doctors**: Store physician information and specialties
- **Patients**: Manage patient demographics and contact details
- **Appointments**: Link patients with doctors and track scheduling
- **Billings**: Handle financial records for completed appointments

## Tech Stack

- **Backend**: PHP 7.4+
- **Database**: MySQL/MariaDB
- **Frontend**: HTML5, CSS3, JavaScript
- **Development Environment**: XAMPP
- **Database Management**: phpMyAdmin

## Installation

### Prerequisites
- XAMPP (Apache + MySQL/MariaDB)
- PHP 7.4 or higher
- Git

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/patient-link.git
   cd patient-link
   ```

2. **Install XAMPP**
    - Download and install XAMPP from https://www.apachefriends.org/
    - Start Apache and MySQL services

3. **Setup Database**
    - Navigate to `http://localhost/phpmyadmin`
    - Create a new database named `patient_link`
    - Import the schema: `database/create.sql`
    - Load sample data: `database/load.sql`

4. **Configure Application**
    - Copy your PHP files to `C:\xampp\htdocs\patient-link\`
    - Update database connection settings in `src/php/config/database.php`

5. **Access Application**
    - Open browser and go to `http://localhost/patient-link`

## Database Setup

### Create Tables
```sql
-- Run the contents of database/create.sql
-- This creates: Doctors, Patients, Appointments, Billings tables
```

### Load Sample Data
```sql
-- Import CSV files using phpMyAdmin or run:
-- database/load.sql
```

### Enable Auto-Increment
```sql
-- For each table, run:
ALTER TABLE table_name MODIFY id_column INT NOT NULL AUTO_INCREMENT;
```

## Usage

### For Patients
1. Register for a new account
2. Log in with email/phone and password
3. Book appointments by selecting doctor, date, and time
4. View and modify existing appointments
5. Check billing status

### For Staff (Receptionists)
1. Log in with staff credentials
2. Register new patients
3. View all doctors' schedules
4. Manage appointments across all physicians
5. Update patient information

### For Doctors
1. Log in with doctor credentials
2. View personal appointment schedule
3. Access patient information for upcoming visits
4. Update appointment statuses
5. Create patient entries for walk-ins

## Security Features

- **Prepared Statements**: Prevents SQL injection attacks
- **Role-based Access**: Different interfaces for patients, staff, and doctors
- **Data Encryption**: Secure database connections
- **HIPAA Considerations**: Privacy-focused data handling

## Project Structure

```
patient-link/
├── database/           # SQL scripts and sample data
├── src/               # Source code
│   ├── php/          # PHP backend files
│   └── html/         # Frontend templates
├── docs/             # Project documentation
└── README.md         # This file
```

## Future Enhancements

- **Enhanced Security**: Password hashing, email verification
- **Advanced Scheduling**: Provider availability, conflict detection
- **Notifications**: Appointment reminders and confirmations
- **Analytics**: Reporting dashboards and usage metrics
- **Mobile App**: iOS and Android applications
- **API Integration**: FHIR/HL7 compatibility, insurance APIs

## Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Team

**Health Hackers Team**
- CS 4347 - Database Systems
- University of Texas at Dallas

## Contact

For questions or support, please contact [your-email@example.com]

## Acknowledgments

- CS 4347 Database Systems Course
- MySQL Documentation
- PHP Manual
- OWASP Security Guidelines