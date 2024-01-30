<div>
    <a href="index.php?controller=events&action=showEventsListPage">All events</a>
    <?php if(isset($_SESSION["user"])): ?><a href="index.php?controller=events&action=showEventCreatePage">Create a new event</a><?php endif; ?>
    <?php if(!isset($_SESSION["user"])): ?><a href="index.php?controller=users&action=showLoginPage">Log In</a><?php endif; ?>
    <?php if(!isset($_SESSION["user"])): ?><a href="index.php?controller=users&action=showRegisterPage">Register</a><?php endif; ?>
    <?php if(isset($_SESSION["user"])): ?><a href="index.php?controller=users&action=logout">Log out</a><?php endif; ?>
    <?php if(isset($_SESSION["user"])): ?> Welcome <?= $_SESSION["user"]["lastname"]; ?> <?= $_SESSION["user"]["firstname"]; ?><?php endif; ?>

</div>