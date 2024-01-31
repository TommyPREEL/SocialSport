<?php foreach ($events as $event): ?>
    <div class="card">
    <div class="card-content">
        <div class="content">
            <ion-icon name="pin"></ion-icon>
            <time datetime="2016-1-1">
                <?= $event["start_location"]; ?>
                <ion-icon name="arrow-forward"></ion-icon>
                <?= $event["end_location"]; ?>
            </time><br>
            <ion-icon name="time"></ion-icon>
            <time datetime="2016-1-1">
                <?= $event["start_date"]; ?>
                <ion-icon name="arrow-forward"></ion-icon> 
                <?= $event["end_date"]; ?>
            </time><br>
            <ion-icon name="bulb"></ion-icon>Skill requirements: <?= $event["skill_requirements"]; ?><br>
            <ion-icon name="bag"></ion-icon>Material requirements: <?= $event["material_requirements"]; ?><br>
            <ion-icon name="sunny"></ion-icon>Weather: <?= $event["meteorological_conditions"]; ?><br>
            <ion-icon name="reader"></ion-icon>Legal condition: <?= $event["legal_conditions"]; ?><br>
            <ion-icon name="alarm"></ion-icon>Registration limit: <?= $event["limit_registration_date"]; ?><br>
        </div>
    </div>
    <footer class="card-footer">
        <a href="#" class="card-footer-item">Participate</a>
        <?php if(isset($_SESSION["user"])): ?><a href="index.php?controller=events&action=editForm&id=<?= $event["id_events"]; ?>" class="card-footer-item">Edit</a><?php endif; ?>
        <?php if(isset($_SESSION["user"])): ?><a href="index.php?controller=events&action=delete&id=<?= $event["id_events"]; ?>" class="card-footer-item">Delete</a><?php endif; ?>
    </footer>
    </div>
<?php endforeach; ?>