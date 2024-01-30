<div style="display: flex; flex-direction: column; max-width: 200px; margin: 10px;">
    <form action="index.php?controller=events&action=edit&id=<?= $event["id_events"]; ?>" method="post">
        Start Date
        <input type="datetime" placeholder="Start Date" name="start_date" value="<?= $event["start_date"]; ?>"/><br>
        Start Location
        <input type="text" placeholder="Start Location" name="start_location" value="<?= $event["start_location"]; ?>"/><br>
        End Date
        <input type="datetime" placeholder="End Date" name="end_date" value="<?= $event["end_date"]; ?>"/><br>
        End Location
        <input type="text" placeholder="End Location" name="end_location" value="<?= $event["end_location"]; ?>"/><br>
        Skill Requirements
        <input type="text" placeholder="Skill Requirements" name="skill_requirements" value="<?= $event["skill_requirements"]; ?>"/><br>
        Material Requirements
        <input type="text" placeholder="Material Requirements" name="material_requirements" value="<?= $event["material_requirements"]; ?>"/><br>
        Meteorological Conditions
        <input type="text" placeholder="Meteorological Conditions" name="meteorological_conditions" value="<?= $event["meteorological_conditions"]; ?>"/><br>
        Legal Conditions
        <input type="text" placeholder="Legal Conditions" name="legal_conditions" value="<?= $event["legal_conditions"]; ?>"/><br>
        Limit Registration Date
        <input type="datetime" placeholder="Limit Registration Date" name="limit_registration_date" value="<?= $event["limit_registration_date"]; ?>"/><br>
        Event Score
        <input type="number" placeholder="Event Score" name="event_score" value="<?= $event["event_score"]; ?>"/><br>
        Member Score
        <input type="number" placeholder="Member Score" name="member_score" value="<?= $event["member_score"]; ?>"/><br><br>
        <button type="submit" name="submit">Register !</button>
    </form>
</div>

