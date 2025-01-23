<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{url('/CSS/admin.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
</head>
<body>
<button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    <div class="sidebar">
        <div class="logo">Admin Panel</div>
        <ul>
            <li><a href="#dashboard" class="active"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            <li><a href="#users"><i class="fas fa-users"></i> <span>Users</span></a></li>
            <li><a href="#organizations"><i class="fas fa-building"></i> <span>Organizations</span></a></li>
            <li><a href="#volunteers"><i class="fas fa-hands-helping"></i> <span>Volunteers</span></a></li>
            <li><a href="#events"><i class="fas fa-calendar-alt"></i> <span>Events</span></a></li>
            <li><a href="#projects"><i class="fas fa-project-diagram"></i> <span>Projects</span></a></li>
            <li><a href="#donations"><i class="fas fa-hand-holding-usd"></i> <span>Donations</span></a></li>
            <li><a href="#messages"><i class="fas fa-envelope"></i> <span>Messages</span></a></li>
            <li><a href="#settings"><i class="fas fa-cogs"></i> <span>Settings</span></a></li>
        </ul>
    </div>
    <div class="main-content">
        <header>
        <img src="{{ url('Images/GVN Logo.png') }}" alt="GVN">
            <div class="user-info">Welcome, Admin <a href="#">Logout</a></div>
        </header>
        <div id="dashboard" class="content head-center">
            <h1>Dashboard</h1>
            <h2>Overview</h2>
            <div class="stats">
                <div class="stat-item">
                    <h3>Total Volunteers</h3>
                    <p>123</p>
                </div>
                <div class="stat-item">
                    <h3>Total Organizations</h3>
                    <p>45</p>
                </div>
                <div class="stat-item">
                    <h3>Total Donations</h3>
                    <p>$12,345</p>
                </div>
                <div class="stat-item">
                    <h3>Upcoming Events</h3>
                    <p>7</p>
                </div>
            </div>
            <h2>Recent Activities</h2>
            <ul>
                <li>New volunteer registered: John Doe</li>
                <li>New donation received: $100 from Jane Smith</li>
                <li>Event created: Beach Cleanup</li>
                <li>Project updated: Tree Planting Initiative</li>
            </ul>
        </div>

        <!-- Users Section -->
        <div id="users" class="users-section head-center">
        <h1>Users</h1>
            
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- User records will be populated here dynamically -->
                </tbody>
            </table>
            <button class="add-btn" onclick="showForm('userForm')">Add User</button>
            <div id="userForm" class="form-popup">
                <form class="form-container">
                    <h2>Add User</h2>
                    <div class="form-group">
                        <label for="username">Name:</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="useremail">Email:</label>
                        <input type="email" id="useremail" name="useremail" required>
                    </div>
                    <div class="form-group">
                        <label for="userphone">Phone:</label>
                        <input type="text" id="userphone" name="userphone" required>
                    </div>
                    <div class="form-group">
                        <label for="useraddress">Address:</label>
                        <input type="text" id="useraddress" name="useraddress" required>
                    </div>
                    <div class="form-group">
                        <label for="userrole">Role:</label>
                        <input type="text" id="userrole" name="userrole" required>
                    </div>
                    <button type="submit" class="save-btn">Save</button>
                    <button type="button" class="cancel-btn" onclick="closeForm('userForm')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Organizations Section -->
        <div id="organizations" class="organizations-section head-center">
        <h1>Organizations</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Description</th>
                        <th>Website</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Organization records will be populated here dynamically -->
                </tbody>
            </table>
            <button class="add-btn" onclick="showForm('organizationForm')">Add Organization</button>
            <div id="organizationForm" class="form-popup">
                <form class="form-container">
                    <h2>Add Organization</h2>
                    <div class="form-group">
                        <label for="orgname">Name:</label>
                        <input type="text" id="orgname" name="orgname" required>
                    </div>
                    <div class="form-group">
                        <label for="orgemail">Email:</label>
                        <input type="email" id="orgemail" name="orgemail" required>
                    </div>
                    <div class="form-group">
                        <label for="orgphone">Phone:</label>
                        <input type="text" id="orgphone" name="orgphone" required>
                    </div>
                    <div class="form-group">
                        <label for="orgaddress">Address:</label>
                        <input type="text" id="orgaddress" name="orgaddress" required>
                    </div>
                    <div class="form-group">
                        <label for="orgdescription">Description:</label>
                        <textarea id="orgdescription" name="orgdescription" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="orgwebsite">Website:</label>
                        <input type="url" id="orgwebsite" name="orgwebsite" required>
                    </div>
                    <button type="submit" class="save-btn">Save</button>
                    <button type="button" class="cancel-btn" onclick="closeForm('organizationForm')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Volunteers Section -->
        <div id="volunteers" class="volunteers-section content head-center">
            <h1>Volunteers</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Image</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <!-- Volunteer records will be populated here dynamically -->
                </tbody>
            </table>
            <button class="add-btn" onclick="showForm('volunteerForm')">Add Volunteer</button>
            <div id="volunteerForm" class="form-popup">
                <form class="form-container">
                    <h2>Add Volunteer</h2>
                    <div class="form-group">
                        <label for="volunteerfname">First Name:</label>
                        <input type="text" id="volunteerfname" name="volunteerfname" required>
                    </div>
                    <div class="form-group">
                        <label for="volunteerlname">Last Name:</label>
                        <input type="text" id="volunteerlname" name="volunteerlname" required>
                    </div>
                    <div class="form-group">
                        <label for="volunteeremail">Email:</label>
                        <input type="email" id="volunteeremail" name="volunteeremail" required>
                    </div>
                    <div class="form-group">
                        <label for="volunteerphone">Phone:</label>
                        <input type="text" id="volunteerphone" name="volunteerphone" required>
                    </div>
                    <div class="form-group">
                        <label for="volunteeraddress">Address:</label>
                        <input type="text" id="volunteeraddress" name="volunteeraddress" required>
                    </div>
                    <div class="form-group">
                        <label for="volunteerimage">Image:</label>
                        <input type="file" id="volunteerimage" name="volunteerimage" >
                    </div>
                    <button type="submit" class="save-btn">Save</button>
                    <button type="button" class="cancel-btn" onclick="closeForm('volunteerForm')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Events Section -->
        <div id="events" class="events-section head-center">
            <h1>Events</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Event records will be populated here dynamically -->
                </tbody>
            </table>
            <button class="add-btn" onclick="showForm('eventForm')">Add Event</button>
            <div id="eventForm" class="form-popup">
                <form class="form-container">
                    <h2>Add Event</h2>
                    <div class="form-group">
                        <label for="eventname">Name:</label>
                        <input type="text" id="eventname" name="eventname" required>
                    </div>
                    <div class="form-group">
                        <label for="eventdescription">Description:</label>
                        <textarea id="eventdescription" name="eventdescription" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="eventlocation">Location:</label>
                        <input type="text" id="eventlocation" name="eventlocation" required>
                    </div>
                    <div class="form-group">
                        <label for="eventdate">Date:</label>
                        <input type="date" id="eventdate" name="eventdate" required>
                    </div>
                    <div class="form-group">
                        <label for="eventtime">Time:</label>
                        <input type="time" id="eventtime" name="eventtime" required>
                    </div>
                    <button type="submit" class="save-btn">Save</button>
                    <button type="button" class="cancel-btn" onclick="closeForm('eventForm')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Projects Section -->
        <div id="projects" class="projects-section head-center">
            <h1>Projects</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Project records will be populated here dynamically -->
                </tbody>
            </table>
            <button class="add-btn" onclick="showForm('projectForm')">Add Project</button>
            <div id="projectForm" class="form-popup">
                <form class="form-container">
                    <h2>Add Project</h2>
                    <div class="form-group">
                        <label for="projectname">Name:</label>
                        <input type="text" id="projectname" name="projectname" required>
                    </div>
                    <div class="form-group">
                        <label for="projectdescription">Description:</label>
                        <textarea id="projectdescription" name="projectdescription" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="projectstatus">Status:</label>
                        <input type="text" id="projectstatus" name="projectstatus" required>
                    </div>
                    <button type="submit" class="save-btn">Save</button>
                    <button type="button" class="cancel-btn" onclick="closeForm('projectForm')">Cancel</button>
                </form>
            </div>
        </div>

        <!-- Donations Section -->
        <div id="donations" class="donations-section head-center">
            <h1>Donations</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Donor Name</th>
                        <th>Email</th>
                        <th>Amount</th>
                        <th>Date</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <!-- Donation records will be populated here dynamically -->
                </tbody>
            </table>
        </div>

        <!-- Messages Section -->
        <div id="messages" class="messages-section head-center">
            <h1>Messages</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Sender Name</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Message records will be populated here dynamically -->
                </tbody>
            </table>
            <!-- <button class="add-btn" onclick="showForm('messageForm')">Add Message</button> -->
        </div>

        <!-- Settings Section -->
        <div id="settings" class="settings-section head-center">
            <h1>Settings</h1>
          
            
        </div>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');
            sidebar.classList.toggle('collapsed');
            mainContent.classList.toggle('expanded');
        }

        document.querySelectorAll('.sidebar ul li a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelectorAll('.sidebar ul li a').forEach(link => {
                    link.classList.remove('active');
                });
                this.classList.add('active');
                const sections = document.querySelectorAll('.main-content > div');
                sections.forEach(section => {
                    section.style.display = 'none';
                });
                const target = this.getAttribute('href').substring(1);
                document.getElementById(target).style.display = 'block';
            });
        });

        function showForm(formId) {
            document.getElementById(formId).style.display = 'block';
        }

        function closeForm(formId) {
            document.getElementById(formId).style.display = 'none';
        }

        document.addEventListener('DOMContentLoaded', function() {
            const initialSection = document.querySelector('.sidebar ul li a.active').getAttribute('href').substring(1);
            document.getElementById(initialSection).style.display = 'block';
        });
    </script>
</body>
</html>


