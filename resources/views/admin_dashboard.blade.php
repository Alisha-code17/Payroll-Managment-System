<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/admin_dashboard.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script>
        function toggleDropdown(id) {
            const dropdown = document.getElementById(id);
            dropdown.style.display = dropdown.style.display === "block" ? "none" : "block";
        }
    </script>
</head>
<body>
    <div class=" header">
        <div class="c-name">
        PayrollEase
        </div>
        
        <div class="admin">
        <img src="{{ asset('images/admin.png') }}"  class="icon">
        Admin
        </div>
    </div>
    <div class="sidebar">
        <div class="itemsname">
            <a href="#"></a>
             <img src="{{ asset('images/dashboard.png') }}"  class="icon">
           <!-- class="fa-sharp fa-thin fa-chart-line-down fa-sm" style="color: #000000"></i>-->
            Dashboard
        </div>
            
             <div class="itemsname" onclick="toggleDropdown('employeeMenu')">
            <a href="#"></a>
            <img src="{{ asset('images/employee.png') }}"  class="icon">
            
            Employee
            
             <div id="employeeMenu" class="dropdown-menu">
                <a href="#" class="sub-items">Add Emplaoyee</a>
           
                <a href="#" class="sub-items">Manage employee</a>
            </div>
        </div>


        <div class="itemsname" onclick="toggleDropdown('departmentMenu')">
            <a href="#"></a>
            <img src="{{ asset('images/department.png') }}"  class="icon">
            Department
            <div id="departmentMenu" class="dropdown-menu">
                <a href="" class="sub-items">Create Department</a>
            
                <a href="" class="sub-items">Manage Department</a>
            </div>

        </div>

        <div class="itemsname" onclick="toggleDropdown('attendanceMenu')">
            <a href="#"></a>
            <img src="{{ asset('images/attendence.png') }}"  class="icon">
            Attendence
            <div id="attendanceMenu" class="dropdown-menu">
                <a href="" class="sub-items">Daily Attendence</a>
           
                <a href="" class="sub-items">Attendence Report</a>
            </div>
        </div>


        <div class="itemsname" onclick="toggleDropdown('leaveMenu')">
            <a href="#"></a>
            <img src="{{ asset('images/leave.png') }}"  class="icon">
            Leave
            <div id="leaveMenu" class="dropdown-menu">
                    <a href="" class="sub-items">Add Leave</a>
                
                    <a href="" class="sub-items">Manage Leave</a>
                </div>
        </div>


        <div class="itemsname" onclick="toggleDropdown('payrollMenu')">
            <a href="#"></a>
            <img src="{{ asset('images/payroll.png') }}"  class="icon">
            Payroll
            <div id="payrollMenu" class="dropdown-menu">
                    <a href="" class="sub-items">Create Payslip</a>
               
                    <a href="" class="sub-items">Payslip List</a>
                </div>
        </div>

    </div>
</body>
</html>