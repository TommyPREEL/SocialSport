<div style="display: flex; flex-direction: column; max-width: 200px; margin: 10px;">
    <form action="index.php?controller=events&action=createEvent" method="post">
        Start Date
        <input type="datetime" placeholder="Start Date" name="start_date" value="2023-08-08"/><br>
        Start Location
        <input type="text" placeholder="Start Location" name="start_location" value="lieudepart"/><br>
        End Date
        <input type="datetime" placeholder="End Date" name="end_date" value="2023-09-09"/><br>
        End Location
        <input type="text" placeholder="End Location" name="end_location" value="endlocation"/><br>
        Skill Requirements
        <input type="text" placeholder="Skill Requirements" name="skill_requirements" value="skill"/><br>
        Material Requirements
        <input type="text" placeholder="Material Requirements" name="material_requirements" value="material"/><br>
        Meteorological Conditions
        <input type="text" placeholder="Meteorological Conditions" name="meteorological_conditions" value="pluie"/><br>
        Legal Conditions
        <input type="text" placeholder="Legal Conditions" name="legal_conditions" value="conditionlegal"/><br>
        Limit Registration Date
        <input type="datetime" placeholder="Limit Registration Date" name="limit_registration_date" value="2023-10-10"/><br>
        Event Score
        <input type="number" placeholder="Event Score" name="event_score" value="20"/><br>
        Member Score
        <input type="number" placeholder="Member Score" name="member_score" value="10"/><br><br>
        <button type="submit" name="submit">Register !</button>
    </form>
</div>

