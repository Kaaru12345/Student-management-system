-- Sample migration-like SQL for demo use
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id VARCHAR(50) NOT NULL,
    name VARCHAR(150) NOT NULL,
    section VARCHAR(50) NOT NULL,
    marks INT DEFAULT 0
);
