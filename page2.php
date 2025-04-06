<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Faculty Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f6f9;
      text-align: center;
    }

    .navbar {
      background-color: #2C3E50;
      padding: 15px;
      display: flex;
      justify-content: center;
      gap: 15px;
      flex-wrap: wrap;
    }

    .navbar button {
      background-color: #3498db;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: 0.3s;
    }

    .navbar button:hover {
      background-color: #2980b9;
    }

    .content {
      max-width: 600px;
      margin: 40px auto;
      padding: 30px;
      background: white;
      box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 12px;
      display: none;
      text-align: left;
    }

    h2 {
      color: #2C3E50;
      text-align: center;
    }

    label {
      font-size: 18px;
      color: #2C3E50;
      display: block;
      margin: 10px 0 5px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 16px;
    }

    button.submit {
      background-color: #2C3E50;
      color: white;
      padding: 12px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
      transition: 0.3s;
    }

    button.submit:hover {
      background-color: #1A252F;
    }

    .success-message {
      margin-top: 20px;
      color: green;
      font-weight: bold;
      text-align: center;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <div class="navbar">
    <button onclick="showSection('contact')">Contact Details</button>
    <button onclick="showSection('faculty')">Faculty Name</button>
    <button onclick="showSection('department')">Department</button>
    <button onclick="showSection('subject')">Subject</button>
    <button onclick="showSection('registration')">Registration</button>
  </div>

  <!-- Contact Section -->
  <div id="contact" class="content">
    <h2>Contact Details</h2>
    <form>
      <label for="contactInput">Enter Contact Details:</label>
      <input type="text" id="contactInput" placeholder="Enter contact details" />
      <button type="submit" class="submit">Submit</button>
    </form>
  </div>

  <!-- Faculty Section -->
  <div id="faculty" class="content">
    <h2>Faculty Name</h2>
    <form>
      <label for="facultyInput">Enter Faculty Name:</label>
      <input type="text" id="facultyInput" placeholder="Enter faculty name" />
      <button type="submit" class="submit">Submit</button>
    </form>
  </div>

  <!-- Department Section -->
  <div id="department" class="content">
    <h2>Department</h2>
    <form>
      <label for="departmentInput">Enter Department:</label>
      <input type="text" id="departmentInput" placeholder="Enter department" />
      <button type="submit" class="submit">Submit</button>
    </form>
  </div>

  <!-- Subject Section -->
  <div id="subject" class="content">
    <h2>Subject</h2>
    <form>
      <label for="subjectInput">Enter Subject Name:</label>
      <input type="text" id="subjectInput" placeholder="Enter subject name" />
      <button type="submit" class="submit">Submit</button>
    </form>
  </div>

  <!-- Registration Section -->
  <!-- Registration Section -->
<div id="registration" class="content">
    <h2>Registration</h2>
    <form onsubmit="handleRegistration(event)">
      <label for="idInput">Enter ID Number:</label>
      <input type="text" id="idInput" placeholder="Enter ID number" required />
  
      <label for="subjectSelect">Select Subject:</label>
      <select id="subjectSelect" required>
        <option value="">--Select Subject--</option>
        <option value="Mathematics">Mathematics</option>
        <option value="Physics">Physics</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Chemistry">Chemistry</option>
      </select>
  
      <button type="submit" class="submit">Submit</button>
      <div id="successMessage" class="success-message"></div>
    </form>
  </div>
  
  <script>
    function showSection(sectionId) {
      document.querySelectorAll('.content').forEach(section => {
        section.style.display = 'none';
      });
      document.getElementById(sectionId).style.display = 'block';
    }
  
    function handleRegistration(event) {
      event.preventDefault();
      const id = document.getElementById('idInput').value.trim();
      const subject = document.getElementById('subjectSelect').value;
  
      const messageDiv = document.getElementById('successMessage');
      if (id && subject) {
        messageDiv.textContent = `Registration was successful! (ID: ${id}, Subject: ${subject})`;
      } else {
        messageDiv.textContent = "Please fill out all the fields.";
      }
    }
  </script>
  
</body>
</html>
