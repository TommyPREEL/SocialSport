<div style="display: flex; flex-direction: column; max-width: 200px; margin: 10px;">
    <form action="index.php?controller=users&action=register" method="post">
        First Name
        <input type="text" placeholder="First Name" name="firstName" value="mathias"/><br>
        Last Name
        <input type="text" placeholder="Last Name" name="lastName" value="mathias"/><br>
        Username
        <input type="text" placeholder="Username" name="username" value="mathias"/><br>
        Password
        <input type="password" placeholder="Password" name="password" value="mathias"/><br>
        Phone
        <input type="number" placeholder="Phone" name="phone" value="0600000000"/><br>
        Birthday Date
        <input type="date" placeholder="Birthday Date" name="birthdayDate" value="1998-12-09"/><br>
        Country
        <input type="text" placeholder="Country" name="country" value="France"/><br>
        Postal Code
        <input type="number" placeholder="Postal Code" name="postalCode" value="66300"/><br>
        Gender
        <input type="text" placeholder="Gender" name="gender" value="M"/><br>
        Job
        <input type="text" placeholder="Job" name="job" value="M"/><br><br>
        <button type="submit" name="submit">Register !</button>
    </form>
</div>

