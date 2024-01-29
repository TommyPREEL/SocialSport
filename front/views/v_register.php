<div style="display: flex; flex-direction: column; max-width: 200px; margin: 10px;">
    <form action="index.php?controller=users?action=register" method="post">
        First Name
        <input type="text" placeholder="First Name" name="firstName"/><br>
        Last Name
        <input type="text" placeholder="Last Name" name="lastName"/><br>
        Username
        <input type="text" placeholder="Username" name="username"/><br>
        Password
        <input type="password" placeholder="Password" name="password"/><br>
        Phone
        <input type="number" placeholder="Phone" name="phone"/><br>
        Birthday Date
        <input type="date" placeholder="Birthday Date" name="birthdayDate"/><br>
        Country
        <input type="text" placeholder="Country" name="country"/><br>
        Postal Code
        <input type="number" placeholder="Postal Code" name="postalCode"/><br>
        Gender
        <input type="text" placeholder="Gender" name="gender"/><br>
        Job
        <input type="text" placeholder="Job" name="job"/><br><br>
    </form>
    <button type="submit" name="submit">Register !</button>
</div>

